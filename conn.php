<?php
$con = mysqli_connect("localhost","root","root","db_douban") or die("连接数据库失败");
mysqli_set_charset($con, "utf8");