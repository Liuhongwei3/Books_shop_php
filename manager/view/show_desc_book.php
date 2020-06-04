<!--/**-->
<!-- * https://liuhongwei3.github.io Inc.-->
<!-- * Name: show_desc.php-->
<!-- * Date: 2020/6/4 上午9:27-->
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
    <title>书籍详细信息</title>
</head>
<?php
require '../common/DB.class.php';
$db = new DB();
$bid = $_GET['bid'];
$sql = "select * from `book` where bid=$bid";
$row = $db->execSQL($sql)[0];
?>
<body>
<table border style="width: 40%">
    <caption><h2>书籍详细信息</h2><a href="#" onclick="history.back()">返回</a></caption>
    <tr>
        <th>编号:</th>
        <td><?php echo $row['bid']; ?></td>
    </tr>
    <tr>
        <th>书名:</th>
        <td><?php echo $row['bname']; ?></td>
    </tr>
    <tr>
        <th>价格:</th>
        <td><?php echo $row['bprice']; ?></td>
    </tr>
    <tr>
        <th>出版社:</th>
        <td><?php echo $row['bpublish']; ?></td>
    </tr>
    <tr>
        <th>库存:</th>
        <td><?php echo $row['bstock']; ?></td>
    </tr>
</table>
</body>
</html>
