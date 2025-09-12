<!DOCTYPE html>
<html lang="zh-Hant">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My own clothes 一般會員下單</title>
  <link rel="stylesheet" href="/public/css/css01.css">
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

    a {
      text-decoration: none;
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
        <a href="/" class="text-2xl ">首頁</a>
        <a href="/commodity" class="text-2xl ">產品介紹</a>
        <a href="/qa" class="text-2xl ">Q&A</a>
        <a href="#footer" class="text-2xl ">關於我們</a> <!-- 這裡指向頁腳 -->
        <a href="#" class="text-2xl ">會員登入</a>
        <a href="/myadmin" class="text-2xl">後臺管理</a>
      </div>
    </div>
  </nav>

  <!-- 主內容容器 -->

  <main class="content px-3 py-2">
    <div class="container-fluid">
      <div class="col-12 col-md-8 p-5 mx-auto">
        <h2 class="text-center">一般會員下單</h2>
        <form action="/submit_order_data" method="post" class="text-center">
          <table class="table table-borderless">
            <tr>
              <td class="mt-3">使用者</td>
              <td>
                <select class="col-2 form-control border border-dark" name="user">
                  <option value="user01">user01</option>
                  <option value="wholesaler01">wholesaler01</option>
                  <option value="user02">user02</option>
                  <option value="wholesaler02">wholesaler02</option>
                </select>
              </td>
            </tr>
            <tr>
              <td class="mt-3">商品</td>
              <td>
                <select class="col-2 form-control border border-dark" name="product" id="productSelect" onchange="updatePrice()">
                  <option value="高山烏龍(精裝)|1899">棉 (Cotton) - $1899</option>
                  <option value="高山紅茶(精裝)|1499">聚酯纖維 (Polyester) - $1499</option>
                  <option value="金萱(精裝)|1699">亞麻 (Linen) - $1699</option>
                  <option value="日式櫻花紋(茶壺)|1599">羊毛 (Wool) - $1599</option>
                </select>
              </td>
            </tr>
            <tr>
              <td class="mt-3">數量</td>
              <td>
                <input type="number" class="col-2 form-control border border-dark" name="quantity" min="1" value="1" onchange="updatePrice()">
              </td>
            </tr>
            <tr>
              <td class="mt-3">金額</td>
              <td>
                <input type="text" class="col-2 form-control border border-dark" name="amount" id="amount" readonly>
              </td>
            </tr>
            <tr>
              <td class="mt-3">訂單類型</td>
              <td>
                <select class="col-2 form-control border border-dark" name="order_type">
                  <option value="一般用戶訂單">一般用戶訂單</option>
                  <option value="批發商訂單">批發商訂單</option>
                </select>
              </td>
            </tr>
            <tr>
              <td class="mt-3">訂單日期</td>
              <td>
                <input type="date" class="col-2 form-control border border-dark" name="order_date" value="2025-03-18">
              </td>
            </tr>
          </table>
          <div class="mt-4 d-flex justify-content-center">
            <input type="submit" value="新增訂單" class="btn btn-secondary" id="btn">
            <!-- 新增登出按鈕 -->
            <a href="/logout" class="btn btn-danger text-white ml-3">登出</a>
          </div>
        </form>
      </div>
    </div>
  </main>

  <!-- 頁腳 -->
  <footer class="bg-stone-400 py-12 relative" id="footer">
    <div class="w-full h-[200px] absolute inset-0 bg-cover"></div>
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
          <p>服務時間：週一至週五</p>
          <p>上班時間上午9:00至下午5:00</p>
          <p>信箱：example@example.com</p>
          <p>電話：04-2359-2181</p>
        </div>
        <div class="col-md-3 text-center">
          <h3 class="mb-3">關注我們</h3>
          <div class="flex justify-center gap-3">
            <img class="w-10 h-10" src="/public//images/link/instagram.jpg" alt="Instagram">
            <img class="w-10 h-10" src="/public//images/link/Facebook.jpg" alt="Facebook">
            <img class="w-10 h-10" src="/public//images/link/YouTube.jpg" alt=" YouTube">
          </div>
        </div>
      </div>
    </div>
  </footer>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
<script src="/public/js/jquery-3.7.1.min.js"></script>
<script>
  // 動態計算金額
  function updatePrice() {
    const productSelect = document.getElementById('productSelect');
    const quantityInput = document.querySelector('input[name="quantity"]');
    const amountInput = document.getElementById('amount');

    const selectedProduct = productSelect.value.split('|'); // 分割商品名稱和價格
    const price = parseInt(selectedProduct[1]); // 單價
    const quantity = parseInt(quantityInput.value) || 0; // 數量

    const total = price * quantity;
    amountInput.value = `$${total.toLocaleString()}`; // 顯示格式化金額
  }

  // 初始化金額
  $(document).ready(function() {
    updatePrice(); // 頁面載入時計算初始金額
  });
</script>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>