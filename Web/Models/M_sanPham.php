<?php
include_once "Web/Config/dbconnect.php";
function insert_sanpham($ten_sanpham, $img_sanpham, $gia_sanpham, $giamgia_sanpham, $quantity_sanpham, $mota_sanpham){
    $sql="INSERT INTO `sanpham`(`ten_sanpham`, `img_sanpham`, `gia_sanpham`, `giamgia_sanpham`, `quantity_sanpham`, `mota_sanpham`,`id_danhmuc`) VALUES (?,?,?,?,?,?,?)";
     try {
         pdo_execute($sql, $ten_sanpham, $img_sanpham, $gia_sanpham, $giamgia_sanpham, $quantity_sanpham, $mota_sanpham,null);
        return true;
     } catch (PDOException $e) {
        //   In ra lỗi để kiểm tra
         echo "Lỗi khi thêm sản phẩm: " . $e->getMessage();
         return false;
     }

     pdo_execute($sql,$ten_sanpham, $img_sanpham, $gia_sanpham, $giamgia_sanpham, $quantity_sanpham, $mota_sanpham,null);
}
function loadAll_sanpham(){
    $sql="SELECT * FROM `sanpham`";
    $listsp=pdo_query($sql);
    return $listsp;
}
function loadone_sanpham($id_sanpham){
    $sql="SELECT * FROM `sanpham` WHERE id_sanpham='".$id_sanpham."'";
    $sanpham=pdo_query_one($sql);
    return $sanpham;
}
function update_sanpham($id_sanpham,$ten_sanpham,$img_sanpham, $gia_sanpham, $giamgia_sanpham, $quantity_sanpham, $mota_sanpham){
    $sql="UPDATE `sanpham` SET `ten_sanpham` = '".$ten_sanpham."', `img_sanpham` = '".$img_sanpham."', `gia_sanpham` ='".$gia_sanpham."', `giamgia_sanpham` = '".$giamgia_sanpham."', `quantity_sanpham` ='".$quantity_sanpham."', `mota_sanpham` = '".$mota_sanpham."' WHERE `id_sanpham` = '".$id_sanpham."'";
    
pdo_execute($sql);

} 

function delete_sanpham($id_sanpham){
    $sql="DELETE FROM `sanpham` WHERE id_sanpham='".$id_sanpham."'";
    pdo_execute($sql);
}
?>