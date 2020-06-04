<?php
/**
 * https://liuhongwei3.github.io Inc.
 * Name: register.php
 * Date: 2020/6/2 下午7:02
 * Author: Tadm
 * Copyright (c) 2020 All Rights Reserved.
 */

$uname = $_POST['uname'];
$upassword = md5($_POST['upassword']);
$uaddress = $_POST['address'];
$uphone = $_POST['phone'];
$uaccount = $_POST['account'];

require '../common/DB.class.php';
$db = new DB();
$sql = "select count(*) as recnum from user where uname='$uname'";
$data = (int)$db->execSQL($sql)[0]['recnum'];
if ($data >= 1) {
    echo "<center>
        <h4>该用户名已经被注册！请更换一个名字再试！</h4>
        <a href='../view/registerUI.html'>重新注册！</a>
    </center>";
} else {
    $sql = "insert into user (uname,upassword,uaddr,uphone,uaccount) values(:uname,:upassword,:uaddr,:uphone,:uaccount)";
    $db->setData(array('uname' => $uname, 'upassword' => $upassword, 'uaddr' => $uaddress, 'uphone' => $uphone, 'uaccount' => $uaccount));
    $data = $db->execSQL($sql);

    if ($data) {
        echo "<center>
        <h4>注册用户成功！</h4>
        <a href='../view/loginUI.php'>直接去登录！</a>
    </center>";
    } else {
        echo "<center>
        <h4>注册用户失败！请稍后再试！</h4>
        <a href='../view/loginUI.php'>或者直接去登录！</a>
    </center>";
    }
}
