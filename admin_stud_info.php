<script>
         function doDel(sno) {
             if (confirm("确定要删除么？")) {
                 window.location = 'admin_stud_info_action.php?action=del&sno='+sno;
             }
         }
</script>

<?php 
error_reporting(7);//只显示严重错误 
include "connect.php";

echo <<<EOF
<h3>浏览学生信息</h3>
	 
	 <form action="admin_stud_info.php" method="get" name="form1" target="_self" style="margin-bottom:-7px;">
  查询项：
      <select name="searchitem">
               <option value="sno" selected=true>学号</option>
			   <option value="sname">姓名</option>
			   <option value="ssex">性别</option>
			   <option value="birth">出生日期</option>
			   <option value="native_place">籍贯</option>
			   <option value="political_status">政治面貌</option>
			   <option value="phone">手机</option>
			   <option value="email">邮箱</option>
        </select>
  关键词：
  <input type="text" size="10" name="searchvalue">
  <input type="submit" name="submit" value="查询">
  </form><br>
	 
	 
	 <a href="admin_stud_info_add.php">增加学生信息</a>
     <table width="600" border="1">
         <tr>
             <th>学号</th>
             <th>姓名</th>
             <th>性别</th>
             <th>出生日期</th>
             <th>籍贯</th>
             <th>政治面貌</th>
			 <th>手机</th>
			 <th>邮箱</th>
			 <th>照片</th>
			 <th>操作</th>
         </tr>
EOF;

$searchitem=$_GET['searchitem']; 
$searchvalue=$_GET['searchvalue'];

if($searchvalue!="") 
  {
   $result = mysqli_query($link,"SELECT * FROM stud_info where {$searchitem} like '%{$searchvalue}%' ORDER BY sno");
  }
else
  {
   $result = mysqli_query($link,"SELECT * FROM stud_info ORDER BY sno");
  }

while($row = mysqli_fetch_array($result)) {
	 echo "<tr>";
	 echo "<td>{$row['sno']}</td>";
	 echo "<td>{$row['sname']}</td>";
	 echo "<td>{$row['ssex']}</td>";
	 echo "<td>{$row['birth']}</td>";
	 echo "<td>{$row['native_place']}</td>";
	 echo "<td>{$row['political_status']}</td>";
	 echo "<td>{$row['phone']}</td>";
	 echo "<td>{$row['email']}</td>";
?>
	 <td><img src="<?php echo $row['pic'] ?>" alt="图片损坏<?php echo $row['Lpic'] ?>" width="100" height="100" border="0" align="absmiddle" /></td>
<?php
	 echo "<td>
			 <a href='javascript:doDel({$row['sno']})'>删除</a>
			 <a href='admin_stud_info_edit.php?sno=({$row['sno']})'>修改</a>
		   </td>";
	 echo "</tr>";
}
	
?>
<a href="admin_menu.php"><button>返回菜单</button></a>