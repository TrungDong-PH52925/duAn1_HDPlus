
<?php
ob_start();
session_start();
if (!isset($_SESSION['giohang'])) $_SESSION['giohang'] = [];
require_once 'Web/Config/dbconnect.php';
require "Web/Controllers/C_Account.php";
include "Web/Controllers/C_danhMuc.php";
include "Web/Controllers/C_sanPham.php";
include "Web/Controllers/C_Banner.php";
include 'Web/Controllers/C_Cart.php';
include 'Web/Controllers/C_Bill.php';
require_once 'Web/Controllers/C_binhLuan.php';
$C_sanpham = new sanPhamController();
$C_danhmuc = new danhMucController();
$C_Banner  = new bannerController();
$C_Bill  = new billController();
$cartController = new CartController();
$C_Account = new C_Account();

if (isset($_GET['act']) && ($_GET['act']) != "") {
    $act = $_GET['act'];
    switch ($act) {

            // LOGIN

        case 'login':
            $C_Account->handleLogin();
            break;
        case 'logout':
            $C_Account->handleLogout();
            break;
        case 'dangky':
            $C_Account->handleRegister();
            break;
        case 'admin':
            include_once "Web/Views/Admin/adminIndex.php";
            break;
        case 'user':

            $C_Account->update_User();


            include "./Web/Views/Client/user.php";


            break;
            // DANH MỤC

        case 'adddm':
            $C_danhmuc->addDanhMuc();
            break;
        case 'listdm':

            $C_danhmuc->listDanhMuc();
            break;
        case 'updatedm':
            $id_danhmuc = $_GET['id'];
            $C_danhmuc->loadoneDanhMuc($id_danhmuc);

            break;
        case 'editdm':

            $C_danhmuc->editDanhMuc();

            break;
        case 'deletedm':
            $id_danhmuc = $_GET['id'];
            $C_danhmuc->deleteDanhMuc($id_danhmuc);
            break;

            //  SẢN PHẨM

        case 'addsp':
            $C_sanpham->addsanPham();
            break;
        case 'editsp':
            $C_sanpham->editsanPham();
            break;
        case 'updatesp':
            $id_sanpham = $_GET['id'];
            $C_sanpham->loadonesanPham($id_sanpham);
            break;
        case 'listsp':
            $C_sanpham->listsanPham();
            break;
        case 'delete':
            $id_sanpham = $_GET['id'];
            $C_sanpham->deletesanPham($id_sanpham);
            break;
        case 'chitiet':
            $C_sanpham->loadsanPham($_GET['id']);
            break;
            //BANNER
        case 'addbn':
            $C_Banner->addBanner();
            break;
        case 'listbn':

            $C_Banner->listBanner();
            break;
        case 'updatebn':
            $id_banner = $_GET['id'];
            $C_Banner->loadoneBanner($id_banner);

            break;
        case 'editbn':

            $C_Banner->editBanner();

            break;
        case 'deletebn':
            $id_banner = $_GET['id'];
            $C_Banner->deleteBanner($id_banner);
            break;

            // Quản lý giỏ hàng
        case 'addtocart':
            $cartController->addToCart();
            break;
        case 'removeCartItem':
            $cartController->removeFromCart();
            break;
            // Quản lý bình luận
        case 'list_binhluan':
            $C_binhluan->listBinhLuan();
            break;
        case 'list_binhluan_by_sanpham':
            $id_sanpham = $_GET['id_sanpham'] ?? 0;
            $C_binhluan->listBinhLuanBySanPham($id_sanpham);
            break;
        case 'add_edit_binhluan':
            $C_binhluan->addEditBinhLuan();
            break;
        case 'delete_binhluan':
            if (isset($_GET['id_binhluan']) && $_GET['id_binhluan'] > 0) {
                $C_binhluan->deleteBinhLuan();
            } else {
                echo "Không tìm thấy bình luận cần xóa!";
            }
            break;
            //thanhtoan
        case 'bill':
            include_once "./Web/Views/Client/V_Bill.php";
            break;
        case 'addbill':

            $result =   $C_Bill->addBill();
            include_once "./Web/Views/Client/V_Bill.php";

            break;
        case 'listbill':
            $C_Bill -> listBills();
            break;
        case 'updatebill':
           $C_Bill->updateStatus();

            // Trang chi tiết sản phẩm
        case 'chitietsp':
            $C_sanpham->chiTietSanPham();
            break;
            // Nếu không có hành động nào, hiển thị trang chủ
        default:

            include_once "./Web/Views/Client/home.php";
    }
} else {

    include_once "./Web/Views/Client/home.php";
}
?>
   