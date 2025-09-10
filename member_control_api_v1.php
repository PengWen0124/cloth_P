<?php
const DB_SERVER   = "localhost";
const DB_USERNAME = "root";
const DB_PASSWORD = "";
const DB_NAME     = "cloth_P";

//建立連線
function create_connection()
{
    $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    if (!$conn) {
        echo json_encode(["state" => false, "message" => "連線失敗!"]);
        exit;
    }
    return $conn;
}

//取得JSON的資料
function get_json_input()
{
    $data = file_get_contents("php://input");
    return json_decode($data, true);
}


//回復JSON訊息
//state: 狀態(成功或失敗) message: 訊息內容 data: 回傳資料(可有可無)
function respond($state, $message, $data = null)
{
    echo json_encode(["state" => $state, "message" => $message, "data" => $data]);
}

//會員註冊
// {"username":"omner81", "password" : "123456","email":"owner81@test.com"}
// {"state":true,"message”:“註冊成功”}
// {"state":false,"message”:“新增失敗與相關错誤訊息"}
// {"state":false,"ressage”:“衢位錯誤"}
// {"state":faIse,"nessage”:“覆位不得高空白"}
function register_user()
{
    $input = get_json_input();
    if (isset($input["username"], $input["password"], $input["email"])) {
        $p_username = $input["username"];
        $p_password = password_hash(trim($input["password"]), PASSWORD_DEFAULT);
        $p_email = trim($input["email"]);
        $p_role = isset($input["role"]) ? trim($input["role"]) : "一般用戶"; // 預設為一般用戶

        if ($p_username && $p_password && $p_email) {
            $conn = create_connection();

            // 修改SQL語句，加入Role欄位
            $stmt = $conn->prepare("INSERT INTO users(Username, Password, Email, Role) VALUES(?,?,?,?)");
            $stmt->bind_param("ssss", $p_username, $p_password, $p_email, $p_role);

            if ($stmt->execute()) {
                respond(true, "註冊成功");
            } else {
                respond(false, "註冊失敗", $stmt->error);
            }
            $stmt->close();
            $conn->close();
        } else {
            respond(false, "欄位不得為空");
        }
    } else {
        respond(false, "欄位錯誤");
    }
}

//會員登入
function login_user()
{
    $input = get_json_input();
    if (isset($input["username"], $input["password"])) {
        $p_username = trim($input["username"]);
        $p_password = trim($input["password"]);
        if ($p_username && $p_password) {
            $conn = create_connection();

            $stmt = $conn->prepare("SELECT * FROM users WHERE Username = ?");
            $stmt->bind_param("s", $p_username); // 一定要傳遞變數
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows === 1) {
                $row = $result->fetch_assoc();
                if (password_verify($p_password, $row["Password"])) {
                    //產生UID並更新至資料庫
                    $uid01 = substr(hash('sha256', time()), 10, 4) . substr(bin2hex(random_bytes(16)), 4, 4);
                    $update_stmt = $conn->prepare("UPDATE users SET Uid01 = ? WHERE Username = ?");
                    $update_stmt->bind_param('ss', $uid01, $p_username);
                    if ($update_stmt->execute()) {
                        // unset($row["Password"]);
                        //取得登入使用者資訊
                        $user_stmt = $conn->prepare("SELECT Username, Email, Uid01, Created_at FROM users WHERE Username = ?");
                        $user_stmt->bind_param("s", $p_username); // 一定要傳遞變數
                        $user_stmt->execute();
                        $user_data = $user_stmt->get_result()->fetch_assoc();
                        respond(true, "登入成功", $user_data);
                    } else {
                        respond(false, "登入失敗, UID更新失敗");
                    }
                } else {
                    //比對失敗
                    respond(false, "登入失敗, 密碼錯誤");
                }
            } else {
                respond(false, "登入失敗, 該帳號不存在");
            }
            $stmt->close();
            $conn->close();
        } else {
            respond(false, "欄位不得為空!");
        }
    } else {
        respond(false, "欄位錯誤!");
    }
}

