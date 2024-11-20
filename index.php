
<?php
require_once 'Web/Config/dbconnect.php';
// include "Web/Models/M_danhMuc.php";
include "Web/Controllers/C_danhMuc.php";
$C_danhmuc = new danhMucController();

if(isset($_GET['act'])&&($_GET['act'])!=""){
    $act=$_GET['act'];
    switch ($act) {
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
        // include_once "./Web/Views/Client/home.php";

        $C_danhmuc -> listDanhMuc();
    }
    }else{
        
        $C_danhmuc -> listDanhMuc();
        // include_once "./Web/Views/Client/home.php";

    }

?>