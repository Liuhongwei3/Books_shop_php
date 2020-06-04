<?php
/**
 * https://liuhongwei3.github.io Inc.
 * Name: del.php
 * Date: 2020/5/18 下午2:59
 * Author: Tadm
 * Copyright (c) 2020 All Rights Reserved.
 */

$bid = $_GET['bid'];
session_start();
$cart = $_SESSION['cart'];
foreach ($cart as $k => $v) {
    if ($v['bid'] == $bid) {
        if ($v['count'] > 1) {
            $cart[$k]['count'] -= 1;
        } else {
            unset($cart[$k]);
        }
        break;
    }
}
$_SESSION['cart'] = $cart;
header('location: ./showCart.php');