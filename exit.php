<?php
session_start();
if(session_destroy()){
	 echo "<script>alert('注销成功！');window.location.href='login_admin.php';</script>"; 
}else{
	echo "<script>alert('请重试！');window.location.href='account.php';</script>";
}
?>