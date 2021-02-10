<script>
         function doDel(asno) {
             if (confirm("确定要删除么？")) {
                 window.location = 'assess1_action.php?action=del&asno='+asno;
             }
         }
</script>
<?php 
include "connect.php";
session_start();
$sno = $_SESSION['sno'];
$query=sprintf("select * from assess where sno='%s'",mysqli_real_escape_string($link,$sno));
$result=mysqli_query($link,$query);
$num = mysqli_affected_rows($link);

echo <<<EOF
<h3>测评信息</h3>
	 <a href="assess1_add.php?sno=$sno">点击增加您的测评信息</a>
     <table width="600" border="1">
         <tr>
             <th>编号</th>
			 <th>学号</th>
             <th>测评项目</th>
             <th>日期</th>
             <th>细节</th>
			 <th>操作</th>
         </tr>
EOF;
while($row = mysqli_fetch_array($result)) {
	 echo "<tr>";
	 echo "<td>{$row['asno']}</td>";
	 echo "<td>{$row['sno']}</td>";
	 echo "<td>{$row['assess_name']}</td>";
	 echo "<td>{$row['date']}</td>";
	 echo "<td>{$row['detail']}</td>";
	 echo "<td>
			 <a href='javascript:doDel({$row['asno']})'>删除</a>
			 <a href='assess1_edit.php?asno=({$row['asno']})'>修改</a>
		   </td>";
	 echo "</tr>";
}
?>
<a href="menu.php"><button>返回菜单</button></a>