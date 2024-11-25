<?php
include_once(__DIR__ . '/../Config/dbconnect.php');


class danhMuc{
    public $connect;

    public  function getAll_danhMuc(){
        $sql = "SELECT * FROM danhmuc ORDER BY id_danhmuc";
        $listdanhmuc = pdo_query($sql);
        return $listdanhmuc;

    }
    public function insert_danhMuc($ten_danhmuc, $img_danhmuc) {
        $sql = "INSERT INTO danhmuc (ten_danhmuc, img_danhmuc) VALUES ('$ten_danhmuc', '$img_danhmuc')";
        pdo_execute($sql);
    }
    public function loadone_danhMuc($id){
        $sql = "SELECT * FROM danhmuc WHERE id_danhmuc =". $id;

        $dm = pdo_query_one($sql);

        return $dm;
    }

    public function update_danhMuc($id_danhmuc,$ten_danhmuc,$img_danhmuc) {
        $sql = "UPDATE danhmuc SET ten_danhmuc= '$ten_danhmuc',img_danhmuc= '$img_danhmuc' WHERE id_danhmuc ='$id_danhmuc'";
        pdo_execute($sql);  
    }
        


    public function delete_danhMuc($id){
        $sql = "DELETE FROM danhmuc WHERE id_danhmuc =" .$id;
        $cm = pdo_execute($sql);
        return $cm;
    }
}
?>