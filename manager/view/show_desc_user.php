<!--/**-->
<!-- * https://liuhongwei3.github.io Inc.-->
<!-- * Name: show_desc_user.php-->
<!-- * Date: 2020/6/4 上午10:46-->
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
    <title>用户详细信息</title>
</head>
<?php
require '../common/DB.class.php';
$db = new DB();
$uid = $_GET['uid'];
$sql = "select * from `user` where uid=$uid";
$row = $db->execSQL($sql)[0];
?>
<body>
<table border style="width: 40%">
    <caption><h2>用户详细信息</h2><a href="#" onclick="history.back()">返回</a></caption>
    <tr>
        <th>编号:</th>
        <td><?php echo $row['uid']; ?></td>
    </tr>
    <tr>
        <th>用户名</th>
        <td><?php echo $row['uname']; ?></td>
    </tr>
    <tr>
        <th>用户地址</th>
        <td><?php echo $row['uaddr']; ?></td>
    </tr>
    <tr>
        <th>用户电话</th>
        <td><?php echo $row['uphone']; ?></td>
    </tr>
    <tr>
        <th>用户余额</th>
        <td><?php echo $row['uaccount']; ?></td>
    </tr>
</table>
</body>
</html>
