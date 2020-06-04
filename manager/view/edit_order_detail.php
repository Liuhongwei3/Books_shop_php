<!--/**-->
<!-- * https://liuhongwei3.github.io Inc.-->
<!-- * Name: edit_order_detail.php-->
<!-- * Date: 2020/6/4 下午12:04-->
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
    <title>修改详情订单信息</title>
</head>
<?php
require '../common/DB.class.php';
$db = new DB();
$odid = $_GET['odid'];
$sql = "select * from `orderdetail` where odid=$odid";
$row = $db->execSQL($sql)[0];
?>
<body>
<form action="../data/orderdetails/modify.php?odid=<?php echo $odid ?>" method="post">
    <table class="edit-book">
        <caption><h2>修改详情订单信息</h2></caption>
        <tr>
            <th>详情订单号:</th>
            <td><?php echo $row['odid']; ?></td>
        </tr>
        <tr>
            <th>书籍号:</th>
            <td><input type="number" name="bid" value="<?php echo $row['bid']; ?>"/></td>
        </tr>
        <tr>
            <th>价格:</th>
            <td><input type="number" name="bprice" value="<?php echo $row['bprice']; ?>"/></td>
        </tr>
        <tr>
            <th>数量:</th>
            <td><input type="number" name="bcount" value="<?php echo $row['bcount']; ?>"/></td>
        </tr>
        <tr>
            <th>订单号:</th>
            <td><input type="number" name="oid" value="<?php echo $row['oid']; ?>"/></td>
        </tr>
        <tr>
            <th>操作</th>
            <td>
                <button class="btn btn-success" type="submit">修改</button>
                <button class="btn btn-warning"><a href="../data/manage_orders_detail.php"">返回</a></button>
            </td>
        </tr>
    </table>
</form>
</body>
</html>
