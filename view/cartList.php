<!--
  ~ https://liuhongwei3.github.io Inc.
  ~ Name: cartList.php
  ~ Date: 2020/5/18 下午2:34
  ~ Author: Tadm
  ~ Copyright (c) 2020 All Rights Reserved.
  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cart List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>
<table width=60% border cellspacing=0>
    <caption>我的购物车</caption>
    <?php
    require '../common/check_session.php';
    session_start();
    $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : "";
    if (!empty($cart)) {
        echo '<tr><th>编号</th><th>名称</th><th>单价</th><th>数量</th><th>操作</th></tr>';
        require '../common/init.php';
        foreach ($cart as $v) {
            $bid = $v['bid'];
            $sql = "select * from book where bid='$bid'";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $arr = $stmt->fetch(PDO::FETCH_ASSOC);
            $bname = $arr['bname'];
            $bprice = $arr['bprice'];
            ?>
            <tr>
                <td><?php echo $v['bid']; ?></td>
                <td><?php echo $bname; ?></td>
                <td><?php echo $bprice; ?></td>
                <td><?php echo $v['count']; ?></td>
                <td><a href="../data/del.php?bid=<?php echo $v['bid']; ?>">删除</a></td>
            </tr>
        <?php }
    } else {
        echo '<h4>购物车为空！快去选购书籍吧 ~</h4>';
    }
    ?>
</table>
<div>
    <a href="../data/submitOrder.php">提交订单</a>
    <a href="../data/clearCart.php">清空购物车</a>
    <a href="../data/books_list.php">返回大厅</a>
</div>
</body>
</html>