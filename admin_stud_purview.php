<script>
         function doDel(sno) {
             if (confirm("确定要删除么？")) {
                 window.location = 'admin_stud_purview_action.php?action=del&sno='+sno;
             }
         }
</script>

<?php 
error_reporting(7);//只显示严重错误 
include "connect.php";

echo <<<EOF
<h3>浏览学生修改信息权限</h3>
	 
	 <form action="admin_stud_purview.php" method="get" name="form1" target="_self" style="margin-bottom:-7px;">
  查询项：
      <select name="searchitem">
               <option value="sno" selected=true>学号</option>
			   <option value="setinfo">个人信息</option>
			   <option value="setassess">个人测评</option>
			   <option value="seeotherfile">其他档案</option>
        </select>
  关键词：
  <input type="text" size="10" name="searchvalue">
  <input type="submit" name="submit" value="查询">
  </form><br>
	 
	 
     <a href="admin_stud_purview_add.php">增加学生修改权限信息</a>
	 <table width="600" border="1">
         <tr>
             <th>学号</th>
             <th>修改个人信息权限</th>
             <th>修改个人测评权限</th>
			 <th>查看其他档案权限</th>
			 <th>操作</th>
         </tr>
EOF;

$searchitem=$_GET['searchitem']; 
$searchvalue=$_GET['searchvalue'];

if($searchvalue!="") 
  {
   $result = mysqli_query($link,"SELECT * FROM stud_purview where {$searchitem} like '%{$searchvalue}%' ORDER BY sno");
  }
else
  {
   $result = mysqli_query($link,"SELECT * FROM stud_purview ORDER BY sno");
  }

while($row = mysqli_fetch_array($result)) {
	 echo "<tr>";
	 echo "<td>{$row['sno']}</td>";
	 echo "<td>{$row['setinfo']}</td>";
	 echo "<td>{$row['setassess']}</td>";
	 echo "<td>{$row['seeotherfile']}</td>";
	 echo "<td>
			 <a href='javascript:doDel({$row['sno']})'>删除</a>
			 <a href='admin_stud_purview_edit.php?sno={$row['sno']}'>修改</a>
		   </td>";
	 echo "</tr>";
}
	
?>
<a href="admin_menu.php"><button>返回菜单</button></a>