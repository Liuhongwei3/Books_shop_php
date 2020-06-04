<?php
/**
 * https://liuhongwei3.github.io Inc.
 * Name: login.php
 * Date: 2020/5/4 下午3:11
 * Author: Tadm
 * Copyright (c) 2020 All Rights Reserved.
 */

$uname = $_POST['uname'];
$upassword = $_POST['upassword'];
$flag = $_POST['flag'];
$inputcode = $_POST['checkcode'];

session_start();
$checkcode = isset($_SESSION['checkcode']) ? $_SESSION['checkcode'] : '';
//if (!empty($inputcode) && $checkcode == $inputcode) {
    require '../common/DB.class.php';
    $db = new DB();
    $sql = "select upassword from user where uname = '$uname'";
    $data = $db->execSQL($sql)[0];

    if (empty($data)) {
        header("location:../view/loginUI.php");
    } else {
        $pwd = $data['upassword'];
        if (md5($upassword) == $pwd) {
            if (!empty($flag)) {
                $_SESSION['uname'] = $uname;
                $_SESSION['upassword'] = $upassword;
            } else {
                $_SESSION['uname'] = '';
                $_SESSION['upassword'] = '';
            }
            $_SESSION['lastVisited'] = date('Y-m-d H:i:s');
            header("location:../data/books_list.php");
        } else {
            header("location:../view/loginUI.php");
        }
    }
//} else {
//    header("location:../view/loginUI.php");
//}
