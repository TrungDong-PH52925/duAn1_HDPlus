<?php
ob_start();
session_start();
require_once 'Web/Config/dbconnect.php';
require "Web/Models/M_Account.php";
require "Web/Controllers/C_Account.php";
include "Web/Models/M_sanPham.php";
include "Web/Controllers/C_sanPham.php";
$AllProduct = new C_Account();
// Kiểm tra hành động
if (isset($_GET['act']) && $_GET['act'] != "") {
    $act = $_GET['act'];
    switch ($act) {
        case 'login':
            $AllProduct->handleLogin();
            break;
        case 'logout':
           $AllProduct->handleLogout();
            break;
        case 'dangky':
           $AllProduct->handleRegister();
            break;
            case 'addsp':
                include "Web/Views/Admin/product/add.php";
                break;
            case 'editsp':
                include "Web/Views/Admin/product/edit.php";
                break;
                case 'listsp':
                    include "Web/Views/Admin/product/list.php";
                    break;
                    case 'delete':
                       
                            if(isset($_GET['id'])&&($_GET['id']>0)){
                               delete_sanpham($_GET['id']);
                               include "Web/Views/Admin/product/list.php";
                         }
                        case 'chitiet':
                    include "Web/Views/Admin/product/chitiet.php";
                        break;
    }
} else {
    // Nếu không có act, load giao diện trang chính
    include "Web/Views/header.php";
    include "Web/Views/main.php";
    include "Web/Views/footer.php";
}
