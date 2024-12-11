<?php
include_once './Web/Views/header.php';
?>
<main id="main" class="main">
<div class="container mt-4">
    <h2 class="text-center mb-4">Danh sách tất cả hóa đơn</h2>
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>Mã Đơn Hàng</th>
                    <th>Họ Tên</th>
                    <th>Địa Chỉ</th>
                    <th>Số Điện Thoại</th>
                    <th>Email</th>
                    <th>Tên Sản Phẩm</th>
                    <th>Ảnh sản phẩm</th>
                    <th>Chi tiết</th>
                    <th>Giá</th>
                    <th>Số Lượng</th>
                    <th>Tổng</th>
                    <th>Trạng Thái</th>
                    <th>Chỉnh Sửa</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($n)): ?>
                    <?php foreach ($n as $bill): ?>
                        <tr>
                            <td><?= $bill['id_cart'] ?></td>
                            <td><?= htmlspecialchars($bill['user_name']) ?></td>
                            <td><?= htmlspecialchars($bill['user_address']) ?></td>
                            <td><?= htmlspecialchars($bill['user_phone']) ?></td>
                            <td><?= htmlspecialchars($bill['user_email']) ?></td>
                            <td><?= htmlspecialchars($bill['ten_sanpham']) ?></td>
                            <td><img src="<?= htmlspecialchars($bill['img_sanpham']) ?>" width="150" height="150"></td>
                            <td><a class="btn btn-primary" href="index.php?act=chitietsp&id_sanpham=<?= htmlspecialchars($bill['id_sanpham']) ?>">Xem</a></td>
                            <td><?= number_format($bill['gia_hientai'], 0, ',', '.') ?> VNĐ</td>
                            <td><?= $bill['soluong'] ?></td>
                            <td><?= number_format($bill['total'], 0, ',', '.') ?> VNĐ</td>
                            <td>
                                <span class="badge bg-primary"><?= $bill['trangthai_bill'] ?></span>
                            </td>
                            <td>
                                <!-- Form chỉnh sửa trạng thái -->
                                 <?php
                                  $trangthai_bill = $bill['trangthai_bill'];
                                 
                                 if ($trangthai_bill == 'Đang chờ xử lí'){
                                 ?>
                                <form method="POST" action="index.php?act=updatebilluser" onsubmit="return confirmUpdate(this);">
                                    <input type="hidden" name="id_cart" value="<?= $bill['id_cart'] ?>">
                                    <input hidden name="trangthai_bill" value="Đang chờ xử lí" <?= $bill['trangthai_bill'] == 'Đang chờ xử lí' ? 'selected' : '' ?>></input>
                                    <button class="btn btn-primary" type="submit"   class="btn btn-sm  mt-2">Hủy đơn</button>
                                </form> 
                                <?php  }
                                 ?>
                            </td>
                        </tr>   
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="12" class="text-center">Không có hóa đơn nào.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
</main>
<script>
   function confirmUpdate(form) {
        return confirm("Bạn có chắc chắn muốn hủy đơn hàng này không?");
    }
</script>
    <?php
include_once "./Web/Views/footer.php";
?>
