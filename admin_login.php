<?php
header("Content-type: text/html; charset=gb2312"); 

error_reporting(7);//ֻ��ʾ���ش���
?>


<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link rel="stylesheet" type="text/css" href="./style2.css" />
<title>��̨��¼</title>
</head>

<body>
<table  width="500" border="1" align="center" cellpadding="5" cellspacing="0">
    <tr><td align="center"><?php
    //echo $_SESSION["mno"];
    if($_SESSION["mno"]=="")
      echo "���¼";
    else
      echo "��ӭ��" . $_SESSION["mno"] . ",<a href=admin_menu.php>����˵�</a>,<a href=loginout.php>ע����¼</a>";
    ?></td></tr>
</table>

<form id="form1" name="form1" method="post" action="admin_loginok.php">
  <table width="500" border="1" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td colspan="2" align="center">���������ĵ�¼��Ϣ</td>
    </tr>
    <tr>
      <td width="199" align="right">��&nbsp;&nbsp;��</td>
      <td width="295"><label>
        <input name="mno" type="text" id="mno" />
      </label></td>
    </tr>
   
    <tr>
      <td align="right">��&nbsp;&nbsp;��</td>
      <td><label>
        <input name="pwd" type="password" id="pwd" />
      </label></td>
    </tr>
	
	<tr>
      <td align="right">��֤��</td>
      <td>
	  <input name="yzm_code" type="text" id="yzm_code" value="" size="10" maxlength="4">
		<img id="yanzhengma" src="getcode.php" alt="��¼��֤��" border="0" style="cursor:hand;margin-bottom:-7px;" title="�����壬�����ﻻһ��"/></td>
    </tr>
	
	<tr>
      <td colspan="2" align="center"><label>
        <input type="submit" name="Submit" value="��¼" />
        &nbsp;<input type="reset" name="Submit2" value="����" />
      </label></td>
    </tr>
  </table>
</form>

<a href="login.php"><input type="submit" value="ѧ����¼" /></a>

<script type="text/javascript">  
document.getElementById("yanzhengma").onclick = function() {  
   this.src = "getcode.php?t=" + Math.random();  
}
</script>  
</body>
</html>
