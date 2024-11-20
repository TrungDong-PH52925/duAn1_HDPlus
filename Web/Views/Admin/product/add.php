

<!-- id_sanpham	ten_sanpham	img_sanpham	gia_sanpham	giamgia_sanpham	quantity_sanpham	mota_sanpham	id_danhmuc	
 -->
<form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
    <label for="">Ten san pham</label>
    <input type="text" name="ten_sanpham">
    <label for="">Hinh anh</label></br>
    <input type="file" name="img_sanpham">
    <label for="">Gia</label>
    <input type="text" name="gia_sanpham">
    <label for="">Giam gia</label>
    <input type="text" name="giamgia_sanpham">
    <label for="">So luong</label>
    <input type="text" name="quantity_sanpham">
    <label for="">Mo ta</label>
    <textarea name="mota_sanpham" id="">

    </textarea>
    <input type="submit" value="Them" name="them">
    
</form>