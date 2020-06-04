<?php
/**
 * https://liuhongwei3.github.io Inc.
 * Name: clearCart.php
 * Date: 2020/6/1 下午2:43
 * Author: Tadm
 * Copyright (c) 2020 All Rights Reserved.
 */

session_start();
unset($_SESSION['cart']);
echo "<center>
<h4>购物车已清空！</h4>
<a href='books_list.php'>返回大厅</a>
</center>";
