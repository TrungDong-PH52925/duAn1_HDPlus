
<?php
require_once './Web/Config/dbconnect.php';

class Bill {
    // Thêm một hóa đơn mới vào bảng bill
    public function insertBill($status_payment, $trangthai_bill, $id_user, $user_name, $user_address, $user_phone, $user_email, $id_cart, $id_sanpham, $ten_sanpham, $img_sanpham, $gia_hientai, $soluong, $total) {
        // Kiểm tra giá trị của id_cart là số nguyên hợp lệ
        // if (!is_numeric($id_cart)) {
        //     echo "id_cart phải là số nguyên hợp lệ!";
        //     echo "id_cart: " . $id_cart; // Kiểm tra giá trị id_cart

        //     return;
        // }
    
        // Nếu id_cart là số nguyên hợp lệ, tiếp tục thực hiện câu lệnh SQL
        $sql = "INSERT INTO bill (status_payment, trangthai_bill, id_user, user_name, user_address, user_phone, user_email, id_cart, id_sanpham, ten_sanpham, img_sanpham, gia_hientai, soluong, total) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    
        // Tạo mảng tham số với các giá trị truyền vào
        $params = [
            $status_payment, 
            $trangthai_bill, 
            $id_user, 
            $user_name, 
            $user_address, 
            $user_phone, 
            $user_email, 
            $id_cart,  // Đảm bảo giá trị này là số nguyên
            $id_sanpham, 
            $ten_sanpham, 
            $img_sanpham, 
            $gia_hientai,
            $soluong, 
            $total
        ];
    
        // Thực thi câu lệnh SQL với mảng tham số
        pdo_execute($sql, ...$params);
        
    }
    
    
    
    // Lấy danh sách tất cả các hóa đơn
    public function getAllBills() {
        $sql = "SELECT * FROM bill";
        return pdo_query($sql);
    }

    // Lấy chi tiết một hóa đơn dựa trên id_bill
    public function getBillById($id_bill) {
        $sql = "SELECT * FROM bill WHERE id_bill = ?";
        return pdo_query_one($sql, [$id_bill]);
    }

    // Cập nhật trạng thái hóa đơn
    public function updateBillStatus($id_cart, $trangthai_bill) {
        $sql = "UPDATE bill SET trangthai_bill = :trangthai_bill WHERE id_cart = :id_cart";
        
        // Truyền tham số dưới dạng mảng key-value
        $params = [
            ':trangthai_bill' => $trangthai_bill,
            ':id_cart' => $id_cart
        ];
    
        // Gọi phương thức pdo_execute với tham số đã sửa
        pdo_execute($sql, $params);
    }
    
    
    
    // Xóa hóa đơn theo id
    public function deleteBill($id_bill) {
        $sql = "DELETE FROM bill WHERE id_bill = ?";
        pdo_execute($sql, [$id_bill]);
    }
}
?>