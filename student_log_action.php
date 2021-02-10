<?php
include "connect.php";
session_start();
$sno = htmlspecialchars($_SESSION['sno']);
$pwd = htmlspecialchars($_POST['pwd']);


//$sql = "UPDATE student_log SET password='{$pwd}' WHERE sno='{$sno}'";
$sql=sprintf("UPDATE student_log SET password='%s' WHERE sno='%s'",
			mysqli_real_escape_string($link,$pwd),
			mysqli_real_escape_string($link,$sno));
$result = mysqli_query($link, $sql);
$num = mysqli_affected_rows($link);
if($num){
	echo "<script>alert('修改成功');window.location='menu.php'</script>";
}else{
	echo "<script>alert('修改失败');window.history.back()</script>";
}

?>