<?php
include_once "./Web/Models/M_Bill.php";
include_once 'C_Cart.php'; 


class BillController {
    private $b;
    private $c;
 

    public function __construct() {
        $this->b = new Bill();
        $this->c = new CartController();
    }

    // Xử lý thêm hóa đơn
    public function addBill() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['bill'])) {
            $status_payment = $_POST['status_payment'];
            $trangthai_bill = $_POST['trangthai_bill'];
            $id_user = $_POST['id_user'];
            $user_name = $_POST['user_name'];
            $user_address = $_POST['user_address'];
            $user_phone = $_POST['user_phone'];
            $user_email = $_POST['user_email'];
            $id_cart = $_POST['id_cart'];
            
            
            // Giải mã chuỗi JSON thành mảng
            $products = json_decode($_POST['products'], true);  // Chú ý tham số true để trả về mảng thay vì đối tượng
    
            // Kiểm tra nếu $products là một mảng hợp lệ
            if (is_array($products)) {
                foreach ($products as $product) {
                    $id_sanpham = $product['id_sanpham'];
                    $ten_sanpham = $product['ten_sanpham'];
                    $img_sanpham = $product['img_sanpham'];
                    $gia_hientai = $product['gia_hientai'];
                    $mota_sanpham = $product['mota_sanpham'];
                    $soluong = $product['soluong'];
                    $total = $gia_hientai * $soluong;
    
                    // Gọi hàm thêm hóa đơn
                    $this->b->insertBill($status_payment, $trangthai_bill, $id_user, $user_name, $user_address, $user_phone, $user_email, $id_cart, $id_sanpham, $ten_sanpham, $img_sanpham,$mota_sanpham, $gia_hientai,$soluong, $total);
                    //Xóa cart sau khi đặt hàng
                    // $this->c-> removeCartItem();
                    // $this->c-> delCart();
                    // unset($_SESSION['id_cart']);
                    // session_unset();
                    // session_destroy();
            
//                     echo "<script>
//     alert('Đặt hàng thành công!');
//     setTimeout(function() {
//         window.location.href = 'index.php'; 
//     });
// </script>";
// exit();

                }
            } else {
                echo "Dữ liệu sản phẩm không hợp lệ.";
            }
    
            // header("Location: " . BASE_URL . "Web/Views/Client/V_Bill.php");

        }
    }
    

    // Hiển thị danh sách hóa đơn
    public function listBills() {
        $bills = $this->b->getAllBills();
        include_once "./Web/Views/Admin/bill/bill.php";
    }

    // Cập nhật trạng thái hóa đơn

    public function updateStatus() {
//         echo '<pre>';
// var_dump($_POST);
// echo '</pre>';

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id_cart'], $_POST['trangthai_bill'])) {
            $id_cart = $_POST['id_cart'];
            $trangthai_bill = $_POST['trangthai_bill'];
    
            // Kiểm tra giá trị đầu vào
            if (empty($id_cart) || empty($trangthai_bill)) {
                echo "Dữ liệu không hợp lệ.";
                return;
            }
    
            // Gọi model để cập nhật
            $this->b->updateBillStatus($id_cart, $trangthai_bill);
    
            // Cập nhật lại danh sách hóa đơn
            $bills = $this->b->getAllBills();
            include_once __DIR__ . '/../Views/Admin/bill/bill.php';  // Hiển thị danh sách mới
        } else {
            echo "Không có dữ liệu gửi đến.";
        }
    }
    
    
    
    // Xóa hóa đơn
    public function deleteBill() {
        if (isset($_GET['id_bill'])) {
            $id_bill = $_GET['id_bill'];
            $this->b->deleteBill($id_bill);
        }
    }
}
?>
