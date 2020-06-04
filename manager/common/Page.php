<?php
/**
 * https://liuhongwei3.github.io Inc.
 * Name: Page.php
 * Date: 2020/6/3 下午4:11
 * Author: Tadm
 * Copyright (c) 2020 All Rights Reserved.
 */

class Page
{
    private $pageNow;
    private $pageSize;
    private $pageCount;
    private $total;
    private $prevPage;
    private $nextPage;

    /**
     * Page constructor.
     * @param $pageNow
     * @param $pageSize
     * @param $total
     */
    public function __construct($pageNow, $pageSize, $total)
    {
        $this->pageNow = $pageNow;
        $this->pageSize = $pageSize;
        $this->total = $total;
        $this->pageCount = ceil($this->total / $this->pageSize);
        $this->prevPage = $this->pageNow - 1;
        $this->nextPage = $this->pageNow + 1;
        $this->prevPage = ($this->prevPage < 1) ? 1 : $this->prevPage;
        $this->nextPage = ($this->nextPage > $this->pageCount) ? $this->pageCount : $this->nextPage;
    }

    public function show()
    {
        echo $this->pageCount;
    }

    private function getUrl()
    {
        unset($_GET['page']);
        return http_build_query($_GET);
    }

    public function getLimit()
    {
        return (($this->pageNow - 1) * $this->pageSize) . ",{$this->pageSize}";
    }

    public function showPage()
    {
        if ($this->pageCount <= 1) {
            return '';
        }
        $params = $this->getUrl();
        $params = $params ? $params . '&' : '';
        $str = "";
        $str .= "<a href='?page=1'>首页</a>&nbsp;&nbsp;";
        $str .= "<a href='?page={$this->prevPage}'>上一页</a>&nbsp;&nbsp;";
        $str .= "<a href='?page={$this->nextPage}'>下一页</a>&nbsp;&nbsp;";
        $str .= "<a href='?page={$this->pageCount}'>尾页</a>&nbsp;&nbsp;";
        return $str;
    }
}
