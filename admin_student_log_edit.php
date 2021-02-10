<html>
<head>
    <meta charset="UTF-8">
    <title>学生信息管理</title>
 
</head>
<body>
<center>
    <h3>修改学生密码信息</h3>
	<?php
    include "connect.php";
    $sql = "SELECT * FROM student_log WHERE sno =".$_GET['sno'];
    $result = mysqli_query($link, $sql);
	while($row = mysqli_fetch_array($result)) {
		$sno = $row['sno'];
        $pwd = $row['password'];
	}
    ?>
    <form id="editstudlog" name="editstudlog" method="post" action="admin_student_log_action.php?action=edit">
        <input type="hidden" name="sno" id="sno" value=<?php echo $sno; ?>>
        <table>
            <tr>
                <td>密码</td>
                <td><input id="pwd" name="pwd" type="text" value=<?php echo $pwd ?>></td>
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
