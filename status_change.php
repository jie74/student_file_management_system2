<?php 
	session_start();
?>
<table width="600" border="1">
<tr>
    <th>学号</th>
    <th>学籍异动</th>
    <th>日期</th>
    <th>细节</th>
</tr>
<?php 
include "connect.php";
$sno = $_SESSION['sno'];
//$sno = $_GET['sno'];//用这个会有sql注入
//$sql = "select * from `status_change` where sno='$sno'";
//$result = mysqli_query($link, $sql);

$query=sprintf("select * from status_change where sno='%s'",mysqli_real_escape_string($link,$sno));
$result=mysqli_query($link,$query);
	
while($row = mysqli_fetch_array($result)) {
	echo "<tr>";
	echo "<td>{$row['sno']}</td>";
	echo "<td>{$row['change_name']}</td>";
	echo "<td>{$row['date']}</td>";
	echo "<td>{$row['detail']}</td>";
	echo "</tr>";
 
}
 
?>
<a href="menu.php"><button>返回菜单</button></a>