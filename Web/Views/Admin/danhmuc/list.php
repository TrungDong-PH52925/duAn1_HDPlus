<?php include_once "./Web/Views/Admin/adminHeader.php" ?>
<main id="main" class="main">
  <div class="container mt-4" >
    <h2 class="mb-4">Danh Sách Danh Mục</h2>

    <!-- Nút Thêm Danh Mục -->
    <a href="index.php?act=adddm" class="btn btn-success mb-3">Thêm Danh Mục</a>

    <!-- Bảng Danh Mục -->
    <table class="table table-bordered " >
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Tên Danh Mục</th>
          <th scope="col">Ảnh Danh Mục</th>
          <th scope="col">Hành Động</th>
        </tr>
      </thead>
     
      <tbody>
        <?php
        
        $dm = new danhMuc();
        $listdanhmuc = $dm->getAll_danhMuc(); 
         foreach($listdanhmuc as $danhmuc) {
        extract($danhmuc);
        $updatedm = "index.php?act=updatedm&id=".$id_danhmuc;
        $deletedm = "index.php?act=deletedm&id=".$id_danhmuc;
        $imgpath = "./public/upload/" .$img_danhmuc;
        if(is_file($imgpath)){
            $hinh = "<img src= '".$imgpath."'  height='50px' width='100px'>";
        }else{
            $hinh = "no photo";
        }
        echo '
        <tr>
            <td>'.$id_danhmuc.'</td>
            <td>'.$ten_danhmuc.'</td>
            <td><img src="'.$imgpath.'" alt="Hình ảnh" class="img-fluid"  height="50px" width="100px" ></td>
            <td>
                <a href="'.$updatedm.'" class="btn btn-warning btn-sm">Sửa</a>
                <a href="'.$deletedm.'" class="btn btn-danger btn-sm" onclick="return confirm(\'Bạn có chắc chắn muốn xóa?\')">Xóa</a>
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