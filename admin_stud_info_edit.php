<html>
<head>
    <meta charset="UTF-8">
    <title>学生信息管理</title>
 
</head>
<body>
<center>
    <h3>修改学生信息</h3>
	<?php
    include "connect.php";
    $sql = "SELECT * FROM stud_info WHERE sno =".$_GET['sno'];
    $result = mysqli_query($link, $sql);
	while($row = mysqli_fetch_array($result)) {
		$sno = $row['sno'];
		$sname = $row['sname'];
		$ssex = $row['ssex'];
		$birth = $row['birth'];
		$native_place = $row['native_place'];
		$political_status = $row['political_status'];
		$phone = $row['phone'];
		$email = $row['email'];
		$pic = $row['pic'];
	}
    ?>
    <form id="myform" name="myform" method="post" action="admin_stud_info_action.php?action=edit">
        <input type="hidden" name="sno" id="sno" value="<?php echo $sno;?>"/>
        <table>
            <tr>
                <td>姓名</td>
                <td><input id="sname" name="sname" type="text" value="<?php echo $sname?>"/></td>

            </tr>
            <tr>
                <td>性别</td>
                <td><input type="radio" name="ssex" value="男" <?php echo ($ssex=="男")? "checked" : ""?>/> 男
                    <input type="radio" name="ssex" value="女" <?php echo ($ssex=="女")? "checked" : ""?>/> 女
                </td>
            </tr>
            <tr>
                <td>出生日期</td>
                <td><input id="birth" name="birth" type="text" value="<?php echo $birth?>"/></td>
             </tr>
             <tr>
                <td>籍贯</td>
                <td><input id="native_place" name="native_place" type="text" value="<?php echo $native_place?>"/></td>
             </tr>
             <tr>
                <td>政治面貌</td>
                <td><input id="political_status" name="political_status" type="text" value="<?php echo $political_status?>"/></td>
             </tr>
             <tr>
                <td>手机</td>
                <td><input id="phone" name="phone" type="text" value="<?php echo $phone?>"/></td>
             </tr>
             <tr>
                <td>邮箱</td>
                <td><input id="email" name="email" type="text" value="<?php echo $email?>"/></td>
             </tr>
             <tr>
                <td>照片</td>
                <td>
                <input name="pic" type="text" id="pic" size="30">
           &nbsp; <input type="button" name="Submit2" value="上传文件" onClick="window.open('upload.php','','status=no,scrollbars=no,top=20,left=110,width=420,height=165')" />
           		</td>
             </tr>
            <tr>
                 <td> </td>
                <td><input type="submit" value="修改"/>  
                    <input type="reset" value="重置"/>
                </td>
            </tr>
        </table>
     </form>
</center>
</body>
</html>