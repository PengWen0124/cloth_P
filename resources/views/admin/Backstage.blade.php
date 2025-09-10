<!DOCTYPE html>
<html lang="zh-Hant">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>後臺管理</title>
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="/public/css/style.css" />
  <link rel="stylesheet" href="/public/css/css01.css" />
</head>

<body>
  <div class="wrapper">
    <aside id="sidebar" class="js-sidebar">
      <!-- Content For Sidebar -->
      <div class="h-100">
        <div class="sidebar-logo">
          <a href="#">My Wear</a>
        </div>
        <ul class="sidebar-nav">
          <li class="sidebar-item">
            <a
              href="#"
              data-load="front_page.html"
              data-target="#content"
              class="sidebar-link">
              <i class="fa-solid fa-list pe-2"></i>
              首頁
            </a>
          </li>
          <li class="sidebar-item">
            <a
              href="#"
              class="sidebar-link collapsed"
              data-bs-target="#pages"
              data-bs-toggle="collapse"
              aria-expanded="false"><i class="fa-solid fa-file-lines pe-2"></i>
              會員資料
            </a>
            <ul
              id="pages"
              class="sidebar-dropdown list-unstyled collapse"
              data-bs-parent="#sidebar">
              <li class="sidebar-item">
                <a href="#" class="sidebar-link">會員紀錄</a>
              </li>
              <li class="sidebar-item">
                <a href="#" class="sidebar-link">新增會員</a>
              </li>
            </ul>
          </li>
          <li class="sidebar-item">
            <a
              href="#"
              class="sidebar-link collapsed"
              data-bs-target="#posts"
              data-bs-toggle="collapse"
              aria-expanded="false"><i class="fa-solid fa-sliders pe-2"></i>
              商品管理
            </a>
            <ul
              id="posts"
              class="sidebar-dropdown list-unstyled collapse"
              data-bs-parent="#sidebar">
              <li class="sidebar-item">
                <a href="#" class="sidebar-link">商品欄</a>
              </li>
              <li class="sidebar-item">
                <a href="#" class="sidebar-link">新增商品</a>
              </li>
              <li class="sidebar-item">
                <a href="#" class="sidebar-link">未開發</a>
              </li>
            </ul>
          </li>
          <li class="sidebar-item">
            <a
              href="#"
              class="sidebar-link collapsed"
              data-bs-target="#auth"
              data-bs-toggle="collapse"
              aria-expanded="false"><i class="fa-regular fa-user pe-2"></i>
              訂單管理
            </a>
            <ul
              id="auth"
              class="sidebar-dropdown list-unstyled collapse"
              data-bs-parent="#sidebar">
              <li class="sidebar-item">
                <a href="#" class="sidebar-link">訂單紀錄</a>
              </li>
              <li class="sidebar-item">
                <a href="#" class="sidebar-link">新增訂單</a>
              </li>
              <li class="sidebar-item">
                <a href="#" class="sidebar-link">未開發</a>
              </li>
            </ul>
          </li>
          <li class="sidebar-item">
            <a
              href="#"
              class="sidebar-link collapsed"
              data-bs-target="#settings"
              data-bs-toggle="collapse"
              aria-expanded="false"><i class="fa-regular fa-user pe-2"></i>
              使用者管理
            </a>
            <ul
              id="settings"
              class="sidebar-dropdown list-unstyled collapse"
              data-bs-parent="#sidebar">
              <li class="sidebar-item">
                <a href="#" class="sidebar-link">帳號資訊</a>
              </li>
              <li class="sidebar-item">
                <a href="#" class="sidebar-link">帳號設定</a>
              </li>
              <li class="sidebar-item">
                <a href="#" class="sidebar-link">登出</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </aside>
    <div class="main">
      <nav class="navbar sticky-top bg-white border-bottom shadow-sm">
  <div class="container-fluid">
    <h5 class="mb-0">後臺首頁</h5>
    <ol class="breadcrumb mb-0">
      <li class="breadcrumb-item"><a href="#">首頁</a></li>
      <li class="breadcrumb-item active" aria-current="page">儀表板</li>
    </ol>
  </div>
