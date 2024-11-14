<?php
include_once "Web/Models/M_sanPham.php";
include_once "Web/Config/dbconnect.php";

if(isset($_POST['them'])&&($_POST['them'])){
   var_dump($_POST);
   $ten_sanpham=$_POST['ten_sanpham'];
   $img_sanpham=$_FILES['img_sanpham']['tmp_name'];
   $target_dir="public/img/home";
   $target_file =$target_dir.basename($_FILES['img_sanpham']['tmp_name']);
   if(move_uploaded_file($_FILES['img_sanpham']['tmp_name'],$target_file)){

   }else{
      echo "loi tai anh len";
   }
   $gia_sanpham=$_POST['gia_sanpham'];
   $giamgia_sanpham=$_POST['giamgia_sanpham'];
   $quantity_sanpham=$_POST['quantity_sanpham'];
   $mota_sanpham=$_POST['mota_sanpham'];
$result=insert_sanpham($ten_sanpham, $target_file, $gia_sanpham, $giamgia_sanpham, $quantity_sanpham, $mota_sanpham,null);
if($result){
$thongbao ="Them thanh cong";
}else{
   $thongbao="Them that bai";
}
}else {
   $thongbao="Tai anh that bai";
}

?>
<!-- id_sanpham	ten_sanpham	img_sanpham	gia_sanpham	giamgia_sanpham	quantity_sanpham	mota_sanpham	id_danhmuc	
 -->