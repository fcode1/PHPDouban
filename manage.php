<?php
session_start();
include("conn.php");
if(!isset($_SESSION['username'])){
	echo "<script>alert('请先登录！');window.location.href='login_admin.php';</script>";
}else if(!isset($_SESSION['key'])){
    echo "<script>alert('没有权限');window.location.href='login_admin.php'</script>";
}
?>

<!DOCTYPE html>  
<html>  
<head>  
    <meta charset="UTF-8">  
    <title>所有用户</title>  
    <link rel="stylesheet" href="common/css/bootstrap.css">  
    <style>
       h1{
            text-align:center;
            color:#fff;
       }
       th{
           font-size:18px;
       }
       th,td{
           width:100px;
           text-align:center;
           /* background:#fff; */
       }
       body{
           background:#333;
           /* color:#fff; */
       }
       .succes{
           background:#fff;
       }

    </style>
</head>  
<body>
    <div class="container">
    <div class="table-responsive">
    <table class="table table-hover table-bordered">
        <h1>用户信息管理</h1><a href="exit.php" style="display:inline-block;float:right;color:#fff;font-size:16px;text-decoration: none">退出登录</a>
            <tr class="succes"><th>ID</th><th>用户名</th><th>密码</th><th>编辑</th></tr> 
            <?php  
            //连接数据库  
            include("conn.php");
            //查询数据表中的所有数据,并按照id降序排列  
            $result=$con->query("SELECT * FROM user ORDER BY id ASC");  
            //获取数据表的数据条数  
            $dataCount=mysqli_num_rows($result);  
            //echo $dataCount;  
            //打印输出所有数据  
        
            for($i=0;$i<$dataCount;$i++){  
                $result_arr=mysqli_fetch_array($result);  
                $id=$result_arr['id'];  
                $name=$result_arr['username'];  
                $pass=$result_arr['password'];  
                //print_r($result_arr);  
                echo "<tr class='success'><td>$id</td><td>$name</td><td>$pass</td>
                <td><a href='edituser.php?id=$id'><button type='button' class='btn btn-primary'>修改</button></a>
                 <a href='delete.php?id=$id'><button type='button' class='btn btn-danger'>删除</button></a>
                </td></tr>";  
            }  
            ?>  
        </table>
    </div>
    </div>   
    
</body>  
</html> 