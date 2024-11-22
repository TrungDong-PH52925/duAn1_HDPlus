<?php
session_start();
if (isset($_SESSION['error'])) {
    echo "<script>alert('" . $_SESSION['error'] . "');</script>";
    unset($_SESSION['error']);
} elseif (isset($_SESSION['success'])) {
    echo "<script>alert('" . $_SESSION['success'] . "');</script>";
    unset($_SESSION['success']);
}
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <!-- Thư viện FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Thư viện Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Tệp CSS tùy chỉnh -->
    <link rel="stylesheet" href="../../../public/css/login.css">
</head>

<body>
    <header>
        <h2 class="header--title">[Khuyến mại] Thu cũ giá cao toàn bộ sản phẩm - Trợ giá tốt nhất</h2>
        <div class="nav--infomation">
            <ul class="nav--infomation__top">
                <!-- <li class="items"><a href="http://localhost/duAn1_HDPlus/index.php">Trang chủ</a></li>
                <li class="items"><a href="../html/introduce.html">Giới thiệu</a></li>
                <li class="items"><a href="./watched.html">Sản phẩm đã xem</a></li>
                <li class="items"><a href="./guaranteed.html">Trung tâm bảo hành</a></li>
                <li class="items"><a href="#0">Hệ thống 128 siêu thị</a></li>
                <li class="items"><a href="./recruitment.html">Tuyển dụng</a></li>
                <li class="items"><a href="./tracuu.html">Tra cứu</a></li> -->
                <li class="items"><a href="../../../Web/Views/Login/login.php">Đăng Nhập</a></li>
            </ul>
        </div>

        <!-- <nav class="menu--desktop">
            <a href="../index.html" class="logo">
                <img src="public/img/logo.jpg" alt="logo">
            </a>
            <div class="menu--search">
                <input type="text" placeholder="Search...">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
            <a class="menu--check__product " href="./checkoder.html" style="text-decoration: none; color: black;">
                <i class="fa-solid fa-car"></i>
                Kiểm tra đơn hàng
            </a>
            <div class="menu--cart">
                <a href="./cart.html" style="text-decoration: none;">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <span>2</span>
                </a>
            </div>
            <label for="nav--list__check">
                <i class="fa-solid fa-bars"></i>
            </label>
        </nav> -->

        <!-- Menu lựa chọn các sản phẩm -->
         <!-- <nav class="menu--bottom">
            <ul class="menu--choose">
                <li class="item"><a href="html/iphone.html">
                        <div class="img">
                            <img src="public/img/home/hd_mainmenu_icon2.webp" alt="logo">
                            iPhone
                        </div>
                    </a></li>
                <li class="item"><a href="html/samsung.html">
                        <div class="img"><img src="public/img/home/hd_mainmenu_icon3.webp" alt="SAMSUNG"> SAMSUNG</div>
                    </a></li>
                <li class="item"><a href="html/googlePixel.html">
                        <div class="img"><img src="public/img/home/hd_mainmenu_icon4.webp" alt="google">GOOGLE</div>
                    </a></li>
                <li class="item"><a href="html/sony.html">
                        <div class="img"><img src="public/img/home/hd_mainmenu_icon5.webp" alt="sony"> SONY</div>
                    </a></li>
                <li class="item"><a href="html/xiaomi.html">
                        <div class="img"><img src="public/img/home/hd_mainmenu_icon6.webp" alt="xiaomi"> XIAOMI</div>
                    </a></li>
                <li class="item"><a href="html/news.html">
                        <div class="img"><img src="public/img/home/hd_mainmenu_icon10.webp" alt="tin tuc">TIN TỨC</div>
                    </a></li>
            </ul>
        </nav> -->

        <!-- Mobile menu -->
        <!-- <div class="nav--mobile">
            <input type="checkbox" id="nav--list__check" hidden>
            <label for="nav--list__check" class="bg--cover__mobile"></label>
            <ul class="nav--infomation__mobile">
                <li class="tool">
                    <a href="./checkoder.html" class="menu--check__product" title="Kiểm tra đơn hàng">
                        <i class="fa-solid fa-car"></i>
                    </a>
                    <a href="./cart.html" class="menu--cart" title="Giỏ hàng">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <span>2</span>
                    </a>
                </li>
                <li class="items"><a href="../index.html">Trang Chủ</a></li>
                <li class="items"><a href="../html/introduce.html">Giới thiệu</a></li>
                <li class="items"><a href="#0">Sản phẩm đã xem</a></li>
                <li class="items"><a href="./guaranteed.html">Trung tâm bảo hành</a></li>
                <li class="items"><a href="#0">Hệ thống 128 siêu thị</a></li>
                <li class="items"><a href="./recruitment.html">Tuyển dụng</a></li>
                <li class="items"><a href="./tracuu.html">Tra cứu</a></li>
                <li class="items"><a href="#">Đăng Nhập</a></li>
                <div class="close--menu__mobile">
                    <label for="nav--list__check">Đóng</label>
                </div>
            </ul>
            </div> -->
    </header>

