<?php 
$host="127.0.0.1";
$username="root";
$password="root";
$dbname="kuaidi";
$conn=mysqli_connect($host,$username,$password,$dbname)or die("数据库服务器连接失败！".mysqli_error());
mysqli_query($conn,"set names utf8");
?>