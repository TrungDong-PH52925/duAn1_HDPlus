<?php
require_once "Web/Models/M_sanPham.php";
require_once "Web/Models/M_danhMuc.php";
?>

<div id="carouselExampleControls" class="carousel " data-bs-ride="carousel">
    <div class="carousel-inner">

        <?php $bn = new Banner();
        $listbanner = $bn->getAll_Banner();
        foreach ($listbanner as $banner) {
            extract($banner);
            $imgpath = "./public/upload/" . $img_banner;
            if (is_file($imgpath)) {
                $hinh = "<img src='" . $imgpath . "' class='d-block w-100' alt='...'>";
            } else {
                $hinh = "no photo";
            }
            echo '<div class="carousel-item active">
                    <img src="' . $imgpath . '" class="d-block w-100" alt="...">
                </div>';
        }
        ?>


    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

</header>
<?php
$sp = new sanPham();
$spnew = $sp->list_sanphammoi();
$linksp = "index.php?act=chitietsp&id_sanpham=";
if (isset($_GET['search']) && !empty($_GET['search'])) {
    $keyword = $_GET['search'];
    $result = $C_sanpham->search($keyword);
}

if (isset($result) && !empty($result)) { ?>
    <div class="container">
        <div class="row">
            <h2 class="phone--title animate__animated animate__bounceInLeft text-center">Kết quả tìm kiếm</h2>
            <div class="row g-3 wow" data-wow-offset="100" data-wow-iteration="100">
                <?php foreach ($result as $product) { ?>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card phone--card">
                            <a href="<?php echo $linksp . $product['id_sanpham'] ?>" class="product-link text-decoration-none">
                                <div class="img" style="height: 300px; display: flex; justify-content: center; align-items: center;">
                                    <img src="<?php echo $product['img_sanpham']; ?>" alt="<?php echo $product['ten_sanpham']; ?>" style="height: 100%; width: 200px; object-fit: contain;">
                                </div>
                                <h3 class="product-name text-center mt-2"><?php echo $product['ten_sanpham']; ?></h3>
                            </a>
                            <!-- Giá sản phẩm -->
                            <div class="text-center">
                                <span class="text-success fw-bold d-block"><?php echo number_format($product['gia_sanpham'], 0, ',', '.') . ' VND'; ?></span>
                                <span class="text-danger fw-bold d-block">Giảm: <?php echo number_format($product['giamgia_sanpham'], 0, ',', '.') . ' VND'; ?></span>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
<?php } else { ?>
<section class="phone">
    <div class="container">
        <h1 class="phone--title animate__animated animate__bounceInLeft text-center">SẢN PHẨM MỚI NHẤT</h1>
        <div class="row g-3 wow" data-wow-offset="100" data-wow-iteration="100">
            <?php
            $sp = new sanPham();
            $spnew = $sp->list_sanphammoi();
            foreach ($spnew as $listsp) {
                extract($listsp);
                $linksp = "index.php?act=chitietsp&id_sanpham=";
                echo '
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card phone--card">
                        <!-- Link sản phẩm -->
                        <a href="' . $linksp . $id_sanpham . '" class="product-link text-decoration-none">
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

<br>


<!-- END SẢM PHẬP BÁN CHẠY -->
<section class="paner wow " data-wow-offset="100" data- wow-iteration="100">
    <div class="paner--img">
        <img src="./public/img/home/paner1.jpg" alt="">
    </div>
</section>
<br>

<!-- sản phẩm theo danh mục -->
<section class="phone wow slideInRight" data-wow-offset="300" data-wow-iteration="10">
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


<!-- END IPHONE-->

<section class="phone">
    <div class="phone--container">
        <h1 class="phone--title text-center">SẢN PHẨM XIAOMI</h1>
        <div class="row g-3 wow" data-wow-offset="100" data-wow-iteration="100">
            <?php
            $listsp = new sanPham();
            $id_danhmuc = 10;
            $sp_iddanhmuc = $listsp->loadsanPham_danhmuc($id_danhmuc);

            foreach ($sp_iddanhmuc as $list) {
                extract($list);
                $linksp = "index.php?act=chitietsp&id_sanpham=" . $id_sanpham;

                echo '
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card phone--card">
                        <a href="' . $linksp . '" class="product-link text-decoration-none">
                           <div class="img" style="height: 300px; display: flex; justify-content: center; align-items: center;">
    <img src="' . $img_sanpham . '" alt="' . $ten_sanpham . '" style="height: 100%; width: 200px; object-fit: contain;">
                            </div>
                            <h3 class="product-name text-center mt-2">' . $ten_sanpham . '</h3>
                        </a>
                        <div class="text-center">
                            <span class="text-success fw-bold d-block">' . number_format($gia_sanpham, 0, ',', '.') . ' VND</span>
                            <span class="text-danger fw-bold d-block">Giảm: ' . number_format($giamgia_sanpham, 0, ',', '.') . ' VND</span>
                        </div>

                    </div>
                </div>';
            }
            ?>
        </div>

    </div>
</section>

<section class="phone">
    <div class="phone--container">
        <h1 class="phone--title text-center">SẢN PHẨM SAMSUNG</h1>
        <div class="row g-3 wow" data-wow-offset="100" data-wow-iteration="100">
            <?php
            $listsp = new sanPham();
            $id_danhmuc = 7;
            $sp_iddanhmuc = $listsp->loadsanPham_danhmuc($id_danhmuc);

            foreach ($sp_iddanhmuc as $list) {
                extract($list);
                $linksp = "index.php?act=chitietsp&id_sanpham=" . $id_sanpham;

                echo '
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card phone--card">
                        <a href="' . $linksp . '" class="product-link text-decoration-none">
                            <div class="img" style="height: 300px; display: flex; justify-content: center; align-items: center;">
    <img src="' . $img_sanpham . '" alt="' . $ten_sanpham . '" style="height: 100%; width: 200px; object-fit: contain;">
                            </div>
                            <h3 class="product-name text-center mt-2">' . $ten_sanpham . '</h3>
                        </a>
                        <div class="text-center">
                            <span class="text-success fw-bold d-block">' . number_format($gia_sanpham, 0, ',', '.') . ' VND</span>
                            <span class="text-danger fw-bold d-block">Giảm: ' . number_format($giamgia_sanpham, 0, ',', '.') . ' VND</span>
                        </div>
               
                    </div>
                </div>';
            }
            ?>
        </div>

    </div>
</section>

<!-- <Section class="customer"> -->
<section class="phone">
<div class="phone--container">
<h1 class="phone--title text-center">KHÁCH HÀNG CỦA HD Plus</h1>
<div class="row g-3 wow" data-wow-offset="100" data-wow-iteration="100">
<div class="customer--container wow " data-wow-offset="100" data- wow-iteration="100">
    <div class="customer--list">
        <div class="customer--list__item">
            <div class="img">
                <img src="./public/img/huy.jpg" alt="">
            </div>
            <div class="customer--text">
                <h2>Đỗ Quang Huy</h2>
                <b>Sinh Viên</b>
                <span class="text-clamp">Hôm nay, Huy quyết định tới cửa hàng công nghệ uy tín - HD Plus, để tìm
                    kiếm một sản phẩm
                    phù hợp với nhu cầu của mình. Với sự năng động của một sinh viên và sự hiện đại của thế giới
                    công nghệ, Huy muốn sở hữu một chiếc điện thoại thông minh không chỉ để hỗ trợ việc học tập
                    mà còn để duy trì liên lạc và giải trí trong thời gian rảnh rỗi.</span>
            </div>
        </div>
        <div class="customer--list__item">
            <div class="img">
                <img src="./public/img/home/user2.jpg" alt="">
            </div>
            <div class="customer--text">
                <h2>Nguyễn Minh Thuận</h2>
                <b>Sinh Viên</b>
                <span class="text-clamp">Hôm nay, Thuận quyết định tới cửa hàng công nghệ uy tín - HD Plus, để
                    tìm kiếm
                    một sản phẩm phù hợp với nhu
                    cầu của mình. Với sự năng động của một sinh viên và sự hiện đại của thế giới công nghệ,
                    Thuận muốn sở hữu một chiếc điện
                    thoại thông minh không chỉ để hỗ trợ việc học tập mà còn để duy trì liên lạc và giải trí
                    trong thời gian rảnh rỗi.
                </span>
            </div>
        </div>
        <div class="customer--list__item">
            <div class="img">
                <img src="./public/img/home/user3.jpg" alt="">
            </div>
            <div class="customer--text">
                <h2>Nguyễn Thị Ánh</h2>
                <b>Sinh Viên</b>
                <span class="text-clamp">Ánh đã quyết định ghé thăm cửa hàng công nghệ danh tiếng - HD Plus, để
                    tìm một
                    chiếc điện thoại phù hợp với
                    nhu cầu cá nhân. Với cuộc sống bận rộn của mình, Ánh cần một chiếc smartphone không chỉ hỗ
                    trợ công việc hiệu quả mà còn
                    giúp cô dễ dàng kết nối với gia đình và bạn bè. Đặc biệt, Ánh tìm kiếm một thiết bị có hiệu
                    năng mạnh mẽ, camera sắc nét
                    .</span>
            </div>
        </div>
        <div class="customer--list__item">
            <div class="img">
                <img src="./public/img/home/user4.jpg" alt="">
            </div>
            <div class="customer--text">
                <h2>Nguyễn Thành Nam</h2>
                <b>Nhà Đầu Tư</b>
                <span class="text-clamp">Nam Là 1 Nhà đầu tư đi đầu ở Việt Nam , nay anh ấy đến HD Plus của
                    chúng tôi để mua 10 chiếc điện thoại để anh có thể xem biểu đồ dễ dàng hơn và phát hiện, một
                    cách nhanh chóng hơn
                    .</span>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</section>
<?php  }?>