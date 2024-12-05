<?php
session_start();
if (isset($_SESSION['error'])) {
    echo "<script>alert('" . $_SESSION['error'] . "');</script>";
    unset($_SESSION['error']);
} elseif (isset($_SESSION['success'])) {
    echo "<script>alert('" . $_SESSION['success'] . "');</script>";
    unset($_SESSION['success']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../public/css/reset.css">
    <link rel="stylesheet" href="../../../public/css/app.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <title>Form login</title>
</head>

<body>
    <div id="wrapper">
        <form action="../../../index.php?act=login" id="form-login" method="post">
            <h1 class="form-heading">Form đăng nhập</h1>
            <div class="form-group">
                <i class="far fa-user"></i>
                <input type="text" class="form-input" placeholder="Tên đăng nhập" name="account_user">
            </div>
            <div class="form-group">
                <i class="fas fa-key"></i>
                <input type="password" class="form-input" placeholder="Mật khẩu" name="pass_user">
                <div id="eye">
                    <i class="far fa-eye"></i>
                </div>
            </div>
            <button type="submit" name="dangnhap" class="form-submit" >Đăng nhập</button>
            <div class="row">
                <div class="button-group">
                    <a class="btn btn-link ajax-content" href="../../../Web/Views/Login/register.php">ĐĂNG KÝ</a>
                </div>
            </div>
        </form>
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="public/js/app.js"></script>

</html>