<html>
<head>
    <meta charset="UTF-8">
    <title>学生信息管理</title>
 
</head>
<body>
<center>
    <h3>修改学生其它档案信息</h3>
	<?php
    include "connect.php";
    $sql = "SELECT * FROM otherfile WHERE ono =".$_GET['ono'];
    $result = mysqli_query($link, $sql);
	while($row = mysqli_fetch_array($result)) {
		$ono = $row['ono'];
        $sno = $row['sno'];
        $oname = $row['oname'];
        $date = $row['date'];
		$detail = $row['detail'];
	}
    ?>
    <p><?php echo $row['sno'];?></p>
    <form id="addotherfile" name="editotherfile" method="post" action="admin_otherfile_action.php?action=edit">
        <input type="hidden" name="ono" id="ono" value=<?php echo $ono; ?>>
        <table>
            <tr>
                <td>学号</td>
                <td><input id="sno" name="sno" type="text" value=<?php echo $sno ?>></td>
             </tr>
             <tr>
                <td>其它档案</td>
                <td><input id="oname" name="oname" type="text" value=<?php echo $oname ?>></td>
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
