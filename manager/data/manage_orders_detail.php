<?php
/**
 * https://liuhongwei3.github.io Inc.
 * Name: manage_orders_detail.php
 * Date: 2020/6/4 上午11:49
 * Author: Tadm
 * Copyright (c) 2020 All Rights Reserved.
 */

require '../common/check_session.php';
require '../common/Page.php';
require '../common/DB.class.php';

$where = '';
$keyword = '';
if (isset($_GET['keyword'])&&!empty($keyword)) {
    $keyword = (int)trim($_GET['keyword']);
    $where = "where oid=$keyword";
}else{
    $where = "";
}

$db = new DB();
$sql = "select count(*) as recnum from orderdetail $where";
$total = $db->execSQL($sql)[0]['recnum'];
$pageSize = 4;
$pageNow = isset($_GET['page']) ? $_GET['page'] : 1;
$page = new Page($pageNow, $pageSize, $total);
$str = $page->showPage();

$limit = $page->getLimit();
$sql = "select * from orderdetail $where limit $limit";
$data = $db->execSQL($sql);

require '../view/orders_detail_list.html';

