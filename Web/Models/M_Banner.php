<?php
require_once './Web/Config/dbconnect.php';

class Banner{
    public $connect;

    public  function getAll_Banner(){
        $sql = "SELECT * FROM banner ORDER BY id_banner";
        $listbanner = pdo_query($sql);
        return $listbanner;

    }
    public function insert_Banner($name_banner, $img_banner) {
        $sql = "INSERT INTO banner (name_banner, img_banner) VALUES ('$name_banner', '$img_banner')";
        pdo_execute($sql);
    }
    public function loadone_Banner($id){
        $sql = "SELECT * FROM banner WHERE id_banner =". $id;

        $dm = pdo_query_one($sql);

        return $dm;
    }

    public function update_Banner($id_banner,$name_banner,$img_banner) {
        $sql = "UPDATE banner SET name_banner= '$name_banner',img_banner= '$img_banner' WHERE id_banner ='$id_banner'";
        pdo_execute($sql);  
    }
        


    public function delete_Banner($id){
        $sql = "DELETE FROM banner WHERE id_banner =" .$id;
        $cm = pdo_execute($sql);
        return $cm;
    }
}
?>