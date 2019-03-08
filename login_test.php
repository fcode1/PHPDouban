
<?php
session_start();
include("conn.php");
if (isset($_GET["user_id"])){
    $user_id = $_GET["user_id"];
    $password = $_GET["password"];
    $sql = "select * from user where username='".$user_id."'and password='".$password."'";
    $check_query = mysqli_query($con,$sql);
    if($result = mysqli_fetch_array($check_query)){
        session_start();
        $_SESSION['user_id'] = $user_id;
        $_SESSION['username'] = $result['username'];
        $_SESSION['value'] = $result['value'];
        $_SESSION['id'] = $result['id'];
        $_SESSION['password'] = $result['password'];

    
        header("location:index.php");
    }else{
        echo "登陆失败";
    }
} 
?>