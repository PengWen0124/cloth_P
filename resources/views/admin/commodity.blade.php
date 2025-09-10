<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My own clothesg 商品頁面</title>
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

        .item {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .item img {
            max-width: 100%;
            border-radius: 6px;
            margin-bottom: 10px;
        }

        .item:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        .main_title {
            font-size: 18px;
            font-weight: bold;
            margin-top: 10px;
        }

        .sub_title {
            font-size: 14px;
            color: #666;
            margin-bottom: 10px;
        }

        .price {
            margin: 10px 0;
        }

        .price .sale {
            color: #d9534f;
            font-weight: bold;
            margin-right: 10px;
        }

        .price .origin {
            text-decoration: line-through;
            color: #999;
        }

        .qty {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 10px 0;
        }

        .qty .bt {
            padding: 5px 10px;
            border: 1px solid #ddd;
            cursor: pointer;
        }

        .qty_num {
            padding: 5px 15px;
            border-top: 1px solid #ddd;
            border-bottom: 1px solid #ddd;
        }

        .add_btn {
            background: #007bff;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 6px;
            cursor: pointer;
        }

        .add_btn:hover {
            background: #0056b3;
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

        <!-- 品牌介紹 -->
        <section class="py-12 bg-neutral-200">
            <div class="max-w-[1200px] mx-auto px-4">
            </div>
        </section>

        <!-- 常見產品 -->
        <section class="py-12 bg-neutral-200">
            <div class="container my-4">
                <div class="row gx-3 gy-3">
                    <!-- 1 純棉 Cotton -->
                    <div class="col-md-4">
                        <div class="item">
                            <img src="/public/images/cotton.jpg" alt="純棉">
                            <div class="main_title">純棉 Cotton</div>
                            <div class="sub_title">柔軟親膚 吸汗透氣</div>
                            <div class="price"><span class="sale">NT$690</span><span class="origin">NT$890</span></div>
                            <button class="add_btn">加入購物車</button>
                        </div>
                    </div>
                    <!-- 2 亞麻 Linen -->
                    <div class="col-md-4">
                        <div class="item">
                            <img src="/public/images/linen.jpg" alt="亞麻">
                            <div class="main_title">亞麻 Linen</div>
                            <div class="sub_title">清爽快乾 夏日首選</div>
                            <div class="price"><span class="sale">NT$990</span><span class="origin">NT$1,280</span></div>
                            <button class="add_btn">加入購物車</button>
                        </div>
                    </div>
                    <!-- 3 絲綢 Silk -->
                    <div class="col-md-4">
                        <div class="item">
                            <img src="/public/images/silk.jpg" alt="絲綢">
                            <div class="main_title">絲綢 Silk</div>
                            <div class="sub_title">光澤細緻 輕薄垂墜</div>
                            <div class="price"><span class="sale">NT$2,280</span><span class="origin">NT$2,880</span></div>
                            <button class="add_btn">加入購物車</button>
                        </div>
                    </div>
                    <!-- 4 羊毛 Wool -->
                    <div class="col-md-4">
                        <div class="item">
                            <img src="/public/images/wool.jpg" alt="羊毛">
                            <div class="main_title">羊毛 Wool</div>
                            <div class="sub_title">保暖透氣 冬季基本</div>
                            <div class="price"><span class="sale">NT$1,680</span><span class="origin">NT$2,180</span></div>
                            <button class="add_btn">加入購物車</button>
                        </div>
                    </div>
                    <!-- 5 羊絨 Cashmere -->
                    <div class="col-md-4">
                        <div class="item">
                            <img src="/public/images/cashmere.jpg" alt="羊絨">
                            <div class="main_title">羊絨 Cashmere</div>
                            <div class="sub_title">極致柔軟 輕暖升級</div>
                            <div class="price"><span class="sale">NT$3,980</span><span class="origin">NT$4,980</span></div>
                            <button class="add_btn">加入購物車</button>
                        </div>
                    </div>
                    <!-- 6 莫代爾 Modal -->
                    <div class="col-md-4">
                        <div class="item">
                            <img src="/public/images/modal.jpg" alt="莫代爾">
                            <div class="main_title">莫代爾 Modal</div>
                            <div class="sub_title">絲滑親膚 高彈舒適</div>
                            <div class="price"><span class="sale">NT$780</span><span class="origin">NT$980</span></div>
                            <button class="add_btn">加入購物車</button>
                        </div>
                    </div>
                    <!-- 7 天絲 Tencel/Lyocell -->
                    <div class="col-md-4">
                        <div class="item">
                            <img src="/public/images/tencel.jpg" alt="天絲">
                            <div class="main_title">天絲 Tencel</div>
                            <div class="sub_title">涼感透氣 自然垂墜</div>
                            <div class="price"><span class="sale">NT$1,180</span><span class="origin">NT$1,580</span></div>
                            <button class="add_btn">加入購物車</button>
                        </div>
                    </div>
                    <!-- 8 聚酯纖維 Polyester -->
                    <div class="col-md-4">
                        <div class="item">
                            <img src="/public/images/polyester.jpg" alt="聚酯纖維">
                            <div class="main_title">聚酯纖維 Polyester</div>
                            <div class="sub_title">耐磨抗皺 易打理</div>
                            <div class="price"><span class="sale">NT$590</span><span class="origin">NT$790</span></div>
                            <button class="add_btn">加入購物車</button>
                        </div>
                    </div>
                    <!-- 9 丹寧 Denim -->
                    <div class="col-md-4">
                        <div class="item">
                            <img src="/public/images/denim.jpg" alt="丹寧">
                            <div class="main_title">丹寧 Denim</div>
                            <div class="sub_title">結實耐穿 經典不敗</div>
                            <div class="price"><span class="sale">NT$1,090</span><span class="origin">NT$1,390</span></div>
                            <button class="add_btn">加入購物車</button>
                        </div>
                    </div>
                </div>
            </div>
</body>
</div>
</section>

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