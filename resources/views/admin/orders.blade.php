<div class="container-fluid">
    <div class="fw-900 mb-3">
        <h4>訂單紀錄</h4>
    </div>
    <div class="card border-0">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="card-title">訂單列表</h5>
            <div>
                <select class="form-select w-auto d-inline-block" id="orderFilter" onchange="filterTable()">
                    <option value="all">全部</option>
                    <option value="一般用戶訂單">一般用戶訂單</option>
                    <option value="批發商訂單">批發商訂單</option>
                </select>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped" id="orderTable">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">訂單編號</th>
                        <th scope="col">使用者</th>
                        <th scope="col">金額</th>
                        <th scope="col">商品</th>
                        <th scope="col">訂單類型</th>
                        <th scope="col">訂單日期</th>
                    </tr>
                </thead>
                <tbody id="orderTableBody">
                    <!-- 示例數據，實際應用中應由後端動態生成 -->
                    <tr>
                        <th scope="row">1</th>
                        <td>ORD-2025-001</td>
                        <td>user01</td>
                        <td>$1899</td>
                        <td>棉 (Cotton)x 1</td>
                        <td>一般用戶訂單</td>
                        <td>2025-03-10</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>ORD-2025-002</td>
                        <td>wholesaler01</td>
                        <td>$14,990</td>
                        <td>聚酯纖維 (Polyester) x 5, 棉 (Cotton) x 5</td>
                        <td>批發商訂單</td>
                        <td>2025-03-12</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>ORD-2025-003</td>
                        <td>user02</td>
                        <td>$1699</td>
                        <td>亞麻 (Linen) x 1</td>
                        <td>一般用戶訂單</td>
                        <td>2025-03-15</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>ORD-2025-004</td>
                        <td>wholesaler02</td>
                        <td>$31,980</td>
                        <td>羊毛 (Wool) x 10, 亞麻 (Linen) x 8</td>
                        <td>批發商訂單</td>
                        <td>2025-03-16</td>
                    </tr>
                    <!-- 更多數據可根據需要添加 -->
                </tbody>
            </table>
            <!-- 分頁控制 -->
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center" id="pagination">
                    <li class="page-item"><a class="page-link" href="#" onclick="changePage(-1)">上一頁</a></li>
                    <li class="page-item active"><a class="page-link" href="#" onclick="changePage(1)">1</a></li>
                    <li class="page-item"><a class="page-link" href="#" onclick="changePage(2)">2</a></li>
                    <li class="page-item"><a class="page-link" href="#" onclick="changePage(3)">3</a></li>
                    <li class="page-item"><a class="page-link" href="#" onclick="changePage(1)">下一頁</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
<script src="/js/jquery-3.7.1.min.js"></script>
<script>
    // 過濾表格根據訂單類型
    function filterTable() {
        const filterValue = document.getElementById('orderFilter').value;
        const rows = document.querySelectorAll('#orderTableBody tr');

        rows.forEach(row => {
            const orderType = row.cells[5].textContent; // 訂單類型在第6欄（因新增商品欄位）
            if (filterValue === 'all' || orderType === filterValue) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    }

    // 分頁邏輯
    const rowsPerPage = 5; // 每頁顯示的行數
    let currentPage = 1;

    function displayPage(page) {
        const rows = document.querySelectorAll('#orderTableBody tr');
        const totalRows = rows.length;
        const totalPages = Math.ceil(totalRows / rowsPerPage);

        // 確保頁數在有效範圍內
        if (page < 1) page = 1;
        if (page > totalPages) page = totalPages;
        currentPage = page;

        // 顯示當前頁的行
        rows.forEach((row, index) => {
            row.style.display = 'none'; // 先隱藏所有行
            if (index >= (page - 1) * rowsPerPage && index < page * rowsPerPage) {
                row.style.display = ''; // 顯示當前頁的行
            }
        });

        // 更新分頁按鈕
        updatePagination(totalPages);
    }

    function updatePagination(totalPages) {
        const pagination = document.getElementById('pagination');
        pagination.innerHTML = ''; // 清空現有分頁

        // 上一頁
        pagination.innerHTML += `<li class="page-item ${currentPage === 1 ? 'disabled' : ''}"><a class="page-link" href="#" onclick="changePage(${currentPage - 1})">上一頁</a></li>`;

        // 頁數按鈕
        for (let i = 1; i <= totalPages; i++) {
            pagination.innerHTML += `<li class="page-item ${i === currentPage ? 'active' : ''}"><a class="page-link" href="#" onclick="changePage(${i})">${i}</a></li>`;
        }

        // 下一頁
        pagination.innerHTML += `<li class="page-item ${currentPage === totalPages ? 'disabled' : ''}"><a class="page-link" href="#" onclick="changePage(${currentPage + 1})">下一頁</a></li>`;
    }

    function changePage(page) {
        event.preventDefault();
        displayPage(page);
        filterTable(); // 切換頁面後重新應用過濾
    }

    // 初始化顯示第一頁
    $(document).ready(function() {
        displayPage(1);
    });
</script>
</body>

</html>