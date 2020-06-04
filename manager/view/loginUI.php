<!--/**-->
<!-- * https://liuhongwei3.github.io Inc.-->
<!-- * Name: loginUI.php-->
<!-- * Date: 2020/6/3 下午8:37-->
<!-- * Author: Tadm-->
<!-- * Copyright (c) 2020 All Rights Reserved.-->
<!-- */-->

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>书店商城管理员登录</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/index.css"/>
</head>
<script type="text/javascript">
    window.onload = function () {
        let code = document.getElementById("checkcode");
        code.onclick = function () {
            code.src = "../../common/checkcode.php?rand=" + Math.random();
            return false;
        }
    }
</script>
<?php
session_start();
$aname = isset($_SESSION['aname']) ? $_SESSION['aname'] : '';
$upwd = isset($_SESSION['apassword']) ? $_SESSION['apassword'] : '';
$aflag = (!empty($aname) && !empty($upwd)) ? 'checked' : '';
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
                        <input type="text" name="aname" value="<?php echo $aname ?>"/>
                    </td>
                </tr>
                <tr>
                    <th>密码：</th>
                    <td>
                        <input type="password" name="apassword" value="<?php echo $upwd ?>"/>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <label>
                            <input type="checkbox" name="aflag" <?php echo $aflag ?>>记住用户名密码
                        </label>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input class="btn btn-warning" type="reset">
                        <input class="btn btn-primary" type="submit" value="登录">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
</body>
</html>
