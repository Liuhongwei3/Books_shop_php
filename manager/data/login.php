<?php
/**
 * https://liuhongwei3.github.io Inc.
 * Name: login.php
 * Date: 2020/5/4 下午3:11
 * Author: Tadm
 * Copyright (c) 2020 All Rights Reserved.
 */

$aname = $_POST['aname'];
$apassword = $_POST['apassword'];
$aflag = $_POST['aflag'];

session_start();
$checkcode = isset($_SESSION['checkcode']) ? $_SESSION['checkcode'] : '';
require '../../common/DB.class.php';
$db = new DB();
$sql = "select mpassword from manger where mname = '$aname'";
$data = $db->execSQL($sql)[0];

if (empty($data)) {
    header("location:../view/loginUI.php");
} else {
    $pwd = $data['mpassword'];
    if (md5($apassword) == $pwd) {
        if (!empty($aflag)) {
            $_SESSION['aname'] = $aname;
            $_SESSION['apassword'] = $apassword;
        } else {
            $_SESSION['aname'] = '';
            $_SESSION['apassword'] = '';
        }
        $_SESSION['lastVisited'] = date('Y-m-d H:i:s');
        header("location:../data/index.php");
    } else {
        header("location:../view/loginUI.php");
    }
}
