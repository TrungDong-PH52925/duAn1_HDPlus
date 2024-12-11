
    <?php 
  
include_once __DIR__ . "/../header.php";
if (isset($_SESSION['error'])) {
    echo "<script>alert('" . $_SESSION['error'] . "');</script>";
    unset($_SESSION['error']);
} elseif (isset($_SESSION['success'])) {
    echo "<script>alert('" . $_SESSION['success'] . "');</script>";
    unset($_SESSION['success']);
}
?>
  
<!-- end header -->
<!-- Bắt đầu form thông tin người dùng -->
<div class="container">
    <h2 style="text-align: center;">Cập nhật thông tin cá nhân</h2> <!-- Căn giữa tiêu đề -->

    <form action="index.php?act=user" method="post" enctype="multipart/form-data">
        <div class="img--users" style="text-align: center;"> <!-- Căn giữa ảnh đại diện -->
            <img src="<?php echo $_SESSION['img_user']; ?>" name="img_user" alt="Ảnh Người Dùng" style="max-height:200px; border-radius: 10px;">
        </div>
        
        <div class="information">
            <!-- Các trường nhập liệu -->
            <div class="form-group">
                <label for="img_user">Ảnh đại diện:</label>
                <input type="file" id="img_user" name="img_user" required>
            </div>

            <div class="form-group">
                <label for="ten_user">Họ và Tên:</label>
                <input type="text" id="ten_user" name="ten_user" value="<?php echo $_SESSION['ten_user']; ?>" required>
            </div>

            <div class="form-group">
                <label for="account_user">Username:</label>
                <input type="text" id="account_user" name="account_user" autocomplete="username" value="<?php echo $_SESSION['username']; ?>" required>
            </div>

            <div class="form-group">
                <label for="pass_user">Mật khẩu:</label>
                <input type="password" id="pass_user" name="pass_user" autocomplete="current-password" value="<?php echo $_SESSION['pass_user']; ?>">
                <input type="checkbox" id="show-password"> Hiện mật khẩu
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="gmail_user" value="<?php echo $_SESSION['gmail_user'];?>" required>
            </div>

            <div class="form-group">
                <label for="sdt">Số điện thoại:</label>
                <input type="text" id="sdt" name="sdt_user" value="<?php echo $_SESSION['sdt_user'];?>" required>
            </div>

            <div class="form-group">
                <label for="diachi">Địa chỉ:</label>
                <input type="text" id="diachi" name="address_user" value="<?php echo $_SESSION['address_user'];?>">
            </div>
        </div>

        <input type="hidden" name="id_user" value="<?php echo $_SESSION['id_user']; ?>">
        <input type="hidden" id="role" name="role" value="0" required>
        
        <button type="submit" name="savett" class="btn btn-primary">Lưu thông tin</button>
    </form>
    
    <a href="index.php?act=lsubill">
        <button class="btn btn-secondary">Lịch sử đơn hàng</button>
    </a>
</div>

<style>
    .container {
        max-width: 600px;
        margin: 20px auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 10px;
        background-color: #f9f9f9;
}

    .form-group {
        margin-bottom: 15px;
    }

    label {
        display: block;
        margin-bottom: 5px;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"],
    input[type="file"] {
        width: 100%;
        padding: 8px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    button {
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .btn-primary {
        background-color: #007bff;
        color: white;
    }

    .btn-secondary {
        background-color: #6c757d;
        color: white;
        margin-top: 10px;
    }

    .btn-primary:hover,
    .btn-secondary:hover {
        opacity: 0.8;
    }
</style>

<script>
    document.getElementById('show-password').addEventListener('change', function() {
        var passwordField = document.getElementById('pass_user');
        passwordField.type = this.checked ? 'text' : 'password'; // Hiện/ẩn mật khẩu
    });
</script>


    <?php 
include_once __DIR__ . "/../footer.php";
?>