<?php
/**
 * https://liuhongwei3.github.io Inc.
 * Name: add_book.php
 * Date: 2020/6/4 上午10:08
 * Author: Tadm
 * Copyright (c) 2020 All Rights Reserved.
 */
require '../../common/DB.class.php';
$db = new DB();
$uid = $_GET['uid'];
$uname = $_POST['uname'];
$upassword = md5($_POST['upassword']);
$uaddr = $_POST['uaddr'];
$uphone = $_POST['uphone'];
$uaccount = $_POST['uaccount'];

$sql = "insert into `user` (uname,upassword,uaddr,uphone,uaccount)
        values(:uname,:upassword, :uaddr, :uphone, :uaccount)";
$db->setData(array('uname' => $uname, 'upassword' => $upassword, 'uaddr' => $uaddr, 'uphone' => $uphone, 'uaccount' => $uaccount));
$res = $db->execSQL($sql);

if ($res) {
    header('location:../manage_users.php');
} else {
    echo "<center>
        <h4>添加失败！请稍后再试！</h4>
        <a href='../manage_users.php'>返回</a>
    </center>";
}


