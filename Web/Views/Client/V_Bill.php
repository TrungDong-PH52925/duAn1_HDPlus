<?php
require_once __DIR__ . '../../../Models/M_Cart.php'; // Đảm bảo đường dẫn chính xác
// session_start();

$cartModel = new CartModel();
$id_user = $_SESSION['id_user'];
// $total = $_SESSION['total'];
// $gia_hientai = $_SESSION['gia_hientai'];
$id_cart = $_SESSION['id_cart'];

// Lấy danh sách sản phẩm từ giỏ hàng
$cart_items = $cartModel->getCartByCartId($id_cart);

if (empty($cart_items)) {
    echo "<script>alert('Bạn không có đơn hàng nào!'); window.location.href = 'index.php';</script>";
    exit(); // Dừng thực thi nếu không có sản phẩm
}

include_once __DIR__ . "/../header.php";
?>
<br><br><br>
<div class="container">
    <form action="index.php?act=addbill" method="post" enctype="multipart/form-data">
        <!-- Thông tin id -->
        <div class="d-none">
            <input type="hidden" name="id_user" value="<?= $_SESSION['id_user']; ?>">
          
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
                            <input type="hidden" name="mota_sanpham" value="<?= $item['mota_sanpham'] ?>">
                            <td class="text-end"><?= number_format($item['gia_hientai'], 0, ',', '.'); ?> đ</td>
                            <td class="text-center"><?= $item['soluong']; ?></td>
                            <td class="text-end"><?= number_format($item['total'], 0, ',', '.'); ?> đ</td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="5" class="text-center text-muted">Giỏ hàng của bạn hiện đang trống.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>

        <div class="text-end">
            <h4>Tổng tiền: <strong id="cartTotal"><?= number_format(array_sum(array_column($cart_items, 'total')), 0, ',', '.'); ?> đ</strong></h4>
<input type="hidden" name="total" value="<?php echo $total ?>">
        </div>

        <div class="userInfo mt-4">
            <h5>Thông tin người dùng</h5>
            <!-- Bắt đầu form thông tin người dùng -->
            <div class="row g-3">
                <!-- Hàng đầu tiên -->
                <div class="col-md-6">
                    <label for="user_name" class="form-label">Họ và Tên:</label>
                    <input readonly type="text" id="user_name" name="user_name" class="form-control" value="<?php echo $_SESSION['ten_user']; ?>" required>
                </div>

                <div class="col-md-6">
                    <label for="user_account" class="form-label">Tài khoản:</label>
                    <input readonly type="text" id="user_account" name="user_account" class="form-control" value="<?php echo $_SESSION['username']; ?>" required>
                </div>

                <div class="col-md-6">
                    <label for="email" class="form-label">Email:</label>
                    <input readonly type="email" id="email" name="user_email" class="form-control" value="<?php echo $_SESSION['gmail_user']; ?>" required>
                </div>

                <div class="col-md-6">
                    <label for="sdt" class="form-label">Số điện thoại:</label>
                    <input readonly type="text" id="sdt" name="user_phone" class="form-control" value="<?php echo $_SESSION['sdt_user']; ?>" required>
                </div>

                <div class="col-md-12">
                    <label for="diachi" class="form-label">Địa chỉ:</label>
                    <input readonly type="text" id="diachi" name="user_address" class="form-control" value="<?php echo $_SESSION['address_user']; ?>">
                </div>
            </div>
        </div>


        <input type="hidden" name="products" value='<?= json_encode($cart_items); ?>'>
        <button type="submit" name="bill" class="btn btn-primary">Đặt hàng</button>
    </form>
</div>
<?php
include_once __DIR__ . "/../footer.php";
?>

<style>
    .userInfo {
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 15px;
        background-color: #f9f9f9;
    }
</style>
