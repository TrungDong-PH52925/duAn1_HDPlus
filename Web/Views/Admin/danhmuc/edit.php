<?php
 include_once __DIR__ . '/../adminHeader.php';;

if(is_array($new))
{
    // var_dump($new);
    extract($new);
}

 ?>
  <main id="main" class="main">
  <div class="container mt-1" >
    <h2 class="mb-4">Cập Nhập Danh Mục</h2>

    <!-- Form Thêm Danh Mục -->
    <form action="http://localhost/duAn1_HDPlus/index.php?act=editdm" method="post" enctype="multipart/form-data">
        
      <!-- ID Danh Mục -->
       <div class="mb-3">
        <label for="categoryId" class="form-label">Id Danh Mục</label>
        <input type="text" class="form-control" id="categoryId" name="id_danhmuc" value="<?php if(isset($id_danhmuc) && $id_danhmuc != "")echo $id_danhmuc;?>" readonly >
        
       </div>
      
      <!-- Tên Danh Mục -->
      <div class="mb-3">
        <label for="categoryName" class="form-label">Tên Danh Mục</label>
        <input type="text" class="form-control" id="categoryName" name="ten_danhmuc" value="<?php if(isset($ten_danhmuc) && $ten_danhmuc != "")echo $ten_danhmuc;?>" required placeholder="Nhập tên danh mục">
      </div>

      <!-- Ảnh Danh Mục -->
      <div class="mb-3">
    <label for="categoryImage" class="form-label">Ảnh Danh Mục</label>
    <input type="file" class="form-control" id="categoryImage" name="img_danhmuc" required>
    <?php if (isset($img_danhmuc) && $img_danhmuc != ""){?>
        <img src="./public/upload/<?php echo $img_danhmuc; ?>" alt="Ảnh danh mục" height="80px">
    <?php }; ?>
</div>


      <!-- Nút Gửi -->  
       <input type="hidden" name="id_danhmuc" value="<?php if(isset($id_danhmuc) && $id_danhmuc > 0)echo $id_danhmuc;?>">
      <button type="submit" class="btn btn-success" name="editdm" value="capnhap">Sửa Danh Mục</button>
      <a href="http://localhost/duAn1_HDPlus/index.php?act=listdm" class="btn btn-secondary ml-3">Danh sách danh mục</a>
    </form>
    <?php if(isset($alert) && ($alert) != ""){ echo $alert;} ?>
  </div>
  <?php  include_once __DIR__ . '/../adminFooter.php'; ?>
  </main>