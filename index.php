<?php 
    require "Web/Views/header.php";
    require "Web/Views/main.php";
    require "Web/Views/footer.php";
    require "Web/Config/pdo.php";










    if((isset($_GET['act']))&&($_GET['act']!="")){
        $act = $_GET['act'];
        switch ($act){
                        case 'dangky':
                            if(isset($_POST['dangky'])&&($_POST['dangky'])){
                                $email = $_POST['email'];
                                $user = $_POST['user'];
                                $pass = $_POST['pass'];
                                insert_taikhoan($email,$user,$pass);
                                $thongbao ="Đã đăng ký thành công.Vui lòng đăng nhập!!!";
                            }
                            require_once "./Web/Views/Admin/account/register.php";
                            break;
        
    
                    default:
                    require "../duAn1_HDPlus/index.php";
                    break;    
        }
    }else{
        include "../duAn1_HDPlus/index.php";   
    }
?>