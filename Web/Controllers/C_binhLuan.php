<?php
include_once(__DIR__ . '/../Models/M_binhLuan.php');

class binhLuanController {
    private $binhLuanModel;

    public function __construct() {
        $this->binhLuanModel = new binhLuan();
    }

    // Hiển thị danh sách tất cả bình luận
    public function listBinhLuan() {
        $listBinhLuan = $this->binhLuanModel->loadAll_binhluan();
        include './Web/Views/Admin/comment/list.php'; // Gọi giao diện danh sách bình luận
    }

    // Hiển thị danh sách bình luận theo sản phẩm
    public function listBinhLuanBySanPham($id_sanpham) {
        $listBinhLuan = $this->binhLuanModel->load_binhluan_by_sanpham($id_sanpham);
        include './Web/Views/Admin/comment/list_by_sanpham.php'; // Gọi giao diện danh sách bình luận theo sản phẩm
    }

    // Thêm hoặc sửa bình luận
    public function addEditBinhLuan() {
        if (isset($_POST['save_comment']) && ($_POST['save_comment'])) {
            $id_binhluan = $_POST['id_binhluan'];
            $id_sanpham = $_POST['id_sanpham'];
            $id_user = $_POST['id_user'];
            $noidung_binhluan = $_POST['noidung_binhluan'];
            $ngay_binhluan = $_POST['ngay_binhluan'];

            if ($id_binhluan) {
                // Nếu có ID bình luận -> Cập nhật
                $this->binhLuanModel->update_binhluan($id_binhluan, $id_sanpham, $id_user, $noidung_binhluan, $ngay_binhluan);
                $message = "Cập nhật bình luận thành công!";
            } else {
                // Nếu không có ID bình luận -> Thêm mới
                $this->binhLuanModel->insert_binhluan($id_sanpham, $id_user, $noidung_binhluan, $ngay_binhluan);
                $message = "Thêm bình luận mới thành công!";
            }

            // Sau khi xử lý, quay lại danh sách bình luận
            header("Location: index.php?act=list_binhluan&message=" . urlencode($message));
        } else {
            // Hiển thị giao diện thêm/sửa bình luận
            $binhLuan = null;
            if (isset($_GET['id_binhluan'])) {
                $binhLuan = $this->binhLuanModel->loadone_binhluan($_GET['id_binhluan']);
            }
            include 'http://localhost/duAn1_HDPlus/Web/Views/Admin/binhluan/list.php'; // Gọi giao diện thêm/sửa bình luận
        }
    }

    // Xóa bình luận
    public function deleteBinhLuan() {
        if (isset($_GET['id_binhluan']) && $_GET['id_binhluan'] > 0) {
            $id_binhluan = $_GET['id_binhluan'];
            $this->binhLuanModel->delete_binhluan($id_binhluan);
            $message = "Xóa bình luận thành công!";
            header("Location: index.php?act=list_binhluan&message=" . urlencode($message));
        } else {
            $message = "Không tìm thấy bình luận để xóa!";
            header("Location: index.php?act=list_binhluan&message=" . urlencode($message));
        }
    }
}
