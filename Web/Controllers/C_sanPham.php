<?php
include_once "Web/Models/M_sanPham.php";
include_once "Web/Config/dbconnect.php";
// Add
if(isset($_POST['them'])&&($_POST['them'])){

   $ten_sanpham=$_POST['ten_sanpham'];
   $img_sanpham=$_FILES['img_sanpham']['name'];
   $target_dir="public/img/";
   $target_file =$target_dir.basename($_FILES['img_sanpham']['name']);
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
echo"Them thanh cong";
header("location: index.php?act=listsp");
}else{
   echo "Them that bai";
}
}else {
   $thongbao="Tai anh that bai";
}
// list
$sanpham_one="";
$listsp=loadAll_sanpham();
// Edit
if(isset($_GET['id'])&&($_GET['id'])){
   var_dump($_GET['id']);
   $sanpham_one=loadone_sanpham($_GET['id']);
   if(!$sanpham_one){
      echo "ko ton tai";
   }
}
$listsp=loadAll_sanpham();
// update


if(isset($_POST['capnhat'])&&($_POST['capnhat'])){

    $id_sanpham=$_POST['id_sanpham'];
    $ten_sanpham=$_POST['ten_sanpham'];
    $img_sanpham=$_FILES['img_sanpham']['name'];
    $target_dir="public/img";
     $target_file =$target_dir.'/' .basename($_FILES['img_sanpham']['name']);
     if(move_uploaded_file($_FILES['img_sanpham']['tmp_name'],$target_file)){
//  echo "anh da duoc tai len" . $target_file;
 $img_sanpham=$target_file;
     }else{
        echo "loi tai anh len .duong dan tam " .$_FILES['img_sanpham']['tmp_name'];
        echo "Duong dan dich:" . $target_file;
      }

      
    $gia_sanpham=$_POST['gia_sanpham'];
    $giamgia_sanpham=$_POST['giamgia_sanpham'];
    $quantity_sanpham=$_POST['quantity_sanpham'];
    $mota_sanpham=$_POST['mota_sanpham'];
    

$result =update_sanpham($id_sanpham,$ten_sanpham, $target_file, $gia_sanpham, $giamgia_sanpham, $quantity_sanpham, $mota_sanpham,null);

       if(!$result){
      
         echo "cap nhat thanh cong";
         header("location: index.php?act=litsp");
      
   //     exit();
        } else{
      echo "Cap nhat that bai";
       } 
      }
      $listsp=loadAll_sanpham();
// delete 

      // if(isset($_POST['delete'])){
      //    if(isset($_GET['id'])&&($_GET['id']>0)){
      //       delete_sanpham($_GET['id']);
      // }
      // }
?>
<!-- id_sanpham	ten_sanpham	img_sanpham	gia_sanpham	giamgia_sanpham	quantity_sanpham	mota_sanpham	id_danhmuc	
 -->