<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- add thư viện -->
    <link rel="stylesheet" href="./public/fonts/fontawesome-free-6.6.0-web/fontawesome-free-6.6.0-web/css/all.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="NEW_SHA-384_HASH_HERE" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="./public/"> -->


    <!-- animation -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href=" https://cdn.rawgit.com/daneden/animate.css/v3.1.0/animate.min.css">

    <!-- add css  -->
    <link rel="stylesheet" href="./public/css/index.css">
    <title>Myphone</title>
</head>

<body>
    <header>
        <h2 class="header--title slide animate__animated animate__fadeInDown">[Khuyến mại] Thu cũ giá cao toàn bộ sản
            phẩm
            - Trợ giá tốt nhất</h2>
        <div class="nav--infomation ">
            <ul class="nav--infomation__top">
                <li class="items"><a href="http://localhost/duAn1_HDPlus/index.php">Trang chủ</a></li>
                <li class="items"><a href="./html/introduce.html">Giới thiệu</a></li>
                <li class="items"><a href="./html/watched.html">Sản phẩm đã xem</a></li>
                <li class="items"><a href="./html/guaranteed.html">Trung tâm bảo hành</a></li>
                <!-- <li class="items"><a href="#0">Hệ thông 128 siêu thị</a></li> -->
                <li class="items"><a href="./html/recruitment.html">Tuyển dụng</a></li>
                <li class="items"><a href="./html/tracuu.html">Tra cứu</a></li>
                <!-- <li class="items"><a href="./html/login.php">Đăng Nhâp</a></li> -->
                <li class="items"><a href="Web/Views/Admin/account/login.php">Đăng Nhâp</a></li>

            </ul>
        </div>

        <nav class="menu--desktop">
            <div class="logo">
                <img src="./public/img/logo.jpg" alt="logo">
            </div>
            <div class="menu--search">
                <input type="text" placeholder="Search...">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
            <a class="menu--check__product " href="./html/checkoder.html" style="text-decoration: none; color: black;">
                <i class="fa-solid fa-car"></i>
                Kiểm tra đơn hàng
            </a>
            <div class="menu--cart">
                <a href="./html/cart.html" style="text-decoration: none;">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <span>2</span>
                </a>
            </div>
            <label for="nav--list__check">
                <i class="fa-solid fa-bars"></i>
            </label>
        </nav>
        <!-- menu lưa chọn các sản phẩm  -->
        <nav class="menu--bottom">
            <ul class="menu--choose">

                <li class="item"><a href="./html/iphone.html">
                        <div class="img">
                            <i class="fa-brands fa-apple"></i>
                            iPhone
                        </div>
                    </a></li>
                <li class="item"><a href="./html/samsung.html">
                        <div class="img"><img src="./public/img/home/hd_mainmenu_icon3.webp" alt="SAMSUNG"> SAMSUNG
                        </div>

                    </a></li>
                <li class="item"><a href="../web bán Điện Thoại/html/googlePixel.html">
                        <div class="img"><img src="./public/img/home/hd_mainmenu_icon4.webp" alt="google">GOOGLE</div>

                    </a></li>
                <li class="item"><a href="./html/sony.html">
                        <div class="img"><img src="./public/img/home/hd_mainmenu_icon5.webp" alt="sony"> SONY</div>

                    </a></li>
                </a></li>
                <li class="item"><a href="./html/xiaomi.html">
                        <div class="img"><img src="./public/img/home/hd_mainmenu_icon6.webp" alt="xiaomi"> XIAOMI</div>

                    </a></li>
                </a></li>
                <li class="item"><a href="./html/news.html">
                        <div class="img"><img src="./public/img/home/hd_mainmenu_icon10.webp" alt="tin tuc">TIN TỨC
                        </div>

                    </a></li>
                </a></li>
            </ul>
        </nav>
        <!-- mobile  -->
        <!-- <div class="nav--mobile">
            <input type="checkbox" id="nav--list__check" hidden>
            <label for="nav--list__check" class="bg--cover__mobile"></label>

            <ul class="nav--infomation__mobile">
                <li class="tool">
                    <a href="#0" class="menu--check__product" title="Kiểm tra đơn hàng">
                        <i class="fa-solid fa-car"></i>
                    </a>
                    <a href="./html/cart.html" class="menu--cart" title="Giỏ hàng">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <span>2</span>
                    </a>
                </li>
                <li class="items"><a href="../index.html">Trang Chủ</a></li>
                <li class="items"><a href="./html/introduce.html">Giới thiệu</a></li>
                <li class="items"><a href="./html/watched.html">Sản phẩm đã xem</a></li>
                <li class="items"><a href="./html/guarantee.html">Trung tâm bảo hành</a></li>
                <li class="items"><a href="#0">Hệ thông 128 siêu thị</a></li>
                <li class="items"><a href="./html/recruitment.html">Tuyển dụng</a></li>
                <li class="items"><a href="./html/tracuu.html">Tra cứu</a></li>
                <li class="items"><a href="./html/login.html">Đăng Nhâp</a></li>

                <div class="close--menu__mobile">
                    <label for="nav--list__check">Đóng</label>
                </div>
            </ul>

        </div> -->