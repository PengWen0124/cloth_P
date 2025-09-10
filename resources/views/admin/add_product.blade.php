<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新增商品</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/css/style.css">
</head>
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
    <script src="/public/js/jquery-3.7.1.min.js"></script>
    <script>
    $(document).ready(function () {
        $('#addProductForm').on('submit', function (e) {
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
                success: function (response) {
                    if (response.state) {
                        alert('新增商品成功！');
                        $('#addProductForm')[0].reset(); // 清空表單
                    } else {
                        alert('新增失敗：' + response.message);
                    }
                },
                error: function (xhr, status, error) {
                    alert('無法連線到後端API：' + error);
                }
            });
        });
    });
    </script>
</body>
</html>