<?php
include_once __DIR__ . "/../adminHeader.php"; // Đường dẫn tương đối từ thư mục `bill`\

?>
<main id="main" class="main">
<div class="container mt-4">
    <h2 class="text-center mb-4">Danh sách tất cả hóa đơn</h2>
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID Cart</th>
                    <th>Tên Khách Hàng</th>
                    <th>Tài khoản</th>
                    <th>Địa Chỉ</th>
                    <th>Số Điện Thoại</th>
                    <th>Email</th>
                    <th>Tên Sản Phẩm</th>
                    <th>Giá Hiện Tại</th>
                    <th>Ảnh sản phẩm</th>
                    <th>Số Lượng</th>
                    <th>Tổng</th>
                    <th>Trạng Thái</th>
                    <th>Chỉnh Sửa</th>
                </tr>
            </thead>
            <tbody>

                <?php if (!empty($bills)): ?>
                    <?php  foreach ($bills as $bill): ?>
                        <tr>
                            <td><?= $bill['id_cart'] ?></td>
                            <td><?= htmlspecialchars($bill['user_name']) ?></td>
                            <td><?= htmlspecialchars($bill['user_account']) ?></td>
                            <td><?= htmlspecialchars($bill['user_address']) ?></td>
                            <td><?= htmlspecialchars($bill['user_phone']) ?></td>
                            <td><?= htmlspecialchars($bill['user_email']) ?></td>
                            <td><?= htmlspecialchars($bill['ten_sanpham']) ?></td>
                            <td><?= number_format($bill['gia_hientai'], 0, ',', '.') ?> VNĐ</td>
                            <td><img src="<?= htmlspecialchars($bill['img_sanpham']) ?>" alt="" width="150" height="150"></td>
                            <td><?= $bill['soluong'] ?></td>
                            <td><?= number_format($bill['total'], 0, ',', '.') ?> VNĐ</td>
                            <td>
                                <span class="badge bg-primary"><?= $bill['trangthai_bill'] ?></span>
                            </td>
                            <td>
                                <!-- Form chỉnh sửa trạng thái -->
                                <form method="POST" action="index.php?act=updatebill">
                                    <input type="hidden" name="id_cart" value="<?= $bill['id_cart'] ?>">
                                    <select  name="trangthai_bill" class="btn btn-primary">
                                    <option   value="Đang chờ xử lí" <?= $bill['trangthai_bill'] == 'Đang chờ xử lí' ? 'selected' : '' ?>>Đang chờ xử lí</option>
                                        <option   value="Đang giao" <?= $bill['trangthai_bill'] == 'Đang giao' ? 'selected' : '' ?>>Đang giao</option>
                                        <option  value="Đã giao" <?= $bill['trangthai_bill'] == 'Đã giao' ? 'selected' : '' ?>>Đã giao</option>
                                    </select>
                                    <button type="submit" class="btn btn-sm btn-success mt-2">Cập nhật</button>
                                </form>
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

    <?php
include_once __DIR__ . "/../adminFooter.php"; // Đường dẫn tương đối từ thư mục `bill`
?>