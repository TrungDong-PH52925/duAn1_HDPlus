<?php
include_once __DIR__ . '/../adminHeader.php';
include_once(__DIR__ . '/../../../Models/M_sanPham.php');

?>

<div class="container mt-5 me-5" style="max-width: 76%">

  <!-- <h2 class="mb-4">Danh Sách San Pham</h2> -->
  <!-- Bảng Danh Mục -->
  <table class="table table-bordered text-center ">

    <thead>
      <tr>
        <th scope="col">Id danh muc</th>
        <th scope="col">Tên sản phẩm</th>
        <th scope="col">Ảnh sản phẩm</th>
        <th scope="col">Giá sản phẩm</th>
        <th scope="col">Giảm giá sản phẩm</th>
        <th scope="col">Số lượng sản phẩm</th>
        <th scope="col">Mô tả sản phẩm</th>
        <th scope="col">Hành Động</th>
        <th scope="col">Xem chi tiết</th>
      </tr>
    </thead>

    <tbody>
      <?php
      $sp = new sanPham();
      $listsp = $sp->loadAll_sanpham();
      foreach ($listsp as $sp) {
        extract($sp);
        $editsp = "http://localhost/duAn1_HDPlus/index.php?act=updatesp&id=" . $id_sanpham;
        $deletesp = "http://localhost/duAn1_HDPlus/index.php?act=delete&id=" . $id_sanpham;
        $chitietsp = "http://localhost/duAn1_HDPlus/index.php?act=chitiet&id=" . $id_sanpham;
        if (!empty($img_sanpham) && is_file(__DIR__ . "/../../../" . $img_sanpham)) {
          $img_sanpham = "<img src='/" . $img_sanpham . "' height='100px' width='100px'>";
        } else {
          $img_sanpham = "no photo";
        }        
        echo '
        <tr class="text-center">

            <td>' . $id_danhmuc . '</td>
            <td>' . $ten_sanpham . '</td>
            <td >' . $img_sanpham . '</td>
            <td>' . $gia_sanpham . '</td>
            <td>' . $giamgia_sanpham . '</td>
            <td>' . $quantity_sanpham . '</td>
            <td>' . $mota_sanpham . '</td>
            <td><a href=' . $editsp . ' class="btn btn-success mb-3" >Sửa</a>
            <a href=' . $deletesp . ' class="btn btn-success mb-3" onclick="return confirm(\'Ban chac chu\')">Xóa</a></td>
           <td><a href=' . $chitietsp . ' class="btn btn-success mb-3">Xem</a></td>
        </tr>
        ';
      }
      ?>
      <a href="http://localhost/duAn1_HDPlus/index.php?act=addsp" class="btn btn-success mb-3 mt-5">Thêm</a>
    </tbody>
  </table>
</div>

<?php include_once __DIR__ . '/../adminFooter.php'; ?>