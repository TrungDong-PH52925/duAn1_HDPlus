<?php include_once __DIR__ . '/../adminHeader.php'; ?>
<main id="main" class="main">
  <div class="container mt-10" >
    <h2 class="mb-4">Thêm Danh Mục</h2>

    <!-- Form Thêm Danh Mục -->
    <form action="http://localhost/duAn1_HDPlus/index.php?act=adddm" method="post" enctype="multipart/form-data">
      
      <!-- Tên Danh Mục -->
      <div class="mb-3">
        <label for="categoryName" class="form-label">Tên Danh Mục</label>
        <input type="text" class="form-control" id="categoryName" name="ten_danhmuc" required placeholder="Nhập tên danh mục">
      </div>

      <!-- Ảnh Danh Mục -->
      <div class="mb-3">
        <label for="categoryImage" class="form-label">Ảnh Danh Mục</label>
        <input type="file" class="form-control" id="categoryImage" name="img_danhmuc"  required>
        <?php if (isset($_FILES['img_danhmuc']) && $_FILES['img_danhmuc']['error'] == 0) {
    $img_danhmuc = $_FILES['img_danhmuc']['name'];
    
    } else {
    // echo "Lỗi khi tải ảnh lên!";
    } ?>
      </div>

      <!-- Nút Gửi -->
      <button type="submit" class="btn btn-success" name="themdm">Thêm Danh Mục</button>
      <button type="reset" class="btn btn-success" >Nhập lại</button>
      <a href="http://localhost/duAn1_HDPlus/index.php?act=listdm" class="btn btn-secondary ml-3">Danh sách danh mục</a>
    </form>
  </div>
</main>
  <?php include_once __DIR__ . '/../adminFooter.php'; ?>