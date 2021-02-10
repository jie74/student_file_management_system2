<script>
         function doDel(ono) {
             if (confirm("确定要删除么？")) {
                 window.location = 
'admin_otherfile_action.php?action=del&ono='+ono;
             }
         }
</script>

<?php 
error_reporting(7);//只显示严重错误 
include "connect.php";

echo <<<EOF
<h3>浏览其他档案信息</h3>
	 
	 <form action="admin_otherfile.php" method="get" name="form1" target="_self" style="margin-bottom:-7px;">
  查询项：
      <select name="searchitem">
               <option value="ono">编号</option>
			   <option value="sno" selected=true>学号</option>
			   <option value="oname">档案名称</option>
			   <option value="date">日期</option>
			   <option value="detail">细节</option>
        </select>
  关键词：
  <input type="text" size="10" name="searchvalue">
  <input type="submit" name="submit" value="查询">
  </form><br>
	 
	 
     <a href="admin_otherfile_add.php">增加其他档案信息</a>
	 <table width="600" border="1">
         <tr>
             <th>编号</th>
             <th>学号</th>
             <th>其他档案</th>
             <th>日期</th>
             <th>细节</th>
			 <th>操作</th>
         </tr>
EOF;

$searchitem=$_GET['searchitem']; 
$searchvalue=$_GET['searchvalue'];

if($searchvalue!="") 
  {
   $result = mysqli_query($link,"SELECT * FROM otherfile where {$searchitem} like '%{$searchvalue}%' ORDER BY ono");
  }
else
  {
   $result = mysqli_query($link,"SELECT * FROM otherfile ORDER BY ono");
  }
  
while($row = mysqli_fetch_array($result)) {
	 echo "<tr>";
	 echo "<td>{$row['ono']}</td>";
	 echo "<td>{$row['sno']}</td>";
	 echo "<td>{$row['oname']}</td>";
	 echo "<td>{$row['date']}</td>";
	 echo "<td>{$row['detail']}</td>";
	 echo "<td>
			 <a href='javascript:doDel({$row['ono']})'>删除</a>
			 <a href='admin_otherfile_edit.php?ono={$row['ono']}'>修改</a>
		   </td>";
	 echo "</tr>";
}
	
?>
<a href="admin_menu.php"><button>返回菜单</button></a>