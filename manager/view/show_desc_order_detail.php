<!--/**-->
<!-- * https://liuhongwei3.github.io Inc.-->
<!-- * Name: show_desc_order_detail.php-->
<!-- * Date: 2020/6/4 下午12:00-->
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
    <title>详情订单详细信息</title>
</head>
<?php
require '../common/DB.class.php';
$db = new DB();
$odid = $_GET['odid'];
$sql = "select * from `orderdetail` where odid=$odid";
$row = $db->execSQL($sql)[0];
?>
<body>
<table border style="width: 40%">
    <caption><h2>详情订单详细信息</h2><a href="#" onclick="history.back()">返回</a></caption>
    <tr>
        <th>详情订单号</th>
        <td><?php echo $row['odid']; ?></td>
    </tr>
    <tr>
        <th>书籍号</th>
        <td><?php echo $row['bid']; ?></td>
    </tr>
    <tr>
        <th>价格</th>
        <td><?php echo $row['bprice']; ?></td>
    </tr>
    <tr>
        <th>数量</th>
        <td><?php echo $row['bcount']; ?></td>
    </tr>
    <tr>
        <th>订单号</th>
        <td><?php echo $row['oid']; ?></td>
    </tr>
</table>
</body>
</html>
