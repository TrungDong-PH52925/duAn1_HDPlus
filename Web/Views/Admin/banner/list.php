<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1px">
        <tr>
            <td>id</td>
            <td>ten danh muc</td>
            <td>img</td>
        </tr>
        <?php foreach ($getdm as $key => $value) {
            ?>
            <tr>
            <td><?php echo $value->id_danhmuc?></td>
            <td><?php echo $value->ten_danhmuc?></td>
            <td><img src="<?php echo $value->img_danhmuc?>"></td>
        </tr>
     <?php   }?>
       
    </table>
</body>
</html>