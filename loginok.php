<?php
header("Content-type: text/html; charset=gb2312"); ?>

<?php
session_start();  
if ($_SESSION['code'] == $_POST['yzm_code']) {  
    //echo "��֤��������ȷ";  
} else {  
    echo "<script LANGUAGE='javascript'>alert('��������ȷ����֤�룡');history.go(-1);</script>";
}  
//��ȡ������
$sno=$_POST["sno"];
$pwd=$_POST["pwd"];

include_once "connect.php";

$myquery="Select * from student_log  where sno='". $sno ."' and password='".$pwd."'";

$result=mysqli_query($link, $myquery) or die("<br>����ʧ��: " . mysqli_error($link)); //ִ�в���sql���
$recordCount=mysqli_num_rows($result); //��ȡ��¼��
//�����¼��Ϊ0��˵����¼�û�������
if($recordCount==0) echo "<script LANGUAGE='javascript'>alert('��������û������ڻ��������');history.go(-1);</script>";
$row=mysqli_fetch_array($result);
//���û����洢��Session��sno������
$_SESSION['sno']=$row["sno"];
//���û����洢��Cookie��sno������
setcookie("sno","{$row["sno"]}",time()+60*60*24*1);
//�ص���¼����
//header("Location: index.php");
//echo $_SESSION["ID"].'--'.$_SESSION["sno"] . "<br>";
echo "<script language='javascript'>";
echo "alert('��¼�ɹ���');";
echo "window.location.href='menu.php';";
echo "</script>";
mysqli_free_result($result);
mysqli_close($link);
?>