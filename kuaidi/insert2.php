<?php
session_start();
include "conn/conn.php";
?>
<?php
	$staname=$_POST["staname"];
	$statel=$_POST["statel"];
	$staadress=$_POST["staadress"];
	$endname=$_POST["endname"];
	$endtel=$_POST["endtel"];
	$endadress=$_POST["endadress"];
	$number=$_POST["number"];
	$sql="SELECT * FROM express WHERE number = '$number'";
	$result = $conn->query($sql);
	if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}
	else if(!($result->num_rows > 0)){
		$sql="INSERT INTO  express (staname, statel, staadress,endname, endtel, endadress, number)
		VALUES ('$staname', '$statel', '$staadress', '$endname', '$endtel', '$endadress', '$number')";
		$result = $conn->query($sql);
		if($result){
			echo "加入成功！！！";
		}else{
			echo "加入失败！！！";
			printf("Error: %s\n", mysqli_error($conn));
            exit();
		}
	}else{
		echo '<script>
				            alert ("该快递单号已存在，请重输入！！！" );
                            setTimeout(function(){window.location.href="insert.php";},1000);
                      </script>';
	}
	?>	
