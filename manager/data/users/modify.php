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
$uid = $_GET['uid'];
$uname = $_POST['uname'];
$uaddr = $_POST['uaddr'];
$uphone = $_POST['uphone'];
$uaccount = $_POST['uaccount'];

$sql = "update `user`
        set uname ='$uname', uaddr = '$uaddr', uphone = '$uphone', uaccount = '$uaccount'
        where uid=$uid";
$res = $db->execSQL($sql);

if ($res) {
    header('location:../manage_users.php');
} else {
    echo "<center>
        <h4>更新失败！请稍后再试！</h4>
        <a href='../manage_users.php'>返回</a>
    </center>";
}
