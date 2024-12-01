<?php
require_once __DIR__ . '../../../Web/Config/dbconnect.php';

// Web/Models/M_Cart.php

class CartModel
{
    // Hàm xóa sản phẩm trong giỏ hàng
    public function removeFromCartDatabase($id_cart, $id_sanpham)
    {
        $sql = "DELETE FROM cart_items WHERE id_cart = ? AND id_sanpham = ?";
        pdo_execute($sql, $id_cart, $id_sanpham);
    }

    // Hàm thêm sản phẩm vào giỏ hàng
    public function addToCartDatabase($id_cart, $id_user, $id_sanpham, $quantity, $ten_sanpham, $gia_hientai, $img_sanpham, $total)
    {
        // Chuyển đường dẫn ảnh tương đối thành tuyệt đối
        $base_url = "http://localhost/duAn1_HDPlus/";
        if (!preg_match("/^http/", $img_sanpham)) {
            $img_sanpham = $base_url . $img_sanpham;
        }

        // Kiểm tra xem sản phẩm đã tồn tại trong giỏ hàng chưa
        $sql_check = "SELECT * FROM cart_items WHERE id_cart = ? AND id_sanpham = ?";
        $existing_item = pdo_query_one($sql_check, $id_cart, $id_sanpham);

        if ($existing_item) {
            // Cập nhật số lượng và tổng tiền nếu sản phẩm đã tồn tại
            $sql_update = "UPDATE cart_items 
                           SET soluong = soluong + ?, total = total + ?, gia_hientai = ?, ten_sanpham = ?, img_sanpham = ? 
                           WHERE id_cart = ? AND id_sanpham = ?";
            pdo_execute($sql_update, $quantity, $total, $gia_hientai, $ten_sanpham, $img_sanpham, $id_cart, $id_sanpham);
        } else {
            // Thêm mới sản phẩm vào giỏ hàng
            $sql_insert = "INSERT INTO cart_items (id_cart, id_sanpham, soluong, ten_sanpham, gia_hientai, img_sanpham, total) 
                           VALUES (?, ?, ?, ?, ?, ?, ?)";
            pdo_execute($sql_insert, $id_cart, $id_sanpham, $quantity, $ten_sanpham, $gia_hientai, $img_sanpham, $total);
        }
    }
    public function createCartIfNotExists($id_cart, $id_user)
    {
        // Kiểm tra nếu giỏ hàng đã tồn tại
        $existingCart = $this->getCartByCartId($id_cart);

        if (empty($existingCart)) {
            // Nếu không tồn tại, chèn vào
            $sql = "INSERT INTO cart (id_cart, id_user) VALUES (?, ?)";
            pdo_execute($sql, $id_cart, $id_user);
        } else {
            // Giỏ hàng đã tồn tại, không cần chèn
            return false; // hoặc xử lý theo cách khác
        }
    }
    // Lấy danh sách sản phẩm trong giỏ hàng

    public function getCartByCartId($id_cart) {
        $sql = "SELECT * FROM cart_items WHERE id_cart = ?";
        $result = pdo_query($sql, array($id_cart));
        
        // Kiểm tra xem có dữ liệu trả về không
        if (empty($result)) {
            return []; // Trả về mảng rỗng nếu không có sản phẩm
        }
        return $result; 
    }
    
    public function getCartIdByUserId($id_user) {
        $sql = "SELECT id_cart FROM cart WHERE id_user = ?"; // Giả sử bạn có bảng `cart`
        $result = pdo_query($sql, array($id_user));
    
        // Trả về id_cart nếu tìm thấy, ngược lại trả null
        return !empty($result) ? $result[0]['id_cart'] : null; 
    }
}
