<?php   
  
//排空错误  
if(empty($_GET['id'])){  
    die('id is empty');  
}  
//连接数据库  
include("conn.php");
  
$id=intval($_GET['id']);  
  
//删除指定数据  
$con->query("DELETE FROM user WHERE id=$id");  
//排错并返回页面  
if(mysql_error()){  
    echo mysql_error();  
}else{  
    header("Location:manage.php");  
}