<?php
session_start();
include "conn/conn.php";
?>
<html>
<head>
<meta charset="utf-8">
<title>验证</title>
</head>
<body>
<?php 
	$user=$_POST["username"];
	$pwd=$_POST["password"];
	$sql = "SELECT * FROM user WHERE username = '$user' and password='$pwd'";
         $result = $conn->query($sql);
         if($result->num_rows > 0)
		 {
				 $_SESSION['username']=$user;
				 echo '<script>
				            alert ("登录成功 ，点击确定跳转！！！" );
                            setTimeout(function(){window.location.href="main.php";},1000);
                      </script>';
				 }
	     else{
		echo '<script> 
		           alert ("用户名或密码错误！！！" );
	 setTimeout(function(){window.location.href="index.php";},1000);
				   </script>';
	}
	?>
</body>
</html>