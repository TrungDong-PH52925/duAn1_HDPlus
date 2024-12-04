
    <?php 
    
include_once __DIR__ . "/../header.php";
?>
  
    <!-- end header -->
    <!-- Bắt đầu form thông tin người dùng -->
    <form action="index.php?act=user" method="post" enctype="multipart/form-data">

        <div class="img--users">
            <img src="<?php echo $_SESSION['img_user']; ?>" name="img_user" alt="Ảnh Người Dùng" style="max-height:max-content">
            
        </div>
        <div class="username">
            <b><?php echo $_SESSION['ten_user']; ?></b>
        </div>
        <div class="information">
            <!-- Các trường nhập liệu -->
             
            <label for="img_user">Ảnh đại diện:</label>
            <input type="file" id="img_user" name="img_user"   required>
            
            <label for="ten_user">Họ và Tên:</label>
            <input type="text" id="ten_user" name="ten_user" value="<?php echo $_SESSION['ten_user']; ?>" required>

            
            <label for="account_user">Username:</label>
            <input type="text" id="account_user" name="account_user" autocomplete="username"  value="<?php echo $_SESSION['username'];?>" required>

          
            <label for="pass_user">Mật khẩu:</label>
            <input type="password" id="pass_user" name="pass_user" autocomplete="current-password" value="<?php echo $_SESSION['pass_user']; ?>">
            <!-- <input type="checkbox" id="show-password" class="cb"> 
            <label for="show-password">Hiển thị mật khẩu</label> -->



            <label for="email">Email:</label>
            <input type="email" id="email" name="gmail_user" value="<?php echo $_SESSION['gmail_user'];?>" required>

          

           

            <label for="sdt">Số điện thoại:</label>
            <input type="text" id="sdt" name="sdt_user" value="<?php echo $_SESSION['sdt_user'];?>" required>

            <label for="diachi">Địa chỉ:</label>
            <input type="text" id="diachi" name="address_user" value="<?php echo $_SESSION['address_user'];?>">
        </div>
        <input type="hidden" name="id_user" value="<?php echo $_SESSION['id_user']; ?>">
            <input type="hidden" id="role" name="role"  value="<?php echo $_SESSION['role'];?>" required>   
        <button type="submit" value="savett" name="savett">Lưu thông tin</button>
    </form>

    <script>
        document.getElementById('show-password').addEventListener('change', function() {
    var passwordField = document.getElementById('pass_user');
    if (this.checked) {
        passwordField.type = 'text'; // Hiển thị mật khẩu
    } else {
        passwordField.type = 'password'; // Ẩn mật khẩu
    }
});

    </script>

    <?php 
include_once __DIR__ . "/../footer.php";
?>