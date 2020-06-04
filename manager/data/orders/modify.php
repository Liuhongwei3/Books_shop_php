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
$oid = $_GET['oid'];
$odate = $_POST['odate'];
$osendate = $_POST['osendate'];
$osendaddr = $_POST['osendaddr'];
$ocontactel = $_POST['ocontactel'];

$sql = "update `orders`
        set odate ='$odate', osendate = '$osendate', osendaddr = '$osendaddr', ocontactel = '$ocontactel'
        where oid=$oid";
$res = $db->execSQL($sql);

if ($res) {
    header('location:../manage_orders.php');
} else {
    echo "<center>
        <h4>更新失败！请稍后再试！</h4>
        <a href='../manage_orders.php'>返回</a>
    </center>";
}