<div class="container">

    <div class="login-form">
    <div class="login-bg">
        <img src="../../../public/img/img_login/login-bg.png">
    </div>

    <div class="form">

        <div class="center" style="text-align:center;">
            <h2>Đăng ký tài khoản</h2>
            <p>Chú ý các nội dung có dấu * bạn cần phải nhập</p>

        </div>

        <div id="registerForm" class="hh-form">
            <form method="post" action="../../../index.php?act=dangky" enctype="multipart/form-data">

                <div class="form-controls">
                    <label for="ten_user">Tên người dùng:</label>
                    <div class="controls">
                        <input type="text" id="ten_user" name="ten_user" >
                        <br>
                    </div>
                </div>


                <div class="form-controls">
                    <label for="sdt_user">Số điện thoại:</label>
                    <div class="controls">
                        <input type="text" id="sdt_user" name="sdt_user" ><br>
                    </div>
                </div>


                <div class="form-controls">
                    <label for="gmail_user">Email:</label>
                    <div class="controls">
                        <input type="email" id="gmail_user" name="gmail_user" ><br>
                    </div>
                </div>
        </div>


        <div class="form-controls">
            <label for="account_user">Tài khoản:</label>
            <div class="controls">
                <input type="text" id="account_user" name="account_user" ><br>
            </div>
        </div>

        <div class="form-controls">
            <label for="pass_user">Mật khẩu:</label>
            <div class="controls">
                <input type="password" id="pass_user" name="pass_user" ><br>
            </div>
        </div>

        <div class="form-controls">
            <label for="address_user">Địa chỉ:</label>
            <div class="controls">
                <input type="text" id="address_user" name="address_user" ><br>
            </div>
        </div>
        <div class="form-controls">
            <label for="img_user">Ảnh đại diện:</label>
            <div class="controls">
                <input type="file" id="img_user" name="img_user" accept="image/*"><br>
            </div>
        </div>

        <div class="form-controls">
        <div class="controls submit-controls">
                        <button type="submit"  name="dangky">ĐĂNG KÝ TÀI KHOẢN</button>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
    </div>
    </div>

    <footer class="footer--page">
        <div class="footer--page__container">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <h1>Hỗ Trợ - Dịch Vụ</h1>
                    <ul class="page--suport">
                        <li class="item"><a href="#0">Chính sách và hướng dẫn mua hàng trả góp</a></li>
                        <li class="item"><a href="#0">Hướng dẫn mua hàng và chính sách vận chuyển</a></li>
                        <li class="item"><a href="./tracuu.html">Tra cứu đơn hàng</a></li>
                        <li class="item"><a href="#0">Chính sách đổi mới và bảo hành</a></li>
                        <li class="item"><a href="#0">Dịch vụ bảo hành mở rộng</a></li>
                        <li class="item"><a href="#0">Chính sách bảo mật</a></li>
                        <li class="item"><a href="#0">Chính sách giải quyết khiếu nại</a></li>
                        <li class="item"><a href="#0">Quy chế hoạt động</a></li>
                    </ul>
                </div>
                <!-- end col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <h1>Thông Tin Liên Hệ</h1>
                    <ul class="page--suport">
                        <li class="item"><a href="#0">Thông tin các trang TMĐT</a></li>
                        <li class="item"><a href="#0">Dịch vụ sửa chữa</a></li>
                        <li class="item"><a href="#0">Tra cứu bảo hành</a></li>
                    </ul>
                </div>
                <!-- end col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <h1>Thanh toán miễn phí</h1>
                    <ul class="page--suport">
                        <li class="pay">
                            <div class="logo--pay">
                                <div class="img">
                                    <img src="../img/home/logo-visa.png" alt="">
                                </div>
                                <div class="img">
                                    <img src="../img/home/logo-master.png" alt="">
                                </div>
                            </div>
                        </li>
                        <li class="pay">
                            <div class="logo--pay">
                                <div class="img">
                                    <img src="../img/home/logo-jcb.png" alt="">
                                </div>
                                <div class="img">
                                    <img src="../img/home/logo-samsungpay.png" alt="">
                                </div>
                                </div>
                        </li>
                        <li class="pay">
                            <div class="logo--pay">
                                <div class="img">
                                    <img src="../img/home/logo-atm.png" alt="">
                                </div>
                                <div class="img">
                                    <img src="../img/home/logo-vnpay.png" alt="">
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- end col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="footer-container">
                        <div class="row">
                            <h1>Hình thức vận chuyển</h1>
                            <div class="col-12">
                                <div class="logo--convert">
                                    <div class="img">
                                        <img src="../img/home/nhattin.jpg" alt="">
                                    </div>
                                    <div class="img">
                                        <img src="../img/home/vnpost.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
        </div>
        <div class="Footer--Address">
            <span>&copy; Copyright MyPhone 2024 </span>
        </div>
    </footer>

    <!-- Thư viện FontAwesome JS -->
    <script src="https://kit.fontawesome.com/850c4145ac.js" crossorigin="anonymous"></script>
    <!-- Thư viện Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <!-- Thư viện Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
</body>

</html>