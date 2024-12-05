<?php
class CartControlller{
    private  $cart;
    public function __construct(){
        $this->cart= new Cart();
    }
    public function addCart(){
        if(isset($_POST['addtocart'])&&($_POST['addtocart'])){
            $id_sanpham = $_POST['id_sanpham'];
            $ten_sanpham=$_POST['ten_sanpham'];
            $giamgia_sanpham=$_POST['giamgia_sanpham'];
            $img_sanpham=$_POST['img_sanpham'];
            $quantity_sanpham = $_POST['quantity_sanpham'];
            $sptocart=[$id_sanpham,$ten_sanpham,$giamgia_sanpham,$img_sanpham,$quantity_sanpham];
        }
        include 'Web/Views/Client/V_Cart.php';
    }
    
}


?>