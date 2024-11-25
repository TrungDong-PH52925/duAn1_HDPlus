<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Bình Luận</title>
    <!-- Link Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .comment-management {
            margin-top: 50px;
        }

        .form-comment {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form-comment .btn {
            width: 100%;
        }

        .table th {
            background-color: #007bff;
            color: #fff;
            text-align: center;
        }

        .table td, .table th {
            vertical-align: middle;
        }
    </style>
</head>
<body>
    <section class="comment-management">
        <div class="container">
            <h1 class="text-center mb-4">Quản Lý Bình Luận</h1>

            <!-- Form thêm/sửa bình luận -->
            <form action="http://localhost/duAn1_HDPlus/index.php?act=add_edit_binhluan" method="POST" class="form-comment mb-5">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="id_binhluan" class="form-label">ID Bình Luận</label>
                        <input type="text" id="id_binhluan" name="id_binhluan" class="form-control" readonly>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="id_sanpham" class="form-label">ID Sản Phẩm</label>
                        <input type="text" id="id_sanpham" name="id_sanpham" class="form-control" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="id_user" class="form-label">ID User</label>
                        <input type="text" id="id_user" name="id_user" class="form-control" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="ngay_binhluan" class="form-label">Ngày Bình Luận</label>
                        <input type="date" id="ngay_binhluan" name="ngay_binhluan" class="form-control" required>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="noidung_binhluan" class="form-label">Nội Dung Bình Luận</label>
                        <textarea id="noidung_binhluan" name="noidung_binhluan" class="form-control" rows="4" required></textarea>
                    </div>
                </div>
                <button type="submit" name="save_comment" class="btn btn-primary">Lưu</button>
            </form>

            <!-- Bảng danh sách bình luận -->
            <div class="table-responsive">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>ID Bình Luận</th>
                            <th>ID Sản Phẩm</th>
                            <th>ID User</th>
                            <th>Nội Dung Bình Luận</th>
                            <th>Ngày Bình Luận</th>
                            <th>Hành Động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($listBinhLuan)) { ?>
                            <?php foreach ($listBinhLuan as $comment) { ?>
                                <tr>
                                    <td><?php echo $comment['id_binhluan']; ?></td>
                                    <td><?php echo $comment['id_sanpham']; ?></td>
                                    <td><?php echo $comment['id_user']; ?></td>
                                    <td><?php echo $comment['noidung_binhluan']; ?></td>
                                    <td><?php echo $comment['ngay_binhluan']; ?></td>
                                    <td>
                                        <a href="http://localhost/duAn1_HDPlus/index.php?act=edit_binhluan&id_binhluan=<?php echo $comment['id_binhluan']; ?>" class="btn btn-warning btn-sm">Sửa</a>
                                        <a href="http://localhost/duAn1_HDPlus/index.php?act=delete_binhluan&id_binhluan=<?php echo $comment['id_binhluan']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xóa bình luận này?');">Xóa</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        <?php } else { ?>
                            <tr>
                                <td colspan="6">Không có bình luận nào.</td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Link Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
