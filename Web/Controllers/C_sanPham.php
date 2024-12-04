<?php
require_once "Web/Models/M_sanPham.php";
// Add
class sanPhamController
{
   private $sp;
   public function __construct()
   {
      $this->sp = new sanPham();
   }
   public function addsanPham()
   {
      if (isset($_POST['them']) && ($_POST['them'])) {

         $ten_sanpham = trim($_POST['ten_sanpham']);
         $img_sanpham = $_FILES['img_sanpham']['name'];
         $target_dir = "public/img/";
         $target_file = $target_dir . basename($_FILES['img_sanpham']['name']);
         if (move_uploaded_file($_FILES['img_sanpham']['tmp_name'], $target_file)) {
         } else {
            echo "loi tai anh len";
         }
         $gia_sanpham = $_POST['gia_sanpham'];
         $giamgia_sanpham = $_POST['giamgia_sanpham'];
         $quantity_sanpham = $_POST['quantity_sanpham'];
         $mota_sanpham = $_POST['mota_sanpham'];
         $id_danhmuc = $_POST['id_danhmuc'];
         $them = $this->sp->insert_sanpham($ten_sanpham, $target_file, $gia_sanpham, $giamgia_sanpham, $quantity_sanpham, $mota_sanpham, $id_danhmuc);
         if ($them) {
            echo "Them thanh cong";
            header("location: index.php?act=listsp");
         } else {
            echo "Them that bai";
         }
      } else {
         $thongbao = "Tai anh that bai";
      }
      include './Web/Views/Admin/product/add.php';
   }


   // list
   public function listsanPham()
   {
      $this->sp->loadAll_sanpham();
      include './Web/Views/Admin/product/list.php';
   }
   // thu

   // Edit
   public function loadonesanPham()
   {
      if (isset($_GET['id']) && ($_GET['id']) > 0) {
         $upone =  $this->sp->loadone_sanpham($_GET['id']);
         include './Web/Views/Admin/product/edit.php';
      }
   }
   public function editsanPham()
   {
      if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {

         $id_sanpham = $_POST['id_sanpham'];
         $ten_sanpham = $_POST['ten_sanpham'];
         $img_sanpham = $_FILES['img_sanpham']['name'];
         $target_dir = "public/img";
         $target_file = $target_dir . '/' . basename($_FILES['img_sanpham']['name']);
         if (move_uploaded_file($_FILES['img_sanpham']['tmp_name'], $target_file)) {
            //  echo "anh da duoc tai len" . $target_file;
            $img_sanpham = $target_file;
         } else {
            echo "loi tai anh len .duong dan tam " . $_FILES['img_sanpham']['tmp_name'];
            echo "Duong dan dich:" . $target_file;
         }


         $gia_sanpham = $_POST['gia_sanpham'];
         $giamgia_sanpham = $_POST['giamgia_sanpham'];
         $quantity_sanpham = $_POST['quantity_sanpham'];
         $mota_sanpham = $_POST['mota_sanpham'];
         $id_danhmuc = $_POST['id_danhmuc'];

         $update = $this->sp->update_sanpham($id_sanpham, $ten_sanpham, $target_file, $gia_sanpham, $giamgia_sanpham, $quantity_sanpham, $mota_sanpham, $id_danhmuc);

         if ($update) {

            echo "cap nhat thanh cong";
            header("location: index.php?act=listsp");

            //     exit();
         } else {
            echo "Cap nhat that bai";
         }
      }
      include './Web/Views/Admin/product/edit.php';
   }
   function deletesanPham()
   {
      if (isset($_GET['id']) && ($_GET['id'] > 0)) {
         $delete = $this->sp->delete_sanpham($_GET['id']);
      }
      include './Web/Views/Admin/product/list.php';
   }
   public function loadsanPham()
   {
      // echo 123;
      if (isset($_GET['id']) && ($_GET['id']) > 0) {

         $upone =  $this->sp->loadone_sanpham($_GET['id']);
         include './Web/Views/Admin/product/chitiet.php';
      }
   }
   public function chiTietSanPham()
   {
       // Kiểm tra xem id sản phẩm có được truyền qua URL hay không
       if (isset($_GET['id_sanpham']) && ($_GET['id_sanpham'] > 0)) {
           // Gọi phương thức để lấy thông tin sản phẩm dựa vào id
           $sanPhamCt = $this->sp->loadone_sanpham($_GET['id_sanpham']);
           
           // Kiểm tra nếu sản phẩm tồn tại
           if ($sanPhamCt) {
               // Gọi view chi tiết sản phẩm
               include './Web/Views/Client/chitietsp.php';
           } else {
               echo "Sản phẩm không tồn tại!";
           }
       } else {
           echo "Không tìm thấy ID sản phẩm!";
       }
   }
}
