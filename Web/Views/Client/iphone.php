<?php include "../header.php";
require_once "../../Models/M_sanPham.php";
?>
<section class="phone wow" data-wow-offset="300" data-wow-iteration="10">
    <div class="container">
        <h1 class="phone--title text-center">SẢN PHẨM APPLE</h1>
        <div class="row g-3 wow" data-wow-offset="100" data-wow-iteration="100">
            <?php
            $listsp = new sanPham();
            $id_danhmuc = 8;
            $sp_iddanhmuc = $listsp->loadsanPham_danhmuc($id_danhmuc);

            foreach ($sp_iddanhmuc as $list) {
                extract($list);
                $linksp = "index.php?act=chitietsp&id_sanpham=" . $id_sanpham;

                echo '
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card phone--card">
                        <!-- Link sản phẩm -->
                        <a href="' . $linksp . '" class="product-link text-decoration-none">
                            <div class="img" style="height: 300px; display: flex; justify-content: center; align-items: center;">
    <img src="' . $img_sanpham . '" alt="' . $ten_sanpham . '" style="height: 100%; width: 200px; object-fit: contain;">
                            </div>
                            <h3 class="product-name text-center mt-2">' . $ten_sanpham . '</h3>
                        </a>
                        <!-- Giá sản phẩm -->
                        <div class="text-center">
                            <span class="text-success fw-bold d-block">' . number_format($gia_sanpham, 0, ',', '.') . ' VND</span>
                            <span class="text-danger fw-bold d-block">Giảm: ' . number_format($giamgia_sanpham, 0, ',', '.') . ' VND</span>
                        </div>
                        <!-- Thêm vào giỏ hàng -->

                    </div>
                </div>';
            }
            ?>
        </div>
        
    </div>
</section>
<?php
include "../footer.php";
?>