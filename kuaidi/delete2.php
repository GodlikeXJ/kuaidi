<?php
session_start();
include "conn/conn.php";
?>
<?php
	for($i=0 ; $i < $_POST["hidden"] ; $i++){
	if(!empty($_POST[$i])){
	$sql="DELETE FROM express WHERE number = '$_POST[$i]'";
    $result = $conn->query($sql);
	     if (!$result){
              printf("Error: %s\n", mysqli_error($conn));
            exit();
		 }else{
			 $success=TRUE;
		 }
	}
	}
	if($success){
		echo "删除成功！！！";
	}
	?>
