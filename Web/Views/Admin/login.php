    <?php 
    require "./Web/Views/header.php";
    ?>

        <div class="container">
        <div class="login-form">
            <div class="login-bg">
                <img src="../public/img/img_login/login-bg.png" alt="Login Background">
            </div>
            <div class="form">
                <h1>Đăng nhập</h1>
                <div class="external">
                    <form method="post" action="">
                        <input type="hidden" name="ReturnUrl" value="/Account/Login">
                        <button class="btn-extlogin btn-facebook" title="Đăng nhập qua Facebook" type="submit"
                            id="Facebook" name="provider" value="Facebook">
                            <img src="../public/img/img_login/login-facebook.png" alt="Facebook Icon"> Tiếp tục với Facebook
                        </button>
                        <button class="btn-extlogin btn-google" type="submit" title="Đăng nhập qua Google+" id="Google"
                            name="provider" value="Google">
                            <img src="../public/img/img_login/login-google.png" alt="Google Icon"> Đăng nhập với Google
                        </button>
                    </form>
                </div>


                <div class="split">
                    <p>Hoặc</p>
                </div>

                <div class="internal">
                    <form method="post" action="/Account/Login">
                        <input name="__RequestVerificationToken" type="hidden"
                            value="VhJahuBmDgh-AX_F5pmxiKAHYfe4cm3uX09W0nHdSID5ktDrezcngAtbl8FdL05UN0w5EHmcCka87wUeQ_gM7CaKmUE1">
                        <input type="hidden" name="ReturnUrl" value="/Account/Login">
                        <div class="row">
                            <div class="label">Tài khoản</div>
                            <div class="input">
                                <input type="text" name="UserName" id="UserName" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="label">Mật khẩu</div>
                            <div class="input">
                                <input type="password" name="password" id="password" required>
                            </div>
                        </div>

                        <div class="row">
                            <label class="checkbox-ctn">Nhớ đăng nhập
                                <input type="checkbox" name="RememberMe" value="RememberMe">
                                <span class="checkmark"></span>
                            </label>
                        </div>

                        <div class="row">
                            <div class="button-group">
                                <button class="btn btn-submit" type="submit">ĐĂNG NHẬP</button>
                                <a class="btn btn-link ajax-content" href="../html/register.html">ĐĂNG KÝ</a>
                            </div>
                        </div>

                        <div class="row">
                            <p class="forgotpass">
                                <a class="ajax-content" href="../html/forgotPass.html">Quên mật khẩu?</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer--page">
        <div class="footer--page__container">
            <div class="row">
                <div class="col-6 col-md-3">
                    <h1>Hỗ Trợ - Dịch Vụ</h1>
                    <ul class="page--suport">
                        <li class="item"><a href="#0">Chính sách và hướng dẫn mua hàng trả góp</a></li>
                        <li class="item"><a href="#0">Hướng dẫn mua hàng và chính sách vận chuyển</a></li>
                        <li class="item"><a href="./tracuu.html">Tra cứu đơn hàng</a></li>
                        <li class="item"><a href="#0">Chính sách đổi mới và bảo hành</a></li>
                        <li class="item"><a href="#0">Dịch vụ bảo hành mở rộng</a></li>
                        <li class="item"><a href="#0">Chính sách bảo mật</a></li>
                        <li class="item"><a href="#0">Chính sách giải quyết khiếu nại</a></li>
                        <li class="item"><a href="#0">Quy chế hoạt động</a></li>
                    </ul>
                </div>
                <!-- end col -->
                <div class="col-6 col-md-3">
                    <h1>Thông Tin Liên Hệ</h1>
                    <ul class="page--suport">
                        <li class="item"><a href="#0">Thông tin các trang TMĐT</a></li>
                        <li class="item"><a href="#0">Dịch vụ sửa chữa</a></li>
                        <li class="item"><a href="#0">Tra cứu bảo hành</a></li>
                    </ul>
                </div>
                <!-- end col -->
                <div class="col-6 col-md-3">
                    <h1>Thanh toán miễn phí</h1>
                    <ul class="page--suport">
                        <li class="pay">
                            <div class="logo--pay">
                                <div class="img">
                                    <img src="../img/home/logo-visa.png" alt="">
                                </div>
                                <div class="img">
                                    <img src="../img/home/logo-master.png" alt="">
                                </div>
                            </div>
                        </li>
                        <li class="pay">
                            <div class="logo--pay">
                                <div class="img">
                                    <img src="../img/home/logo-jcb.png" alt="">
                                </div>
                                <div class="img">
                                    <img src="../img/home/logo-samsungpay.png" alt="">
                                </div>
                            </div>
                        </li>
                        <li class="pay">
                            <div class="logo--pay">
                                <div class="img">
                                    <img src="../img/home/logo-atm.png" alt="">
                                </div>
                                <div class="img">
                                    <img src="../img/home/logo-vnpay.png" alt="">
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- end col -->
                <div class="col-6 col-md-3">
                    <div class="footer-container">
                        <div class="row">
                            <h1>Hình thức vận chuyển</h1>
                            <div class="col-12">
                                <div class="logo--convert">
                                    <div class="img">
                                        <img src="../img/home/nhattin.jpg" alt="">
                                    </div>
                                    <div class="img">
                                        <img src="../img/home/vnpost.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
        </div>
        <div class="Footer--Address">
            <span>&copy; Copyright MyPhone 2024 </span>
        </div>
    </footer>

    <!-- Thư viện FontAwesome JS -->
    <script src="https://kit.fontawesome.com/850c4145ac.js" crossorigin="anonymous"></script>
    <!-- Thư viện Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <!-- Thư viện Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
</body>

</html>
<?php 
 require_once "./Web/Views/footer.php";
?>