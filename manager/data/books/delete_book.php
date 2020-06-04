<!--/**-->
<!-- * https://liuhongwei3.github.io Inc.-->
<!-- * Name: delete_book.php-->
<!-- * Date: 2020/6/4 上午9:27-->
<!-- * Author: Tadm-->
<!-- * Copyright (c) 2020 All Rights Reserved.-->
<!-- */-->

<?php
require '../../common/DB.class.php';
$db = new DB();
$bid = $_GET['bid'];
$sql = "delete from `book` where bid=$bid";
$res = $db->execSQL($sql);
if ($res) {
    header('location:../manage_books.php');
} else {
    echo "<center>
        <h4>删除失败！请稍后再试！</h4>
        <a href='../manage_books.php'>返回</a>
    </center>";
}
?>
