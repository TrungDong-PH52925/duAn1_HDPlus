
<?php
 include_once "./Web/Views/Admin/adminHeader.php" ;
if(is_array($upone)){

  extract($upone);
       var_dump($upone);
}


?>

  <div class="container mt-5" style="max-width: 50%">
    <h2 class="mb-4">Sua san pham</h2>

    <!-- Form Thêm Danh Mục -->
    <form action="index.php?act=editsp" method="POST" enctype="multipart/form-data">
      
      
       <div class="mb-3">
        <input type="hidden" class="form-control" id="categoryName" name="id_sanpham" required value="<?=$id_sanpham?>">
      </div> 
      <div class="mb-3">
        <label for="categoryName" class="form-label">Ten san pham</label>
        <input type="text" class="form-control" id="categoryName" name="ten_sanpham" required value="<?=$ten_sanpham?>">
       
      </div>

      <!-- Ảnh Danh Mục -->
      <div class="mb-3">
        <label for="categoryImage" class="form-label">Ảnh san pham</label>
        <input type="file" class="form-control" id="categoryImage" name="img_sanpham" required  >
       <img src="<?=$img_sanpham?>">
        
      </div>
      <div class="mb-3">
        <label for="categoryName" class="form-label">Gia san pham</label>
        <input type="text" class="form-control" id="categoryName" name="gia_sanpham" required value="<?=$gia_sanpham?>">
      </div>
      <div class="mb-3">
        <label for="categoryName" class="form-label">Giam gia san pham</label>
        <input type="text" class="form-control" id="categoryName" name="giamgia_sanpham" required value="<?=$giamgia_sanpham?>">
      </div>
      <div class="mb-3">
        <label for="categoryName" class="form-label">So luong san pham</label>
        <input type="text" class="form-control" id="categoryName" name="quantity_sanpham" required value="<?=$quantity_sanpham?>">
      </div>
      <div class="mb-3">
        <label for="categoryName" class="form-label">Mo ta san pham</label>
        <input type="text" class="form-control" id="categoryName" name="mota_sanpham" required value="<?=$mota_sanpham?>">
      </div>
      <!-- Nút Gửi -->
      <button type="submit" class="btn btn-success" name="capnhat" value="capnhat">Cập nhật </button>
      <a href="index.php?act=listsp" class="btn btn-secondary ml-3">Danh sách danh mục</a>
    </form>
  </div>

 
<?php include_once "./Web/Views/Admin/adminFooter.php" ?>
