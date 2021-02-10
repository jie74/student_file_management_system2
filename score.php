<table width="600" border="1">
<tr>
    <th>学号</th>
    <th>课程号</th>
    <th>成绩</th>
</tr>
<?php 
include "connect.php";
session_start();
$sno = $_SESSION['sno'];
$query=sprintf("select * from sc where sno='%s'",mysqli_real_escape_string($link,$sno));
$result=mysqli_query($link,$query);

while($row = mysqli_fetch_array($result)) {
	echo "<tr>";
	echo "<td>{$row['sno']}</td>";
	echo "<td>{$row['cno']}</td>";
	echo "<td>{$row['score']}</td>";
	echo "</tr>";
 
}
 
?>
<a href="menu.php"><button>返回菜单</button></a>