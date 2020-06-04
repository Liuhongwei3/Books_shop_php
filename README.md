# Tadm 书店商城

<div style="display: inline-flex;">
<img alt="" src="https://img.shields.io/badge/Author-Tadm-pink.svg?style=flat-square"/>
<img alt="" src="https://img.shields.io/badge/Program-PHP-aqua"/>
</div>

> 一个基于 `PHP` + `MySQL` 的简易在线书电商城 By Tadm

## 功能
- 游客预览商城
- 用户
    - 用户注册登录
    - 购物车功能
    - 下单
    - 充值余额（联系管理员）
- 管理员管理商城
    - 书籍管理
    - 用户管理
    - 订单管理
    - 详情订单管理

## 技术栈
- PHP7
- MySQL
- SESSION
- MD5
- Bootstrap

## 项目目录
<details>
  <summary><b>点击查看</b></summary>
<pre><code>
Books_shop
├── common
│   ├── checkcode.php
│   ├── check_session.php
│   ├── config.php
│   ├── DB.class.php
│   ├── init.php
│   ├── initsess.php
│   └── Page.php
├── css
│   └── index.css
├── data
│   ├── addCart.php
│   ├── books_list.php
│   ├── clearCart.php
│   ├── del.php
│   ├── login.php
│   ├── register.php
│   ├── showCart.php
│   └── submitOrder.php
├── manager
│   ├── common
│   │   ├── check_session.php
│   │   ├── config.php
│   │   ├── DB.class.php
│   │   ├── initsess.php
│   │   └── Page.php
│   ├── data
│   │   ├── books
│   │   │   ├── add_book.php
│   │   │   ├── delete_book.php
│   │   │   └── modify.php
│   │   ├── index.php
│   │   ├── login.php
│   │   ├── manage_books.php
│   │   ├── manage_orders.php
│   │   ├── manage_orders_detail.php
│   │   ├── manage_users.php
│   │   ├── orderdetails
│   │   │   ├── delete_order_detail.php
│   │   │   └── modify.php
│   │   ├── orders
│   │   │   ├── delete_order.php
│   │   │   └── modify.php
│   │   └── users
│   │       ├── add_user.php
│   │       ├── delete_user.php
│   │       └── modify.php
│   └── view
│       ├── add_book.php
│       ├── add_user.php
│       ├── books_list.html
│       ├── edit_book.php
│       ├── edit_order.php
│       ├── edit_order_detail.php
│       ├── edit_user.php
│       ├── index.html
│       ├── loginUI.php
│       ├── orders_detail_list.html
│       ├── orders_list.html
│       ├── show_desc_book.php
│       ├── show_desc_order.php
│       ├── show_desc_order_detail.php
│       ├── show_desc_user.php
│       └── users_list.html
├── README.md
└── view
    ├── books_list.html
    ├── cartList.php
    ├── loginUI.php
    └── registerUI.html
</code></pre>
</details>
    
## About

> If you like it,Thanks to star and talk more~

## Thanks

> 技术栈提供者以及生态产品

Github Repo: https://github.com/Liuhongwei3/Books_shop_php