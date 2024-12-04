<?php
include_once(__DIR__ . '/../Config/dbconnect.php');
function check_user($account_user, $pass_user) {
    $sql = "SELECT * FROM user WHERE account_user = :account_user AND pass_user = :pass_user";

    // Truyền tham số theo dạng mảng liên kết (associative array)
    $rows = pdo_query($sql, [':account_user' => $account_user, ':pass_user' => $pass_user]);

    return $rows;
}


function get_user($account_user) {
    $sql = "SELECT * FROM user WHERE account_user = ?";
    return pdo_query_one($sql, $account_user);  // Gọi hàm pdo_query_one với tài khoản người dùng
}




function insert_user($ten_user, $sdt_user, $gmail_user, $account_user, $pass_user, $address_user, $img_user) {
    try {
        $sql = "INSERT INTO user (ten_user, sdt_user, gmail_user, account_user, pass_user, address_user, img_user) 
                VALUES ('$ten_user','$sdt_user','$gmail_user','$account_user','$pass_user','$address_user','$img_user')";
        pdo_execute($sql);
        return true; // Trả về true nếu chèn t-hành công
    } catch (Exception $e) {
        error_log("Error: " . $e->getMessage());
        return false; // Trả về false nếu có lỗi
    }
}



function check_duplicate_user($account_user, $gmail_user) {
    if (empty($account_user) || empty($gmail_user)) {
        return false; // Trả về false nếu dữ liệu trống
    }

    $sql = "SELECT * FROM user WHERE account_user = ? OR gmail_user = ?";
    $result = pdo_query($sql, [$account_user, $gmail_user]);
    return !empty($result);
}

//thêm function để user cập nhập thông tin cá nhân
function update_user($id_user, $ten_user, $sdt_user, $gmail_user, $account_user, $pass_user, $address_user, $img_user, $role) {
    $sql = "UPDATE user SET 
            ten_user = '$ten_user', 
            sdt_user = '$sdt_user', 
            gmail_user = '$gmail_user', 
            account_user = '$account_user', 
            pass_user = '$pass_user', 
            address_user = '$address_user', 
            img_user = '$img_user', 
            `role` = '$role' 
            WHERE id_user = '$id_user'";
    pdo_execute($sql);
    return $sql;
}


//thanh toán cần thông tin user và thông tin giỏ hàng -> lưu thông tin thanh toán vào db

?>