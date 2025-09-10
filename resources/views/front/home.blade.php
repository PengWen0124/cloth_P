<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My own clothes 你的風格，由你決定</title>
    <link rel="stylesheet" href="/css/css01.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Ingrid+Darling&family=Inspiration&family=Inder&family=Itim&family=Zen+Maru+Gothic:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: "Zen Maru Gothic", serif;

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
            background-image: url('/public/images/tea001.png');
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
                <a href="/qa" class="text-2xl ">Q&A</a>
                <a href="#footer" class="text-2xl ">關於我們</a> <!-- 這裡指向頁腳 -->
                <a href="#" class="text-2xl ">會員登入</a>
                <a href="admin/Backstage_login.html" class="text-2xl">後臺管理</a>
            </div>
        </div>
    </nav>

    <!-- 主內容容器 -->
    <div class="max-w-[1440px] mx-auto">
        <!-- 輪播圖 -->
        <section class="relative">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" style="background-image: url('/public/images/Slideshow/01.jpg');"></div>
                    <div class="carousel-item" style="background-image: url('/public/images/Slideshow/02.jpg');"></div>
                    <div class="carousel-item" style="background-image: url('/public/images/Slideshow/03.jpg');"></div>
                    <div class="carousel-item" style="background-image: url('/public/images/Slideshow/04.jpg');"></div>
                    <div class="carousel-item" style="background-image: url('/public/images/Slideshow/05.jpg');"></div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>

        <!-- 品牌介紹 -->
        <section class="py-12 bg-neutral-200">
            <div class="max-w-[1200px] mx-auto px-4">
                <h2 class="text-yellow-800 text-6xl font-['Zen_Maru_Gothic'] text-center mb-10">品牌宗旨</h2>
                <div class="text-black text-2xl font-['Zen_Maru_Gothic'] mb-10">
                    我們的服飾材質選擇精心挑選，以提供最佳的舒適感與耐用性。每一種材質都經過精細篩選，旨在滿足不同場合和季節的需求。天然材質如棉花、羊毛和絲綢，不僅柔軟透氣，還具備優異的吸濕和保暖性；而合成纖維如聚酯和尼龍，則具有強韌、易清洗且不易皺的特點，為您的日常穿著帶來便捷與舒適。無論是日常穿著還是特殊場合，我們的服飾將為您帶來極致的穿著體驗。
                </div>
                <div class="row justify-content-center g-4">
                    <div class="col-md-6 flex flex-col items-center">
                        <div class="w-64 h-64 rounded-full border-2 border-yellow-800 bg-cover" style="background-image: url('/public/images/Cotton.jpg');"></div>
                        <h3 class="text-black text-3xl font-['Zen_Maru_Gothic'] mt-4">棉 (Cotton)</h3>
                        <p class="text-black text-xl font-['Zen_Maru_Gothic'] text-center">棉花具有柔軟、透氣的特性，非常適合製作舒適的服飾。</p>
                    </div>
                    <div class="col-md-6 flex flex-col items-center">
                        <div class="w-64 h-64 rounded-full border-2 border-yellow-800 bg-cover" style="background-image: url('/public/images/Linen.jpg');"></div>
                        <h3 class="text-black text-3xl font-['Zen_Maru_Gothic'] mt-4">亞麻 (Linen)</h3>
                        <p class="text-black text-xl font-['Zen_Maru_Gothic'] text-center">亞麻纖維具有良好的透氣性和吸濕性，適合製作夏季服飾。</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- 常見產品 -->
        <section class="py-12 bg-neutral-200">
            <div class="max-w-[1200px] mx-auto px-4">
                <h2 class="text-yellow-800 text-6xl font-['Zen_Maru_Gothic'] text-center mb-10">常見產品</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                    <div class="flex flex-col items-center">
                        <img class="w-64 h-96 border-2 border-yellow-800" src="/public/images/Polyester.jpg" alt="High Mountain Oolong Tea">
                        <h3 class="text-black text-4xl font-['Zen_Maru_Gothic'] mt-4">聚酯纖維 (Polyester)</h3>
                        <p class="text-black text-xl font-['Zen_Maru_Gothic']">聚酯纖維具有耐磨、抗皺的特性，適合製作各種服飾。</p>
                    </div>
                    <div class="flex flex-col items-center">
                        <img class="w-64 h-96 border-2 border-yellow-800" src="/public/images/Nylon.jpg" alt="High Mountain Black Tea">
                        <h3 class="text-black text-4xl font-['Zen_Maru_Gothic'] mt-4">尼龍（Nylon）</h3>
                        <p class="text-black text-xl font-['Zen_Maru_Gothic']">尼龍纖維具有優異的耐磨性和彈性，適合製作運動服飾。</p>
                    </div>
                    <div class="flex flex-col items-center">
                        <img class="w-64 h-96 border-2 border-yellow-800" src="/public/images/Denim.jpg" alt="Jin Xuan Tea">
                        <h3 class="text-black text-4xl font-['Zen_Maru_Gothic'] mt-4">牛仔布（Denim） </h3>
                        <p class="text-black text-xl font-['Zen_Maru_Gothic']">牛仔布以其耐磨性和經典風格而聞名，適合製作休閒服飾。</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- 頁腳 -->
        <footer class="bg-stone-400 py-12 relative" id="footer">
            <div class="w-full h-[200px] absolute inset-0 bg-cover" style="background-image: url('/public/images/002.png');"></div>
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