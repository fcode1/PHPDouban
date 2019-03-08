<?php  
// require_once 'functions.php';?>  
<!DOCTYPE html>  
<html>  
<head>  
    <meta charset="UTF-8">  
    <title>修改用户数据</title>  
    <link rel="stylesheet" href="common/css/bootstrap.css">  
    <style>
        .col-center{
            float:none;
            display:block;
            margin-left:auto;
            margin-right:auto;
        }
        .container{
            margin-top:150px;
        }
        .btn{
            /* margin-left:100px; */
            /* width:350px; */
        }
        body{
            background:#333333;
            color:#fff;
        }
        h1{
            text-align:center;
            font-size:30px;
        }
    </style>
</head>  
<body>  
<?php  
    if(!empty($_GET['id'])){  
        //连接mysql数据库  
        include("conn.php");
        //查找id  
        $id=intval($_GET['id']);  
        $result=$con->query("SELECT * FROM user WHERE id=$id");  
        if(mysql_error()){  
            die('can not connect db');  
        }  
        //获取结果数组  
        $result_arr=mysqli_fetch_array($result);
        $old_user=$result_arr['username'];
    }else{  
        die('id not define');  
    }  
?>  


<div class="container">
    <div class="row">
       <div class="col-xs-6  col-center">
           
            <form class="form-horizontal" action="edituser_server.php" method="post">

                <input type="hidden" name="old_user" id="old_user" value="<?php echo $old_user?>">
                <h1>信息修改</h1>
                <div class="form-group">
                    <label for="exampleInputName2" class="col-sm-2 control-label" >用户ID</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="exampleInputName2" name="id" value="<?php echo $result_arr['id']?>">
                    </div>       
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail2" class="col-sm-2 control-label">用户名</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control  col-xs-2" id="exampleInputEmail2" name="username" value="<?php echo $result_arr['username']?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail2" class="col-sm-2 control-label">用户密码</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="exampleInputEmail2" name="pass" value="<?php echo $result_arr['pass']?>">
                    </div>
                </div>
                <div class="col-xs-8 col-center">
                    <input  style="outline:none;" type="submit" class="btn btn-success btn-lg btn-block" value="提交修改"></input>
                </div>
                    
            </form>
       </div>
    </div> 
</div>

</body>  
</html>