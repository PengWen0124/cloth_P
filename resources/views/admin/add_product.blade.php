<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My own clothes 新增商品 </title>
    <link rel="stylesheet" href="/public/css/css01.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Ingrid+Darling&family=Inspiration&family=Inder&family=Itim&family=Zen+Maru+Gothic:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: "Zen Maru Gothic", serif;
            background-image: url('/images/tea001.png');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            margin: 0;
            padding: 0;
        }

        .carousel-item {
            height: 60vh;
            background-size: cover;
            background-position: center;
        }

        .top-navbar {
            background-color: #E4E4E4;
            /* 背景色改為 #E4E4E4 */
            border-bottom: 2px solid #CCCCCC;
            /* 邊框色改為稍深的灰色 */
            font-family: "Zen Maru Gothic", serif;
        }

        .top-navbar .navbar-text {
            font-family: "Zen Maru Gothic", serif;
            color: #333333;
        }

        .top-navbar a {
            font-family: "Zen Maru Gothic", serif;
            color: #A79F8F;
            /* 目錄字體顏色為 #A79F8F */
        }

        .top-navbar a:hover {
            color: #FFFFFF;
            /* 懸停時改為白色 */
            background-color: #8B7F6F;
            /* 懸停背景色*/
            padding: 0.2rem 0.5rem;
            border-radius: 0.25rem;
        }

        .main-navbar {
            background-image: url('/images/tea001.png');
            background-size: cover;
            background-position: center;
            width: 100vw;
            position: relative;
            left: 50%;
            right: 50%;
            margin-left: -50vw;
            margin-right: -50vw;
        }

        .main-navbar .nav-link,
        .main-navbar .navbar-brand {
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.8);
        }

        footer {
            font-family: "Zen Maru Gothic", serif;
        }

        footer h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        footer p {
            font-size: 1.125rem;
        }

        .carousel-item {
            height: 830px;
        }
    </style>
</head>

<body>
    <!-- 上方 Navbar -->
    <nav class="top-navbar py-2">
        <div class="container-fluid px-4 max-w-[1440px] mx-auto flex justify-between items-center">
            <span class="navbar-text text-2xl">My Wear - 你的風格，由你決定</span>
            <div class="flex gap-12 flex-wrap justify-center">
                <a href="#" class="text-2xl">首頁</a>
                <a href="#" class="text-2xl ">產品介紹</a>
                <a href="#footer" class="text-2xl ">關於我們</a> <!-- 這裡指向頁腳 -->
                <a href="#" class="text-2xl ">會員登入</a>
                <a href="admin/Backstage_login.html" class="text-2xl">後臺管理</a>
            </div>
        </div>
    </nav>

    <!-- 主內容容器 -->
    <div class="max-w-[1440px] mx-auto">
        <!-- 輪播圖 -->

        <body>
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8 p-5">
                        <h2 class="text-center">新增商品</h2>
                        <form id="addProductForm" enctype="multipart/form-data">
                            <table class="table mx-auto" style="max-width: 500px;">
                                <tr>
                                    <td class="text-end">商品圖</td>
                                    <td>
                                        <input type="file" class="form-control border border-dark" name="photo" accept="image/*" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-end">商品名</td>
                                    <td>
                                        <input type="text" class="form-control border border-dark" name="Pname" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-end mt-3">金額</td>
                                    <td>
                                        <input type="number" class="form-control border border-dark" name="price" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-end mt-3">內容</td>
                                    <td>
                                        <textarea class="form-control border border-dark" name="description" required></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-end mt-3">品類</td>
                                    <td>
                                        <select class="form-control border border-dark" name="category">
                                            <option value="獨家商品">獨家商品</option>
                                            <option value="OEM商品">OEM商品</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle" colspan="2">
                                        <input type="submit" value="新增商品" id="btn" class="btn btn-secondary w-100">
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
            <script src="../js/jquery-3.7.1.min.js"></script>
            <script>
                $(document).ready(function() {
                    $('#addProductForm').on('submit', function(e) {
                        e.preventDefault(); // 阻止表單默認提交

                        // 使用 FormData 處理檔案上傳和表單資料
                        const formData = new FormData(this);

                        // 發送 AJAX 請求到後端
                        $.ajax({
                            url: '../product_control_api_v1.php?action=add_product',
                            method: 'POST',
                            data: formData,
                            contentType: false, // 必須設為 false 以處理 multipart/form-data
                            processData: false, // 必須設為 false 以避免 jQuery 處理 FormData
                            dataType: 'json',
                            success: function(response) {
                                if (response.state) {
                                    alert('新增商品成功！');
                                    $('#addProductForm')[0].reset(); // 清空表單
                                } else {
                                    alert('新增失敗：' + response.message);
                                }
                            },
                            error: function(xhr, status, error) {
                                alert('無法連線到後端API：' + error);
                            }
                        });
                    });
                });
            </script>
            <!-- 頁腳 -->
            <footer class="bg-stone-400 py-12 relative" id="footer">
                <div class="w-full h-[200px] absolute inset-0 bg-cover" style="background-image: url('images/002.png');"></div>
                <div class="max-w-[1200px] mx-auto px-4 relative text-white">
                    <div class="row g-4">
                        <div class="col-md-3 text-center">
                            <h3 class="mb-3">實體店面</h3>
                            <p style="display: flex; align-items: center; justify-content: center;">
                                <a href="https://maps.app.goo.gl/4vUqB8WGd86tDuYj6" target="_blank" style="display: flex; align-items: center;">
                                    <!-- Google Maps 圖示 -->
                                    <img src="/public/images/map.jpg" alt="Google Maps" style="width: 20px; height: 20px; margin-right: 8px;">
                                    台中市西屯區工業區一路100號
                                </a>
                            </p>
                        </div>
                        <div class="col-md-3 text-center">
                            <h3 class="mb-3">關於產品</h3>
                            <p>產品問題</p>
                            <p>尋找商品</p>
                            <p>認證</p>
                        </div>
                        <div class="col-md-3 text-center">
                            <h3 class="mb-3">聯絡我們</h3>
                            <p>信箱：example@example.com</p>
                            <p>電話：04-2359-2181</p>
                        </div>
                        <div class="col-md-3 text-center">
                            <h3 class="mb-3">關注我們</h3>
                            <div class="flex justify-center gap-3">
                                <img class="w-10 h-10" src="/public/images/link/instagram.jpg" alt="Instagram">
                                <img class="w-10 h-10" src="/public/images/link/Facebook.jpg" alt="Facebook">
                                <img class="w-10 h-10" src="/public/images/link/YouTube.jpg"" alt=" YouTube">
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>