<?php
ob_start();
session_start();
require_once 'Web/Config/dbconnect.php';
require "Web/Models/M_Account.php";
require "Web/Controllers/C_Account.php";
include "Web/Controllers/C_danhMuc.php";
include "Web/Models/M_sanPham.php";
include "Web/Controllers/C_sanPham.php";
include "Web/Models/M_binhLuan.php";
include "Web/Controllers/C_binhLuan.php";
$C_sanpham = new sanPhamController();
$C_danhmuc = new danhMucController();
$C_Account = new C_Account();
$C_binhluan = new binhLuanController();
// Kiểm tra hành động



if (isset($_GET['act']) && $_GET['act'] != "") {
    $act = $_GET['act'];
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
      // Quản lý bình luận
    case 'list_binhluan': // Hiển thị danh sách bình luận
        $C_binhluan->listBinhLuan();
        break;

    case 'list_binhluan_by_sanpham': // Hiển thị bình luận theo sản phẩm
        $id_sanpham = $_GET['id_sanpham'] ?? 0;
        $C_binhluan->listBinhLuanBySanPham($id_sanpham);
        break;

    case 'add_edit_binhluan': // Thêm hoặc sửa bình luận
        $C_binhluan->addEditBinhLuan();
        break;

    case 'delete_binhluan': // Xóa bình luận
        if (isset($_GET['id_binhluan']) && $_GET['id_binhluan'] > 0) {
            $C_binhluan->deleteBinhLuan();
        } else {
            echo "Không tìm thấy bình luận cần xóa!";
        }
        break;
        case 'chitietsp':
            $C_sanpham->chiTietSanPham();
        default:
            // include_once "./Web/Views/Client/home.php";
    }
} else {
    // Nếu không có act, load giao diện trang chính
    include_once "./Web/Views/Client/home.php";
}
