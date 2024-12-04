<?php
require_once './Web/Models/M_Cart.php';
require_once './Web/Models/M_SanPham.php';

class CartController
{
    private $cartModel;
    private $productModel;

    public function __construct()
    {
        $this->cartModel = new CartModel();  // Model giỏ hàng
        $this->productModel = new SanPham();  // Model sản phẩm
    }

    public function addToCart()
    {
        // Kiểm tra xem người dùng đã đăng nhập
        if (!isset($_SESSION['id_user'])) {
            echo "<script>alert('Vui lòng đăng nhập để thêm sản phẩm vào giỏ hàng!'); window.location.href = 'http://localhost/duAn1_HDPlus/Web/Views/Login/login.php';</script>";
            exit();
        }

        // Lấy id_cart từ phiên
        $id_cart = $_SESSION['id_cart'] ?? uniqid(); // Tạo id_cart nếu chưa có
       
        $_SESSION['id_cart'] = $id_cart; // Lưu lại vào session

        $id_user = $_SESSION['id_user']; // Lấy id_user từ session

        // Logic lấy thông tin sản phẩm từ form
        $soluong = isset($_POST['soluong']) ? (int)$_POST['soluong'] : 1;
        $_SESSION['soluong'] = $soluong;

        $ten_sanpham = $_POST['ten_sanpham'];
        $img_sanpham = $_POST['img_sanpham'];
        $gia_hientai = isset($_POST['gia_hientai']) ? (float)$_POST['gia_hientai'] : 0;
        $_SESSION['gia_hientai'] = $gia_hientai;

        $id_sanpham = isset($_POST['id_sanpham']) ? (int)$_POST['id_sanpham'] : 0;
        $total = $gia_hientai * $soluong ;
        $_SESSION['total'] = $total;

        // Kiểm tra và tạo giỏ hàng trong bảng cart nếu chưa có
        $this->cartModel->createCartIfNotExists($id_cart, $id_user);

        // Gọi hàm thêm sản phẩm vào cơ sở dữ liệu
        $this->cartModel->addToCartDatabase($id_cart, $id_user, $id_sanpham, $soluong, $ten_sanpham, $gia_hientai, $img_sanpham, $total);

        // Chuyển hướng về trang giỏ hàng
        header("Location: http://localhost/duAn1_HDPlus/Web/Views/Client/V_Cart.php");
        exit(); // Thêm exit() sau header để ngăn chặn các mã tiếp theo thực thi
    }


    public function viewCart()
{
    // Kiểm tra xem người dùng đã đăng nhập
    if (!isset($_SESSION['id_user'])) {
        echo "<script>alert('Vui lòng đăng nhập!'); window.location.href = 'http://localhost/duAn1_HDPlus/Web/Views/Login/login.php';</script>";
        exit();
    }

    $id_user = $_SESSION['id_user']; // Lấy id_user từ session

    // Lấy id_cart từ cơ sở dữ liệu
    $id_cart = $this->cartModel->getCartIdByUserId($id_user);

    // In giá trị của id_cart để kiểm tra
    echo "ID Giỏ hàng: " . htmlspecialchars($id_cart); // Dòng này giúp bạn kiểm tra giá trị của id_cart

    // Lấy dữ liệu giỏ hàng
    if ($id_cart) {
        $cart_items = $this->cartModel->getCartByCartId($id_cart);
    } else {
        $cart_items = []; // Nếu không có giỏ hàng
    }

    // Chuyển dữ liệu đến view
    include './Web/Views/Client/V_Cart.php';
}



    public function removeFromCart()
    {
        // Kiểm tra xem người dùng đã đăng nhập
        if (!isset($_SESSION['id_user'])) {
            echo "<script>alert('Vui lòng đăng nhập!'); window.location.href = 'http://localhost/duAn1_HDPlus/Web/Views/Login/login.php';</script>";
            exit();
        }

        $id_cart = $_SESSION['id_cart'] ?? null; // Lấy id_cart từ session

        // Lấy ID sản phẩm từ yêu cầu GET
        if (isset($_GET['id']) && is_numeric($_GET['id'])) {
            $id_sanpham = (int)$_GET['id'];
            if ($id_sanpham > 0 && $id_cart) {
                // Gọi hàm xóa sản phẩm khỏi giỏ hàng
                $this->cartModel->removeFromCartDatabase($id_cart, $id_sanpham);
            } else {
                echo "<script>alert('ID sản phẩm không hợp lệ hoặc giỏ hàng không tồn tại!'); window.location.href = 'http://localhost/duAn1_HDPlus/Web/Views/Client/V_Cart.php';</script>";
                exit();
            }

            // Chuyển hướng về lại trang giỏ hàng
            header("Location: http://localhost/duAn1_HDPlus/Web/Views/Client/V_Cart.php");
            exit();
        } else {
            echo "<script>alert('ID sản phẩm không hợp lệ!'); window.location.href = 'http://localhost/duAn1_HDPlus/Web/Views/Client/V_Cart.php';</script>";
            exit();
        }
    }

    // Các phương thức khác...
    public function removeCartItem()
    {
        // Kiểm tra xem người dùng đã đăng nhập
        if (!isset($_SESSION['id_user'])) {
            echo "<script>alert('Vui lòng đăng nhập!'); window.location.href = 'http://localhost/duAn1_HDPlus/Web/Views/Login/login.php';</script>";
            exit();
        }

        $id_cart = $_SESSION['id_cart'] ; // Lấy id_cart từ session
        $this->cartModel->removeCartDatabase($id_cart);
       
    }
    public function removeCart()
    {
        // Kiểm tra xem người dùng đã đăng nhập
        if (!isset($_SESSION['id_user'])) {
            echo "<script>alert('Vui lòng đăng nhập!'); window.location.href = 'http://localhost/duAn1_HDPlus/Web/Views/Login/login.php';</script>";
            exit();
        }

        $id_cart = $_SESSION['id_cart'] ; // Lấy id_cart từ session
        $this->cartModel->removeCartDatabase($id_cart);
       
    }
    public function delCart()
    {
        // Kiểm tra xem người dùng đã đăng nhập
        if (!isset($_SESSION['id_user'])) {
            echo "<script>alert('Vui lòng đăng nhập!'); window.location.href = 'http://localhost/duAn1_HDPlus/Web/Views/Login/login.php';</script>";
            exit();
        }

        $id_cart = $_SESSION['id_cart'] ; // Lấy id_cart từ session
        $this->cartModel->deleteCart($id_cart);
       
    }
}
