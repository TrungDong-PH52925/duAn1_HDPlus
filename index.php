<?php 
include "Web/Config/dbconnect.php";
include "Web/Models/M_sanPham.php";
include "Web/Controllers/C_sanPham.php";
if(isset($_GET['act'])&&($_GET['act'])!=""){
$act=$_GET['act'];
switch ($act) {
    case 'addsp':
        include "Web/Views/Admin/product/add.php";
        break;
    case 'editsp':
        include "Web/Views/Admin/product/edit.php";
        break;
        case 'listsp':
            include "Web/Views/Admin/product/list.php";
            break;   
    default:
        include "Web/Views/Admin/product/list.php";
        break;
}
}else{
    include "Web/Views/Admin/product/list.php";
}

?>