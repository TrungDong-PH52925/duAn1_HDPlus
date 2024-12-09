<?php
include_once(__DIR__ . '/../Config/dbconnect.php');

class SanPham
{
    public function insert_sanpham($ten_sanpham, $img_sanpham, $gia_sanpham, $giamgia_sanpham, $quantity_sanpham, $mota_sanpham, $id_danhmuc)
    {
        $sql = "INSERT INTO `sanpham`(`ten_sanpham`, `img_sanpham`, `gia_sanpham`, `giamgia_sanpham`, `quantity_sanpham`, `mota_sanpham`, `id_danhmuc`) 
                VALUES (?, ?, ?, ?, ?, ?, ?)";
        pdo_execute($sql, $ten_sanpham, $img_sanpham, $gia_sanpham, $giamgia_sanpham, $quantity_sanpham, $mota_sanpham, $id_danhmuc);
    }

    public function loadAll_sanpham()
    {
        $sql = "SELECT * FROM `sanpham`";
        return pdo_query($sql);
    }

    public function loadone_sanpham($id_sanpham)
    {
        $sql = "SELECT * FROM `sanpham` WHERE id_sanpham = ?";
        return pdo_query_one($sql, $id_sanpham);
    }
    public function loadAll_sanpham_home()
    {
        $sql = "SELECT * FROM `sanpham`";
        return pdo_query($sql);
    }
    public function update_sanpham($id_sanpham, $ten_sanpham, $img_sanpham, $gia_sanpham, $giamgia_sanpham, $quantity_sanpham, $mota_sanpham, $id_danhmuc)
    {
        $sql = "UPDATE `sanpham` 
                SET `ten_sanpham` = ?, 
                    `img_sanpham` = ?, 
                    `gia_sanpham` = ?, 
                    `giamgia_sanpham` = ?, 
                    `quantity_sanpham` = ?, 
                    `mota_sanpham` = ?, 
                    `id_danhmuc` = ? 
                WHERE `id_sanpham` = ?";
        pdo_execute($sql, $ten_sanpham, $img_sanpham, $gia_sanpham, $giamgia_sanpham, $quantity_sanpham, $mota_sanpham, $id_danhmuc, $id_sanpham);
    }

    public function delete_sanpham($id_sanpham)
    {
        $sql = "DELETE FROM `sanpham` WHERE id_sanpham = ?";
        pdo_execute($sql, $id_sanpham);
    }
    public function loadsanPham_danhmuc($id_danhmuc)
    {
        $sql = "SELECT * FROM `sanpham` WHERE id_danhmuc='" . $id_danhmuc . "' LIMIT 1";
        $sp = pdo_query($sql);
        return $sp;
    }
    public function list_sanphammoi(){
        $sql="SELECT * FROM `sanpham` ORDER BY id_sanpham DESC LIMIT 6";
        $sp=pdo_query($sql);
        return $sp;
    }
    public function search($keyword){
        $sql ="SELECT * FROM sanpham WHERE ten_sanpham LIKE ?";
        $keyword = "%" .$keyword. "%";
        $result= pdo_query($sql,[$keyword]);
        return $result;
    }
}