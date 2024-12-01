<?php
ob_start();
session_start();
if (!isset($_SESSION['giohang'])) $_SESSION['giohang'] = [];

require_once 'Web/Config/dbconnect.php';

// Load các controller và model
require_once 'Web/Models/M_Account.php';
require_once 'Web/Controllers/C_Account.php';
require_once 'Web/Controllers/C_danhMuc.php';
require_once 'Web/Models/M_sanPham.php';
require_once 'Web/Controllers/C_sanPham.php';
require_once 'Web/Models/M_binhLuan.php';
require_once 'Web/Controllers/C_binhLuan.php';
require_once 'Web/Controllers/C_Cart.php';
require_once 'Web/Controllers/C_Banner.php';

// Khởi tạo các đối tượng controller
$C_Account = new C_Account();
$C_danhmuc = new danhMucController();
$C_sanpham = new sanPhamController();
$C_binhluan = new binhLuanController();
$cartController = new CartController();
$C_Banner = new bannerController();


$id_user = $_SESSION['id_user'] ?? null;
// Kiểm tra hành động (action) từ URL
$act = $_GET['act'] ?? '';

switch ($act) {
    case 'login':
        $C_Account->handleLogin();
        break;
    case 'logout':
        $C_Account->handleLogout();
        break;
    case 'dangky':
        $C_Account->handleRegister();
        break;

        // Quản lý danh mục
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

        // Quản lý sản phẩm
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

        // Trang chi tiết sản phẩm
    case 'chitietsp':
        $C_sanpham->chiTietSanPham();
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
        // Nếu không có hành động nào, hiển thị trang chủ
    default:
        include_once "./Web/Views/Client/home.php";
        break;
}
