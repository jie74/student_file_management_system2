<script>
         function doDel(asno) {
             if (confirm("确定要删除么？")) {
                 window.location = 'admin_assess_action.php?action=del&asno='+asno;
             }
         }
</script>

<?php 
error_reporting(7);//只显示严重错误
include "connect.php";
session_start();
if(!isset($_SESSION['mno'])) {
	echo "你还没有登录!";
	echo "<script language='javascript'>";
	echo "alert('你还没有登录！');";
	echo "window.location.href='admin_login.php';";
	echo "</script>";
} else {

	echo <<<EOF
	<h3>浏览学生测评信息</h3>
		 
		 <form action="admin_assess.php" method="get" name="form1" target="_self" style="margin-bottom:-7px;">
	  查询项：
		  <select name="searchitem">
				   <option value="asno">编号</option>
				   <option value="sno" selected=true>学号</option>
				   <option value="assess_name">测评项</option>
				   <option value="date">日期</option>
				   <option value="detail">细节</option>
			</select>
	  关键词：
	  <input type="text" size="10" name="searchvalue">
	  <input type="submit" name="submit" value="查询">
	  </form><br>
		 
		 
		 <a href="admin_assess_add.php">增加学生测评信息</a>
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
	
	$searchitem=htmlspecialchars($_GET['searchitem']); 
	$searchvalue=htmlspecialchars($_GET['searchvalue']);
	
	if($searchvalue!="") 
	  {
		//$result = mysqli_query($link,"SELECT * FROM assess where {$searchitem} like '%{$searchvalue}%' ORDER BY asno");
		$query=sprintf("select * from assess where %s like '%%%s%%' ORDER BY asno",mysqli_real_escape_string($link,$searchitem),mysqli_real_escape_string($link,$searchvalue));
		$result=mysqli_query($link,$query);
	  }
	else
	  {
	   $result = mysqli_query($link,"SELECT * FROM assess ORDER BY asno");
	  }
	  
	while($row = mysqli_fetch_array($result)) {
		 echo "<tr>";
		 echo "<td>{$row['asno']}</td>";
		 echo "<td>{$row['sno']}</td>";
		 echo "<td>{$row['assess_name']}</td>";
		 echo "<td>{$row['date']}</td>";
		 echo "<td>{$row['detail']}</td>";
		 echo "<td>
				 <a href='javascript:doDel({$row['asno']})'>删除</a>
				 <a href='admin_assess_edit.php?asno={$row['asno']}'>修改</a>
			   </td>";
		 echo "</tr>";
	}
?>	
	<a href="admin_menu.php"><button>返回菜单</button></a>
<?php
}
?>