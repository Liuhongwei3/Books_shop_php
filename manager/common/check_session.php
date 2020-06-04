<?php
/**
 * https://liuhongwei3.github.io Inc.
 * Name: check_session.php
 * Date: 2020/6/2 下午5:33
 * Author: Tadm
 * Copyright (c) 2020 All Rights Reserved.
 */

error_reporting(E_ERROR);
ini_set("display_errors","Off");
header("content-type:text/html;charset=utf-8");

session_start();
if (!isset($_SESSION['aname']) && !isset($_SESSION['apassword'])) {
    header("location:../view/loginUI.php");
}
