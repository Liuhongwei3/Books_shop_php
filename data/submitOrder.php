<?php
/**
 * https://liuhongwei3.github.io Inc.
 * Name: submitOrder.php
 * Date: 2020/5/25 下午4:51
 * Author: Tadm
 * Copyright (c) 2020 All Rights Reserved.
 */

require '../common/check_session.php';
require '../common/DB.class.php';
session_start();
$cart = $_SESSION['cart'];
if (empty($cart) || !isset($cart)) {
    echo "<center>
        <h4>当前提交的购物车为空！请添加商品后再提交订单！</h4>
        <a href='books_list.php'>返回大厅</a>
    </center>";
    exit();
}

$db = new DB();
$sql = "select * from user where uname=:uname";
$db->setData(array("uname" => $_SESSION['uname']));
$data = $db->execSQL($sql)[0];
$flag = 0;
$total = 0;
foreach ($cart as $v) {
    $bid = $v['bid'];
    $count = $v['count'];
    $sql = "select * from book where bid=:bid";
    $db->setData(array('bid' => $bid));
    $arr = $db->execSQL($sql)[0];
    if ($count > $arr['bstock']) {
        echo "$bid:{$arr['bname']}该书籍库存不足！购买量：$count,库存量：{$arr['bstock']}<br/>";
        $flag = 1;
    }
    $total += $count * $arr['bprice'];
}
if ($flag) {
    echo "<a href='showCart.php'>返回购物车列表</a>";
    exit();
} else if ($total > $data['uaccount']) {
    echo "<center>
    <h4>您的账户余额不足！暂时无法购买商品！</h4>
    <a href='showCart.php'>返回购物车处理</a></center>";
    exit();
}

$today = date('Y-m-d H:i:s');
$sql = "insert into orders (odate,osendaddr,ocontactel) values(:odate,:osendaddr,:ocontactel)";
$db->setData(array('odate' => $today, 'osendaddr' => $data['uaddr'], 'ocontactel' => $data['uphone']));
$db->execSQL($sql);
$oId = $db->getInsertId();

foreach ($cart as $v) {
    $bid = $v['bid'];
    $bcount = $v['count'];
    $sql = "select * from book where bid=:bid";
    $db->setData(array('bid' => $bid));
    $arr = $db->execSQL($sql)[0];
    $sql = 'insert into orderdetail (bid,bprice,bcount,oid) values(:bid,:bprice,:bcount,:oid)';
    $db->setData(array('bid' => $bid, 'bprice' => $arr['bprice'], 'bcount' => $bcount, 'oid' => $oId));
    $db->execSQL($sql);
    $rest = $arr['bstock'] - $bcount;
    $sql = "update `book` set bstock='$rest' where bid=:bid";
    $db->setData(array('bid' => $bid));
    $db->execSQL($sql);
}

$rest = $data['uaccount'] - $total;
$sql = "update `user` set uaccount = '$rest' where uname=:uname";
$db->setData(array("uname" => $_SESSION['uname']));
$res = $db->execSQL($sql);

echo "<center>
<h2>订单提交成功！</h2>
<h2>客户：{$_SESSION['uname']}</h2>
<h2>购物总价：$total</h2>
<h2>账户余额：$rest</h2>
<h2>订单号：$oId</h2>
<a href='books_list.php'>返回大厅</a>
</center>";

unset($_SESSION['cart']);
$db->freePdo();