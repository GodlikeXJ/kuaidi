<?php 
session_start();
?>
<html>
<head>
<meta charset="utf-8">
<title>主界面</title>
</head>
<body>
<table width="100%" height="100%" border="0">
  <tbody>
    <tr align="center">
      <td height="91" colspan="2" ><?php echo "<h1>您好<font color='#E71418'>{$_SESSION["username"]}</font>，欢迎进入本系统</h1>"; ?></td>
    </tr>
    <tr>
      <td width="12%"><table width="100%" border="0">
        <tbody>
          <tr>
            <td height="100" align="center" valign="middle" ><a href="insert.php" target="main">添加快递信息</a></td>
          </tr>
          <tr>
            <td height="100" align="center" valign="middle" ><a href="select.php" target="main">查询快递信息</a></td>
          </tr>
          <tr>
            <td height="100" align="center" valign="middle" ><a href="update.php" target="main">修改快递信息</a></td>
          </tr>
          <tr>
            <td height="100" align="center" valign="middle" ><a href="delete.php" target="main">删除快递信息</a></td>
          </tr>
        </tbody>
      </table></td>
      <td width="88%" height="100" ><iframe width="100%" height="800" name="main" scrolling="auto" ></iframe></td>
    </tr>
  </tbody>
</table>	
</body>
</html>