<?php 
require_once "Web/Config/dbconnect.php";
include "Web/Models/M_sanPham.php";
include "Web/Controllers/C_sanPham.php";
//  include "Web/Views/Admin/adminHeader.php";
$C_sanpham = new sanPhamController();
if(isset($_GET['act'])&&($_GET['act'])!=""){
$act=$_GET['act'];
switch ($act) {
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
        include "Web/Views/Admin/product/list.php";
        break;
}
}else{
    include "Web/Views/Admin/product/list.php";
}
// include "Web/Views/Admin/adminFooter.php"
?>