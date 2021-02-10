<link rel="stylesheet" type="text/css" href="./style2.css" />
<?php 
error_reporting(7);//只显示严重错误
include "connect.php";

session_start(); 
/*先判断Cookie中mno变量是否为空，然后在分别判断Session中mno变量是否为空*/
if ($_COOKIE["mno"] ==""){ 
  //再判断Session中mno变量的值是否为空，并输出不同的信息。
  if ($_SESSION["mno"]==""){
    echo "您还未登录，请<a href=admin_login.php>登录</a>";
  }else{  
    echo $_SESSION["mno"]."欢迎您！&nbsp;<a href=loginout.php>注销登录</a>"; 
  }  
}else{
  //再判断Session中mno变量的值是否为空，并输出不同的信息。
  if ($_SEESION["mno"]==""){
    $_SESSION["mno"]=$_COOKIE["mno"];
    echo $_COOKIE["mno"]."欢迎再次回来！&nbsp;<a href=loginout.php>注销登录</a>"; 
  }else{  
    echo $_SESSION["mno"]."欢迎您！&nbsp;<a href=loginout.php>注销登录</a>"; 
  }      
}

$mno = $_SESSION['mno'];

echo <<<EOF
<div align="center"> 
<br> 
<a href="admin_stud_info.php">个人信息</a> 
<a href="admin_stud_school.php">在校信息</a> 
<a href="admin_status_change.php">学籍异动</a> 
<a href="admin_score.php">成绩查询</a> 
<a href="admin_assess.php">发展测评</a> 
<a href="admin_award.php">奖励信息</a> 
<br>
<a href="admin_punishment.php">惩罚信息</a> 
<a href="admin_otherfile.php">其他档案</a> 
<a href="admin_student_log.php">浏览学生登录信息</a> 
<a href="admin_stud_purview.php">设置学生权限</a> 
<br> 
</div> 
EOF;
?>