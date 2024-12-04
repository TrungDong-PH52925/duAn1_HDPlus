<?php
include_once(__DIR__ . '/../Models/M_binhLuan.php');

class BinhLuanController
{
    private $binhLuanModel;

    public function __construct()
    {
        $this->binhLuanModel = new BinhLuan();
    }

    // Hiển thị danh sách tất cả bình luận
    public function listBinhLuan()
    {
        try {
            $listBinhLuan = $this->binhLuanModel->loadAll_binhluan();
            include '../Views/Client/chitietsp.php'; // Gọi giao diện danh sách bình luận
        } catch (Exception $e) {
            // Xử lý lỗi
            $errorMessage = "Có lỗi xảy ra: " . $e->getMessage();
            include '../Views/Client/error.php'; // Hiển thị thông báo lỗi
        }
    }

    // Hiển thị danh sách bình luận theo sản phẩm
    public function listBinhLuanBySanPham($id_sanpham)
    {
        try {
            $listBinhLuan = $this->binhLuanModel->load_binhluan_by_sanpham($id_sanpham);
            include './Web/Views/Admin/comment/list_by_sanpham.php'; // Gọi giao diện danh sách bình luận theo sản phẩm
        } catch (Exception $e) {
            // Xử lý lỗi
            $errorMessage = "Có lỗi xảy ra: " . $e->getMessage();
            include './Web/Views/Admin/error.php'; // Hiển thị thông báo lỗi
        }
    }

    // Thêm hoặc sửa bình luận
    public function addEditBinhLuan()
    {
        if (isset($_POST['gui']) && $_POST['gui']) {
            $id_binhluan = $_POST['id_binhluan'] ?? null; // Gán null nếu không tồn tại
            $id_sanpham = $_POST['id_sanpham'] ?? null; 
            $id_user = $_POST['id_user'] ?? null; 
            $noidung_binhluan = $_POST['noidung_binhluan'] ?? null; 
            $ngay_binhluan = date('Y-m-d H:i:s');
        
            // Kiểm tra các biến trước khi sử dụng
            if (is_null($id_binhluan) || is_null($id_sanpham) || is_null($id_user) || is_null($noidung_binhluan)) {
                echo "Có biến không xác định!";
                return;
            }
        
            // Thực hiện cập nhật hoặc thêm bình luận
            if ($id_binhluan) {
                // Cập nhật
                $this->binhLuanModel->update_binhluan($id_binhluan, $id_sanpham, $id_user, $noidung_binhluan, $ngay_binhluan);
                $message = "Cập nhật bình luận thành công!";
            } else {
                // Thêm mới
                $this->binhLuanModel->insert_binhluan($id_sanpham, $id_user, $noidung_binhluan, $ngay_binhluan);
                $message = "Thêm bình luận mới thành công!";
            }
        
            // Chuyển hướng trở lại trang chi tiết sản phẩm với thông báo thành công
            header("Location: http://localhost/duAn1_HDPlus/Web/Views/Client/chitietsp.php?message=" . urlencode($message));
            exit;
        }
        
    }

    // Xóa bình luận
    public function deleteBinhLuan()
    {
        if (isset($_GET['id_binhluan']) && $_GET['id_binhluan'] > 0) {
            $id_binhluan = $_GET['id_binhluan'];
            try {
                $this->binhLuanModel->delete_binhluan($id_binhluan);
                $message = "Xóa bình luận thành công!";
            } catch (Exception $e) {
                $message = "Có lỗi xảy ra khi xóa bình luận: " . $e->getMessage();
            }
            header("Location: index.php?act=list_binhluan&message=" . urlencode($message));
        } else {
            $message = "Không tìm thấy bình luận để xóa!";
            header("Location: index.php?act=list_binhluan&message=" . urlencode($message));
        }
    }
}
?>