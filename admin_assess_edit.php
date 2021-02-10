<html>
<head>
    <meta charset="UTF-8">
    <title>学生信息管理</title>
 
</head>
<body>
<center>
    <h3>修改学生测评信息</h3>
	<?php
    include "connect.php";
    $sql = "SELECT * FROM assess WHERE asno =".$_GET['asno'];
    $result = mysqli_query($link, $sql);
	while($row = mysqli_fetch_array($result)) {
		$asno = $row['asno'];
        $sno = $row['sno'];
        $assess_name = $row['assess_name'];
        $date = $row['date'];
		$detail = $row['detail'];
	}
    ?>
    <p><?php echo $row['sno'];?></p>
    <form id="addassess" name="editassess" method="post" action="admin_assess_action.php?action=edit">
        <input type="hidden" name="asno" id="asno" value=<?php echo $asno; ?>>
        <table>
            <tr>
                <td>学号</td>
                <td><input id="sno" name="sno" type="text" value=<?php echo $sno ?>></td>
             </tr>
             <tr>
                <td>测评项目</td>
                <td><input id="assess_name" name="assess_name" type="text" value=<?php echo $assess_name ?>></td>
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
