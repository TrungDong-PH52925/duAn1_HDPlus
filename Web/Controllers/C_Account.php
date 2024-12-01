<?php
// require "Web/Models/M_Account.php";
class C_Account
{
    protected $cartModel;
    public function __construct()
    {
        $this->cartModel = new CartModel(); // Khởi tạo đối tượng CartModel
    }
    public function handleLogin()
{
    // Kiểm tra nếu có dữ liệu gửi từ form login
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['dangnhap'])) {
        // Kiểm tra nếu tài khoản hoặc mật khẩu trống
        if (empty($_POST['account_user']) || empty($_POST['pass_user'])) {
            $_SESSION['error'] = "Vui lòng nhập tài khoản và mật khẩu.";
            header('Location: ../../../duAn1_HDPlus/Web/Views/Login/login.php');
            exit;
        }

        $account_user = $_POST['account_user'];
        $pass_user = $_POST['pass_user'];

        // Gọi hàm kiểm tra tài khoản và mật khẩu trong cơ sở dữ liệu
        $result = check_user($account_user, $pass_user);  // Hàm check_user trong M_Account

        if ($result && isset($result[0])) {  // Nếu có kết quả trả về từ cơ sở dữ liệu
            $role = $result[0]['role'];

            if ($role == 1) {  // Nếu là quản trị viên
                $_SESSION['role'] = $role;
                header('Location: Web/Views/Admin/adminIndex.php');
                exit;
            } else {  // Nếu là người dùng bình thường
                $_SESSION['role'] = $role;
                $_SESSION['username'] = $result[0]['account_user'];
                $_SESSION['id_user'] = $result[0]['id_user'];

                // Khôi phục giỏ hàng từ cơ sở dữ liệu
                $id_cart = $this->cartModel->getCartIdByUserId($_SESSION['id_user']); // Lấy id_cart từ cơ sở dữ liệu
                $_SESSION['id_cart'] = $id_cart; // Lưu id_cart vào session

                // Nếu có id_cart, lấy sản phẩm từ giỏ hàng
                if ($id_cart) {
                    $cartItems = $this->cartModel->getCartByCartId($id_cart);
                    if (!empty($cartItems)) {
                        $_SESSION['cart'] = $cartItems; // Lưu giỏ hàng vào session
                    } else {
                        $_SESSION['cart'] = []; // Nếu không có sản phẩm nào
                    }
                } else {
                    $_SESSION['cart'] = []; // Nếu không có id_cart, khởi tạo giỏ hàng rỗng
                }

                header('Location: index.php');
                exit;
            }
        } else {
            // Nếu không tìm thấy tài khoản hoặc mật khẩu sai
            $_SESSION['error'] = "Tài khoản hoặc mật khẩu không đúng.";
            header('Location: ../../../duAn1_HDPlus/Web/Views/Login/login.php');
            exit;
        }
    }
}



    public function handleLogout()
    {
        // Hủy tất cả session
        session_unset();
        session_destroy();

        // Chuyển hướng về trang đăng nhập sau khi đăng xuất
        header('Location: ../../../duAn1_HDPlus/Web/Views/Login/login.php');
        exit;
    }
    public function handleRegister()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['dangky'])) {
            // Lấy dữ liệu từ form
            $ten_user = $_POST['ten_user'];
            $sdt_user = $_POST['sdt_user'];
            $gmail_user = $_POST['gmail_user'];
            $account_user = $_POST['account_user'];
            $pass_user = $_POST['pass_user'];
            $address_user = $_POST['address_user'];



            // Xử lý ảnh người dùng (nếu có)
            $img_user = null;
            if (isset($_FILES['img_user']) && $_FILES['img_user']['error'] == 0) {
                $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];
                if (in_array($_FILES['img_user']['type'], $allowed_types)) {
                    $img_user = './public/upload/' . uniqid() . '_' . basename($_FILES['img_user']['name']);
                    move_uploaded_file($_FILES['img_user']['tmp_name'], $img_user);
                } else {
                    $_SESSION['error'] = "Định dạng ảnh không hợp lệ.";
                    header('Location: ../../../duAn1_HDPlus/Web/Views/Login/register.php');
                    exit;
                }
            }

            if (check_duplicate_user($account_user, $gmail_user)) {
                $_SESSION['error'] = "Tài khoản hoặc email đã tồn tại.";
                header('Location: ../../../duAn1_HDPlus/Web/Views/Login/register.php');
                exit;
            }

            // Gọi hàm insert_user để thêm người dùng vào cơ sở dữ liệu
            $result = insert_user($ten_user, $sdt_user, $gmail_user, $account_user, $pass_user, $address_user, $img_user);

            if ($result) {
                $_SESSION['success'] = "Đăng ký thành công!";
                header('Location: ../../../duAn1_HDPlus/Web/Views/Login/login.php'); // Chuyển hướng đến trang login
                exit;
            } else {
                // error_log("Insert user failed for account: $account_user");
                $_SESSION['error'] = "Có lỗi xảy ra. Vui lòng thử lại.";
                header('Location: ../../../duAn1_HDPlus/Web/Views/Login/register.php'); // Quay lại trang đăng ký

                exit;
            }
        }
    }
}
