<?php
header("Content-type: text/html; charset=gb2312"); ?>

<?php
session_start();  
if ($_SESSION['code'] == $_POST['yzm_code']) {  
    //echo "验证码输入正确";  
} else {  
    echo "<script LANGUAGE='javascript'>alert('请输入正确的验证码！');history.go(-1);</script>";
}  
//获取表单数据
$sno=$_POST["sno"];
$pwd=$_POST["pwd"];

include_once "connect.php";

$myquery="Select * from student_log  where sno='". $sno ."' and password='".$pwd."'";

$result=mysqli_query($link, $myquery) or die("<br>更新失败: " . mysqli_error($link)); //执行插入sql语句
$recordCount=mysqli_num_rows($result); //获取记录数
//如果记录数为0，说明登录用户不存在
if($recordCount==0) echo "<script LANGUAGE='javascript'>alert('你输入的用户不存在或密码错误！');history.go(-1);</script>";
$row=mysqli_fetch_array($result);
//将用户名存储在Session的sno变量中
$_SESSION['sno']=$row["sno"];
//将用户名存储在Cookie的sno变量中
setcookie("sno","{$row["sno"]}",time()+60*60*24*1);
//回到登录界面
//header("Location: index.php");
//echo $_SESSION["ID"].'--'.$_SESSION["sno"] . "<br>";
echo "<script language='javascript'>";
echo "alert('登录成功！');";
echo "window.location.href='menu.php';";
echo "</script>";
mysqli_free_result($result);
mysqli_close($link);
?>