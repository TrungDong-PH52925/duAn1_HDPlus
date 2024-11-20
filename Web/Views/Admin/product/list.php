<form action="" method="post">
    <table border="1px">
        <tr>
            <th>Ma san pham</th>
            <th>Ten san pham</th>
            <th>Anh san pham</th>
            <th>Gia san pham</th>
            <th>Giam gia san pham</th>
            <th>So luong san pham</th>
            <th>Mo ta san pham</th>
            
        </tr>
        <?php $listsp =loadAll_sanpham();
// var_dump($listsp);
foreach ($listsp as $sp) {
    extract($sp);
        if(is_file($img_sanpham)){
            $img_sanpham="<img src='".$img_sanpham."' height='80px'>";
        }else{
            $img_sanpham="ko co img";
        }
        echo '<tr>
            
                <td>'.$ten_sanpham.'</td>
               <td>'.$img_sanpham.'</td>
               <td>'.$gia_sanpham.'</td>
               <td>'.$giamgia_sanpham.'</td>
               <td>'.$quantity_sanpham.'</td>
               <td>'.$mota_sanpham.'</td>
           </tr>'; }
        ?>
 
    </table>
</form>
<!-- id_sanpham	ten_sanpham	img_sanpham	gia_sanpham	giamgia_sanpham	quantity_sanpham	mota_sanpham	id_danhmuc	 -->