//後台會員登入
function login_manager()
{
    $input = get_json_input();
    if (isset($input["username"], $input["password"])) {
        $p_username = trim($input["username"]);
        $p_password = trim($input["password"]);
        if ($p_username && $p_password) {
            $conn = create_connection();

            $stmt = $conn->prepare("SELECT * FROM Manager WHERE username = ?");
            $stmt->bind_param("s", $p_username); // 一定要傳遞變數
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows === 1) {
                $row = $result->fetch_assoc();
                if (password_verify($p_password, $row["password"])) {
                    //產生UID並更新至資料庫
                    $uid01 = substr(hash('sha256', time()), 10, 4) . substr(bin2hex(random_bytes(16)), 4, 4);
                    $update_stmt = $conn->prepare("UPDATE Manager SET Uid01 = ? WHERE username = ?");
                    $update_stmt->bind_param('ss', $uid01, $p_username);
                    if ($update_stmt->execute()) {
                        // unset($row["Password"]);
                        //取得登入使用者資訊
                        $user_stmt = $conn->prepare("SELECT username, Uid01, Created_at FROM Manager WHERE username = ?");
                        $user_stmt->bind_param("s", $p_username); // 一定要傳遞變數
                        $user_stmt->execute();
                        $user_data = $user_stmt->get_result()->fetch_assoc();
                        respond(true, "登入成功", $user_data);
                    } else {
                        respond(false, "登入失敗, UID更新失敗");
                    }
                } else {
                    //比對失敗
                    respond(false, "登入失敗, 密碼錯誤");
                }
            } else {
                respond(false, "登入失敗, 該帳號不存在");
            }
            $stmt->close();
            $conn->close();
        } else {
            respond(false, "欄位不得為空!");
        }
    } else {
        respond(false, "欄位錯誤!");
    }
}

//會員驗證
// {"uid01" : "owner01"}
// {"state" : true, "message" : "驗證成功", "data" : "使用者資訊"}
// {"state" : false, "message" : "驗證失敗與相關錯誤訊息"}
// {"state" : false, "message" : "欄位錯誤"}
// {"state" : false, "message" : "欄位不得為空"}
function check_uid()
{
    $input = get_json_input();
    if (isset($input["uid01"])) {
        $p_uid = trim($input["uid01"]);
        if ($p_uid) {
            $conn = create_connection();

            $stmt = $conn->prepare("SELECT Username, Email, Uid01, Created_at FROM users WHERE Uid01 = ?");
            $stmt->bind_param("s", $p_uid); // 一定要傳遞變數
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows === 1) {
                //驗證成功
                $userdata = $result->fetch_assoc();
                respond(true, "驗證成功", $userdata);
            } else {
                respond(false, "驗證失敗");
            }
            $stmt->close();
            $conn->close();
        } else {
            respond(false, "欄位不得為空!");
        }
    } else {
        respond(false, "欄位錯誤!");
    }
}

//會員帳號是否存在(註冊介面使用)
function check_uni_username()
{
    
    $input = get_json_input();
    if (isset($input["username"])) {
        $p_username = trim($input["username"]);
        if ($p_username) {
            $conn = create_connection();

            $stmt = $conn->prepare("SELECT * FROM users WHERE Username = ?");

            $stmt->bind_param("s", $p_username); // 一定要傳遞變數

            $stmt->execute();

            $result = $stmt->get_result();

            if ($result->num_rows === 1) {
                //帳號已存在
                respond(false, "帳號已存在,不可以使用");
            } else {
                //帳號不存在
                respond(true, "帳號不存在,可以使用");
            }
            $stmt->close();
            $conn->close();
        } else {
            respond(false, "欄位不得為空!");
        }
    } else {
        respond(false, "欄位錯誤!");
    }
}

