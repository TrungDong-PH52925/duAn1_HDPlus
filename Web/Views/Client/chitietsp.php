<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- thêm thư viện -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- animation -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href=" https://cdn.rawgit.com/daneden/animate.css/v3.1.0/animate.min.css">

    <!-- thêm css  -->
    <link rel="stylesheet" href="public/css/phone.css">
    <link rel="stylesheet" href="public/css/index.css">
    <link rel="stylesheet" href="public/css/product.css">
    <title>Myphone</title>
</head>

<body>
    <header>
        <h2 class="header--title slide animate__animated animate__fadeInDown">[Khuyến mại] Thu cũ giá cao toàn bộ sản phẩm
            - Trợ giá tốt nhất</h2>
        <div class="nav--infomation ">
            <ul class="nav--infomation__top">
                <li class="items"><a href="http://localhost/duAn1_HDPlus/index.php">Trang chủ</a></li>
                <li class="items"><a href="./html/introduce.html">Giới thiệu</a></li>
                <li class="items"><a href="./html/watched.html">Sản phẩm đã xem</a></li>
                <li class="items"><a href="./html/guaranteed.html">Trung tâm bảo hành</a></li>
                <!-- <li class="items"><a href="#0">Hệ thống 128 siêu thị</a></li> -->
                <li class="items"><a href="./html/recruitment.html">Tuyển dụng</a></li>
                <li class="items"><a href="./html/tracuu.html">Tra cứu</a></li>
                <?php
                if (isset($_SESSION['username']) && ($_SESSION['username'] != "")) {
                    echo '<li class="items"><a href="index.php?act=userinfo">' . $_SESSION['username'] . '</a></li>';
                } else {
                ?>
                    <li class="items"><a href="http://localhost/duAn1_HDPlus/Web/Views/Login/login.php">Đăng Nhâp</a></li>
                <?php } ?>
                <?php if (isset($_SESSION['username'])): ?>
                    <li class="items"><a href="index.php?act=logout">Đăng xuất<i class="fa-solid fa-right-to-bracket"></i></a></li>
                <?php endif; ?>

            </ul>
        </div>

        <nav class="menu--desktop">
            <div class="logo">
                <img src="public/img/logo.jpg" alt="logo">
            </div>
            <div class="menu--search">
                <input type="text" placeholder="Tìm kiếm...">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
            <a class="menu--check__product " href="./html/checkoder.html" style="text-decoration: none; color: black;">
                <i class="fa-solid fa-car"></i>
                Kiểm tra đơn hàng
            </a>
            <div class="menu--cart">
                <a href="#" style="text-decoration: none;">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <span>2</span>
                </a>
            </div>
            <label for="nav--list__check">
                <i class="fa-solid fa-bars"></i>
            </label>
        </nav>
        <!-- menu lựa chọn các sản phẩm  -->
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
                        <div class="img"><img src="public/img/home/hd_mainmenu_icon10.webp" alt="tin tức">TIN TỨC
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
        <h1><?= $ten_sanpham ?></h1>
        <p>Thương hiệu : <span>iPhone</b></p>
    </div>
    <div class="container--product">
        <div class="row">
            <div class="col-6">
                <div class="imgProduct">
                    <?php
                    echo  ' <img src="' . $img_sanpham . '" alt="" width:200px>';
                    ?>
                </div>
            </div>
            <div class="col-6">
                <form action="http://localhost/duAn1_HDPlus/index.php?act=addtocart" method="POST">
                    <div class="Product-current-price">
                        <h5>Giá hiện tại:</h5>
                        <b class="highlight-price">
                            <?= number_format($gia_sanpham - $giamgia_sanpham, 0, ',', '.') ?> đ
                        </b>
                    </div>

                    <div class="Product-discount">
                        <h5>Giá giảm:</h5>
                        <b style="color: red;">
                            <?= number_format($giamgia_sanpham, 0, ',', '.') ?> đ
                        </b>
                    </div>
                    <h5>Giá sản phẩm:</h5>
                    <div class="Product-price">
                        <b><?= number_format($gia_sanpham, 0, ',', '.') ?> đ</b>
                    </div>
                    <!-- <div class="Product-des">
                        <h3>Mô tả:</h3><b><?= $mota_sanpham ?></b>
                    </div> -->
                    <div class="quantity-control">
                        <button class="btn btn-outline-primary decrease-btn" type="button">-</button>
                        <input type="text" class="form-control quantity-input" name="soluong" value="1" min="1">
                        <button class="btn btn-outline-primary increase-btn" type="button">+</button>
                    </div>

                    <!-- Thêm phần tử tính tổng tiền -->
                    <div class="total-price">
                        <h5>Tổng tiền:</h5>
                        <b id="total-price"><?= number_format($gia_sanpham - $giamgia_sanpham, 0, ',', '.') ?> đ</b>
                    </div>
                    <div class="btnProduct .mt-auto">
                        <button type="submit">Thêm Vào Giỏ Hàng</button>
                    </div>
                    <input type="hidden" name="ten_sanpham" value="<?= $ten_sanpham ?>">
                    <input type="hidden" name="img_sanpham" value="<?= $img_sanpham ?>">
                    <input type="hidden" name="gia_hientai" value="<?= $gia_sanpham - $giamgia_sanpham ?>">
                    <input type="hidden" name="id_sanpham" value="<?= $id_sanpham ?>">
                    <input type="hidden" name="total" id="total-price" value="<?= number_format($gia_sanpham - $giamgia_sanpham, 0, ',', '.') ?>">
                    <input type="hidden" name="gia_sanpham" value="<?= $gia_sanpham ?>">
                </form>
            </div>
            <div class="Product-des mt-5">
                <h3>Mô tả sản phẩm:</h3>
                <p><?= nl2br($mota_sanpham) ?></p>
            </div>
            <!-- <div class="comments">
        <?php
        $listBinhLuan = $listBinhLuan ?? [];
        foreach ($listBinhLuan as $comment): ?>
        <div class="comment">
            <strong><?= htmlspecialchars($comment['username'] ?? 'Khách') ?></strong>
            <p><?= htmlspecialchars($comment['noidung_binhluan']) ?></p>
            <small><?= htmlspecialchars($comment['ngay_binhluan']) ?></small>
            </div>
            <?php endforeach; ?>
            </div> -->

            <!-- Form bình luận -->
            <div class="comment-section mt-5">
                <h3 class="mb-3">Để lại bình luận của bạn:</h3>
                <form action="http://localhost/duAn1_HDPlus/index.php?act=add_edit_binhluan" method="POST" class="needs-validation" novalidate style="border: 1px solid; padding:20px; border-radius:10px;">
                    <!-- <div class="mb-3">
            <label for="commentName" class="form-label"><i class="fas fa-user"></i> Tên của bạn:</label>
            <input type="text" class="form-control" id="commentName" name="id_user" placeholder="Nhập tên của bạn" required>
            <div class="invalid-feedback">Vui lòng nhập tên của bạn.</div>
            </div> -->
                    <div class="mb-3">
                        <label for="commentContent" class="form-label"><i class="fas fa-comment"></i> Nội dung bình luận:</label>
                        <textarea class="form-control" id="commentContent" name="noidung_binhluan" rows="4" style="width:100%;" placeholder="Nhập nội dung bình luận" required></textarea>
                        <div class="invalid-feedback">Nội dung bình luận không được để trống.</div>
                    </div>
                    <input type="hidden" name="id_binhluan" value="<?= htmlspecialchars($id_binhluan) ?>">
                    <input type="hidden" name="id_sanpham" value="<?= htmlspecialchars($id_sanpham) ?>">
                    <input type="hidden" name="id_user" value="<?= htmlspecialchars($id_user) ?>">
                    <button type="submit" class="btn btn-primary" value="gui" name="gui"><i class="fas fa-paper-plane"></i> Gửi bình luận</button>
                </form>
            </div>




        </div>

        <!-- The Modal -->
        <div class="modal fade" id="specsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Đặc điểm nổi bật</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <?= $dacdiemsanpham ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
    

    <!-- tiện ích -->
    <section class="utilities">
        <div class="utilities--container">
            <div class="row wow " data-wow-offset="100" data- wow-iteration="100">
                <div class=" col-6 col-md-3  box">
                    <div class="img"><img src="./public/img/home/utilities1.png" alt=""></div>
                    <div class="box--text">
                        <span>Sản Phẩm</span>
                        <b>Chính hãng</b>
                    </div>
                </div>
                <div class=" col-6 col-md-3 box">
                    <div class="img"><img src="./public/img/home/utilities.png" alt=""></div>
                    <div class="box--text">
                        <span>Miễn phí vận chuyểnm</span>
                        <b>TOÀN QUỐC</b>
                    </div>
                </div>
                <div class=" col-6 col-md-3 box">
                    <div class="img"><img src="./public/img/home/utilities3.png" alt=""></div>
                    <div class="box--text">
                        <span>Hotline hỗ trợ</span>
                        <b>1900.2091</b>
                    </div>
                </div>
                <div class=" col-6 col-md-3 box">
                    <div class="img"><img src="./public/img/home/utilities4.png" alt=""></div>
                    <div class="box--text">
                        <span>Thủ tục đổi trả</span>
                        <b>DỄ DÀNG</b>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end customer -->
    <!-- <div class="contact">
        <a href="https://www.facebook.com/profile.php?id=61567235125171" title="facebook"><i
                class="fa-brands fa-facebook"></i></a>
        <a href="https://www.youtube.com/" title="youtube"><i class="fa-brands fa-youtube"></i></a>
        <a href="#"><i class="fa-solid fa-envelope" title="Email"></i></a>
        <a href="#"><i class="fa-brands fa-telegram" title="Telegram"></i></a>
    </div> -->
    <!-- END ICON SUBPORT -->
    <!-- <a href="#" class="back-top">
        <i class="fa-solid fa-angle-up"></i>
    </a> -->
    <footer class="footer--page wow " data-wow-offset="100" data- wow-iteration="100">
        <div class="footer--page__container">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <h1>Hỗ Trợ - Dịch Vụ</h1>
                    <ul class="page--suport">
                        <li class="item"><a href="#0"> Chính sách và hướng dẫn mua hàng trả góp</a></li>
                        <li class="item"><a href="#0">Hướng dẫn mua hàng và chính sách vận chuyển </a></li>
                        <li class="item"><a href="./html/checkoder.html">Tra cứu đơn hàng</a></li>
                        <li class="item"><a href="#0">Chính sách đổi mới và bảo hành</a></li>
                        <li class="item"><a href="#0"> Dịch vụ bảo hành mở rộng</a></li>
                        <li class="item"><a href="#0">Chính sách bảo mật </a></li>
                        <li class="item"><a href="#0">Chính sách giải quyết khiếu nại</a></li>
                        <li class="item"><a href="#0">Quy chế hoạt động </a></li>
                    </ul>
                </div>
                <!-- end col  -->
                <div class="col-12 col-sm-6 col-md-3">
                    <h1>Thông Tin Liên Hệ</h1>
                    <ul class="page--suport">
                        <li class="item"><a href="#0">Thông tin các trang TMĐT</a></li>
                        <li class="item"><a href="#0">Dịch vụ sửa chữa</a></li>
                        <li class="item"><a href="./html/guaranteed.html">Tra cứu bảo hành</a></li>
                    </ul>
                </div>
                <!-- end col  -->
                <div class="col-12 col-sm-6 col-md-3">
                    <h1>Thanh toán miễn phí</h1>
                    <ul class="page--suport">
                        <li class="pay">
                            <div class="logo--pay">
                                <div class="img">
                                    <img src="./public/img/home/logo-visa.png" alt="">
                                </div>
                                <div class="img">
                                    <img src="./public/img/home/logo-master.png" alt="">
                                </div>
                            </div>
                        </li>
                        <li class="pay">
                            <div class="logo--pay">
                                <div class="img">
                                    <img src="./public/img/home/logo-jcb.png" alt="">
                                </div>
                                <div class="img">
                                    <img src="./public/img/home/logo-samsungpay.png" alt="">
                                </div>
                            </div>
                        </li>
                        <li class="pay">
                            <div class="logo--pay">
                                <div class="img">
                                    <img src="./public/img/home/logo-atm.png" alt="">
                                </div>
                                <div class="img">
                                    <img src="./public/img/home/logo-vnpay.png" alt="">
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- end col  -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="footer-container">
                        <div class="row">
                            <h1>Hình thức vận chuyển</h1>
                            <div class="col-12">
                                <div class="logo--convert">
                                    <div class="img">
                                        <img src="./public/img/home/nhattin.jpg" alt="">
                                    </div>
                                    <div class="img">
                                        <img src="./public/img/home/vnpost.jpg" alt="">
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="Footer--Address">
            <span>&copy; Copyright MyPhone 2024 </span>
        </div>
    </footer>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const decreaseBtns = document.querySelectorAll(".decrease-btn");
            const increaseBtns = document.querySelectorAll(".increase-btn");
            const quantityInputs = document.querySelectorAll(".quantity-input");
            const totalPriceElement = document.getElementById("total-price");
            const pricePerItem = <?= $gia_sanpham - $giamgia_sanpham ?>;

            // Cập nhật tổng tiền
            function updateTotalPrice() {
                const quantity = parseInt(quantityInputs[0].value, 10) || 1;
                const totalPrice = pricePerItem * quantity;
                totalPriceElement.textContent = totalPrice.toLocaleString('vi-VN') + ' đ';
            }

            // Gắn sự kiện cho các nút giảm và tăng số lượng
            decreaseBtns.forEach((btn, index) => {
                btn.addEventListener("click", () => {
                    let input = quantityInputs[index];
                    let currentValue = parseInt(input.value, 10) || 1;
                    if (currentValue > 1) {
                        input.value = currentValue - 1;
                        updateTotalPrice(); // Cập nhật tổng tiền
                    }
                });
            });

            increaseBtns.forEach((btn, index) => {
                btn.addEventListener("click", () => {
                    let input = quantityInputs[index];
                    let currentValue = parseInt(input.value, 10) || 1;
                    input.value = currentValue + 1;
                    updateTotalPrice(); // Cập nhật tổng tiền
                });
            });

            // Xử lý nhập số lượng
            quantityInputs.forEach((input) => {
                input.addEventListener("input", () => {
                    if (isNaN(input.value) || input.value <= 0) {
                        input.value = 1; // Đặt lại về 1 nếu nhập không hợp lệ
                    }
                    updateTotalPrice(); // Cập nhật tổng tiền
                });
            });

            // Cập nhật tổng tiền ban đầu
            updateTotalPrice();
        });
    </script>
</body>

</html>