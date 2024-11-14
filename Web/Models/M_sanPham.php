<?php
include_once "Web/Config/ConnectDatabase.php";
function insert_sanpham($ten_sanpham, $img_sanpham, $gia_sanpham, $giamgia_sanpham, $quantity_sanpham, $mota_sanpham){
    $sql="INSERT INTO `sanpham`(`ten_sanpham`, `img_sanpham`, `gia_sanpham`, `giamgia_sanpham`, `quantity_sanpham`, `mota_sanpham`,`id_danhmuc`) VALUES (?,?,?,?,?,?,?)";
    try {
        pdo_execute($sql, $ten_sanpham, $img_sanpham, $gia_sanpham, $giamgia_sanpham, $quantity_sanpham, $mota_sanpham,null);
        return true;
    } catch (PDOException $e) {
        // In ra lỗi để kiểm tra
        echo "Lỗi khi thêm sản phẩm: " . $e->getMessage();
        return false;
    }

    // pdo_execute($ten_sanpham, $img_sanpham, $gia_sanpham, $giamgia_sanpham, $quantity_sanpham, $mota_sanpham);
}
function loadAll_sanpham(){
    $sql="SELECT * FROM `sanpham`";
    $listsp=pdo_query($sql);
    return $listsp;
}

?>