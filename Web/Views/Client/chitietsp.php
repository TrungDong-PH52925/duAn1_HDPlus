<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- add thư viện -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"crossorigin="anonymous" />
    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"crossorigin="anonymous">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- animation -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href=" https://cdn.rawgit.com/daneden/animate.css/v3.1.0/animate.min.css">

    <!-- add css  -->
    <link rel="stylesheet" href="public/css/phone.css">
    <link rel="stylesheet" href="public/css/index.css">
    <link rel="stylesheet" href="public/css/product.css">
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
                <?php
                if (isset($_SESSION['username']) && ($_SESSION['username'] != "")) {
                    echo '<li class="items"><a href="index.php?act=userinfo">' . $_SESSION['username'] . '</a></li>';
                } else {
                ?>
                    <li class="items"><a href="../../../duAn1_HDPlus/Web/Views/Login/login.php">Đăng Nhâp</a></li>
                <?php } ?>
                <?php if (isset($_SESSION['username'])): ?>
                    <li class="items"><a href="index.php?act=logout">Đăng xuất</a></li>
                <?php endif; ?>

            </ul>
        </div>

        <nav class="menu--desktop">
            <div class="logo">
                <img src="public/img/logo.jpg" alt="logo">
            </div>
            <div class="menu--search">/-strong/-heart:>:o:-((:-h <input type="text" placeholder="Search...">
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

                <li class="item"><a href="html/iphone.html">
                        <div class="img">
                            <i class="fa-brands fa-apple"></i>
                            iPhone
                        </div>
                    </a></li>
                <li class="item"><a href="html/samsung.html">
                        <div class="img"><img src="public/img/home/hd_mainmenu_icon3.webp" alt="SAMSUNG"> SAMSUNG
                        </div>

                    </a></li>
                <li class="item"><a href="../web bán Điện Thoại/html/googlePixel.html">
                        <div class="img"><img src="public/img/home/hd_mainmenu_icon4.webp" alt="google">GOOGLE</div>

                    </a></li>
                <li class="item"><a href="html/sony.html">
                        <div class="img"><img src="public/img/home/hd_mainmenu_icon5.webp" alt="sony"> SONY</div>

                    </a></li>
                </a></li>
                <li class="item"><a href="html/xiaomi.html">
                        <div class="img"><img src="public/img/home/hd_mainmenu_icon6.webp" alt="xiaomi"> XIAOMI</div>

                    </a></li>
                </a></li>
                <li class="item"><a href="html/news.html">
                        <div class="img"><img src="public/img/home/hd_mainmenu_icon10.webp" alt="tin tuc">TIN TỨC
                        </div>

                    </a></li>
                </a></li>
            </ul>
        </nav>
        
</header>
    <div class="nameProduct">
        <?php 
            extract($sanPhamCt);
        ?>
        <h1><?=$ten_sanpham?></h1>
        <p>Thương hiệu : <span>iPhone</b></p>
    </div>
    <div class="container--product">
        <div class="row">
            <div class="col-6"> 
                <div class="imgProduct">
                    <?php
                 echo  ' <img src="'.$img_sanpham.'" alt="" width:200px>';
                    ?>
                </div>
            </div>
            <div class="col-6">
            <h5>Giá sản phẩm:</h5>/-strong/-heart:>:o:-((:-h <div class="Product-price">
                    <b><?=number_format($gia_sanpham, 0, ',', '.')?> đ</b>
                    <h5 style="color: red;"><s><?php echo number_format($giamgia_sanpham, 0, ',', '.') ?></s> đ </h5>      
                </div>
                
                <div class="Product-des">
                    <h3>Mô tả:</h3><b><?=$mota_sanpham?></b>
                </div>
                <!-- <div class="chooseProduct">
                    <p>uùng Lượng :</p>
                    <select class="choose">
                        <option value="">5GB</option>
                        <option value="">10GB</option>
                        <option value="">150GB</option>
                    </select>
                </div>
                <div class="colorProduct">
                    <p>Màu sắc :</p>
                    <select class="choose">
                        <option value="">xanh</option>
                        <option value="">tím</option>
                        <option value="">đỏ</option>
                    </select>
                </div> -->
                <div class="btnProduct">
                    <button>Thêm Vào Giỏ Hàng</button>
                </div>
                <div class="installment">
                    <button>TRẢ GÓP 0%</button>
                    <button>TRẢ GÓP QUA THẺ</button>

                </div>
                <div class="btnProduct">
                    <button type="button" data-toggle="modal" data-target="#specsModal">Xem Cấu
                        Hình chi Tiết ...</button>
                </div>
            </div>
        </div>
    </div>

    <!-- The Modal -->
    <div class="modal fade" id="specsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thông Số Kỹ Thuật</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h6>Thân Máy</h6>
                    <ul>
                        <li>Kích Thước: 160.8 x 78.1 x 7.7 mm (6.33 x 3.07 x 0.30 in)</li>
                        <li>Khối Lượng: 240 g (8.47 oz)</li>
                        <li>SIM: Single SIM hoặc Dual SIM</li>
                    </ul>

                    <h6>Màn hình</h6>
                    <ul>
                        <li>Công nghệ: Super Retina XDR OLED, 120Hz, HDR10, Dolby Vision, 1000 nits (typ), 1200 nits
                            (peak)</li>
                        <li>Độ phân giải: 1284 x 2778 pixels, 19.5:9 ratio (~458 ppi density)</li>/-strong/-heart:>:o:-((:-h <li>Kích thước: 6.7 inches, 109.8 cm² (~87.4% screen-to-body ratio)</li>
                        <li>Bảo vệ: Scratch-resistant ceramic glass, oleophobic coating</li>
                        <li>Wide color gamut</li>
                        <li>True-tone</li>
                    </ul>

                    <h6>Hệ điều hành - CPU</h6>
                    <ul>
                        <li>Hệ điều hành: iOS 15</li>
                        <li>Chipset: Apple A15 Bionic (5 nm)</li>
                        <li>Hiệu suất CPU: Hexa-core (2x3.22 GHz + 4xX.X GHz)</li>
                        <li>Đồ họa (GPU): Apple GPU (5-core graphics)</li>
                    </ul>

                    <h6>Bộ nhớ máy</h6>
                    <ul>
                        <li>Ram: 6GB</li>
                        <li>Bộ nhớ trong: 128GB, 256GB, 512GB, 1TB</li>
                        <li>Thẻ nhớ ngoài: Không hỗ trợ</li>
                    </ul>

                    <h6>Camera sau</h6>
                    <ul>
                        <li>Độ phân giải: 12 MP, f/1.5, 26mm (wide), 1.9µm, dual pixel PDAF, sensor-shift OIS</li>
                        <li>12 MP, f/2.8, 77mm (telephoto), PDAF, OIS, 3x optical zoom</li>
                        <li>12 MP, f/1.8, 13mm, 120˚ (ultrawide), PDAF</li>
                        <li>TOF 3D LiDAR scanner (depth)</li>
                        <li>Tính năng: Dual-LED dual-tone flash, HDR (photo/panorama)</li>
                        <li>Quay video: 4K@24/30/60fps, 1080p@30/60/120/240fps, 10‑bit HDR, Dolby Vision HDR (up to
                            60fps), ProRes, Cinematic mode, stereo sound rec.</li>
                    </ul>

                    <h6>Camera trước</h6>
                    <ul>
                        <li>Độ phân giải: 12 MP, f/2.2, 23mm (wide), 1/3.6"</li>
                        <li>SL 3D, (depth/biometrics sensor)</li>
                        <li>Tính năng: HDR</li>
                        <li>Quay video: 4K@24/25/30/60fps, 1080p@30/60/120fps, gyro-EIS</li>
                    </ul>

                    <h6>Pin & sạc</h6>
                    <ul>
                        <li>Dung lượng: 4373 mAh battery</li>
                        <li>Loại pin: Non-removable Li-Ion</li>
                        <li>Chuẩn kết nối: Lightning, USB 2.0</li>
                        <li>Công nghệ: Fast charging 20W, 50% in 30 min (advertised)</li>
                        <li>USB Power Delivery 2.0</li>
                        <li>MagSafe wireless charging 15W</li>
                        <li>Qi magnetic fast wireless charging 7.5W</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button class="btn--informaition" type="button" data-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>


    <footer class="footer--page">/-strong/-heart:>:o:-((:-h <div class="footer--page__container">
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
                                    <img src="public/img/home/logo-visa.png" alt="">
                                </div>
                                <div class="img">
                                    <img src="public/img/home/logo-master.png" alt="">
                                </div>
                            </div>
                        </li>
                        <li class="pay">
                            <div class="logo--pay">
                                <div class="img">
                                    <img src="public/img/home/logo-jcb.png" alt="">
                                </div>
                                <div class="img">
                                    <img src="public/img/home/logo-samsungpay.png" alt="">
                                </div>
                            </div>
                        </li>
                        <li class="pay">
                            <div class="logo--pay">
                                <div class="img">
                                    <img src="public/img/home/logo-atm.png" alt="">/-strong/-heart:>:o:-((:-h </div>
                                <div class="img">
                                    <img src="public/img/home/logo-vnpay.png" alt="">
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
                                        <img src="public/img/home/nhattin.jpg" alt="">
                                    </div>
                                    <div class="img">
                                        <img src="public/img/home/vnpost.jpg" alt="">
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
        crossorigin="anonymous"></script>
    <!-- Thư viện Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>