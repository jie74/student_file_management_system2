<?php
header("Content-type: text/html; charset=gb2312"); ?>


<?php
session_start();  
if ($_SESSION['code'] == $_POST['yzm_code']) {  
    //echo "��֤��������ȷ";  

	//��ȡ������
	$mno=$_POST["mno"];
	$pwd=$_POST["pwd"];
	
	include_once "connect.php";
	
	$myquery="Select * from manager_log where mno='". $mno ."' and password='".$pwd."'";
	
	$result=mysqli_query($link, $myquery) or die("<br>����ʧ��: " . mysqli_error($link)); //ִ�в���sql���
	$recordCount=mysqli_num_rows($result); //��ȡ��¼��
	//�����¼��Ϊ0��˵����¼�û�������
	if($recordCount==0) echo "<script LANGUAGE='javascript'>alert('��������û������ڻ��������');history.go(-1);</script>";
	$row=mysqli_fetch_array($result);
	//���û����洢��Session��mno������
	$_SESSION['mno']=$row["mno"];
	//���û����洢��Cookie��mno������
	setcookie("mno","{$row["mno"]}",time()+60*60*24*1);
	//�ص���¼����
	//header("Location: index.php");
	//echo $_SESSION["ID"].'--'.$_SESSION["mno"] . "<br>";
	echo "<script language='javascript'>";
	echo "alert('��¼�ɹ���');";
	echo "window.location.href='admin_menu.php';";
	echo "</script>";
	mysqli_free_result($result);
	mysqli_close($link);
} else {  
    echo "<script LANGUAGE='javascript'>alert('��������ȷ����֤�룡');history.go(-1);</script>";
}  
?>