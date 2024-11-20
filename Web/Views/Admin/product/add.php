
 <?php include_once "./Web/Views/Admin/adminHeader.php" ?>

  <div class="container mt-2" style="max-width: 50%">
    <h2 class="mb-4 mt-1" >Them</h2>

    <!-- Form Thêm Danh Mục -->
    <form action="index.php?act=addsp" method="POST" enctype="multipart/form-data">
      
      <!-- Tên Danh Mục -->
      <div class="mb-3">
        <label for="categoryName" class="form-label">Ten san pham</label>
        <input type="text" class="form-control" id="categoryName" name="ten_sanpham" required placeholder="Nhập tên san pham">
      </div>

      <!-- Ảnh Danh Mục -->
      <div class="mb-3">
        <label for="categoryImage" class="form-label">Ảnh san pham</label>
        <input type="file" class="form-control" id="categoryImage" name="img_sanpham"  required>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Gia san pham</label>
        <input type="text" class="form-control" id="" name="gia_sanpham" required placeholder="Nhập gia san pham">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Giam gia san pham</label>
        <input type="text" class="form-control" id="" name="giamgia_sanpham" required placeholder="Nhập giam gia san pham">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">So luong san pham</label>
        <input type="text" class="form-control" id="categoryName" name="quantity_sanpham" required placeholder="Nhập so luong san pham">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Mo ta san pham</label>
        <input type="text" class="form-control" id="categoryName" name="mota_sanpham" required placeholder="Nhập mo ta san pham">
      </div>
      <!-- Nút Gửi -->
      <button type="submit" class="btn btn-success" name="them" value="them">Thêm </button>
      <a href="index.php?act=listsp" class="btn btn-secondary ml-3">Danh sách danh mục</a>
    </form>
  </div>

  
<?php include_once "./Web/Views/Admin/adminFooter.php" ?>
