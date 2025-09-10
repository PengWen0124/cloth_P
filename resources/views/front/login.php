<!DOCTYPE html>
<html lang="zh-Hant">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My own clothes 會員登入</title>
  <link rel="stylesheet" href="/public/css/bootstrap.min.css">
  <link rel="stylesheet" href="/public/css/css01.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Ingrid+Darling&family=Inspiration&family=Inder&family=Itim&family=Zen+Maru+Gothic:wght@400;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: "Zen Maru Gothic", serif;
      background-image: url('img/tea001.png');
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
      /* 滑鼠懸停時改為白色 */
      background-color: #8B7F6F;
      /* 懸停背景色加深以提高可見度 */
      padding: 0.2rem 0.5rem;
      border-radius: 0.25rem;
    }

    .main-navbar {
      background-image: url('img/tea001.png');
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
  </style>
</head>

<body>
  <!-- 上方 Navbar -->
  <nav class="top-navbar py-2">
    <div class="container-fluid px-4 max-w-[1440px] mx-auto flex justify-between items-center">
      <span class="navbar-text text-2xl">My Wear - 你的風格，由你決定</span>
      <div class="flex gap-12 flex-wrap justify-center">
        <a href="#" class="text-2xl">首頁</a>
        <a href="#" class="text-2xl ">產品介紹</a>
        <a href="#footer" class="text-2xl ">關於我們</a> <!-- 這裡指向頁腳 -->
        <a href="#" class="text-2xl ">會員登入</a>
        <a href="admin/Backstage_login.html" class="text-2xl">後臺管理</a>
      </div>
    </div>
  </nav>

  <!-- 主內容容器 -->
  <div class="max-w-[1440px] mx-auto">
    <!-- 輪播圖 -->
    <section class="relative">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" style="background-image: url('/public/images/Slideshow/01.jpg');"></div>
          <div class="carousel-item" style="background-image: url('/public/images/Slideshow/02.jpg');"></div>
          <div class="carousel-item" style="background-image: url('/public/images/Slideshow/03.jpg');"></div>
          <div class="carousel-item" style="background-image: url('/public/images/Slideshow/04.jpg');"></div>
          <div class="carousel-item" style="background-image: url('/public/images/Slideshow/05.jpg');"></div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>

    <section>
      <div class="container-fluid mt-3 bg-cover p-5 py-12 bg-neutral-200">
        <main class="form-signin w-50 m-auto max-w-[1200px] mx-auto px-4">
          <!-- <img class="mb-4" src="img/logo.jpg" alt="" width="72" height="57"> -->
          <h1 class="h3 mb-3 fw-900" style="color: #AB7D3B;">會員登入</h1>

          <div class="form-floating text-white">
            <input type="text" class="form-control is-invalid" placeholder="name@example.com" style="background-color: var(--mycolor18);" id="username_login"
              name="username_login">
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating mt-3 text-white">
            <input type="password" class="form-control is-invalid" placeholder="Password" style="background-color: var(--mycolor18);" id="password_login"
              name="password_login">
            <label for="floatingPassword">Password</label>
          </div>

          <div class="form-check text-start my-3">
            <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
            <label class="form-check-label fw-900 text-white" for="flexCheckDefault">
              Remember me
            </label>
          </div>
          <button class="btn btn-secondary w-100 py-2" id="form_login">Sign in</button>

          <button class="btn btn-secondary w-100 py-2 mt-3" data-bs-toggle="modal"
            data-bs-target="#exampleModal" id="s02_reg_btn">註冊</button>
          <a href="#" class="text-white">忘記密碼</a>
          <p class="mt-5 mb-3 fw-900" style="color: #AB7D3B;">登入並獲得更多優惠!!</p>
        </main>
      </div>
    </section>


    <!-- Modal註冊 -->
    <div
      class="modal fade"
      id="exampleModal"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header" style="background-image: url(img/tea001.png); ">
            <h1 class="modal-title fs-5 fw-900" id="exampleModalLabel">
              會員註冊
            </h1>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"></button>
          </div>
          <div class="modal-body" style="background-color: #E4E4E4;">
            <div class="row">
              <div class="col-6">
                <div class="d-flex flex-column justify-content-center align-items-center h-100" style="background-color: #E4E4E4;">
                  <div class=""><img src="/public/images/saunchar2.jpg" alt="Logo" style="width: 350px;"></div>
                  <p class="mt-3 text-center">訂購你的專屬服飾</p>
                  <p class="mt-3 text-center">只要你需要，一定能訂到</p>
                </div>
              </div>
              <div class="col-6">
                <div class="mb-3">
                  <label for="username_reg" class="form-label">帳號</label>
                  <input
                    type="text"
                    class="form-control is-invalid"
                    id="username_reg"
                    name="username_reg"
                    placeholder="3-6字數"
                    style="background-color: var(--mycolor18);" />
                  <div class="valid-feedback">符合規則</div>
                  <div class="invalid-feedback">不符合規則</div>
                </div>
                <div class="mb-3">
                  <label for="password_reg" class="form-label">密碼</label>
                  <input
                    type="password"
                    class="form-control"
                    id="password_reg"
                    name="password_reg"
                    placeholder="3-6字數"
                    style="background-color: var(--mycolor18);" />
                  <div class="valid-feedback">符合規則</div>
                  <div class="invalid-feedback">不符合規則</div>
                </div>
                <div class="mb-3">
                  <label for="re_password_reg" class="form-label">確認密碼</label>
                  <input
                    type="password"
                    class="form-control is-invalid"
                    id="re_password_reg"
                    name="re_password_reg"
                    style="background-color: var(--mycolor18);" />
                  <div class="valid-feedback">符合規則</div>
                  <div class="invalid-feedback">不符合規則</div>
                </div>
                <div class="mb-3">
                  <label for="email_reg" class="form-label">Email</label>
                  <input
                    type="email"
                    class="form-control is-invalid"
                    placeholder="3-10字數"
                    id="email_reg"
                    name="email_reg"
                    style="background-color: var(--mycolor18);" />
                  <div class="valid-feedback">符合規則</div>
                  <div class="invalid-feedback">不符合規則</div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer" style="background-color: #E4E4E4;">
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal">
              取消
            </button>
            <button type="button" class="btn btn-secondary" id="ok_btn_reg">
              確認
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- 頁腳 -->
    <footer class="bg-stone-400 py-12 relative" id="footer">
      <div class="w-full h-[200px] absolute inset-0 bg-cover" style="background-image: url('images/002.png');"></div>
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
            <p>信箱：example@example.com</p>
            <p>電話：04-2359-2181</p>
          </div>
          <div class="col-md-3 text-center">
            <h3 class="mb-3">關注我們</h3>
            <div class="flex justify-center gap-3">
              <img class="w-10 h-10" src="/public/images/link/instagram.jpg" alt="Instagram">
              <img class="w-10 h-10" src="/public/images/link/Facebook.jpg" alt="Facebook">
              <img class="w-10 h-10" src="/public/images/link/YouTube.jpg" alt=" YouTube">
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="/public/js/bootstrap.bundle.min.js"></script>
  <script src="/public/js/jquery-3.7.1.min.js"></script>
  <script src="https://unpkg.com/counterup2@2.0.2/dist/index.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    var flag_username_reg = false;
    var flag_password_reg = false;
    var flag_re_password_reg = false;
    var flag_chk01_reg = false;
    var flag_username_login = false;
    var flag_password_login = false;
    $(function() {

      //確認uid01是否存在
      if (getCookie("Uid01")) {
        //將uid01傳遞至後端API執行驗證
        //input {"uid01" : "c5e6c37a"}
        var JSONdata = {};
        JSONdata["uid01"] = getCookie("Uid01");
        console.log(JSON.stringify(JSONdata));

        $.ajax({
          type: "POST",
          url: "/cloth_P/member_control_api_v1.php?action=checkuid",
          data: JSON.stringify(JSONdata),
          dataType: "json",
          success: showdata_checkuid,
          error: function() {
            Swal.fire({
              title: "API介接錯誤?",
              text: "/cloth_P/member_control_api_v1.php?action=checkuid",
              icon: "error"
            });
          }
        });
      } else {
        Swal.fire({
          title: "請先登入會員!",
          icon: "info",
          allowOutsideClick: false,
        });
      }

      //即時監聽username_reg
      $("#username_reg").bind("input propertychange", function() {
        if ($(this).val().length > 2 && $(this).val().length < 7) {
          var JSONdata = {};
          JSONdata["username"] = $("#username_reg").val();
          console.log(JSON.stringify(JSONdata));

          $.ajax({
            type: "POST",
            url: "/cloth_P/member_control_api_v1.php?action=checkuni",
            data: JSON.stringify(JSONdata),
            dataType: "json",
            success: showdata_checkuni,
            error: function() {
              Swal.fire({
                title: "API介接錯誤?",
                text: "/cloth_P/member_control_api_v1.php?action=checkuni",
                icon: "error"
              });
            }
          });
        } else {
          $(this).removeClass("is-valid");
          $(this).addClass("is-invalid");
          $("#username_reg").siblings(".invalid-feedback").text("不符合規則");
          flag_username_reg = false;
        }
      });

      //即時監聽password_reg
      $("#password_reg").bind("input propertychange", function() {
        $(this).removeClass("is-valid");
        $(this).addClass("is-invalid");
        flag_password_reg = true;

        if ($(this).val().length > 2 && $(this).val().length < 7) {
          $(this).removeClass("is-invalid");
          $(this).addClass("is-valid");
          flag_password_reg = true;
        } else {
          $(this).removeClass("is-valid");
          $(this).addClass("is-invalid");
          flag_password_reg = false;
        }
      });

      //即時監聽re_password_reg
      $("#re_password_reg").bind("input propertychange", function() {
        if (flag_password_reg && $(this).val() === $("#password_reg").val()) {
          $(this).removeClass("is-invalid");
          $(this).addClass("is-valid");
          flag_re_password_reg = true;
        } else {
          $(this).removeClass("is-valid");
          $(this).addClass("is-invalid");
          flag_re_password_reg = false;
        }
      });

      //即時監聽email_reg
      $("#email_reg").bind("input propertychange", function() {
        if ($(this).val().length > 2 && $(this).val().length < 11) {
          $(this).removeClass("is-invalid");
          $(this).addClass("is-valid");
          flag_email_reg = true;
        } else {
          $(this).removeClass("is-valid");
          $(this).addClass("is-invalid");
          flag_email_reg = false;
        }
      });

      //即時監聽chk01
      $("#chk01").change(function() {
        console.log($(this).is(":checked"));
        if ($(this).is(":checked")) {
          $(this).next().text("同意");
          $(this).removeClass("is-invalid");
          $(this).addClass("is-valid");
          flag_chk01_reg = true;
        } else {
          $(this).next().text("不同意");
          $(this).removeClass("is-valid");
          $(this).addClass("is-invalid");
          flag_chk01_reg = false;
        }
      });

      //即時監聽username_login
      $("#username_login").bind("input propertychange", function() {
        if ($(this).val().length > 0) {
          $(this).removeClass("is-invalid")
          flag_username_login = true;
        } else {
          $(this).addClass("is-invalid")
          flag_username_login = false;
        }
      });

      //即時監聽password_login
      $("#password_login").bind("input propertychange", function() {
        if ($(this).val().length > 0) {
          $(this).removeClass("is-invalid");
          flag_password_login = true;
        } else {
          $(this).addClass("is-invalid");
          flag_password_login = false;
        }
      });

      //ok_btn_reg按鈕監聽
      $("#ok_btn_reg").click(function() {
        if (
          flag_username_reg &&
          flag_password_reg &&
          flag_re_password_reg &&
          flag_email_reg &&
          flag_chk01_reg
        ) {
          //傳遞至後端API執行註冊行為
          //input: {"username" : "owner04", "password" : "123456", "email" : "owner01@test.com"}
          var JOSNdata = {};
          JOSNdata["username"] = $("#username_reg").val();
          JOSNdata["password"] = $("#password_reg").val();
          JOSNdata["email"] = $("#email_reg").val();
          console.log(JSON.stringify(JOSNdata));

          $.ajax({
            type: "POST",
            url: "/cloth_P/member_control_api_v1.php?action=register",
            data: JSON.stringify(JOSNdata),
            dataType: "json",
            success: showdata_reg,
            error: function() {
              Swal.fire({
                title: "API介接錯誤?",
                text: "/cloth_P/member_control_api_v1.php?action=register",
                icon: "error",
              });
            },
          });
        } else {
          Swal.fire({
            title: "欄位有錯誤, 請修正?",
            icon: "warning",
            showCancelButton: false,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "確認",
          }).then((result) => {
            // if (result.isConfirmed) {
            //     Swal.fire({
            //         title: "Deleted!",
            //         text: "Your file has been deleted.",
            //         icon: "success"
            //     });
            // }
          });
        }
      });

      //ok_btn_login按鈕監聽
      $("#form_login").click(function(e) {
        e.preventDefault();
        if (flag_username_login && flag_password_login) {
          // 傳遞後段API執行登入行為
          // input: {"username" : "owner7", "password" : }
          var JSONdata = {};
          JSONdata["username"] = $("#username_login").val();
          JSONdata["password"] = $("#password_login").val();
          console.log(JSON.stringify(JSONdata));
          $.ajax({
            type: "POST",
            url: "/cloth_P/member_control_api_v1.php?action=login",
            data: JSON.stringify(JSONdata),
            dataType: "json",
            success: function(res) {
              Swal.fire({
                title: "登入成功",
                icon: "success",
              }).then((result) => {
                if (result.isConfirmed) {
                  setCookie("Uid01", res.data.uid01, 1);
                  location.href = "Tea_SPA.html";
                }
              });
            },
            errpr: function() {
              Swal.fire({
                title: "API介接錯誤?",
                text: "/cloth_P/member_control_api_v1.php?action=login",
                icon: "error",
              });
            },
          });
        } else {
          Swal.fire({
            title: "輸入錯誤!",
            text: "請輸入帳號和密碼!",
            icon: "error",
          });
        }
      });
    });


    function showdata_reg(data) {
      console.log(data);
      if (data.state) {
        Swal.fire({
          title: data.message,
          icon: "success",
        }).then((result) => {
          if (result.isConfirmed) {
            location.href = "Tea_SPA.html";
          }
        });
      } else {
        Swal.fire({
          title: data.message,
          icon: "error",
        });
      }
    }

    function showdata_checkuid(data) {
      console.log(data);
    }

    function showdata_checkuni(data) {
      console.log(data);
      if (data.state) {
        //帳號不存在,可以使用
        $("#username_reg").removeClass("is-invalid");
        $("#username_reg").addClass("is-valid");
        $("#username_reg").siblings(".valid-feedback").text(data.message);
        flag_username_reg = true;
      } else {
        //帳號存在,不可以使用
        $("#username_reg").removeClass("is-valid");
        $("#username_reg").addClass("is-invalid");
        $("#username_reg").siblings(".invalid-feedback").text(data.message);
        flag_username_reg = false;
      }
    }

    //form w3s cookie
    function setCookie(cname, cvalue, exdays) {
      const d = new Date();
      d.setTime(d.getTime() + exdays * 24 * 60 * 60 * 1000);
      let expires = "expires=" + d.toUTCString();
      document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    function getCookie(cname) {
      let name = cname + "=";
      let ca = document.cookie.split(";");
      for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == " ") {
          c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
          return c.substring(name.length, c.length);
        }
      }
      return "";
    }
  </script>
</body>

</html>