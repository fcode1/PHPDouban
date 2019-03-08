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
    <script type="text/javascript">
        window.onload = function() {
            var oDiv = document.getElementById('frame');
            var aLi = oDiv.getElementsByTagName('li');
            var aDiv = oDiv.getElementsByTagName('div');
            for (var i = 0; i < aLi.length; i++) {
                aLi[i].index = i;
                aLi[i].onclick = function() {
                    for (var i = 0; i < aLi.length; i++) {
                        aLi[i].className = '';
                        aDiv[i].style.display = 'none';

                    }
                    this.className = 'active';
                    aDiv[this.index].style.display = 'block';
                }
            }
        }
    </script>
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
                            <li class="active">用户登录</li>
                            <span>|</span>
                            <li>用户注册</li>
                        </ul>
                        <!-- 登录 -->
                        <div class="strap" style="display: block;">
                            <form action="login_test.php" method="get">
                                <input type="text" name="user_id" class="text" placeholder="账号" required="required">
                                <input type="password" class="text" name="password" placeholder="密码" required="required">
                                <input type="submit" name="" class="submit regiset" value="立即登录">
                            </form>
                            <a style="margin-left:250px; color:#fff;" href="login_admin.php">管理员登录</a>
                        </div>
                        
                        

                        <!-- 注册 -->
                        <div class="strap">
                            <form action="registe.php" method="get">
                                <input type="text" name="user_id" class="text" placeholder="账号" required="required">
                                <input type="password" class="text" name="password" placeholder="密码" required="required">
                                <input type="submit" name="submit" class="submit" value="立即注册">
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