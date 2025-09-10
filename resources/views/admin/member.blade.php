<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>會員資料表</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/public/css/style.css" />
    <link rel="stylesheet" href="/public/css/dataTables.dataTables.min.css" />
</head>
<body>
    <main class="content px-3 py-2">
        <div class="container-fluid">
            <div class="fw-900 mb-3">
                <h4>會員資料表</h4>
            </div>
            <div class="card border-0">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title">會員列表</h5>
                    <div>
                        <select class="form-select w-auto d-inline-block" id="roleFilter">
                            <option value="all">全部</option>
                            <option value="一般用戶">一般用戶</option>
                            <option value="批發商">批發商</option>
                        </select>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="memberTable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">使用者</th>
                                <th scope="col">信箱</th>
                                <th scope="col">角色</th>
                                <th scope="col">註冊日期</th>
                            </tr>
                        </thead>
                        <tbody id="memberTableBody">
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

        var lan
        // 從後端獲取會員資料
        function fetchMemberData(lan) {
            // 顯示載入提示
            $('#memberTableBody').html('<tr><td colspan="5" class="text-center">載入中...</td></tr>');

            $.ajax({
                url: "../member_control_api_v1.php?action=getalldata", // 確認路徑正確
                method: "GET",
                dataType: "json",
                success: function (response) {
                    if (response.state) {
                        console.log("後端回應:", response);
                        const members = response.data;
                        const tbody = $("#memberTableBody");
                        tbody.empty();

                        // 填充資料
                        members.forEach((member, index) => {
                            const role = member.Role || "一般用戶"; // 與後端欄位一致
                            const row = `
                                <tr>
                                    <th scope="row">${index + 1}</th>
                                    <td>${member.Username}</td>
                                    <td>${member.Email}</td>
                                    <td>${role}</td>
                                    <td>${member.Created_at}</td>
                                </tr>
                            `;
                            tbody.append(row);
                        });

                        // 如果 DataTables 已初始化，銷毀並重新初始化
                        if (table) {
                            table.destroy();
                        }

                        // 初始化 DataTables
                        table = $("#memberTable").DataTable({
                            order: [[3, "asc"]], // 按角色欄降序
                            pageLength: lan, // 預設每頁5筆
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

                        // 應用角色過濾
                        filterTable();
                    } else {
                        $('#memberTableBody').html('<tr><td colspan="5" class="text-center">載入失敗: ' + response.message + '</td></tr>');
                    }
                },
                error: function (xhr, status, error) {
                    $('#memberTableBody').html('<tr><td colspan="5" class="text-center">無法連線到後端API</td></tr>');
                    console.error("AJAX 錯誤:", status, error);
                }
            });
        }

        // 初次載入資料
        fetchMemberData(5);

        // 監聽每頁筆數切換事件
        $('#memberTable').on('length.dt', function (e, settings, len) {
            console.log('每頁筆數切換為：', len);
            fetchMemberData(len); // 重新獲取資料
        });

        // 角色過濾功能
        function filterTable() {
            const filterValue = $('#roleFilter').val();
            if (table) {
                table.column(3).search(filterValue === 'all' ? '' : filterValue).draw();
            }
        }

        // 綁定角色過濾事件
        $('#roleFilter').on('change', function () {
            filterTable();
        });
    });
    </script>
</body>
</html>