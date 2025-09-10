<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// 資料庫連線設定
const DB_SERVER   = "localhost";
const DB_USERNAME = "owner";
const DB_PASSWORD = "123456";
const DB_NAME     = "tea";

// 圖片儲存路徑
const UPLOAD_DIR = "../img/product/";

// 建立資料庫連線
function create_connection()
{
    $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    if (!$conn) {
        respond(false, "連線失敗: " . mysqli_connect_error());
        exit;
    }
    // 啟用 MySQLi 異常模式
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    mysqli_set_charset($conn, "utf8mb4");
    return $conn;
}

// 回應 JSON 訊息
function respond($state, $message, $data = null)
{
    header('Content-Type: application/json; charset=UTF-8');
    echo json_encode(["state" => $state, "message" => $message, "data" => $data], JSON_UNESCAPED_UNICODE);
}

// 取得所有商品資料
function get_all_product_data()
{
    try {
        $conn = create_connection();
        $stmt = null;
    
        $stmt = $conn->prepare("SELECT product_id, Pname, photo, price, description, category, created_at FROM product ORDER BY product_id ASC");
        $stmt->execute();
        $result = $stmt->get_result();
    
        $products = [];
        while ($row = $result->fetch_assoc()) {
            $products[] = [
                "ID" => $row["product_id"],
                "Name" => $row["Pname"],
                "Image" => $row["photo"],
                "Price" => $row["price"],
                "Description" => $row["description"],
                "Category" => $row["category"],
                "Created_at" => $row["created_at"]
            ];
        }
    
        respond(true, "取得所有商品資料成功", $products);
    } catch (mysqli_sql_exception $e) {
        respond(false, "SQL 錯誤: " . $e->getMessage());
    } catch (Exception $e) {
        respond(false, "系統錯誤: " . $e->getMessage());
    } finally {
        if (isset($stmt) && $stmt instanceof mysqli_stmt) {
            $stmt->close();
        }
        if (isset($conn) && $conn instanceof mysqli) {
            $conn->close();
        }
    }
}

// 新增商品
function add_product()
{
    try {
        // 檢查必要欄位
        if (!isset($_POST['Pname']) || !isset($_POST['price']) || !isset($_POST['description']) || !isset($_POST['category']) || !isset($_FILES['photo'])) {
            respond(false, "缺少必要欄位");
            return;
        }

        // 處理圖片上傳
        $photo = $_FILES['photo'];
        if ($photo['error'] !== UPLOAD_ERR_OK) {
            respond(false, "圖片上傳失敗: 錯誤代碼 " . $photo['error']);
            return;
        }

        // 檢查檔案類型（僅允許圖片）
        $allowed_types = ['image/jpeg', 'image/png', 'image/webp'];
        $file_type = mime_content_type($photo['tmp_name']);
        if (!in_array($file_type, $allowed_types)) {
            respond(false, "不支援的檔案格式，僅允許 JPG、PNG、WEBP");
            return;
        }

        // 檢查檔案大小（例如限制 5MB）
        $max_size = 5 * 1024 * 1024; // 5MB
        if ($photo['size'] > $max_size) {
            respond(false, "檔案過大，最大限制為 5MB");
            return;
        }

        // 確保上傳目錄存在
        if (!is_dir(UPLOAD_DIR)) {
            if (!mkdir(UPLOAD_DIR, 0755, true)) {
                respond(false, "無法創建上傳目錄");
                return;
            }
        }

        // 生成唯一的檔案名稱
        $file_ext = pathinfo($photo['name'], PATHINFO_EXTENSION);
        $file_name = uniqid('product_') . '.' . $file_ext;
        $file_path = UPLOAD_DIR . $file_name;

        // 移動上傳的檔案
        if (!move_uploaded_file($photo['tmp_name'], $file_path)) {
            respond(false, "圖片儲存失敗");
            return;
        }

        // 相對路徑儲存到資料庫
        $photo_path = "../img/product/" . $file_name;

        // 取得其他表單資料
        $Pname = $_POST['Pname'];
        $price = (int)$_POST['price'];
        $description = $_POST['description'];
        $category = $_POST['category'];

        // 驗證資料
        if (empty($Pname) || $price <= 0 || empty($description) || empty($category)) {
            // 如果圖片已上傳但資料驗證失敗，刪除圖片
            if (file_exists($file_path)) {
                unlink($file_path);
            }
            respond(false, "無效的輸入資料");
            return;
        }

        // 插入資料庫
        $conn = create_connection();
        $stmt = null;
        $stmt = $conn->prepare("INSERT INTO product (Pname, photo, price, description, category) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("ssiss", $Pname, $photo_path, $price, $description, $category);
        $stmt->execute();

        respond(true, "新增商品成功");
    } catch (mysqli_sql_exception $e) {
        // 如果圖片已上傳但 SQL 執行失敗，刪除圖片
        if (isset($file_path) && file_exists($file_path)) {
            unlink($file_path);
        }
        respond(false, "SQL 錯誤: " . $e->getMessage());
    } catch (Exception $e) {
        // 如果圖片已上傳但發生其他錯誤，刪除圖片
        if (isset($file_path) && file_exists($file_path)) {
            unlink($file_path);
        }
        respond(false, "系統錯誤: " . $e->getMessage());
    } finally {
        if (isset($stmt) && $stmt instanceof mysqli_stmt) {
            $stmt->close();
        }
        if (isset($conn) && $conn instanceof mysqli) {
            $conn->close();
        }
    }
}

// 處理 API 請求
if (isset($_GET["action"])) {
    switch ($_GET["action"]) {
        case "getalldata":
            get_all_product_data();
            break;
        case "add_product":
            add_product();
            break;
        default:
            respond(false, "無效的動作");
    }
} else {
    respond(false, "缺少動作參數");
}
?>