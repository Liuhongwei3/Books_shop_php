<?php
/**
 * https://liuhongwei3.github.io Inc.
 * Name: initsess.php
 * Date: 2020/5/11 下午3:45
 * Author: Tadm
 * Copyright (c) 2020 All Rights Reserved.
 */

session_start();
$_SESSION = array();
session_destroy();
header("location:../view/loginUI.php");
