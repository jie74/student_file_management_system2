<?php
header("Content-type: text/html; charset=gb2312"); ?>


<?php 
//启动会话
session_start();
if ($_SESSION["sno"] =="")
{
   echo "<script LANGUAGE='javascript'>alert('您还没有登录！');window.document.location.href='login.php';</script>";
}
//设置cookie
setcookie("sno","session expired",time()-60*60*24*1);
setcookie("mno","session expired",time()-60*60*24*1);
session_unset(); //删除会话
//remove the session itself
session_destroy();
//回到登录界面
header("Location: index.php");
?>