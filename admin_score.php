<script>
         function doDel(sno1,cno1) {
             if (confirm("确定要删除么？")) {
                 window.location = 'admin_score_action.php?action=del&sno='+sno1+'&cno='+cno1;
             }
         }
</script>

<?php 
error_reporting(7);//只显示严重错误 
include "connect.php";

echo <<<EOF
<h3>浏览学生成绩信息</h3>
	 
	 <form action="admin_score.php" method="get" name="form1" target="_self" style="margin-bottom:-7px;">
  查询项：
      <select name="searchitem">
			   <option value="sno" selected=true>学号</option>
			   <option value="cno">课程号</option>
			   <option value="score">成绩</option>
        </select>
  关键词：
  <input type="text" size="10" name="searchvalue">
  <input type="submit" name="submit1" value="查询">
  </form>
  
  <form action="admin_score.php" method="get" name="form2" target="_self" style="margin-bottom:-7px;">
  查询成绩范围:
  <input type="text" size="3" name="begin">
  -
  <input type="text" size="3" name="last">
  <input type="submit" name="submit2" value="查询">
  </form><br>
	 
	 
     <a href="admin_score_add.php">增加学生成绩信息</a>
	 <table width="600" border="1">
         <tr>
             <th>学号</th>
             <th>课程号</th>
             <th>成绩</th>
			 <th>操作</th>
         </tr>
EOF;

$searchitem=$_GET['searchitem']; 
$searchvalue=$_GET['searchvalue'];
$begin=$_GET['begin']; 
$last=$_GET['last'];
$submit1=$_GET['submit1']; 
$submit2=$_GET['submit2'];

if($submit1=='查询') {
	if($searchvalue!="") {
	   $result = mysqli_query($link,"SELECT * FROM sc where {$searchitem} like '%{$searchvalue}%' ORDER BY sno");
	} else {
			$result = mysqli_query($link,"SELECT * FROM sc ORDER BY sno");
		}
} 
else if($submit2=='查询') {
	if($begin!=""&&$last!=""&&$begin<$last) {
		$result = mysqli_query($link,"SELECT * FROM sc where score between {$begin} and {$last} ORDER BY sno");
	} else {
			$result = mysqli_query($link,"SELECT * FROM sc ORDER BY sno");
		}
} 
else {
	$result = mysqli_query($link,"SELECT * FROM sc ORDER BY sno");
}

  
while($row = mysqli_fetch_array($result)) {
	 echo "<tr>";
	 echo "<td>{$row['sno']}</td>";
	 echo "<td>{$row['cno']}</td>";
	 echo "<td>{$row['score']}</td>";
	 echo "<td>
			 <!--<a href='javascript:doDel({$row['sno']},{$row['cno']})'>删除</a>-->
			 <a href='admin_score_edit.php?sno={$row['sno']}&cno={$row['cno']}'>修改</a>
		   </td>";
	 echo "</tr>";
}
	
?>
<a href="admin_menu.php"><button>返回菜单</button></a>