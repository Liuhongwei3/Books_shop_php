<?php
/**
 * https://liuhongwei3.github.io Inc.
 * Name: DB.class.php
 * Date: 2020/5/25 下午3:52
 * Author: Tadm
 * Copyright (c) 2020 All Rights Reserved.
 */

header('content-type:text/html;charset=utf-8');
require '../common/config.php';

class DB
{
    private $pdo;
    private $stmt;
    private $data;

    public function __construct()
    {
        $dbconfig = $GLOBALS['dbconfig'];
        $dbtype = $dbconfig['dbtype'];
        $host = $dbconfig['host'];
        $dbname = $dbconfig['dbname'];
        $charset = $dbconfig['charset'];
        $user = $dbconfig['user'];
        $pwd = $dbconfig['pwd'];
        $dsn = "$dbtype:host=$host;dbname=$dbname;charset=$charset";
        try {
            $this->pdo = new PDO($dsn, $user, $pwd);
        } catch (PDOException $e) {
            echo 'PDO连接数据库失败！' . $e->getMessage();
        }
    }

    public function setData($data)
    {
        $this->data = $data;
    }

    public function execSQL($sql)
    {
        $sqltype = strtolower(substr(trim($sql), 0, 6));
        $stmt = $this->pdo->prepare($sql);
        $rs = $stmt->execute($this->data);
        if ($sqltype == 'select') {
            $arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if (count($arr) == 0 || $stmt == false) {
                return false;
            } else if (count($arr) >= 1) {
                return $arr;
            }
//            else if (count($arr) == 1) {
//                return $arr[0];
//            }
        } else if ($sqltype == ' insert' || $sqltype == 'update' || $sqltype = ' delete') {
            if ($rs) {
                return true;
            } else {
                return false;
            }
        }
    }

    function getInsertId()
    {
        return $this->pdo->lastInsertId();
    }

    function freePdo()
    {
        unset($this->pdo);
    }
}

//$db = new DB();
//$sql = 'select * from fruits where fid=:fid';
//$db->setData(array('fid' => 'f002'));
//$data = $db->execSQL($sql);
//var_dump($data);