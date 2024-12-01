<?php
require_once __DIR__ . '../../../Models/M_Cart.php'; // Đảm bảo đường dẫn chính xác
session_start();

// Kiểm tra người dùng đã đăng nhập hay chưa
if (!isset($_SESSION['id_user'])) {
    echo "<script>alert('Vui lòng đăng nhập!'); window.location.href = 'http://localhost/duAn1_HDPlus/Web/Views/Login/login.php';</script>";
    exit();
}

$cartModel = new CartModel();
$id_user = $_SESSION['id_user'];

// Lấy hoặc khởi tạo id_cart
if (!isset($_SESSION['id_cart'])) {
    $_SESSION['id_cart'] = uniqid(); // Tạo id_cart mới
}
$id_cart = $_SESSION['id_cart'];

// Lấy danh sách sản phẩm từ giỏ hàng
$cart_items = $cartModel->getCartByCartId($id_cart);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../public/fonts/fontawesome-free-6.6.0-web/fontawesome-free-6.6.0-web/css/all.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="NEW_SHA-384_HASH_HERE" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../public/css/index.css">
    <title>Myphone - Giỏ hàng</title>
</head>

<body>
    <header>
        <h2 class="header--title slide animate__animated animate__fadeInDown">[Khuyến mại] Thu cũ giá cao toàn bộ sản phẩm - Trợ giá tốt nhất</h2>
        <div class="nav--infomation">
            <ul class="nav--infomation__top">
                <li class="items"><a href="http://localhost/duAn1_HDPlus/index.php">Trang chủ</a></li>
                <li class="items"><a href="./html/introduce.html">Giới thiệu</a></li>
                <li class="items"><a href="./html/watched.html">Sản phẩm đã xem</a></li>
                <li class="items"><a href="./html/guaranteed.html">Trung tâm bảo hành</a></li>
                <li class="items"><a href="./html/recruitment.html">Tuyển dụng</a></li>
                <li class="items"><a href="./html/tracuu.html">Tra cứu</a></li>
                <?php if (isset($_SESSION['username']) && !empty($_SESSION['username'])): ?>
                    <li class="items"><a href="index.php?act=userinfo"><?= htmlspecialchars($_SESSION['username']); ?></a></li>
                    <li class="items"><a href="../../../index.php?act=logout">Đăng xuất <i class="fa-solid fa-right-to-bracket"></i></a></li>
                <?php else: ?>
                    <li class="items"><a href="http://localhost/duAn1_HDPlus/Web/Views/Login/login.php">Đăng nhập</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </header>

    <div class="container mt-4" style="margin-bottom:50px;">
        <h3 class="text-center mb-4">Giỏ hàng của bạn</h3>
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-dark text-center">
                <tr>
                    <th>Ảnh</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Tổng</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody id="cartItems">
                <?php if (!empty($cart_items)) : ?>
                    <?php foreach ($cart_items as $item) : ?>
                        <tr id="item_<?= htmlspecialchars($item['id_sanpham']); ?>">
                            <td class="text-center"><img src="<?= htmlspecialchars($item['img_sanpham']); ?>" class="img-thumbnail" style="width: 70px; height: 70px;"></td>
                            <td><?= htmlspecialchars($item['ten_sanpham']); ?></td>
                            <td class="text-end"><?= number_format($item['gia_hientai'], 0, ',', '.'); ?> đ</td>
                            <td class="text-center"><?= $item['soluong']; ?></td>
                            <td class="text-end"><?= number_format($item['total'], 0, ',', '.'); ?> đ</td>
                            <td class="text-center">
                                <a href="http://localhost/duAn1_HDPlus/index.php?act=removeCartItem&id=<?= $item['id_sanpham']; ?>" class="btn btn-danger btn-sm">Hủy</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="6" class="text-center text-muted">Giỏ hàng của bạn hiện đang trống.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
        <div class="d-flex justify-content-between mt-3">
            <h4>Tổng tiền: <strong id="cartTotal">
                    <?= number_format(array_sum(array_column($cart_items, 'total')), 0, ',', '.'); ?> đ
                </strong></h4>
        </div>
        <a href="http://localhost/duAn1_HDPlus/index.php?act=checkout" class="btn btn-success w-100 mt-3">Thanh toán</a>
    </div>
    <div class="mt-3 mb-4">
    <a href="http://localhost/duAn1_HDPlus/index.php" class="btn btn-outline-primary">Quay lại trang sản phẩm</a>
</div>
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>

</html>