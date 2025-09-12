<!-- 主內容容器 -->
  <div class="max-w-[1440px] mx-auto">
    <!-- 輪播圖 -->

    <body>
      <main class="content px-3 py-2">
        <div class="container-fluid">
          <div class="col-12 col-md-8 p-5 mx-auto">
            <h2 class="text-center">新增訂單</h2>
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
              <div class="mt-4">
                <input type="submit" value="新增訂單" class="btn btn-secondary" id="btn">
              </div>
            </form>
          </div>
        </div>
      </main>

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
