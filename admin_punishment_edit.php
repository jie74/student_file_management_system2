
<html>
<head>
    <meta charset="UTF-8">
    <title>学生信息管理</title>
 
</head>
<body>
<center>
    <h3>修改学生处罚信息</h3>
	<?php
    include "connect.php";
    $sql = "SELECT * FROM punishment WHERE pno =".$_GET['pno'];
    $result = mysqli_query($link, $sql);
	while($row = mysqli_fetch_array($result)) {
		$pno = $row['pno'];
        $sno = $row['sno'];
        $pname = $row['pname'];
		$result = $row['result'];
        $date = $row['date'];
		$detail = $row['detail'];
	}
    ?>
    <p><?php echo $row['sno'];?></p>
    <form id="addpunishment" name="editpunishment" method="post" action="admin_punishment_action.php?action=edit">
        <input type="hidden" name="pno" id="pno" value=<?php echo $pno; ?>>
        <table>
            <tr>
                <td>学号</td>
                <td><input id="sno" name="sno" type="text" value=<?php echo $sno ?>></td>
             </tr>
             <tr>
                <td>处罚名称</td>
                <td><input id="pname" name="pname" type="text" value=<?php echo $pname ?>></td>
             </tr>
             <tr>
                <td>处罚结果</td>
                <td><input id="result" name="result" type="text" value=<?php echo $result ?>></td>
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
