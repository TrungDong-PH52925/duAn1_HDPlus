<?php
require_once "Web/Models/M_sanPham.php";
// Add
class sanPhamController{
   private $sp;
   public function __construct(){
      $this->sp = new sanPham();
   }
   public function addsanPham(){
if(isset($_POST['them'])&&($_POST['them'])){

   $ten_sanpham=trim($_POST['ten_sanpham']);
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
$them = $this->sp->insert_sanpham($ten_sanpham, $target_file, $gia_sanpham, $giamgia_sanpham, $quantity_sanpham, $mota_sanpham,null);
if($them){
echo"Them thanh cong";
header("location: index.php?act=listsp");
}else{
   echo "Them that bai";
}
}else {
   $thongbao="Tai anh that bai";
}
include './Web/Views/Admin/product/add.php';
   }
// list
public function listsanPham(){
$this->sp->loadAll_sanpham();
include './Web/Views/Admin/product/list.php';
}
// Edit
public function loadonesanPham(){
echo 123;
if(isset($_GET['id'])&&($_GET['id']) >0){
   
 $upone =  $this-> sp -> loadone_sanpham($_GET['id']);
   include './Web/Views/Admin/product/edit.php';
}
}
public function editsanPham(){
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
    

$update = $this->sp-> update_sanpham($id_sanpham,$ten_sanpham, $target_file, $gia_sanpham, $giamgia_sanpham, $quantity_sanpham, $mota_sanpham,null);

       if(!$update){
      
         echo "cap nhat thanh cong";
         header("location: index.php?act=litsp");
      
   //     exit();
        } else{
      echo "Cap nhat that bai";
       } 
      }
      include './Web/Views/Admin/product/edit.php';
   }
     function deletesanPham(){
      if(isset($_GET['id'])&&($_GET['id']>0)){
         $delete = $this->sp->delete_sanpham($_GET['id']);
      }
      include './Web/Views/Admin/product/list.php';
     }
     public function loadsanPham(){
      echo 123;
      if(isset($_GET['id'])&&($_GET['id']) >0){
         
       $upone =  $this-> sp -> loadone_sanpham($_GET['id']);
         include './Web/Views/Admin/product/chitiet.php';
      }
      }
      
   }   
?>
<!-- id_sanpham	ten_sanpham	img_sanpham	gia_sanpham	giamgia_sanpham	quantity_sanpham	mota_sanpham	id_danhmuc	
 -->