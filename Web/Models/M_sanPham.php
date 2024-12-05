<?php
include_once "Web/Config/dbconnect.php";
class sanPham{
public function insert_sanpham($ten_sanpham, $img_sanpham, $gia_sanpham, $giamgia_sanpham, $quantity_sanpham, $mota_sanpham,$id_danhmuc){
    $sql="INSERT INTO `sanpham`(`ten_sanpham`, `img_sanpham`, `gia_sanpham`, `giamgia_sanpham`, `quantity_sanpham`, `mota_sanpham`,`id_danhmuc`) VALUES (?,?,?,?,?,?,?)";
     pdo_execute($sql,$ten_sanpham, $img_sanpham, $gia_sanpham, $giamgia_sanpham, $quantity_sanpham, $mota_sanpham,$id_danhmuc);
}
 public function loadAll_sanpham(){
    $sql="SELECT * FROM `sanpham`";
    $listsp=pdo_query($sql);
    return $listsp;
}
public function loadAll_sanpham_home(){
    $sql="SELECT * FROM `sanpham`";
    $listsp=pdo_query($sql);
    return $listsp;
}
public function loadone_sanpham($id_sanpham){
    $sql="SELECT * FROM `sanpham` WHERE id_sanpham='".$id_sanpham."'";
    $sp = pdo_query_one($sql);
    return $sp;
}
public function update_sanpham($id_sanpham,$ten_sanpham,$img_sanpham, $gia_sanpham, $giamgia_sanpham, $quantity_sanpham, $mota_sanpham,$id_danhmuc){
    $sql="UPDATE `sanpham` SET `ten_sanpham` = '".$ten_sanpham."', `img_sanpham` = '".$img_sanpham."', `gia_sanpham` ='".$gia_sanpham."', `giamgia_sanpham` = '".$giamgia_sanpham."', `quantity_sanpham` ='".$quantity_sanpham."', `mota_sanpham` = '".$mota_sanpham."',`id_danhmuc`='".$id_danhmuc."' WHERE `id_sanpham` = '".$id_sanpham."'";
    
pdo_execute($sql);

} 

public function delete_sanpham($id_sanpham){
    $sql="DELETE FROM `sanpham` WHERE id_sanpham='".$id_sanpham."'";
    pdo_execute($sql);
}
public function loadsanPham_danhmuc($id_danhmuc){
    $sql="SELECT * FROM `sanpham` WHERE id_danhmuc='".$id_danhmuc."'";
    $sp=pdo_query($sql);
    return $sp;
}
}
?>