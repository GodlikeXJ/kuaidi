<?php
session_start();
include "conn/conn.php";
?>
<html>
<head>
<meta charset="utf-8">
<title>删</title>
</head>

<body>
   <center><form id="form1" name="form1" method="post" >
	请输入要删除的快递的信息：<input type="text" name="sou">
  <input type="submit" name="submit" value="搜索"><br>
	</form></center>
	<?php
	if(!empty($_POST["submit"])){
	$sou=$_POST["sou"];
	$sql= "SELECT * FROM express WHERE staname = '$sou' OR statel = '$sou' OR staadress = '$sou' OR endname = '$sou' OR endtel = '$sou' OR endadress = '$sou' OR number = '$sou'  ";
	$result = $conn->query($sql);
	
    if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}
	if($result->num_rows > 0){
		$id=0;
		echo '<form id="form2" name="form2" method="post" action="delete2.php">
		<table border="1" width="90%"><tr><td>&nbsp;</td><td>发件人姓名</td><td>发件人电话</td><td>发件人地址</td><td>收件人姓名</td><td>收件人电话</td><td>收件人地址</td><td>快递单号</td></tr>';
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))		
{
    echo "<tr><td><input type='checkbox' name='{$id}' value='{$row['number']}'></td>".
		 "<td>{$row['staname']} </td> ".
         "<td>{$row['statel']}</td> ".
         "<td>{$row['staadress']} </td> ".
         "<td>{$row['endname']}</td> ".
		 "<td>{$row['endtel']} </td> ".
		 "<td>{$row['endadress']}</td> ".
		 "<td>{$row['number']}</td> ".
         "</tr>";
		$id++;
}
echo "</table><input type='hidden' name='hidden' value='{$id}'><br><input type='submit'  value='删除'></form>";
}
	else{
			echo '此快递单号不存在！！！';
	}}
	?>
</body>
</html>