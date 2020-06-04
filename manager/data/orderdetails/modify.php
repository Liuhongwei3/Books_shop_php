<!--/**-->
<!-- * https://liuhongwei3.github.io Inc.-->
<!-- * Name: modify.php-->
<!-- * Date: 2020/6/4 上午9:27-->
<!-- * Author: Tadm-->
<!-- * Copyright (c) 2020 All Rights Reserved.-->
<!-- */-->

<?php
require '../../common/DB.class.php';
$db = new DB();
$odid = $_GET['odid'];
$bid = $_POST['bid'];
$bprice = $_POST['bprice'];
$bcount = $_POST['bcount'];
$oid = $_POST['oid'];

$sql = "update `orderdetail`
        set bid ='$bid', bprice = '$bprice', bcount = '$bcount', oid = '$oid'
        where odid=$odid";
$res = $db->execSQL($sql);

if ($res) {
    header('location:../manage_orders_detail.php');
} else {
    echo "<center>
        <h4>更新失败！请稍后再试！</h4>
        <a href='../manage_orders_detail.php'>返回</a>
    </center>";
}
