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
$bname = $_POST['bname'];
$bprice = $_POST['bprice'];
$bpublish = $_POST['bpublish'];
$bstock = $_POST['bstock'];

$sql = "insert into `book` (bname,bprice,bpublish,bstock)
        values(:bname, :bprice, :bpublish, :bstock)";
$db->setData(array('bname' => $bname, 'bprice' => $bprice, 'bpublish' => $bpublish, 'bstock' => $bstock));
$res = $db->execSQL($sql);

if ($res) {
    header('location:../manage_books.php');
} else {
    echo "<center>
        <h4>添加失败！请稍后再试！</h4>
        <a href='../manage_books.php'>返回</a>
    </center>";
}


