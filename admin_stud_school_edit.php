<html>
<head>
    <meta charset="UTF-8">
    <title>学生信息管理</title>
 
</head>
<body>
<center>
    <h3>修改学生在校信息</h3>
	<?php
    include "connect.php";
    $sql = "SELECT * FROM stud_school WHERE sno =".$_GET['sno'];
    $result = mysqli_query($link, $sql);
	while($row = mysqli_fetch_array($result)) {
		$sno = $row['sno'];
        $dept_name = $row['dept_name'];
        $specialty = $row['specialty'];
        $class = $row['class'];
		$dormitory = $row['dormitory'];
	}
    ?>
    <form id="addstudschool" name="editstudschool" method="post" action="admin_stud_school_action.php?action=edit">
        <input type="hidden" name="sno" id="sno" value=<?php echo $sno; ?>>
        <table>
            <tr>
                <td>学院</td>
                <td><input id="dept_name" name="dept_name" type="text" value=<?php echo $dept_name ?>></td>
             </tr>
             <tr>
                <td>专业</td>
                <td><input id="specialty" name="specialty" type="text" value=<?php echo $specialty ?>></td>
             </tr>
             <tr>
                <td>班级</td>
                <td><input id="class" name="class" type="text" value="<?php echo $class?>"/></td>
             </tr>
             <tr>
                <td>宿舍</td>
                <td><input id="dormitory" name="dormitory" type="text" value="<?php echo $dormitory ?>"/></td>
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
