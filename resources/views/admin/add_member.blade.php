<div class="container-fluid">
    <div class="col-12 col-md-8 p-5">
      <h2 class="text-center">新增會員資料</h2>
      <form id="addMemberForm" class="text-center">
        <table class="table">
          <tr>
            <td>使用者</td>
            <td>
              <input type="text" class="col-2 form-control border border-dark" name="username" required>
            </td>
          </tr>
          <tr>
            <td class="mt-3">密碼</td>
            <td>
              <input type="password" class="col-2 form-control border border-dark" name="password" required>
            </td>
          </tr>
          <tr>
            <td class="mt-3">信箱</td>
            <td>
              <input type="email" class="col-2 form-control border border-dark" name="email" required>
            </td>
          </tr>
          <tr>
            <td class="mt-3">角色</td>
            <td>
              <select class="col-2 form-control border border-dark" name="role">
                <option value="一般用戶">一般用戶</option>
                <option value="批發商">批發商</option>
              </select>
            </td>
          </tr>
          <tr>
            <td class=" align-middle" colspan="2">
              <input type="submit" value="新增" id="btn" class="btn btn-secondary">
            </td>
          </tr>
        </table>
      </form>
    </div>
  </div>
  
  <script src="../js/jquery-3.7.1.min.js"></script>
  <script>
  $(document).ready(function () {

    $('#addMemberForm').on('submit', function (e) {
      e.preventDefault(); // 阻止表單默認提交
      console.log("點擊送出");
        
      // 獲取表單數據
      const formData = {
        username: $('input[name="username"]').val(),
        password: $('input[name="password"]').val(),
        email: $('input[name="email"]').val(),
        role: $('select[name="role"]').val() // 新增角色欄位
      };
  
      // 發送AJAX請求到後端
      $.ajax({
        url: '../member_control_api_v1.php?action=register', // 替換為實際路徑
        method: 'POST',
        data: JSON.stringify(formData), // 將數據轉為JSON格式
        contentType: 'application/json', // 指定傳輸格式為JSON
        dataType: 'json',
        success: function (response) {
          if (response.state) {
            alert('新增會員成功！');
            $('#addMemberForm')[0].reset(); // 清空表單
          } else {
            alert('新增失敗：' + response.message);
          }
        },
        error: function () {
          alert('無法連線到後端API');
        }
      });
    });
  });
  </script>