</nav>






<!-- 整個頁面容器，使用 Flexbox 垂直佈局，確保元素從上到下排列 -->
<div class="d-flex flex-column min-vh-100">
  
  <!-- 主要內容區域，flex-grow-1 使其佔據剩餘空間 -->
  <div id="content" class="flex-grow-1"></div>

<div class="app-content pt-3">
  <!--begin::Container-->
  <div class="container-fluid">
    <!--begin::Row-->
    <div class="row">
      <!--begin::Col-->
      <div class="col-lg-3 col-6">
        <!--begin::Small Box Widget 1-->
        <div class="small-box text-bg-primary">
          <div class="inner">
            <h3>150</h3>
            <p>New Orders</p>
          </div>
          <svg
            class="small-box-icon"
            fill="currentColor"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
            aria-hidden="true">
            <path
              d="M2.25 2.25a.75.75 0 000 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 00-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 000-1.5H5.378A2.25 2.25 0 017.5 15h11.218a.75.75 0 00.674-.421 60.358 60.358 0 002.96-7.228.75.75 0 00-.525-.965A60.864 60.864 0 005.68 4.509l-.232-.867A1.875 1.875 0 003.636 2.25H2.25zM3.75 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM16.5 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z"></path>
          </svg>
          <a
            href="#"
            class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
            More info <i class="bi bi-link-45deg"></i>
          </a>
        </div>
        <!--end::Small Box Widget 1-->
      </div>
      <!--end::Col-->
      <div class="col-lg-3 col-6">
        <!--begin::Small Box Widget 2-->
        <div class="small-box text-bg-success">
          <div class="inner">
            <h3>53<sup class="fs-5">%</sup></h3>
            <p>Bounce Rate</p>
          </div>
          <svg
            class="small-box-icon"
            fill="currentColor"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
            aria-hidden="true">
            <path
              d="M18.375 2.25c-1.035 0-1.875.84-1.875 1.875v15.75c0 1.035.84 1.875 1.875 1.875h.75c1.035 0 1.875-.84 1.875-1.875V4.125c0-1.036-.84-1.875-1.875-1.875h-.75zM9.75 8.625c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-.75a1.875 1.875 0 01-1.875-1.875V8.625zM3 13.125c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v6.75c0 1.035-.84 1.875-1.875 1.875h-.75A1.875 1.875 0 013 19.875v-6.75z"></path>
          </svg>
          <a
            href="#"
            class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
            More info <i class="bi bi-link-45deg"></i>
          </a>
        </div>
        <!--end::Small Box Widget 2-->
      </div>
      <!--end::Col-->
      <div class="col-lg-3 col-6">
        <!--begin::Small Box Widget 3-->
        <div class="small-box text-bg-warning">
          <div class="inner">
            <h3>44</h3>
            <p>User Registrations</p>
          </div>
          <svg
            class="small-box-icon"
            fill="currentColor"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
            aria-hidden="true">
            <path
              d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z"></path>
          </svg>
          <a
            href="#"
            class="small-box-footer link-dark link-underline-opacity-0 link-underline-opacity-50-hover">
            More info <i class="bi bi-link-45deg"></i>
          </a>
        </div>
        <!--end::Small Box Widget 3-->
      </div>
      <!--end::Col-->
      <div class="col-lg-3 col-6">
        <!--begin::Small Box Widget 4-->
        <div class="small-box text-bg-danger">
          <div class="inner">
            <h3>65</h3>
            <p>Unique Visitors</p>
          </div>
          <svg
            class="small-box-icon"
            fill="currentColor"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
            aria-hidden="true">
            <path
              clip-rule="evenodd"
              fill-rule="evenodd"
              d="M2.25 13.5a8.25 8.25 0 018.25-8.25.75.75 0 01.75.75v6.75H18a.75.75 0 01.75.75 8.25 8.25 0 01-16.5 0z"></path>
            <path
              clip-rule="evenodd"
              fill-rule="evenodd"
              d="M12.75 3a.75.75 0 01.75-.75 8.25 8.25 0 018.25 8.25.75.75 0 01-.75.75h-7.5a.75.75 0 01-.75-.75V3z"></path>
          </svg>
          <a
            href="#"
            class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
            More info <i class="bi bi-link-45deg"></i>
          </a>
        </div>
        <!--end::Small Box Widget 4-->
      </div>
      <!--end::Col-->
    </div>
    <!--end::Row-->
    <!--begin::Row-->
    <div class="row">
      <!-- Start col -->
      <div class="col-lg-7 connectedSortable">
        <div class="card mb-4">
          <div class="card-header">
            <h3 class="card-title">Sales Value</h3>
          </div>
          <div class="card-body">
            <div id="revenue-chart"></div>
          </div>
        </div>
        <!-- /.card -->
        <!-- DIRECT CHAT -->
        <div class="card direct-chat direct-chat-primary mb-4">
          <div class="card-header">
            <h3 class="card-title">Direct Chat</h3>
            <div class="card-tools">
              <span title="3 New Messages" class="badge text-bg-primary"> 3 </span>
              <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse">
                <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
              </button>
              <button
                type="button"
                class="btn btn-tool"
                title="Contacts"
                data-lte-toggle="chat-pane">
                <i class="bi bi-chat-text-fill"></i>
              </button>
              <button type="button" class="btn btn-tool" data-lte-toggle="card-remove">
                <i class="bi bi-x-lg"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <!-- Conversations are loaded here -->
            <div class="direct-chat-messages">
              <!-- Message. Default to the start -->
              <div class="direct-chat-msg">
                <div class="direct-chat-infos clearfix">
                  <span class="direct-chat-name float-start"> Alexander Pierce </span>
                  <span class="direct-chat-timestamp float-end"> 23 Jan 2:00 pm </span>
                </div>
                <!-- /.direct-chat-infos -->
                <img
                  class="direct-chat-img"
                  src="./assets/img/user1-128x128.jpg"
                  alt="message user image" />
                <!-- /.direct-chat-img -->
                <div class="direct-chat-text">
                  Is this template really for free? That's unbelievable!
                </div>
                <!-- /.direct-chat-text -->
              </div>
              <!-- /.direct-chat-msg -->
              <!-- Message to the end -->
              <div class="direct-chat-msg end">
                <div class="direct-chat-infos clearfix">
                  <span class="direct-chat-name float-end"> Sarah Bullock </span>
                  <span class="direct-chat-timestamp float-start"> 23 Jan 2:05 pm </span>
                </div>
                <!-- /.direct-chat-infos -->
                <img
                  class="direct-chat-img"
                  src="./assets/img/user3-128x128.jpg"
                  alt="message user image" />
                <!-- /.direct-chat-img -->
                <div class="direct-chat-text">You better believe it!</div>
                <!-- /.direct-chat-text -->
              </div>
              <!-- /.direct-chat-msg -->
              <!-- Message. Default to the start -->
              <div class="direct-chat-msg">
                <div class="direct-chat-infos clearfix">
                  <span class="direct-chat-name float-start"> Alexander Pierce </span>
                  <span class="direct-chat-timestamp float-end"> 23 Jan 5:37 pm </span>
                </div>
                <!-- /.direct-chat-infos -->
                <img
                  class="direct-chat-img"
                  src="./assets/img/user1-128x128.jpg"
                  alt="message user image" />
                <!-- /.direct-chat-img -->
                <div class="direct-chat-text">
                  Working with AdminLTE on a great new app! Wanna join?
                </div>
                <!-- /.direct-chat-text -->
              </div>
              <!-- /.direct-chat-msg -->
              <!-- Message to the end -->
              <div class="direct-chat-msg end">
                <div class="direct-chat-infos clearfix">
                  <span class="direct-chat-name float-end"> Sarah Bullock </span>
                  <span class="direct-chat-timestamp float-start"> 23 Jan 6:10 pm </span>
                </div>
                <!-- /.direct-chat-infos -->
                <img
                  class="direct-chat-img"
                  src="./assets/img/user3-128x128.jpg"
                  alt="message user image" />
                <!-- /.direct-chat-img -->
                <div class="direct-chat-text">I would love to.</div>
                <!-- /.direct-chat-text -->
              </div>
              <!-- /.direct-chat-msg -->
            </div>
            <!-- /.direct-chat-messages-->
            <!-- Contacts are loaded here -->
            <div class="direct-chat-contacts">
              <ul class="contacts-list">
                <li>
                  <a href="#">
                    <img
                      class="contacts-list-img"
                      src="./assets/img/user1-128x128.jpg"
                      alt="User Avatar" />
                    <div class="contacts-list-info">
                      <span class="contacts-list-name">
                        Count Dracula
                        <small class="contacts-list-date float-end"> 2/28/2023 </small>
                      </span>
                      <span class="contacts-list-msg"> How have you been? I was... </span>
                    </div>
                    <!-- /.contacts-list-info -->
                  </a>
                </li>
                <!-- End Contact Item -->
                <li>
                  <a href="#">
                    <img
                      class="contacts-list-img"
                      src="./assets/img/user7-128x128.jpg"
                      alt="User Avatar" />
                    <div class="contacts-list-info">
                      <span class="contacts-list-name">
                        Sarah Doe
                        <small class="contacts-list-date float-end"> 2/23/2023 </small>
                      </span>
                      <span class="contacts-list-msg"> I will be waiting for... </span>
                    </div>
                    <!-- /.contacts-list-info -->
                  </a>
                </li>
                <!-- End Contact Item -->
                <li>
                  <a href="#">
                    <img
                      class="contacts-list-img"
                      src="./assets/img/user3-128x128.jpg"
                      alt="User Avatar" />
                    <div class="contacts-list-info">
                      <span class="contacts-list-name">
                        Nadia Jolie
                        <small class="contacts-list-date float-end"> 2/20/2023 </small>
                      </span>
                      <span class="contacts-list-msg"> I'll call you back at... </span>
                    </div>
                    <!-- /.contacts-list-info -->
                  </a>
                </li>
                <!-- End Contact Item -->
                <li>
                  <a href="#">
                    <img
                      class="contacts-list-img"
                      src="./assets/img/user5-128x128.jpg"
                      alt="User Avatar" />
                    <div class="contacts-list-info">
                      <span class="contacts-list-name">
                        Nora S. Vans
                        <small class="contacts-list-date float-end"> 2/10/2023 </small>
                      </span>
                      <span class="contacts-list-msg"> Where is your new... </span>
                    </div>
                    <!-- /.contacts-list-info -->
                  </a>
                </li>
                <!-- End Contact Item -->
                <li>
                  <a href="#">
                    <img
                      class="contacts-list-img"
                      src="./assets/img/user6-128x128.jpg"
                      alt="User Avatar" />
                    <div class="contacts-list-info">
                      <span class="contacts-list-name">
                        John K.
                        <small class="contacts-list-date float-end"> 1/27/2023 </small>
                      </span>
                      <span class="contacts-list-msg"> Can I take a look at... </span>
                    </div>
                    <!-- /.contacts-list-info -->
                  </a>
                </li>
                <!-- End Contact Item -->
                <li>
                  <a href="#">
                    <img
                      class="contacts-list-img"
                      src="./assets/img/user8-128x128.jpg"
                      alt="User Avatar" />
                    <div class="contacts-list-info">
                      <span class="contacts-list-name">
                        Kenneth M.
                        <small class="contacts-list-date float-end"> 1/4/2023 </small>
                      </span>
                      <span class="contacts-list-msg"> Never mind I found... </span>
                    </div>
                    <!-- /.contacts-list-info -->
                  </a>
                </li>
                <!-- End Contact Item -->
              </ul>
              <!-- /.contacts-list -->
            </div>
            <!-- /.direct-chat-pane -->
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <form action="#" method="post">
              <div class="input-group">
                <input
                  type="text"
                  name="message"
                  placeholder="Type Message ..."
                  class="form-control" />
                <span class="input-group-append">
                  <button type="button" class="btn btn-primary">Send</button>
                </span>
              </div>
            </form>
          </div>
          <!-- /.card-footer-->
        </div>
        <!-- /.direct-chat -->
      </div>
      <!-- /.Start col -->
      <!-- Start col -->
      <div class="col-lg-5 connectedSortable">
        <div class="card text-white bg-primary bg-gradient border-primary mb-4">
          <div class="card-header border-0">
            <h3 class="card-title">Sales Value</h3>
            <div class="card-tools">
              <button
                type="button"
                class="btn btn-primary btn-sm"
                data-lte-toggle="card-collapse">
                <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <div id="world-map" style="height: 220px"></div>
          </div>
          <div class="card-footer border-0">
            <!--begin::Row-->
            <div class="row">
              <div class="col-4 text-center">
                <div id="sparkline-1" class="text-dark"></div>
                <div class="text-white">Visitors</div>
              </div>
              <div class="col-4 text-center">
                <div id="sparkline-2" class="text-dark"></div>
                <div class="text-white">Online</div>
              </div>
              <div class="col-4 text-center">
                <div id="sparkline-3" class="text-dark"></div>
                <div class="text-white">Sales</div>
              </div>
            </div>
            <!--end::Row-->
          </div>
        </div>
      </div>
      <!-- /.Start col -->
    </div>
    <!-- /.row (main row) -->
  </div>
  <!--end::Container-->
