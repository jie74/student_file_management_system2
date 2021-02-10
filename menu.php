<link rel="stylesheet" type="text/css" href="./style2.css" />
<?php 
error_reporting(7);//只显示严重错误
include "connect.php";
session_start();
/*先判断Cookie中sno变量是否为空，然后在分别判断Session中sno变量是否为空*/
if ($_COOKIE["sno"] ==""){ 
  //再判断Session中sno变量的值是否为空，并输出不同的信息。
  if ($_SESSION["sno"]==""){
    echo "您还未登录，请<a href=login.php>登录</a>";
  }else{  
    echo $_SESSION["sno"]."欢迎您！&nbsp;<a href=loginout.php>注销登录</a>"; 
  }  
}else{
  //再判断Session中sno变量的值是否为空，并输出不同的信息。
  if ($_SEESION["sno"]==""){
    $_SESSION["sno"]=$_COOKIE["sno"];
    echo $_COOKIE["sno"]."欢迎再次回来！&nbsp;<a href=loginout.php>注销登录</a>"; 
  }else{  
    echo $_SESSION["sno"]."欢迎您！&nbsp;<a href=loginout.php>注销登录</a>"; 
  }      
}

$sno = $_SESSION['sno'];
	
$sql = "select * from `stud_purview` where sno='$sno'";
$result = mysqli_query($link, $sql);
while($row = mysqli_fetch_array($result)) {
	$setinfo = $row['setinfo'];
	$setassess = $row['setassess'];
	$seeotherfile = $row['seeotherfile'];
}

echo <<<EOF
<div align="center"> 
 
<br> 
EOF;
if($setinfo){
	echo <<<EOF
	<a href="stud_info1.php?sno=$sno">个人信息</a> 
EOF;
} else {
	echo <<<EOF
	<a href="stud_info.php?sno=$sno">个人信息</a>
EOF;
}
echo <<<EOF
<a href="stud_school.php?sno=$sno">在校信息</a> 
<a href="student_log_edit.php?sno=$sno">修改密码</a> 
<a href="status_change.php?sno=$sno">学籍异动</a> 
<br> 
<a href="score.php?sno=$sno">成绩查询</a>
EOF; 
if($setassess){
	echo <<<EOF
	<a href="assess1.php?sno=$sno">发展测评</a> 
EOF;} else {
	echo <<<EOF
	<a href="assess.php?sno=$sno">发展测评</a> 
EOF;}
echo <<<EOF
<a href="award.php?sno=$sno">奖励信息</a> 
<a href="punishment.php?sno=$sno">惩罚信息</a> 
EOF;
if($seeotherfile) {
	echo <<<EOF
	<a href="otherfile.php?sno=$sno">其他档案</a> 
EOF;
}
echo <<<EOF
<br> 
</div> 
EOF;
mysqli_close($link); 
?>