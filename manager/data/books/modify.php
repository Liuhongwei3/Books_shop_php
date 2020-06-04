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
$bid = $_GET['bid'];
$bname = $_POST['bname'];
$bprice = $_POST['bprice'];
$bpublish = $_POST['bpublish'];
$bstock = $_POST['bstock'];

$sql = "update `book`
        set bname ='$bname', bprice = '$bprice', bpublish = '$bpublish', bstock = '$bstock'
        where bid=$bid";
$res = $db->execSQL($sql);

if ($res) {
    header('location:../manage_books.php');
} else {
    echo "<center>
        <h4>更新失败！请稍后再试！</h4>
        <a href='../manage_books.php'>返回</a>
    </center>";
}
