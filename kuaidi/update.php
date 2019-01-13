<?php
session_start();
include "conn/conn.php";
?>
<html>
<head>
<meta charset="utf-8">
<title>改</title>
</head>

<body>
	<center>
		<form id="form1" name="form1" method="post"  >
	请输入要修改的快递单号：<input type="text" name="sou">
  <input type="submit" name="submit" value="搜索"><br>
		</form>
		</center>
		<?php
	if(!empty($_POST["submit"])){
	$sou=$_POST["sou"];
	$sql= "SELECT * FROM express WHERE number = '$sou' ";
	$result = $conn->query($sql);
	
if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}
	if($result->num_rows > 0){
		echo '<form id="form2" name="form2" method="post" action="updata2.php">
		<table border="1" width="90%" ><tr><td>发件人姓名</td><td>发件人电话</td><td>发件人地址</td><td>收件人姓名</td><td>收件人电话</td><td>收件人地址</td><td>快递单号</td></tr>';
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
{
		 $_SESSION['staname']=$row['staname'];
		 $_SESSION['statel']=$row['statel'];
		 $_SESSION['staadress']=$row['staadress'];
		 $_SESSION['endname']=$row['endname'];
		 $_SESSION['endtel']=$row['endtel'];
		 $_SESSION['endadress']=$row['endadress'];
		 $_SESSION['number']=$row['number'];
    echo "<tr><td><input type='text' name='staname' value='{$row['staname']}'></td> ".
         "<td><input type='text' name='statel' value='{$row['statel']}'> </td> ".
         "<td><input type='text' name='staadress' value='{$row['staadress']}'> </td> ".
         "<td><input type='text' name='endname' value='{$row['endname']}'></td> ".
		 "<td><input type='text' name='endtel' value='{$row['endtel']}'> </td> ".
		 "<td><input type='text' name='endadress' value='{$row['endadress']}'> </td> ".
		 "<td><input type='text' name='number' value='{$row['number']}'> </td> ".
         "</tr>";
}	
echo '</table><input type="submit" value="修改"></form>';
}
	else{
			echo '此快递单号不存在！！！';
	}}
	?>
	
</body>
</html>