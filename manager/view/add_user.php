<!--/**-->
<!-- * https://liuhongwei3.github.io Inc.-->
<!-- * Name: add_user.php-->
<!-- * Date: 2020/6/4 上午11:04-->
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
    <title>添加用户</title>
</head>
<body>
<form action="../data/users/add_user.php" method="post">
    <table class="edit-book">
        <caption><h2>添加用户</h2></caption>
        <tr>
            <th>用户名</th>
            <td><input type="text" name="uname"/></td>
        </tr>
        <tr>
            <th>密码</th>
            <td><input type="text" name="upassword"/></td>
        </tr>
        <tr>
            <th>用户地址</th>
            <td><input type="text" name="uaddr"/></td>
        </tr>
        <tr>
            <th>用户电话</th>
            <td><input type="text" name="uphone"/></td>
        </tr>
        <tr>
            <th>用户余额</th>
            <td><input type="number" name="uaccount"/></td>
        </tr>
        <tr>
            <th>操作</th>
            <td>
                <button class="btn btn-info" type="reset">重置</button>
                <button type="submit" class="btn btn-success">添加</button>
                <button class="btn btn-warning"><a href="../data/manage_users.php">返回</a></button>
            </td>
        </tr>
    </table>
</form>
</body>
</html>
