<?php include_once "./Web/Views/Admin/adminHeader.php" ?>
<main id="main" class="main">
  <div class="container mt-4" >
    <h2 class="mb-4">Danh Sách Banner</h2>

    <!-- Nút Thêm Banner -->
    <a href="index.php?act=addbn" class="btn btn-success mb-3">Thêm Banner</a>

    <!-- Bảng Banner -->
    <table class="table table-bordered " >
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Tên Banner</th>
          <th scope="col">Ảnh Banner</th>
          <th scope="col">Hành Động</th>
        </tr>
      </thead>
     
      <tbody>
        <?php
        
        $bn = new Banner();
        $listbanner = $bn->getAll_Banner(); 
         foreach($listbanner as $banner) {
        extract($banner);
        $updatebn = "index.php?act=updatebn&id=".$id_banner;
        $deletebn = "index.php?act=deletebn&id=".$id_banner;
        $imgpath = "./public/upload/" .$img_banner;
        if(is_file($imgpath)){
            $hinh = "<img src= '".$imgpath."'  height='50px' width='100px'>";
        }else{
            $hinh = "no photo";
        }
        echo '
        <tr>
            <td>'.$id_banner.'</td>
            <td>'.$name_banner.'</td>
            <td><img src="'.$imgpath.'" alt="Hình ảnh" class="img-fluid"  height="50px" width="100px" ></td>
            <td>
                <a href="'.$updatebn.'" class="btn btn-warning btn-sm">Sửa</a>
                <a href="'.$deletebn.'" class="btn btn-danger btn-sm" onclick="return confirm(\'Bạn có chắc chắn muốn xóa?\')">Xóa</a>
            </td>
        </tr>
        ';
        }
        ?>
      
      </tbody>
    </table>
  </div>
</main>
  <?php include_once "./Web/Views/Admin/adminFooter.php" ?>

