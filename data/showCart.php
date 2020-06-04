<?php
/**
 * https://liuhongwei3.github.io Inc.
 * Name: showCart.php
 * Date: 2020/5/11 下午4:23
 * Author: Tadm
 * Copyright (c) 2020 All Rights Reserved.
 */

require '../common/check_session.php';
header("content-type:text/html;charset=utf-8");
session_start();
if (!isset($_SESSION['uname']) && !isset($_SESSION['upassword'])) {
    header("location:../view/loginUI.php");
}
$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];;
header('location:../view/cartList.php');
