<!--/**-->
<!-- * https://liuhongwei3.github.io Inc.-->
<!-- * Name: edit_order.php-->
<!-- * Date: 2020/6/4 上午11:35-->
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
    <title>修改订单信息</title>
</head>
<?php
require '../common/DB.class.php';
$db = new DB();
$oid = $_GET['oid'];
$sql = "select * from `orders` where oid=$oid";
$row = $db->execSQL($sql)[0];
?>
<body>
<form action="../data/orders/modify.php?oid=<?php echo $oid ?>" method="post">
    <table class="edit-book">
        <caption><h2>修改订单信息</h2></caption>
        <tr>
            <th>订单号:</th>
            <td><?php echo $row['oid']; ?></td>
        </tr>
        <tr>
            <th>订单日期:</th>
            <td><input type="text" name="odate" value="<?php echo $row['odate']; ?>"/></td>
        </tr>
        <tr>
            <th>发货日期:</th>
            <td><input type="datetime-local" name="osendate" value="<?php echo $row['osendate']; ?>"/></td>
        </tr>
        <tr>
            <th>地址:</th>
            <td><input type="text" name="osendaddr" value="<?php echo $row['osendaddr']; ?>"/></td>
        </tr>
        <tr>
            <th>客户电话:</th>
            <td><input type="text" name="ocontactel" value="<?php echo $row['ocontactel']; ?>"/></td>
        </tr>
        <tr>
            <th>操作</th>
            <td>
                <button class="btn btn-success" type="submit">修改</button>
                <button class="btn btn-warning"><a href="../data/manage_orders.php"">返回</a></button>
            </td>
        </tr>
    </table>
</form>
</body>
</html>
