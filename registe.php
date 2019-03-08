<?php

    header("content-type:text/html;charset=utf-8");  //设置页面内容是html  编码是utf-8
    // error_reporting(E_ALL &~ E_NOTICE);     //屏蔽错误信息
    include 'conn.php';     //调用数据库连接文件

    $username=$_GET['user_id'];
    $password=$_GET['password'];   //接收前台传递过来的post值

    if ($username == "" || $password == "")       //判断用户名和密码是否为空
        {
            echo "<script>alert('请输入用户名和密码');history.back();</script>";
        }
        else
        {
            $selsql="SELECT username FROM user WHERE username = '$username'";
            $selres=$con->query($selsql);
            $selrow=$selres->fetch_object();
            if ($selrow)                   //判断用户名是否存在
            {
                echo "<script>alert('用户名已存在');history.back()</script>";
            }
             else
            {
                $inssql="INSERT INTO user(username,password) VALUES('$username','$password')";
                $insres=$con->query($inssql);      //插入用户信息
                if ($insres)
                {
                    echo "<script>alert('注册成功');location.href='login.php';</script>";
                }
                else
                {
                    echo "<script>alert('注册失败');history.back();</script>";
                }
            }
        }

?>