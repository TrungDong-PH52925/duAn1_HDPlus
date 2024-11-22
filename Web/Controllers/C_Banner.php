<?php
require_once "./Web/Models/M_Banner.php";
 class bannerController {
    private $bn;
    public function __construct(){
        $this->bn = new banner();
    }
    public function addBanner(){
        // echo 123;
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['thembn'])) {
        // if(isset($_POST['themdm']) && ($_POST['themdm'])){
        // echo 123;

            $name_banner = $_POST['name_banner'];
            $img_banner = $_FILES['img_banner']['name'];
            $target_dir = "./public/upload/";
            $target_file = $target_dir . basename($_FILES['img_banner']['name']);
            if(move_uploaded_file($_FILES['img_banner']['tmp_name'], $target_file)){
                echo " File ảnh" . htmlspecialchars(basename($_FILES['img_banner']['name'])) . "đã được tải lên ."; 
            }else{
                echo "Xảy ra lỗi khi tải ảnh lên";
            }
            
            $this-> bn -> insert_Banner($name_banner, $img_banner);
        }
        include './Web/Views/Admin/banner/add.php';

        
    }


    public function listBanner(){
        
       $this-> bn-> getAll_Banner();
        include './Web/Views/Admin/banner/list.php';
        
    }

    public function loadoneBanner(){
        if(isset($_GET['id']) && ($_GET['id']) > 0){          
            
            $newbn =$this-> bn -> loadone_Banner($_GET['id']);
            include './Web/Views/Admin/banner/edit.php';
            // return $new;
        }

    }
    public function editBanner(){
        // var_dump($_POST);
        

        if(isset($_POST['editbn']) && ($_POST['editbn'])){
        // var_dump($_POST);

            $id_banner = $_POST['id_banner'];
            $ten_banner = $_POST['name_banner'];
            $img_banner = $_FILES['img_banner']['name'];
            $target_dir = "./public/upload/";
            $target_file = $target_dir . basename($_FILES['img_banner']['name']);
            if(move_uploaded_file($_FILES['img_banner']['tmp_name'], $target_file)){
                // echo " File ảnh" . htmlspecialchars(basename($_FILES['img_banner']['name'])) . "đã được tải lên ."; 
            }else{
                // echo "Xảy ra lỗi khi tải ảnh lên";
            }
            // $img_banner = $target_file;
          $this-> bn -> update_Banner($id_banner,$ten_banner,$img_banner);
       
            
            // $alert = "Cập nhập thành công !";
        }
        // $this-> dm -> getAll_banner();
        include './Web/Views/Admin/banner/list.php';

        // echo "Cập nhập thành công !";
    }

    public function deleteBanner(){
    if(isset($_GET['id']) && ($_GET['id'] >0)){
        
        $xoa = $this-> bn -> delete_banner($_GET['id']);
   
    }
    include './Web/Views/Admin/banner/list.php';
    }
 }