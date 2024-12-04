<?php
require_once __DIR__ . '../../../Models/M_Cart.php'; // Đảm bảo đường dẫn chính xác
// session_start();


$cartModel = new CartModel();
$id_user = $_SESSION['id_user'];
$total = $_SESSION['total'];
$gia_hientai = $_SESSION['gia_hientai'];

$id_cart = $_SESSION['id_cart'];

// Lấy danh sách sản phẩm từ giỏ hàng
$cart_items = $cartModel->getCartByCartId($id_cart);

    
    include_once __DIR__ . "/../header.php";
    ?>
<div class="container">
    <form action="index.php?act=addbill" method="post" enctype="multipart/form-data">
    <!-- Thông tin id -->
     <div class="id">
     <input type="hidden" name="id_user" value="<?= $_SESSION['id_user']; ?>">
    <input type="hidden" name="status_payment" value="Chưa thanh toán">
    <input type="hidden" name="trangthai_bill" value="Đang giao">
    <input type="hidden" name="id_cart" value="<?= $_SESSION['id_cart']; ?>">

     </div>
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-dark text-center">
                <tr>
                    <th>Ảnh</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Tổng</th>
                   
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
                            
                        </tr>
                        
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="6" class="text-center text-muted">Giỏ hàng của bạn hiện đang trống.</td>
                    </tr>
                <?php endif; ?>
                <td class="text-center">
                            <h4>Tổng tiền: <strong id="cartTotal">
                            <?= number_format(array_sum(array_column($cart_items, 'total')), 0, ',', '.'); ?> đ
                            </td>
                <input type="hidden" name="total" value="<?php echo $total ?>">

            </tbody>
        </table>
        <div class="d-flex justify-content-between mt-3">
           
                </strong></h4>
        </div>

<div class="userInfo">
     <!-- end header -->
    <!-- Bắt đầu form thông tin người dùng -->   
        <div class="information">
            <!-- Các trường nhập liệu -->
            <label for="user_name">Họ và Tên:</label>
            <input type="text" id="user_name" name="user_name" value="<?php echo $_SESSION['ten_user']; ?>" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="user_email" value="<?php echo $_SESSION['gmail_user'];?>" required>

            <label for="sdt">Số điện thoại:</label>
            <input type="text" id="sdt" name="user_phone" value="<?php echo $_SESSION['sdt_user'];?>" required>

            <label for="diachi">Địa chỉ:</label>
            <input type="text" id="diachi" name="user_address" value="<?php echo $_SESSION['address_user'];?>">
        </div>
</div>
<input type="hidden" name="products" value='<?= json_encode($cart_items); ?>'>

<button type="submit" name="bill">Đặt hàng</button>
</form>
</div>
<?php 
include_once __DIR__ . "/../footer.php";
?>
<style>

</style>


