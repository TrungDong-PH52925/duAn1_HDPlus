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
            $status_payment = "Đã thanh toán";
            $id_user = $_POST['id_user'];
            $user_name = $_POST['user_name'];
            $user_account = $_POST['user_account'];
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
                    $this->b->insertMultipleBills($status_payment,  $id_user, $user_name, $user_account, $user_address, $user_phone, $user_email, $products);
                    //Xóa cart sau khi đặt hàng
                    $this->c-> removeCartItem();
                    $this->c-> delCart();
                    unset($_SESSION['id_cart']);
                    // session_unset();
                    // session_destroy();
            
                    echo "<script>
    alert('Đặt hàng thành công!');
    setTimeout(function() {
        window.location.href = 'index.php'; 
    });
</script>";
exit();

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
    public function listUserBill(){
        $user_account =    $_SESSION['username'];
   $n = $this->b ->getBillUser($user_account);

    include "./Web/Views/Client/lichsudonhang.php";


    }
    // Cập nhật trạng thái hóa đơn

    public function updateStatus() {


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
    public function deleteBill() {
        // var_dump($_POST);
                if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id_cart'])  ) {
                    $id_cart = $_POST['id_cart'];
                    // $trangthai_bill = $_POST['trangthai_bill'];
                        $trangthai_bill = $this->b->getBillStatusByCartId($id_cart);
                        // var_dump( $trangthai_bill ) ;exit;
                    // Kiểm tra giá trị đầu vào
                    if (empty($id_cart) && empty($trangthai_bill)) {
                        echo "Dữ liệu không hợp lệ.";
                        return;
                    }
                    if($trangthai_bill == 'Đang chờ xử lí'){
                      
                        $this->b->deleteBill($id_cart, $trangthai_bill);

                    }else{
                        echo "<script>alert('Trạng thái đơn hàng đã được cập nhập bạn không thể hủy đơn!');window.location = 'index.php?act=lsubill' </script>";
                    }
                    // Gọi model để cập nhật
                    
                  echo "<script>window.location = 'index.php?act=lsubill' </script>";
              
                } 
                else {

                    echo "Không có dữ liệu gửi đến.";
                }
            }
    
    


}
?>
