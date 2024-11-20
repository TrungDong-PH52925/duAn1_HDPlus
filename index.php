
<?php
require_once 'Web/Config/dbconnect.php';
include "Web/Controllers/C_danhMuc.php";
include "Web/Models/M_sanPham.php";
include "Web/Controllers/C_sanPham.php";
$C_sanpham = new sanPhamController();
$C_danhmuc = new danhMucController();

if(isset($_GET['act'])&&($_GET['act'])!=""){
    $act=$_GET['act'];
    switch ($act) {
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
        default:
        // include_once "./Web/Views/Client/home.php";

        $C_danhmuc -> listDanhMuc();
    }
    }else{
        
        $C_danhmuc -> listDanhMuc();
        // include_once "./Web/Views/Client/home.php";

    }

