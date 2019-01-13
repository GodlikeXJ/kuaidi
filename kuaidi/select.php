<?php
session_start();
include "conn/conn.php";
?>
<?php 
	$sql =" SELECT * FROM express";
	$result = $conn->query($sql);
	if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}
	echo '<table border="1" width="90%" align="center"><tr><td>发件人姓名</td><td>发件人电话</td>
	<td>发件人地址</td><td>收件人姓名</td><td>收件人电话</td><td>收件人地址</td><td>快递单号</td></tr>';
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
{
    echo "<tr><td> {$row['staname']}</td> ".
         "<td>{$row['statel']} </td> ".
         "<td>{$row['staadress']} </td> ".
         "<td>{$row['endname']} </td> ".
		 "<td>{$row['endtel']} </td> ".
		 "<td>{$row['endadress']} </td> ".
		 "<td>{$row['number']} </td> ".
         "</tr>";
}
echo '</table>';
	?>
