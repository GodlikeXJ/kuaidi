
<html>
<head>
<meta charset="utf-8">
<title>登录界面</title>
</head>
<body>
<form id="form" name="form" method="post" action="check.php">
		<table width="100%" border="0" cellspacing="0" cellpadding="0"
			height="100%">
			<tr>
				<td width="33%">&nbsp;</td>
				<td width="33%">&nbsp;</td>
				<td align="center" height="35%">
					<h1>快递业务管理系统</h1> 
						用户名:<input type="text" name="username">
					<P>
						密码:<input type="password" name="password">
					<P>
						<input type="submit" value="登录" onclick="return check()"> 
						<input type="reset" value="重置" ></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
		</table>
	</form>
<script >
		function check() {
			if (form.username.value == "") {
				alert("请输入用户名!!!");
				form.username.focus();
				return false;
			}
			if (form.password.value == "") {
				alert("请输入密码!!!");
				form.password.focus();
				return false;
			}
		}
   </script>
</body>
</html>