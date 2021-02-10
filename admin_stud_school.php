<script>
         function doDel(sno) {
             if (confirm("确定要删除么？")) {
                 window.location = 'admin_stud_school_action.php?action=del&sno='+sno;
             }
         }
</script>

<?php 
error_reporting(7);//只显示严重错误 
include "connect.php";

echo <<<EOF
<h3>浏览学生在校信息</h3>
	 
	 <form action="admin_stud_school.php" method="get" name="form1" target="_self" style="margin-bottom:-7px;">
  查询项：
      <select name="searchitem">
               <option value="sno" selected=true>学号</option>
			   <option value="dept_name">学院</option>
			   <option value="specialty">专业</option>
			   <option value="class">班级</option>
			   <option value="dormitory">宿舍</option>
        </select>
  关键词：
  <input type="text" size="10" name="searchvalue">
  <input type="submit" name="submit" value="查询">
  </form><br>
	 
	 
	 <a href="admin_stud_school_add.php">增加学生</a>
	 <table width="600" border="1">
         <tr>
             <th>学号</th>
             <th>学院</th>
             <th>专业</th>
             <th>班级</th>
             <th>宿舍</th>
			 <th>操作</th>
         </tr>
EOF;

$searchitem=$_GET['searchitem']; 
$searchvalue=$_GET['searchvalue'];

if($searchvalue!="") 
  {
   $result = mysqli_query($link,"SELECT * FROM stud_school where {$searchitem} like '%{$searchvalue}%' ORDER BY sno");
  }
else
  {
   $result = mysqli_query($link,"SELECT * FROM stud_school ORDER BY sno");
  }

while($row = mysqli_fetch_array($result)) {
	 echo "<tr>";
	 echo "<td>{$row['sno']}</td>";
	 echo "<td>{$row['dept_name']}</td>";
	 echo "<td>{$row['specialty']}</td>";
	 echo "<td>{$row['class']}</td>";
	 echo "<td>{$row['dormitory']}</td>";
	 echo "<td>
			 <a href='javascript:doDel({$row['sno']})'>删除</a>
			 <a href='admin_stud_school_edit.php?sno={$row['sno']}'>修改</a>
		   </td>";
	 echo "</tr>";
}
	
?>
<a href="admin_menu.php"><button>返回菜单</button></a>