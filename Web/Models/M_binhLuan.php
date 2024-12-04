<?php
include_once(__DIR__ . '/../Config/dbconnect.php');

class binhLuan {
    // Thêm bình luận mới
    public function insert_binhluan($id_sanpham, $id_user, $noidung_binhluan, $ngay_binhluan) {
        $sql = "INSERT INTO `binhluan` (`id_sanpham`, `id_user`, `noidung_binhluan`, `ngay_binhluan`) VALUES (?, ?, ?, ?)";
        pdo_execute($sql, $id_sanpham, $id_user, $noidung_binhluan, $ngay_binhluan);
    }

    // Lấy tất cả bình luận
    public function loadAll_binhluan() {
        $sql = "SELECT * FROM `binhluan`";
        $listBinhLuan = pdo_query($sql);
        return $listBinhLuan;
    }

    // Lấy bình luận theo ID sản phẩm
    public function load_binhluan_by_sanpham($id_sanpham) {
        $sql = "SELECT * FROM `binhluan` WHERE id_sanpham = ?";
        $listBinhLuan = pdo_query($sql, $id_sanpham);
        return $listBinhLuan;
    }

    // Lấy một bình luận theo ID bình luận
    public function loadone_binhluan($id_binhluan) {
        $sql = "SELECT * FROM `binhluan` WHERE id_binhluan = ?";
        $binhLuan = pdo_query_one($sql, $id_binhluan);
        return $binhLuan;
    }

    // Cập nhật nội dung bình luận
    public function update_binhluan($id_binhluan, $id_sanpham, $id_user, $noidung_binhluan, $ngay_binhluan) {
        $sql = "UPDATE `binhluan` SET `id_sanpham` = ?, `id_user` = ?, `noidung_binhluan` = ?, `ngay_binhluan` = ? WHERE `id_binhluan` = ?";
        pdo_execute($sql, $id_sanpham, $id_user, $noidung_binhluan, $ngay_binhluan, $id_binhluan);
    }

    // Xóa bình luận
    public function delete_binhluan($id_binhluan) {
        $sql = "DELETE FROM `binhluan` WHERE id_binhluan = ?";
        pdo_execute($sql, $id_binhluan);
    }
}
?>