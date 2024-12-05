<?php 
ob_start();
session_start();
require_once "Web/Config/dbconnect.php";
include "Web/Models/M_sanPham.php";
include "Web/Controllers/C_danhMuc.php";
include "Web/Controllers/C_sanPham.php";
require "Web/Models/M_Account.php";
require "Web/Controllers/C_Account.php";
//  include "Web/Views/Admin/adminHeader.php";
$C_danhmuc = new danhMucController();
$C_sanpham = new sanPhamController();
$C_Account = new C_Account();
// thu
if(isset($_GET['act'])&&($_GET['act'])!=""){
$act=$_GET['act'];
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
    case 'addsp':
       $C_sanpham-> addsanPham();
        break;
    case 'editsp':
        $C_sanpham->editsanPham();
        break;
    case 'updatesp':
        $id_sanpham=$_GET['id'];
        $C_sanpham-> loadonesanPham($id_sanpham);
        break;
        case 'listsp':
           $C_sanpham->listsanPham();
            break;
            case 'delete':
                $id_sanpham=$_GET['id'];
                $C_sanpham->deletesanPham($id_sanpham);
                   break;
                case 'chitiet':
                    $C_sanpham->loadsanPham($_GET['id']);
                break;
                 // DANH MỤC
        case 'adddm':
            $C_danhmuc -> addDanhMuc();
            break;
        case 'listdm':
            
            $C_danhmuc -> listDanhMuc();
            break;
            case 'updatedm':
                $id_danhmuc = $_GET['id'];
                $C_danhmuc -> loadoneDanhMuc($id_danhmuc);
                
                 break;
            case 'editdm':
                
                $C_danhmuc -> editDanhMuc();

                 break;
            case 'deletedm' :
                $id_danhmuc = $_GET['id'];                
                $C_danhmuc -> deleteDanhMuc($id_danhmuc);
                 break;
        
    default:
        include_once "./Web/Views/Client/home.php";
        break;
}
}else{
    include_once "./Web/Views/Client/home.php";
}

// include "Web/Views/Admin/adminFooter.php"
?>