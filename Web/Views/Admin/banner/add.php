<?php include_once "./Web/Views/Admin/adminHeader.php" ?>
<main id="main" class="main">
  <div class="container mt-10" >
    <h2 class="mb-4">Thêm Banner</h2>

    <!-- Form Thêm Banner -->
    <form action="index.php?act=addbn" method="post" enctype="multipart/form-data">
      
      <!-- Tên Banner -->
      <div class="mb-3">
        <label for="bannerName" class="form-label">Tên Banner</label>
        <input type="text" class="form-control" id="bannerName" name="name_banner" required placeholder="Nhập tên Banner">
      </div>

      <!-- Ảnh Banner -->
      <div class="mb-3">
        <label for="bannerImage" class="form-label">Ảnh Banner</label>
        <input type="file" class="form-control" id="bannerImage" name="img_banner"  required>
        <?php if (isset($_FILES['img_banner']) && $_FILES['img_banner']['error'] == 0) {
        $img_banner = $_FILES['img_banner']['name'];
    
    } else {
    // echo "Lỗi khi tải ảnh lên!";
    } ?>
      </div>

      <!-- Nút Gửi -->
      <button type="submit" class="btn btn-success" name="thembn">Thêm Banner</button>
      <button type="reset" class="btn btn-success" >Nhập lại</button>
      <a href="index.php?act=listbn" class="btn btn-secondary ml-3">Danh sách Banner</a>
    </form>
  </div>
</main>
  <?php include_once "./Web/Views/Admin/adminFooter.php" ?>