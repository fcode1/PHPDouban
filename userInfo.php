<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="common/css/bootstrap.css">  
    <style>
        .wrapper{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width:600px;
            /* border:1px solid #000; */
        }
        .box img{
            width:100px;
            height:100px;
        }
        .box{
            margin-bottom:20px;
            border:1px solid #ccc;
        }
        .box div{
            display:inline-block;
            margin:10px;
        }
    </style>
</head>
<body>
<?php  
    session_start();
    $old_user=$_SESSION['username'];
    $pass=$_SESSION['password'];
?>  
    <div class="wrapper">
        <form action="userInfo_server.php" method="post">
            <input type="hidden" name="old_user" id="old_user" value="<?php echo $old_user?>">
            <div class="form-group">
                <label for="exampleInputEmail1">用户名</label>
                <input type="text" class="form-control" name="username" id="exampleInputEmail1" placeholder="ID" value="<?php echo $old_user?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">密码</label>
                <input type="text" class="form-control" name="pass" id="exampleInputPassword1" placeholder="Password" value="<?php echo $pass?>">
            </div>
            <div class="box">
                <h2>选择头像</h2>
                <div>
                    <img src="common/img/1.jpg" alt="">
                    <input name="value" type="radio" value="1">
                </div>
                <div>
                    <img src="common/img/2.jpg" alt="">
                    <input  name="value" type="radio" value="2">
                </div>
                <div>
                    <img src="common/img/3.jpg" alt="">
                    <input  name="value" type="radio" value="3">
                </div>
                <div>
                    <img src="common/img/4.jpg" alt="">
                    <input  name="value" type="radio" value="4">
                </div>
                <div>
                    <img src="common/img/5.jpg" alt="">
                    <input  name="value" type="radio" value="5">
                </div>
            </div>
            <button type="submit" class="btn btn-success">提交修改</button>
        </form>
    </div>
</body>
</html>