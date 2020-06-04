<!--
  ~ https://liuhongwei3.github.io Inc.
  ~ Name: loginUI.php
  ~ Date: 2020/5/4 下午2:59
  ~ Author: Tadm
  ~ Copyright (c) 2020 All Rights Reserved.
  -->

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>书店商城用户登录</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/index.css"/>
</head>
<script type="text/javascript">
    window.onload = function () {
        let code = document.getElementById("checkcode");
        code.onclick = function () {
            code.src = "../common/checkcode.php?rand=" + Math.random();
            return false;
        }
    }
</script>
<?php
session_start();
$uname = isset($_SESSION['uname']) ? $_SESSION['uname'] : '';
$upwd = isset($_SESSION['upassword']) ? $_SESSION['upassword'] : '';
$flag = (!empty($uname) && !empty($upwd)) ? 'checked' : '';
$lastVisited = isset($_SESSION['lastVisited']) ? $_SESSION['lastVisited'] : '';
$checkcode = isset($_SESSION['checkcode']) ? $_SESSION['checkcode'] : '';
?>
<body>
<div class="box">
    <div class="main">
        <form method="post" action="../data/login.php">
            <table border>
                <caption>Tadm 书店商城欢迎您~！</caption>
                <tr>
                    <th>用户名：</th>
                    <td>
                        <input type="text" name="uname" value="<?php echo $uname ?>"/>
                    </td>
                </tr>
                <tr>
                    <th>密码：</th>
                    <td>
                        <input type="password" name="upassword" value="<?php echo $upwd ?>"/>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <label>
                            <input type="checkbox" name="flag" <?php echo $flag ?>>记住用户名密码
                        </label>
                    </td>
                </tr>
                <tr>
                    <th>验证码:</th>
                    <td>
                        <input type="text" name="checkcode"/>
                        <img src="../common/checkcode.php" id="checkcode">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input class="btn btn-warning" type="reset">
                        <input class="btn btn-primary" type="submit" value="登录">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <span>上次登录时间：<?php echo $lastVisited ?></span>
                    </td>
                </tr>
            </table>
            <a href='registerUI.html'>还没有账户！去注册 >>></a><br/>
        </form>
    </div>
</div>
</body>
</html>