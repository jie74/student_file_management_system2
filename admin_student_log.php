<script>
         function doDel(sno) {
             if (confirm("确定要删除么？")) {
                 window.location = 'admin_student_log_action.php?action=del&sno='+sno;
             }
         }
</script>

<?php 
error_reporting(7);//只显示严重错误 
include "connect.php";

echo <<<EOF
<h3>浏览学生登录信息</h3>
     <!--<a href="admin_student_log_action.php?action=addall">一键增加所有学生</a>--><!--此功能不能实现-->
	 
	 
	 <form action="admin_student_log.php" method="get" name="form1" target="_self" style="margin-bottom:-7px;">
  查询项：学号
  关键词：
  <input type="text" size="10" name="searchvalue">
  <input type="submit" name="submit" value="查询">
  </form><br>
	 
	 
	 <a href="admin_student_log_add.php">增加学生</a>
	 <table width="600" border="1">
         <tr>
             <th>学号</th>
             <th>密码</th>
			 <th>操作</th>
         </tr>
EOF;

$searchitem=$_GET['searchitem']; 
$searchvalue=$_GET['searchvalue'];

if($searchvalue!="") 
  {
   $result = mysqli_query($link,"SELECT * FROM student_log where {$searchitem} like '%{$searchvalue}%' ORDER BY sno");
  }
else
  {
   $result = mysqli_query($link,"SELECT * FROM student_log ORDER BY sno");
  }

while($row = mysqli_fetch_array($result)) {
	 echo "<tr>";
	 echo "<td>{$row['sno']}</td>";
	 echo "<td>{$row['password']}</td>";
	 echo "<td>
			 <a href='javascript:doDel({$row['sno']})'>删除</a>
			 <a href='admin_student_log_edit.php?sno={$row['sno']}'>修改</a>
		   </td>";
	 echo "</tr>";
}
	
?>
<a href="admin_menu.php"><button>返回菜单</button></a>