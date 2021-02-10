<html>
<head>
    <meta charset="UTF-8">
    <title>学生信息管理</title>
 
</head>
<body>
<center>
    <h3>修改学籍异动信息</h3>
	<?php
    include "connect.php";
    $sql = "SELECT * FROM status_change WHERE changeno =".$_GET['changeno'];
    $result = mysqli_query($link, $sql);
	while($row = mysqli_fetch_array($result)) {
		$changeno = $row['changeno'];
        $sno = $row['sno'];
        $change_name = $row['change_name'];
        $date = $row['date'];
		$detail = $row['detail'];
	}
    ?>
    <p><?php echo $row['sno'];?></p>
    <form id="addstatuschange" name="editstatuschange" method="post" action="admin_status_change_action.php?action=edit">
        <input type="hidden" name="changeno" id="changeno" value=<?php echo $changeno; ?>>
        <table>
            <tr>
                <td>学号</td>
                <td><input id="sno" name="sno" type="text" value=<?php echo $sno ?>></td>
             </tr>
             <tr>
                <td>学籍异动</td>
                <td><input id="change_name" name="change_name" type="text" value=<?php echo $change_name ?>></td>
             </tr>
             <tr>
                <td>日期</td>
                <td><input id="date" name="date" type="text" value="<?php echo $date?>"/></td>
             </tr>
             <tr>
                <td>细节</td>
                <td><input id="detail" name="detail" type="text" value="<?php echo $detail ?>"/></td>
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
