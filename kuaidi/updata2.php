<?php
session_start();
include "conn/conn.php";
?>
<body>
	<?php
	$arr=array("staname","statel","staadress","endname","endtel","endadress","number");
	$number=$_SESSION['number'];
	$arrlength=count($arr);
	for($i=0 ; $i<$arrlength ; $i++){
		if($_SESSION[$arr[$i]]!=$_POST[$arr[$i]]){
			$change=$arr[$i];
			$sql="UPDATE express SET $change ='$_POST[$change]' WHERE number = '$number'";	
			$result = $conn->query($sql);
		if (!$result) {
            printf("Error: %s\n", mysqli_error($conn));
            exit();
}
		if($result){
			echo "修改成功";
		}
}}
	?>
