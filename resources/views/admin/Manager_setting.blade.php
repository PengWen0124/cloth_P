<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>管理設定</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/css/style.css">
</head>
<body>
    <main class="content px-3 py-2">
        <div class="container-fluid">
            <div class="fw-900 mb-3">
                <h4>管理設定</h4>
            </div>
            <div class="card border-0">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title">管理者帳號列表</h5>
                    <button class="btn btn-dark" id="addAdminBtn">新增管理者</button>
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="adminTable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">使用者名稱</th>
                                <th scope="col">信箱</th>
                                <th scope="col">權限等級</th>
                                <th scope="col">註冊日期</th>
                                <th scope="col">操作</th>
                            </tr>
                        </thead>
                        <tbody id="adminTableBody">
                            <!-- 示例數據，實際應用中應由後端動態生成 -->
                            <tr data-id="admin01">
                                <th scope="row">1</th>
                                <td>admin01</td>
                                <td>admin01@saunchar.com</td>
                                <td>最高權限</td>
                                <td>2025-01-01</td>
                                <td>
                                    <!-- 最高權限帳號無編輯/刪除按鈕 -->
                                    <span class="text-muted">不可修改</span>
                                </td>
                            </tr>
                            <tr data-id="admin02">
                                <th scope="row">2</th>
                                <td>admin02</td>
                                <td>admin02@saunchar.com</td>
                                <td>一般管理</td>
                                <td>2025-02-15</td>
                                <td>
                                    <button class="btn btn-sm btn-secondary edit-btn">編輯</button>
                                    <button class="btn btn-sm btn-secondary delete-btn">刪除</button>
                                </td>
                            </tr>
                            <tr data-id="admin03">
                                <th scope="row">3</th>
                                <td>admin03</td>
                                <td>admin03@saunchar.com</td>
                                <td>一般管理</td>
                                <td>2025-03-01</td>
                                <td>
                                    <button class="btn btn-sm btn-secondary edit-btn">編輯</button>
                                    <button class="btn btn-sm btn-secondary delete-btn">刪除</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/public/js/jquery-3.7.1.min.js"></script>
    <script>
        // 假設當前登入者為 admin01（最高權限）
        const currentUser = "admin01";

        $(document).ready(function () {
            // 檢查權限並禁用非最高權限者的操作
            if (currentUser !== "admin01") {
                $(".edit-btn, .delete-btn, #addAdminBtn").prop("disabled", true).addClass("disabled");
                alert("僅最高權限帳號可進行管理操作。");
            }

            // 新增管理者按鈕事件
            $("#addAdminBtn").click(function (e) {
                e.preventDefault();
                // 跳轉至新增管理者頁面（可另外設計）
                $("#content").load("add_admin.html"); // 假設有新增頁面
            });

            // 編輯按鈕事件
            $(".edit-btn").click(function () {
                const row = $(this).closest("tr");
                const adminId = row.data("id");
                // 跳轉至編輯頁面並傳遞 adminId（可另外設計）
                $("#content").load(`edit_admin.html?id=${adminId}`);
            });

            // 刪除按鈕事件
            $(".delete-btn").click(function () {
                const row = $(this).closest("tr");
                const adminId = row.data("id");
                if (confirm(`確定要刪除管理者 ${adminId} 嗎？`)) {
                    // 模擬刪除（實際應發送 AJAX 請求至後端）
                    row.remove();
                    alert(`已刪除管理者 ${adminId}`);
                }
            });
        });
    </script>
</body>
</html>