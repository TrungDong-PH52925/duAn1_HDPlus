<?php
class danhMucController{
    public function listdm(){
        $danhmuc=new danhMuc();
        $getdm=$danhmuc->getDatadm();
        include_once 'Web/Views/Admin/banner/list.php';
    }
    public function addDanhmuc(){
        if(isset($_POST['btn_add'])&&($_POST['btn_add'])){
            $name=$_POST['ten_dm'];
            $target_dir="./public/img/";
            $name_img=basename($_FILES['img_dm']['tmp_name']);
            $target_file=$target_dir.$name_img;
            // if($_FILES['img_dm']['error'] == 0){
                if (move_uploaded_file($_FILES['img_dm']['tmp_name'], $target_file)) {

            $danhmuc=new danhMuc();
            $check=$danhmuc->insert_danhmuc(null,$name,$target_file);
            if($check){
                echo "them thanh cong";
            }else{
                echo "them that bai";
            }
        
        }else{
            echo "loi tai anh";
        }
    }else{
            echo "co loi xay ra" .$_FILES['img_dm']['error'];
        }
        include 'Web/Views/Admin/banner/add.php';
        }
      public function editdanhMuc()  {
        if(isset($_GET['id'])){
            $danhmuc=new danhMuc();
            $iddanhmuc=$danhmuc->getId_danhmuc($_GET['id']);
        }
      }
    }


?>