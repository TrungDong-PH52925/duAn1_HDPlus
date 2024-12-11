<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Quản trị Admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

 

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  
  <!-- Vendor CSS Files -->
  <link href="public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="public/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="public/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="public/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="public/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="public/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="public/vendor/simple-datatables/style.css" rel="stylesheet">

 
  <link href="public/css/admin.css" rel="stylesheet">
  


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php?act=listdm" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Quản trị Admin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>



    <nav class="header-nav ms-auto">

    </nav>

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.php?act=admin">
          <i class="bi bi-grid"></i>
          <span>Trang Chủ</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed"   href="index.php?act=listdm">
          <i class="bi bi-menu-button-wide"></i><span>Danh mục</span>
        </a>
  
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed"   href="index.php?act=listsp">
          <i class="bi bi-journal-text"></i><span>Sản phẩm</span>
        </a>

      </li>


   

      <li class="nav-item">
        <a class="nav-link collapsed"   href="index.php?act=listbn">
          <i class="bi bi-bar-chart"></i><span>Banner</span>
        </a>
        
      </li>


      <li class="nav-item">
        <a class="nav-link collapsed" href="index.php?act=listbill">
        <i class="fa-solid fa-money-bill"></i>
          <span>Bills</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="index.php">
        <i class="fa-solid fa-right-from-bracket"></i>
          <span>Đăng Xuất</span>
        </a>
      </li>

    </ul>

  </aside>