//取得所有會員資料
//input: none
// {"state" : true, "message" : "取得所有會員資料成功", "data" : "所有使用者資訊"}
// {"state" : false, "message" : "取得所有會員資料失敗"}
function get_all_user_data()
{
    $conn = create_connection();

    $stmt = $conn->prepare("SELECT * FROM users ORDER BY user_id ASC");
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $mydata = array();
        while ($row = $result->fetch_assoc()) {
            unset($row["Password"]);
            unset($row["uid01"]);
            $mydata[] = $row;
        }
        respond(true, "取得所有會員資料成功", $mydata);
    } else {
        //查無資料
        respond(false, "查無資料");
    }
    $stmt->close();
    $conn->close();
}

//會員更新
// {"id" : "xxxxxx", "email" : "xxxxxx"}
// {"state" : true, "message" : "會員更新成功"}
// {"state" : false, "message" : "會員更新失敗與相關錯誤訊息"}
// {"state" : false, "message" : "欄位錯誤"}
// {"state" : false, "message" : "欄位不得為空白"}
function update_user()
{
    $input = get_json_input();
    if (isset($input["id"],$input["email"])) {
        $p_id = trim($input["id"]);
        $p_email = trim($input["email"]);
        if ($p_id && $p_email) {
            $conn = create_connection();

            $stmt = $conn->prepare("UPDATE users SET Email = ? WHERE ID = ?");
            $stmt->bind_param("si", $p_id, $p_email); // 一定要傳遞變數
            if($stmt->execute()){
                if ($stmt->affected_rows === 1) {
                    respond(true, "會員更新成功");
                } else {
                    respond(false, "會員更新失敗, 並無更新行為!");
                }
            }else{
                respond(false, "會員更新失敗");
            }
            $stmt->close();
            $conn->close();
        } else {
            respond(false, "欄位不得為空!");
        }
    } else {
        respond(false, "欄位錯誤!");
    }
}


//會員刪除
// {"id" : "xxxxxx", "email" : "xxxxxx"}
// {"state" : true, "message" : "會員刪除成功"}
// {"state" : false, "message" : "會員刪除失敗與相關錯誤訊息"}
// {"state" : false, "message" : "欄位錯誤"}
// {"state" : false, "message" : "欄位不得為空白"}
function delete_user()
{
    $input = get_json_input();
    if (isset($input["id"])) {
        $p_id = trim($input["id"]);
        if ($p_id) {
            $conn = create_connection();

            $stmt = $conn->prepare("DELETE FROM users WHERE ID = ?");
            $stmt->bind_param("i", $p_id); // 一定要傳遞變數
            if($stmt->execute()){
                if ($stmt->affected_rows === 1) {
                    respond(true, "會員刪除成功");
                } else {
                    respond(false, "會員刪除失敗, 並無刪除行為!");
                }
            }else{
                respond(false, "會員刪除失敗");
            }
            $stmt->close();
            $conn->close();
        } else {
            respond(false, "欄位不得為空!");
        }
    } else {
        respond(false, "欄位錯誤!");
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_GET['action'] ?? '';
    switch ($action) {
        case 'register':
            register_user();
            break;

        case 'login':
            login_user();
            break;

        case 'loginmanager':
            login_manager();
            break;

        case 'checkuid':
            check_uid();
            break;

        case 'checkuni':
            check_uni_username();
            break;

        case 'update':
            update_user();
            break;

        default:
            respond(false, "無效的操作");
    }
} else if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $action = $_GET['action'] ?? '';
    switch ($action) {
        case 'getalldata':
            get_all_user_data();
            break;
        default;
            respond(false, "無效操作");
    }
}else if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    $action = $_GET['action'] ?? '';
    switch ($action) {
        case 'delete':
            delete_user();
            break;
        default;
            respond(false, "無效操作");
    }
} else {
    respond(false, "無效請求方法");
}
