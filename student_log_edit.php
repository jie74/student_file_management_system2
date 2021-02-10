<html>
<head>
    <meta charset="UTF-8">
    <title>学生信息管理</title>
 
</head>
<body>
<center>
    <h3>修改密码</h3>
	<?php
    include "connect.php";
	session_start();
	$sno = $_SESSION['sno'];
    $query=sprintf("select * from student_log where sno='%s'",mysqli_real_escape_string($link,$sno));
	$result=mysqli_query($link,$query);

	while($row = mysqli_fetch_array($result)) {
		$sno = $row['sno'];
        $pwd = $row['password'];
	}
    ?>
    <form id="editstudlog" name="editstudlog" method="post" action="student_log_action.php">
        <input type="hidden" name="sno" id="sno" value=<?php echo $sno; ?>>
        <table>
            <tr>
                <td>密码</td>
                <td><input type="password" id="pwd" name="pwd" type="text"></td>
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
