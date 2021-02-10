<?php
header("Content-type: text/html; charset=gb2312"); 

error_reporting(7);//只显示严重错误
?>


<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link rel="stylesheet" type="text/css" href="./style2.css" />
<title>后台登录</title>
</head>

<body>
<table  width="500" border="1" align="center" cellpadding="5" cellspacing="0">
    <tr><td align="center"><?php
    //echo $_SESSION["mno"];
    if($_SESSION["mno"]=="")
      echo "请登录";
    else
      echo "欢迎您" . $_SESSION["mno"] . ",<a href=admin_menu.php>进入菜单</a>,<a href=loginout.php>注销登录</a>";
    ?></td></tr>
</table>

<form id="form1" name="form1" method="post" action="admin_loginok.php">
  <table width="500" border="1" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td colspan="2" align="center">请输入您的登录信息</td>
    </tr>
    <tr>
      <td width="199" align="right">工&nbsp;&nbsp;号</td>
      <td width="295"><label>
        <input name="mno" type="text" id="mno" />
      </label></td>
    </tr>
   
    <tr>
      <td align="right">密&nbsp;&nbsp;码</td>
      <td><label>
        <input name="pwd" type="password" id="pwd" />
      </label></td>
    </tr>
	
	<tr>
      <td align="right">验证码</td>
      <td>
	  <input name="yzm_code" type="text" id="yzm_code" value="" size="10" maxlength="4">
		<img id="yanzhengma" src="getcode.php" alt="登录验证码" border="0" style="cursor:hand;margin-bottom:-7px;" title="看不清，点这里换一张"/></td>
    </tr>
	
	<tr>
      <td colspan="2" align="center"><label>
        <input type="submit" name="Submit" value="登录" />
        &nbsp;<input type="reset" name="Submit2" value="重置" />
      </label></td>
    </tr>
  </table>
</form>

<a href="login.php"><input type="submit" value="学生登录" /></a>

<script type="text/javascript">  
document.getElementById("yanzhengma").onclick = function() {  
   this.src = "getcode.php?t=" + Math.random();  
}
</script>  
</body>
</html>
