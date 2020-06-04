<!--/**-->
<!-- * https://liuhongwei3.github.io Inc.-->
<!-- * Name: add_book.php-->
<!-- * Date: 2020/6/4 上午8:31-->
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
    <title>添加书籍</title>
</head>
<body>
<form action="../data/books/add_book.php" method="post">
    <table class="edit-book">
        <caption><h2>添加书籍</h2></caption>
        <tr>
            <th>书名:</th>
            <td><input type="text" name="bname"/></td>
        </tr>
        <tr>
            <th>价格:</th>
            <td><input type="number" name="bprice"/></td>
        </tr>
        <tr>
            <th>出版社:</th>
            <td><input type="text" name="bpublish"/></td>
        </tr>
        <tr>
            <th>库存:</th>
            <td><input type="text" name="bstock"/></td>
        </tr>
        <tr>
            <th>操作</th>
            <td>
                <button class="btn btn-info" type="reset">重置</button>
                <button type="submit" class="btn btn-success">添加</button>
                <button class="btn btn-warning"><a href="../data/manage_books.php">返回</a></button>
            </td>
        </tr>
    </table>
</form>
</body>
</html>
