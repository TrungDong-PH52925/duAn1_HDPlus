
<?php
ob_start();
session_start();
require_once 'Web/Config/dbconnect.php';
require "Web/Controllers/C_Account.php";
include "Web/Controllers/C_danhMuc.php";
include "Web/Controllers/C_sanPham.php";
include "Web/Controllers/C_Banner.php";

$C_sanpham = new sanPhamController();
$C_danhmuc = new danhMucController();
$C_Banner = new bannerController();
$AllProduct = new C_Account();

if(isset($_GET['act'])&&($_GET['act'])!=""){
    $act=$_GET['act'];
    switch ($act) {
        
        // LOGIN
   
        case 'login':
            $AllProduct->handleLogin();
            break;
        case 'logout':
           $AllProduct->handleLogout();
            break;
        case 'dangky':
           $AllProduct->handleRegister();
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

                //  SẢN PHẨM
                
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
            //BANNER
            case 'addbn':
                $C_Banner -> addBanner();
                break;
            case 'listbn':
                
                $C_Banner -> listBanner();
                break;
                case 'updatebn':
                    $id_banner = $_GET['id'];
                    $C_Banner -> loadoneBanner($id_banner);
                    
                     break;
                case 'editbn':
                    
                    $C_Banner -> editBanner();
    
                     break;
                case 'deletebn' :
                    $id_banner = $_GET['id'];                
                    $C_Banner -> deleteBanner($id_banner);
                     break;
        default:
        
        include_once "./Web/Views/Client/home.php";
    }
    }else{
        
        include_once "./Web/Views/Client/home.php";

        

    }
    ?>
   