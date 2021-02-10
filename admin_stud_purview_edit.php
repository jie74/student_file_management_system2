<html>
<head>
    <meta charset="UTF-8">
    <title>学生信息管理</title>
 
</head>
<body>
<center>
    <h3>修改学生权限信息</h3>
	<?php
    include "connect.php";
    $sql = "SELECT * FROM stud_purview WHERE sno =".$_GET['sno'];
    $result = mysqli_query($link, $sql);
	while($row = mysqli_fetch_array($result)) {
		$sno = $row['sno'];
        $setinfo = $row['setinfo'];
        $setassess = $row['setassess'];
		$seeotherfile = $row['seeotherfile'];
	}
    ?>
    <form id="addstudpurview" name="editstudpurview" method="post" action="admin_stud_purview_action.php?action=edit">
        <input type="hidden" name="sno" id="sno" value=<?php echo $sno; ?>>
        <table>
            <tr>
                <td>个人信息权限</td>
                <td><input id="setinfo" name="setinfo" type="text" value=<?php echo $setinfo ?>></td>
             </tr>
             <tr>
                <td>个人测评权限</td>
                <td><input id="setassess" name="setassess" type="text" value=<?php echo $setassess ?>></td>
             </tr>
            <tr>
            <tr>
                <td>其他档案权限</td>
                <td><input id="seeotherfile" name="seeotherfile" type="text" value=<?php echo $seeotherfile ?>></td>
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
