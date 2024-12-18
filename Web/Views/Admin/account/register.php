<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <!-- Thư viện FontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
        integrity="sha384-hzBOifH8TI3YmZjHjPnpxzV7cJIZbRfi6L6KdhopcN4Up9XCBwyDtgxFpjv8bG2z" crossorigin="anonymous" />
    <!-- Thư viện Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Tệp CSS tùy chỉnh -->
    <link rel="stylesheet" href="../../../../public/css/login.css">
</head>

<body>
    <header>
        <h2 class="header--title">[Khuyến mại] Thu cũ giá cao toàn bộ sản phẩm - Trợ giá tốt nhất</h2>
        <div class="nav--infomation">
            <ul class="nav--infomation__top">
                <li class="items"><a href="http://localhost/duAn1_HDPlus/index.php">Trang chủ</a></li>
                <li class="items"><a href="../html/introduce.html">Giới thiệu</a></li>
                <li class="items"><a href="./watched.html">Sản phẩm đã xem</a></li>
                <li class="items"><a href="./guaranteed.html">Trung tâm bảo hành</a></li>
                <li class="items"><a href="#0">Hệ thống 128 siêu thị</a></li>
                <li class="items"><a href="./recruitment.html">Tuyển dụng</a></li>
                <li class="items"><a href="./tracuu.html">Tra cứu</a></li>
                <li class="items"><a href="Web/Views/Admin/account/login.php">Đăng Nhập</a></li>
            </ul>
        </div>

        <nav class="menu--desktop">
            <a href="../index.html" class="logo">
                <img src="../../../../public/img/logo.jpg" alt="logo">
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
        </nav>

        <!-- Menu lựa chọn các sản phẩm -->
        <nav class="menu--bottom">
            <ul class="menu--choose">
                <li class="item"><a href="../../../../html/iphone.html">
                        <div class="img">
                            <img src="../../../../public/img/home/hd_mainmenu_icon2.webp" alt="logo">
                            iPhone
                        </div>
                    </a></li>
                <li class="item"><a href="../../../../html/samsung.html">
                        <div class="img"><img src="../../../../public/img/home/hd_mainmenu_icon3.webp" alt="SAMSUNG"> SAMSUNG</div>
                    </a></li>
                <li class="item"><a href="../../../../html/googlePixel.html">
                        <div class="img"><img src="../../../../public/img/home/hd_mainmenu_icon4.webp" alt="google">GOOGLE</div>
                    </a></li>
                <li class="item"><a href="../../../../html/sony.html">
                        <div class="img"><img src="../../../../public/img/home/hd_mainmenu_icon5.webp" alt="sony"> SONY</div>
                    </a></li>
                <li class="item"><a href="../../../../html/xiaomi.html">
                        <div class="img"><img src="../../../../public/img/home/hd_mainmenu_icon6.webp" alt="xiaomi"> XIAOMI</div>
                    </a></li>
                <li class="item"><a href="../../../../html/news.html">
                        <div class="img"><img src="../../../../public/img/home/hd_mainmenu_icon10.webp" alt="tin tuc">TIN TỨC</div>
                    </a></li>
            </ul>
        </nav>

        <!-- Mobile menu -->
        <div class="nav--mobile">
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
                <li class="items"><a href="#0">Đăng Nhập</a></li>
                <div class="close--menu__mobile">
                    <label for="nav--list__check">Đóng</label>
                </div>
            </ul>
        </div>
    </header>

    <div class="container">

        <div class="login-form">
            <div class="login-bg">
                <img src="../../../../public/img/img_login/login-bg.png">
            </div>

            <div class="form">

                <div class="center" style="text-align:center;">
                    <h2>Đăng ký tài khoản</h2>
                    <p>Chú ý các nội dung có dấu * bạn cần phải nhập</p>

                </div>

                <div id="registerForm" class="hh-form">
                    <form method="post" action="index.php?act=dangky" data-gtm-form-interact-id="0">
                        <input type="hidden" name="ReturnUrl">
                        <input name="__RequestVerificationToken" type="hidden"
                            value="q2QQ_N-9EohSs1DQibTUMNycEGI99tgdDrDonQQ9fJILdZ8a2B2pgDz5aCIm9dU9s9JWmMQHWzWNrKIvcMmSqcWBjP01">

                        <div class="form-controls">
                            <label>Tài khoản:</label>
                            <div class="controls">
                                <input type="text" name="UserName" id="UserName" placeholder="Tài khoản *"
                                    data-required="1" fdprocessedid="2xwqth">
                            </div>
                        </div>


                        <div class="form-controls">
                            <label>Họ tên:</label>
                            <div class="controls">
                                <input type="text" name="Title" id="Title" placeholder="Họ tên *" data-required="1"
                                    fdprocessedid="2pj6ld">
                            </div>
                        </div>


                        <div class="form-controls">
                            <label>Mật khẩu:</label>
                            <div class="controls">
                                <input type="text" name="PasswordHash" id="PasswordHash" placeholder="Mật khẩu *"
                                    data-required="1" fdprocessedid="amj17j">
                            </div>
                        </div>


                        <div class="form-controls">
                            <label>Nhập lại mật khẩu:</label>
                            <div class="controls">
                                <input type="text" name="SecurityStamp" id="SecurityStamp"
                                    placeholder="Nhập lại mật khẩu *" data-required="1" fdprocessedid="i5kvl">
                            </div>
                        </div>

                        <div class="form-controls">
                            <label>Email:</label>
                            <div class="controls">
                                <input type="text" name="Email" id="Email" placeholder="Email *" data-required="1"
                                    fdprocessedid="0kri4c">
                            </div>
                        </div>

                        <div class="form-controls">
                            <label>Giới tính:</label>
                            <div class="controls">
                                <label class="radio-ctn">
                                    <input type="radio" name="Sex" value="true" data-gtm-form-interact-field-id="0">
                                    <span class="checkmark"></span>
                                    <span><strong>Nam</strong></span>
                                </label>

                                <label class="radio-ctn">
                                    <input type="radio" name="Sex" value="false" data-gtm-form-interact-field-id="1">
                                    <span class="checkmark"></span>
                                    <span><strong>Nữ</strong></span>
                                </label>
                            </div>
                        </div>


                        <div class="form-controls">
                            <label>Ngày tháng năm sinh:</label>
                            <div class="controls">
                                <input type="text" value="" name="UserBirthDate" id="UserBirthDate"
                                    placeholder="Ngày tháng năm sinh" fdprocessedid="wapzqi">
                            </div>
                        </div>


                        <div class="form-controls">
                            <label>Điện thoại:</label>
                            <div class="controls">
                                <input type="tel" name="PhoneNumber" id="PhoneNumber" placeholder="Điện thoại *"
                                    data-required="1" fdprocessedid="bedfej">
                            </div>
                        </div>

                        <div class="form-controls">
                            <label>Địa chỉ:</label>
                            <div class="controls">
                                <input type="text" name="Address" id="Address" placeholder="Địa chỉ *" data-required="1"
                                    fdprocessedid="siici">
                            </div>
                        </div>

                        <div class="form-controls">
                            <label>Tỉnh/Thành phố:</label>
                            <div class="controls">
                                <select name="SystemCityID" id="SystemCityID" placeholder="Tỉnh/Thành phố"
                                    fdprocessedid="tkvkn8">
                                    <option value="">Chọn tỉnh/thành phố</option>
                                    <option value="1">Hà Nội</option>
                                    <option value="50">TP HCM</option>
                                    <option value="57">An Giang</option>
                                    <option value="49">Bà Rịa - Vũng Tàu</option>
                                    <option value="15">Bắc Giang</option>
                                    <option value="4">Bắc Kạn</option>
                                    <option value="62">Bạc Liêu</option>
                                    <option value="18">Bắc Ninh</option>
                                    <option value="53">Bến Tre</option>
                                    <option value="35">Bình Định</option>
                                    <option value="47">Bình Dương</option>
                                    <option value="45">Bình Phước</option>
                                    <option value="39">Bình Thuận</option>
                                    <option value="63">Cà Mau</option>
                                    <option value="59">Cần Thơ</option>
                                    <option value="3">Cao Bằng</option>
                                    <option value="32">Đà Nẵng</option>
                                    <option value="42">Đắk Lắk</option>
                                    <option value="43">Đắk Nông</option>
                                    <option value="7">Điện Biên</option>
                                    <option value="48">Đồng Nai</option>
                                    <option value="56">Đồng Tháp</option>
                                    <option value="41">Gia Lai</option>
                                    <option value="2">Hà Giang</option>
                                    <option value="23">Hà Nam</option>
                                    <option value="28">Hà Tĩnh</option>
                                    <option value="19">Hải Dương</option>
                                    <option value="20">Hải Phòng</option>
                                    <option value="60">Hậu Giang</option>
                                    <option value="11">Hoà Bình</option>
                                    <option value="21">Hưng Yên</option>
                                    <option value="37">Khánh Hòa</option>
                                    <option value="58">Kiên Giang</option>
                                    <option value="40">Kon Tum</option>
                                    <option value="8">Lai Châu</option>
                                    <option value="44">Lâm Đồng</option>
                                    <option value="13">Lạng Sơn</option>
                                    <option value="6">Lào Cai</option>
                                    <option value="51">Long An</option>
                                    <option value="24">Nam Định</option>
                                    <option value="27">Nghệ An</option>
                                    <option value="25">Ninh Bình</option>
                                    <option value="38">Ninh Thuận</option>
                                    <option value="16">Phú Thọ</option>
                                    <option value="36">Phú Yên</option>
                                    <option value="29">Quảng Bình</option>
                                    <option value="33">Quảng Nam</option>
                                    <option value="34">Quảng Ngãi</option>
                                    <option value="14">Quảng Ninh</option>
                                    <option value="30">Quảng Trị</option>
                                    <option value="61">Sóc Trăng</option>
                                    <option value="9">Sơn La</option>
                                    <option value="46">Tây Ninh</option>
                                    <option value="22">Thái Bình</option>
                                    <option value="12">Thái Nguyên</option>
                                    <option value="26">Thanh Hóa</option>
                                    <option value="31">Thừa Thiên Huế</option>
                                    <option value="52">Tiền Giang</option>
                                    <option value="54">Trà Vinh</option>
                                    <option value="5">Tuyên Quang</option>
                                    <option value="55">Vĩnh Long</option>
                                    <option value="17">Vĩnh Phúc</option>
                                    <option value="10">Yên Bái</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-controls">
                            <label>Quận/Huyện:</label>
                            <div class="controls">
                                <select id="SystemDistrictID" name="SystemDistrictID" placeholder="Quận/Huyện *"
                                    data-required="1" fdprocessedid="ihz7no">

                                    <option value="">Quận/Huyện</option>
                                    <script type="text/javascript">
                                        var currentIsDelivery = 1;
                                        var isCOD = $("input[name='OrderPayTypeID']:checked").val();
                                        isCOD = (isCOD) ? isCOD : 1;

                                        if (isInCheckDelivery) {
                                            if (!currentIsDelivery && isCOD == 1) {
                                                $("#IsDelivery").show();
                                                $(".shInfo").hide();
                                            } else {
                                                $("#IsDelivery").hide();
                                                $(".shInfo").show();
                                            }
                                        }
                                    </script>
                                </select>
                            </div>
                        </div>

                        <div class="form-controls">
                            <div class="controls submit-controls">
                                <button type="submit" fdprocessedid="9pthyo">ĐĂNG KÝ TÀI KHOẢN</button>
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