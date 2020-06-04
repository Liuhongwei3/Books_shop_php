<!--/**-->
<!-- * https://liuhongwei3.github.io Inc.-->
<!-- * Name: show_desc_order.php-->
<!-- * Date: 2020/6/4 上午11:31-->
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
    <title>订单详细信息</title>
</head>
<?php
require '../common/DB.class.php';
$db = new DB();
$oid = $_GET['oid'];
$sql = "select * from `orders` where oid=$oid";
$row = $db->execSQL($sql)[0];
?>
<body>
<table border style="width: 40%">
    <caption><h2>订单详细信息</h2><a href="#" onclick="history.back()">返回</a></caption>
    <tr>
        <th>订单号</th>
        <td><?php echo $row['oid']; ?></td>
    </tr>
    <tr>
        <th>订单日期</th>
        <td><?php echo $row['odate']; ?></td>
    </tr>
    <tr>
        <th>发货日期</th>
        <td><?php echo $row['osendate']; ?></td>
    </tr>
    <tr>
        <th>地址</th>
        <td><?php echo $row['osendaddr']; ?></td>
    </tr>
    <tr>
        <th>客户电话</th>
        <td><?php echo $row['ocontactel']; ?></td>
    </tr>
</table>
</body>
</html>
