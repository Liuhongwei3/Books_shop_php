<?php
/**
 * https://liuhongwei3.github.io Inc.
 * Name: manage_users.php
 * Date: 2020/6/4 上午10:25
 * Author: Tadm
 * Copyright (c) 2020 All Rights Reserved.
 */

require '../common/check_session.php';
require '../common/Page.php';
require '../common/DB.class.php';

$where = '';
$keyword = '';
if (isset($_GET['keyword'])) {
    $keyword = trim($_GET['keyword']);
    $where = "where uname like '%$keyword%'";
}

$db = new DB();
$sql = "select count(*) as recnum from user $where";
$total = $db->execSQL($sql)[0]['recnum'];
$pageSize = 4;
$pageNow = isset($_GET['page']) ? $_GET['page'] : 1;
$page = new Page($pageNow, $pageSize, $total);
$str = $page->showPage();

$order = '';
$orderfld = (isset($_GET['orderfld'])) ? $_GET['orderfld'] : 'uid';
$ordertype = (isset($_GET['ordertype'])) ? $_GET['ordertype'] : '';
$fields = array('uname');
if ($ordertype == 'desc') {
    $order = "order by convert($orderfld using gbk) desc";
    $ordertype = 'asc';
} else {
    $order = "order by convert($orderfld using gbk) asc";
    $ordertype = 'desc';
}

$limit = $page->getLimit();
$sql = "select * from user $where $order limit $limit";
$data = $db->execSQL($sql);

require '../view/users_list.html';
