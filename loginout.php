<?php
header("Content-type: text/html; charset=gb2312"); ?>


<?php 
//�����Ự
session_start();
if ($_SESSION["sno"] =="")
{
   echo "<script LANGUAGE='javascript'>alert('����û�е�¼��');window.document.location.href='login.php';</script>";
}
//����cookie
setcookie("sno","session expired",time()-60*60*24*1);
setcookie("mno","session expired",time()-60*60*24*1);
session_unset(); //ɾ���Ự
//remove the session itself
session_destroy();
//�ص���¼����
header("Location: index.php");
?>