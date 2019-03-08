
<?php
?>
<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="login/css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="login/css/demo.css" />
    <link rel="stylesheet" type="text/css" href="login/css/component.css" />
</head>

<body>
    <div class="container demo-1">
        <div class="content">
            <div id="large-header" class="large-header">
                <canvas id="demo-canvas"></canvas>
                <div class="logo_box">
                    <h1 style="text-align: center;">登录豆瓣</h1>
                    <div id="frame">
                        <!-- 头部 -->
                        <ul id="header">
                            <li class="active">管理员登录</li>
                        </ul>
                        <!-- 学生端 -->
                        <div class="strap" style="display: block;">
                            <form action="loginTest_admin.php" method="get">
                                <input type="hidden" name="key" id="old_user" value="key">  
                                <input type="text" name="user_id" class="text" placeholder="账号" required="required">
                                <input type="password" class="text" name="password" placeholder="密码" required="required">
                                <input type="submit" name="" class="submit regiset" value="立即登录">
                                <a style="margin-left:300px; color:#fff;" href="login.php">返回</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /container -->
    <script src="login/js/TweenLite.min.js"></script>
    <script src="login/js/EasePack.min.js"></script>
    <script src="login/js/rAF.js"></script>
    <script src="login/js/demo-1.js"></script>
    <div style="text-align:center;">
    </div>
</body>

</html>