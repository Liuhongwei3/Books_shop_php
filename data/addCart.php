<?php
/**
 * https://liuhongwei3.github.io Inc.
 * Name: addCart.php
 * Date: 2020/5/18 下午2:05
 * Author: Tadm
 * Copyright (c) 2020 All Rights Reserved.
 */

require '../common/check_session.php';

$bid = $_GET['bid'];
session_start();
if (isset($_SESSION['cart'])) {
    $arr = $_SESSION['cart'];
    $flag = 0;
    foreach ($arr as $k => $v) {
        if ($v['bid'] == $bid) {
            $flag = 1;
            $key = $k;
            break;
        }
    }
    if ($flag) {
        $arr[$key]['count'] += 1;
    } else {
        $arr[] = array('bid' => $bid, 'count' => 1);
    }
} else {
    $arr = array();
    $arr[] = array('bid' => $bid, 'count' => 1);
}
$_SESSION['cart'] = $arr;

header("location:./books_list.php");