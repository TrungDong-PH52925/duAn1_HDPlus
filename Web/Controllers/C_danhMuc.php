<?php
require_once "./Web/Models/M_danhMuc.php";
 class danhMucController {
    private $dm;
    public function __construct(){
        $this->dm = new danhMuc();
    }
    public function addDanhMuc(){
        // echo 123;
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['themdm'])) {
        // if(isset($_POST['themdm']) && ($_POST['themdm'])){
        // echo 123;

            $ten_danhmuc = $_POST['ten_danhmuc'];
            $img_danhmuc = $_FILES['img_danhmuc']['name'];
            $target_dir = "./public/upload/";
            $target_file = $target_dir . basename($_FILES['img_danhmuc']['name']);
            if(move_uploaded_file($_FILES['img_danhmuc']['tmp_name'], $target_file)){
                echo " File ảnh" . htmlspecialchars(basename($_FILES['img_danhmuc']['name'])) . "đã được tải lên ."; 
            }else{
                echo "Xảy ra lỗi khi tải ảnh lên";
            }
            
            $this-> dm -> insert_danhMuc($ten_danhmuc, $img_danhmuc);
        }
        include './Web/Views/Admin/danhmuc/add.php';

        
    }


    public function listDanhMuc(){
        
       $this-> dm-> getAll_danhMuc();
        include './Web/Views/Admin/danhmuc/list.php';
        
    }

    public function loadoneDanhMuc(){
        if(isset($_GET['id']) && ($_GET['id']) > 0){          
            
            $new =$this-> dm -> loadone_danhmuc($_GET['id']);
            include './Web/Views/Admin/danhmuc/edit.php';
            // return $new;
        }

    }
    public function editDanhMuc(){
        // var_dump($_POST);
        

        if(isset($_POST['editdm']) && ($_POST['editdm'])){
        // var_dump($_POST);

            $id_danhmuc = $_POST['id_danhmuc'];
            $ten_danhmuc = $_POST['ten_danhmuc'];
            $img_danhmuc = $_FILES['img_danhmuc']['name'];
            $target_dir = "./public/upload/";
            $target_file = $target_dir . basename($_FILES['img_danhmuc']['name']);
            if(move_uploaded_file($_FILES['img_danhmuc']['tmp_name'], $target_file)){
                // echo " File ảnh" . htmlspecialchars(basename($_FILES['img_danhmuc']['name'])) . "đã được tải lên ."; 
            }else{
                // echo "Xảy ra lỗi khi tải ảnh lên";
            }
            // $img_danhmuc = $target_file;
          $this-> dm -> update_danhMuc($id_danhmuc,$ten_danhmuc,$img_danhmuc);
       
            
            // $alert = "Cập nhập thành công !";
        }
        // $this-> dm -> getAll_danhMuc();
        include './Web/Views/Admin/danhmuc/list.php';

        // echo "Cập nhập thành công !";
    }

    public function deleteDanhMuc(){
    if(isset($_GET['id']) && ($_GET['id'] >0)){
        
        $xoa = $this-> dm -> delete_danhmuc($_GET['id']);
   
    }
    include './Web/Views/Admin/danhmuc/list.php';
    }
 }