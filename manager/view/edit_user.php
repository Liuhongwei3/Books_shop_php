<!--/**-->
<!-- * https://liuhongwei3.github.io Inc.-->
<!-- * Name: edit_user.php-->
<!-- * Date: 2020/6/4 上午10:50-->
<!-- * Author: Tadm-->
<!-- * Copyright (c) 2020 All Rights Reserved.-->
<!-- */-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/index.css">
    <title>修改用户信息</title>
</head>
<?php
require '../common/DB.class.php';
$db = new DB();
$uid = $_GET['uid'];
$sql = "select * from `user` where uid=$uid";
$row = $db->execSQL($sql)[0];
?>
<body>
<form action="../data/users/modify.php?uid=<?php echo $uid ?>" method="post">
    <table class="edit-book">
        <caption><h2>修改用户信息</h2></caption>
        <tr>
            <th>编号:</th>
            <td><?php echo $row['uid']; ?></td>
        </tr>
        <tr>
            <th>用户名称</th>
            <td><input type="text" name="uname" value="<?php echo $row['uname']; ?>"/></td>
        </tr>
        <tr>
            <th>用户地址</th>
            <td><input type="text" name="uaddr" value="<?php echo $row['uaddr']; ?>"/></td>
        </tr>
        <tr>
            <th>用户电话</th>
            <td><input type="text" name="uphone" value="<?php echo $row['uphone']; ?>"/></td>
        </tr>
        <tr>
            <th>用户余额</th>
            <td><input type="text" name="uaccount" value="<?php echo $row['uaccount']; ?>"/></td>
        </tr>
        <tr>
            <th>操作</th>
            <td>
                <button class="btn btn-success" type="submit">修改</button>
                <button class="btn btn-warning"><a href="../data/manage_users.php"">返回</a></button>
            </td>
        </tr>
    </table>
</form>
</body>
</html>
