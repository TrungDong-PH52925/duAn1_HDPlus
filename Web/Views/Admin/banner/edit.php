<?php
 include_once "./Web/Views/Admin/adminHeader.php";

if(is_array($newbn))
{
    // var_dump($new);
    extract($newbn);
}

 ?>
  <main id="main" class="main">
  <div class="container mt-1" >
    <h2 class="mb-4">Cập Nhập Banner</h2>

    <!-- Form Thêm Banner -->
    <form action="index.php?act=editbn" method="post" enctype="multipart/form-data">
        
      <!-- ID Banner -->
       <div class="mb-3">
        <label for="BannerId" class="form-label">Id Banner</label>
        <input type="text" class="form-control" id="BannerId" name="id_banner" value="<?php if(isset($id_banner) && $id_banner != "")echo $id_banner;?>" readonly >
        
       </div>
      
      <!-- Tên Banner -->
      <div class="mb-3">
        <label for="BannerName" class="form-label">Tên Banner</label>
        <input type="text" class="form-control" id="BannerName" name="name_banner" value="<?php if(isset($name_banner) && $name_banner != "")echo $name_banner;?>" required placeholder="Nhập tên Banner">
      </div>

      <!-- Ảnh Banner -->
      <div class="mb-3">
    <label for="BannerImage" class="form-label">Ảnh Banner</label>
    <input type="file" class="form-control" id="BannerImage" name="img_banner" required>
    <?php if (isset($img_banner) && $img_banner != ""){?>
        <img src="./public/upload/<?php echo $img_banner; ?>" alt="Ảnh Banner" height="80px">
    <?php }; ?>
</div>


      <!-- Nút Gửi -->  
       <input type="hidden" name="id_banner" value="<?php if(isset($id_banner) && $id_banner > 0)echo $id_banner;?>">
      <button type="submit" class="btn btn-success" name="editbn" value="capnhap">Sửa Banner</button>
      <a href="index.php?act=listbn" class="btn btn-secondary ml-3">Danh sách Banner</a>
    </form>
    <?php if(isset($alert) && ($alert) != ""){ echo $alert;} ?>
  </div>
  <?php include_once "./Web/Views/Admin/adminFooter.php" ?>
  </main>