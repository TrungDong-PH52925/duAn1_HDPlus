
<?php
require_once './Web/Config/dbconnect.php';

class Bill {
    // Thêm một hóa đơn mới vào bảng bill
    public function insertMultipleBills($status_payment,  $id_user, $user_name, $user_account, $user_address, $user_phone, $user_email, $products) {
        // $products là một mảng, mỗi phần tử của mảng chứa thông tin của một sản phẩm
        $sql = "INSERT INTO bill (status_payment,  id_user, user_name, user_account, user_address, user_phone, user_email, id_cart, id_sanpham, ten_sanpham, img_sanpham, mota_sanpham, gia_hientai, soluong, total) 
                VALUES ";
    
        $placeholders = [];
        $params = [];
    
        foreach ($products as $product) {
            $placeholders[] = "( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $params = array_merge($params, [
                $status_payment,
               
                $id_user,
                $user_name,
                $user_account,
                $user_address,
                $user_phone,
                $user_email,
                $product['id_cart'],
                $product['id_sanpham'],
                $product['ten_sanpham'],
                $product['img_sanpham'],
                $product['mota_sanpham'],
                $product['gia_hientai'],
                $product['soluong'],
                $product['total']
            ]);
        }
    
        $sql .= implode(", ", $placeholders);
    
        // Thực thi câu lệnh SQL với tất cả các tham số
        pdo_execute($sql, ...$params);
    }
    
    
    
    
    // Lấy danh sách tất cả các hóa đơn
    public function getAllBills() {
        $sql = "SELECT * FROM bill";
        return pdo_query($sql);
    }
    public function getBillUser($user_account) {
        $sql = "SELECT * FROM bill WHERE user_account = '$user_account' ";
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
        pdo_executes($sql, $params);
    }
    
    
    
    // Xóa hóa đơn theo id
    public function deleteBill($id_cart, $trangthai_bill) {
        // Câu lệnh SQL với tham số placeholder
        $sql = "DELETE FROM bill WHERE id_cart = '$id_cart' AND trangthai_bill = '$trangthai_bill'";
        
       
  
        
        // Gọi hàm pdo_executes
        $result = pdo_execute($sql);
        
        // Kiểm tra kết quả
        if ($result) {
            echo "Xóa hóa đơn thành công.";
        } else {
            echo "Xóa hóa đơn thất bại.";
        }
    }
    
    public function getBillStatusByCartId($id_cart) {
        // Câu lệnh SQL để lấy trạng thái hóa đơn dựa trên id_cart
        $sql = "SELECT trangthai_bill FROM bill WHERE id_cart = '$id_cart'";
        
       
        
        
        // Gọi hàm pdo_query_one để lấy một bản ghi (giả sử bạn đã có hàm này)
        $result = pdo_query_one($sql);

        // Kiểm tra kết quả
        if ($result) {
            return $result['trangthai_bill']; // Trả về trạng thái hóa đơn
        } else {
            return null; // Trả về null nếu không tìm thấy
        }
    }
    
    
}
?>