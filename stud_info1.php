<script>
         function doDel(sno) {
             if (confirm("确定要删除么？")) {
                 window.location = 'stud_info1_action.php?action=del&sno='+sno;
             }
         }
</script>
<?php 
session_start(); 
include "connect.php";
$sno = $_SESSION['sno'];
//$sno = $_GET['sno'];
//$sql = "select * from `stud_info` where sno='$sno'";
//$result = mysqli_query($link, $sql);

$query=sprintf("select * from stud_info where sno='%s'",mysqli_real_escape_string($link,$sno));
$result=mysqli_query($link,$query);

$num = mysqli_affected_rows($link);
$row = mysqli_fetch_array($result);
if ($num > 0) {
	$sname = $row['sname'];
	$ssex = $row['ssex'];
	$birth = $row['birth'];
	$native_place = $row['native_place'];
	$political_status = $row['political_status'];
	$phone = $row['phone'];
	$email = $row['email'];
	$pic = $row['pic'];
?>	
	<div align="center"> 
	<h1>您的个人信息如下：</h1>
	<h3>照片：</h3><img src="<?php echo $pic ?>" alt="图片损坏<?php echo $pic ?>" width="100" height="100" border="0" align="absmiddle" />
<?php
	echo <<<EOF
	<h3>学号：{$sno}</h3>
	<h3>姓名：{$sname}</h3> 
	<h3>性别：{$ssex}</h3>
	<h3>出生日期：{$birth}</h3>
	<h3>籍贯：{$native_place}</h3>
	<h3>政治面貌：{$political_status}</h3>
	<h3>手机：{$phone}</h3>
	<h3>邮箱：{$email}</h3>
	<br>
	<a href='stud_info1_edit.php'>修改</a>
	</div>
EOF;
} else { ?>
	<a href='stud_info1_add.php'>点击填写您的个人信息</a>
<?php }?>
<a href="menu.php"><button>返回菜单</button></a>