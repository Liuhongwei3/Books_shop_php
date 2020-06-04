<!--/**-->
<!-- * https://liuhongwei3.github.io Inc.-->
<!-- * Name: edit_book.php-->
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
    <title>修改书籍信息</title>
</head>
<?php
require '../common/DB.class.php';
$db = new DB();
$bid = $_GET['bid'];
$sql = "select * from `book` where bid=$bid";
$row = $db->execSQL($sql)[0];
?>
<body>
<form action="../data/books/modify.php?bid=<?php echo $bid ?>" method="post">
    <table class="edit-book">
        <caption><h2>修改书籍信息</h2></caption>
        <tr>
            <th>编号:</th>
            <td><?php echo $row['bid']; ?></td>
        </tr>
        <tr>
            <th>书名:</th>
            <td><input type="text" name="bname" value="<?php echo $row['bname']; ?>"/></td>
        </tr>
        <tr>
            <th>价格:</th>
            <td><input type="number" name="bprice" value="<?php echo $row['bprice']; ?>"/></td>
        </tr>
        <tr>
            <th>出版社:</th>
            <td><input type="text" name="bpublish" value="<?php echo $row['bpublish']; ?>"/></td>
        </tr>
        <tr>
            <th>库存:</th>
            <td><input type="text" name="bstock" value="<?php echo $row['bstock']; ?>"/></td>
        </tr>
        <tr>
            <th>操作</th>
            <td>
                <button class="btn btn-success" type="submit">修改</button>
                <button class="btn btn-warning"><a href="../data/manage_books.php"">返回</a></button>
            </td>
        </tr>
    </table>
</form>
</body>
</html>