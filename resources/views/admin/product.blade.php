<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品管理</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/css/style.css">
    <link rel="stylesheet" href="/public/css/dataTables.dataTables.min.css">
</head>
<body>
    <main class="content px-3 py-2">
        <div class="container-fluid">
            <div class="fw-900 mb-3">
                <h4>商品管理</h4>
            </div>
            <div class="card border-0">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title">商品欄</h5>
                    <div>
                        <select class="form-select w-auto d-inline-block" id="productFilter">
                            <option value="all">全部</option>
                            <option value="獨家商品">獨家商品</option>
                            <option value="OEM商品">OEM商品</option>
                        </select>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="productTable">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 10%;">#</th>
                                <th scope="col" style="width: 15%;">商品圖</th>
                                <th scope="col" style="width: 20%;">商品名</th>
                                <th scope="col" style="width: 10%;">金額</th>
                                <th scope="col" style="width: 25%;">內容</th>
                                <th scope="col" style="width: 10%;">品類</th>
                                <th scope="col" style="width: 10%;">上架日期</th>
                            </tr>
                        </thead>
                        <tbody id="productTableBody">
                            <!-- 由後端動態生成 -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/public/js/jquery-3.7.1.min.js"></script>
    <script src="/public/js/dataTables.min.js"></script>
    <script>
    $(document).ready(function () {
        let table; // 儲存 DataTables 實例

        // 從後端獲取商品資料
        function fetchProductData(pageLength) {
            // 顯示載入提示
            $('#productTableBody').html('<tr><td colspan="7" class="text-center">載入中...</td></tr>');

            $.ajax({
                url: "product_control_api_v1.php?action=getalldata", // 假設後端 API 路徑
                method: "GET",
                dataType: "json",
                success: function (response) {
                    if (response.state) {
                        console.log("後端回應:", response);
                        const products = response.data;
                        const tbody = $("#productTableBody");
                        tbody.empty();

                        // 填充資料
                        products.forEach((product, index) => {
                            const row = `
                                <tr>
                                    <th scope="row">${index + 1}</th>
                                    <td><img src="${product.Image}" style="width: 20%;"></td>
                                    <td>${product.Name}</td>
                                    <td>${product.Price}</td>
                                    <td>${product.Description}</td>
                                    <td>${product.Category}</td>
                                    <td>${product.Created_at}</td>
                                </tr>
                            `;
                            tbody.append(row);
                        });

                        // 如果 DataTables 已初始化，銷毀並重新初始化
                        if (table) {
                            table.destroy();
                        }

                        // 初始化 DataTables
                        table = $("#productTable").DataTable({
                            order: [[5, "asc"]], // 按品類欄降序
                            pageLength: pageLength, // 預設每頁筆數
                            lengthMenu: [5, 10, 25, 50], // 可選筆數
                            language: {
                                lengthMenu: "每頁顯示 _MENU_ 筆",
                                paginate: {
                                    previous: "上一頁",
                                    next: "下一頁"
                                },
                                info: "顯示 _START_ 到 _END_ 筆，共 _TOTAL_ 筆",
                                emptyTable: "沒有資料可顯示"
                            }
                        });

                        // 應用品類過濾
                        filterTable();
                    } else {
                        $('#productTableBody').html('<tr><td colspan="7" class="text-center">載入失敗: ' + response.message + '</td></tr>');
                    }
                },
                error: function (xhr, status, error) {
                    $('#productTableBody').html('<tr><td colspan="7" class="text-center">無法連線到後端API</td></tr>');
                    console.error("AJAX 錯誤:", status, error);
                }
            });
        }

        // 初次載入資料
        fetchProductData(5);

        // 監聽每頁筆數切換事件
        $('#productTable').on('length.dt', function (e, settings, len) {
            console.log('每頁筆數切換為：', len);
            fetchProductData(len); // 重新獲取資料
        });

        // 品類過濾功能
        function filterTable() {
            const filterValue = $('#productFilter').val();
            if (table) {
                table.column(5).search(filterValue === 'all' ? '' : filterValue).draw();
            }
        }

        // 綁定品類過濾事件
        $('#productFilter').on('change', function () {
            filterTable();
        });
    });
    </script>
</body>
</html>