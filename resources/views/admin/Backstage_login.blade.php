<!DOCTYPE html>
<html lang="zh-Hant">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>My own clothes 後臺管理</title>
  <style>
    body {
      font-family: "Zen Maru Gothic", serif;
      background-color: #f4f4f4;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      background-image: url(/public/images/tea001.png);
      background-size: cover;
      background-position: center;
    }

    .container {
      display: flex;
      width: 80%;
      height: 80vh;
      background-color: #fcfbf9;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      overflow: hidden;
    }

    .image-container {
      width: 50%;
      background-image: url(/public/images/tea002.jpg);
      background-size: cover;
      background-position: center;
      display: flex;
      justify-content: center;
      align-items: center;
      color: white;
      text-align: center;
      padding: 20px;
    }

    .login-container {
      width: 50%;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 20px;
    }

    .login-container h2 {
      margin-bottom: 20px;
      text-align: center;
    }

    .login-container input[type="text"],
    .login-container input[type="password"] {
      width: 100% auto;
      padding: 10px;
      border: 2px solid #ccc;
      border-radius: 10px;
      display: block;
      margin: 10px auto;
    }

    .login-container button {
      width: 50%;
      padding: 10px;
      background-color: #828080;
      border: none;
      border-radius: 20px;
      color: #ffffff;
      font-size: 16px;
      cursor: pointer;
      display: block;
      margin: auto;
    }

    .login-container button:hover {
      background-color: #748874;
    }

    .footer {
      position: absolute;
      bottom: 10px;
      right: 10px;
      font-size: 15px;
      color: black;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="image-container">
    </div>
    <div class="login-container">
      <form id="form">
        <div style="display: flex; justify-content: center; margin-bottom: 0px;">
          <img
            src="/public/images/saunchar.jpg"
            alt="Logo"
            style="width: 350px; " />
        </div>
        <div style="text-align: center; margin-bottom: 0px;">
          <h2>訂購你的專屬服飾</h2>
          <p>只要你需要，一定能訂到</p>
        </div>
        <input
          type="text"
          id="username_login"
          placeholder="請輸入帳號"
          required />
        <input
          type="password"
          id="password_login"
          placeholder="請輸入密碼"
          required />
        <button id="loginForm" type="submit">登入</button>
        <div id="errorMsg" class="error-message"></div>
      </form>
    </div>
  </div>
  <div class="footer">全端網頁程式設計青年專班第01期(2025/06/30~2025/09/19)</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../js/jquery-3.7.1.min.js"></script>
  <script>
    $(document).ready(function() {
      $("#form").submit(function(e) {
        e.preventDefault();
        var JSONdata = {};
        JSONdata["username"] = $("#username_login").val();
        JSONdata["password"] = $("#password_login").val();

        $.ajax({
          url: "http://192.168.10.64/TeaWeb/member_control_api_v1.php?action=loginmanager",
          method: "POST",
          data: JSON.stringify(JSONdata),
          dataType: "json",
          success: function(response) {
            console.log(response);
            if (response.state) {
              // 登入成功，跳轉至主框架頁面
              location.href = "Backstage.html";
            } else {
              $("#errorMsg").text(response.message);
            }
          },
          error: function() {
            $("#errorMsg").text("伺服器錯誤，請稍後再試");
          },
        });
      });
      // $("#loginForm").click(function (e) {
      //   e.preventDefault();
      //   var JSONdata = {};
      //   JSONdata["username"] = $("#username_login").val();
      //   JSONdata["password"] = $("#password_login").val();

      //   $.ajax({
      //     url: "http://192.168.10.64/TeaWeb/member_control_api_v1.php?action=loginmanager",
      //     method: "POST",
      //     data: JSON.stringify(JSONdata),
      //     dataType: "json",
      //     success: function (response) {
      //       console.log(response);
      //       if (response.state) {
      //         // 登入成功，跳轉至主框架頁面
      //         location.href = "Backstage.html";
      //       } else {
      //         $("#errorMsg").text(response.message);
      //       }
      //     },
      //     error: function () {
      //       $("#errorMsg").text("伺服器錯誤，請稍後再試");
      //     },
      //   });
      // });
    });
  </script>
</body>

</html>