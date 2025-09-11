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

<script>
$(document).ready(function() {
    $('#addProductForm').on('submit', function(e) {
        e.preventDefault();
        const formData = new FormData(this);

        $.ajax({
            url: '../product_control_api_v1.php?action=add_product',
            method: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function(response) {
                if (response.state) {
                    alert('新增商品成功！');
                    $('#addProductForm')[0].reset();
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
