<?php  
session_start();
// require_once 'functions.php';  
 
if(empty($_POST['username'])){  
    die('username is empty');  
}  
if(empty($_POST['pass'])){  
    die('pass is empty');  
}  
  
$id=$_SESSION['id'];
$name=$_POST['username'];  
$pass=$_POST['pass'];
$value=$_POST['value'];
$old_user=$_POST['old_user'];
  
//连接数据库  
include("conn.php");  
  
        $sql = "select username from user where username = '$_POST[username]'"; //SQL语句  
	    $result = $con->query($sql);    //执行SQL语句  
        $num = mysqli_num_rows($result);

        if($name==$old_user){
            
            $con->query("UPDATE user SET username='$name',password='$pass',value='$value' WHERE id=$id");
            $_SESSION['username']=$name;
            $_SESSION['value']=$value;
            if(mysql_error()){  
                echo mysql_error();  
            }else{  
                header("Location:index.php");  
            }   
        }else{
            if($num){
                       echo "<script>alert('用户名已存在'); history.go(-1);</script>";
               }else{
                   //修改指定数据  
                $con->query("UPDATE user SET username='$name',password='$pass' ,value='$value'WHERE id=$id");
                $_SESSION['username']=$name;
                $_SESSION['value']=$value;
                //排错并返回 
                if(mysql_error()){  
                    echo mysql_error();  
                }else{  
                    header("Location:index.php");  
                } 
            }
        }
       