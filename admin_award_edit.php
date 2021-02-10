<html>
<head>
    <meta charset="UTF-8">
    <title>学生信息管理</title>
 
</head>
<body>
<center>
    <h3>修改学生奖项信息</h3>
	<?php
    include "connect.php";
    $sql = "SELECT * FROM award WHERE awno =".$_GET['awno'];
    $result = mysqli_query($link, $sql);
	while($row = mysqli_fetch_array($result)) {
		$awno = $row['awno'];
        $sno = $row['sno'];
        $aname = $row['aname'];
        $date = $row['date'];
		$detail = $row['detail'];
	}
    ?>
    <form id="addaward" name="editaward" method="post" action="admin_award_action.php?action=edit">
        <input type="hidden" name="awno" id="awno" value=<?php echo $awno; ?>>
        <table>
            <tr>
                <td>学号</td>
                <td><input id="sno" name="sno" type="text" value=<?php echo $sno ?>></td>
             </tr>
             <tr>
                <td>奖项</td>
                <td><input id="aname" name="aname" type="text" value=<?php echo $aname ?>></td>
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