</div>


  <!-- 頁腳區域 -->
  <footer class="footer">
    
    <!-- 包裹頁腳內容的容器，使用 Bootstrap 的 container-fluid 使其寬度擴展到整個頁面 -->
    <div class="container-fluid">
      
      <!-- Bootstrap 的 row 來設置列，text-muted 顯示淡化的顏色，並使用 text-start 讓文字對齊左側 -->
      <div class="row text-muted">
        
        <!-- 設置一個 6 等寬列，使用 col-6，並將文字對齊左側 -->
        <div class="text-start">
          
          <!-- 段落標籤，去掉底部邊距 -->
          <p class="mb-0">
            <!-- 超鏈接，使用 text-muted 來設置灰色文字顏色 -->
            <a href="#" class="text-muted">
              <!-- 加粗文字 -->
              <strong>全端網頁程式設計青年專班第01期(2025/06/30~2025/09/19)</strong>
            </a>
          </p>
        </div>

      </div>
    </div>
  </footer>
</div>

    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="/public/js/jquery-3.7.1.min.js"></script>
  <script src="/public/js/script.js"></script>
  <script src="/public/js/admin.js"></script>

  <script>
    $(document).ready(function() {
      //
      $("#front_page").click(function(e) {
        e.preventDefault();
        $("#content").load("front_page.html");
      });

      // Add this block to handle "首頁" link click
      $("a:contains('首頁')").click(function(e) {
        e.preventDefault();
        $("#content").load("front_page.html");
      });

      // Add this block to handle "會員紀錄" link click
      $("a:contains('會員紀錄')").click(function(e) {
        e.preventDefault();
        $("#content").load("member.html");
      });

      // Add this block to handle "新增會員" link click         
      $("a:contains('新增會員')").click(function(e) {
        e.preventDefault();
        $("#content").load("add_member.html");
      });

      // Add this block to handle "商品" link click         
      $("a:contains('商品欄')").click(function(e) {
        e.preventDefault();
        $("#content").load("product.html");
      });

      // Add this block to handle "新增商品" link click         
      $("a:contains('新增商品')").click(function(e) {
        e.preventDefault();
        $("#content").load("add_product.html");
      });

      // Add this block to handle "訂單紀錄" link click         
      $("a:contains('訂單紀錄')").click(function(e) {
        e.preventDefault();
        $("#content").load("orders.html");
      });

      // Add this block to handle "新增訂單" link click         
      $("a:contains('新增訂單')").click(function(e) {
        e.preventDefault();
        $("#content").load("add_orders.html");
      });

      //管理者頁面~~
      // Add this block to handle "帳號資訊" link click
      $("#ManagerInfoLink").click(function(e) {
        e.preventDefault();
        $("#content").load("Manager.html");
      });

      // Add this block to handle "設定" link click
      $("#Manager_settingLink").click(function(e) {
        e.preventDefault();
        $("#content").load("Manager_setting.html");
      });
    });
  </script>
</body>

</html>