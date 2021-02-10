<html>
<head>
    <meta charset="UTF-8">
    <title>学生信息管理</title>
 
</head>
<body>
<center>
    <h3>修改学生成绩</h3>
	<?php
    include "connect.php";
    $sno = $_GET['sno'];
    $cno = $_GET['cno'];
	$sql = "SELECT * FROM sc WHERE sno = '".$sno."' AND cno = '".$cno."'";
    $result = mysqli_query($link, $sql);
	while($row = mysqli_fetch_array($result)) {
		$sno = $row['sno'];
        $cno = $row['cno'];
        $score = $row['score'];
	}
    ?>
    <form id="addscore" name="editscore" method="post" action="admin_score_action.php?action=edit">
        <input type="hidden" name="sno" id="sno" value=<?php echo $sno; ?>>
        <input type="hidden" name="cno" id="cno" value=<?php echo $cno; ?>>
        <table>
             <tr>
                <td>成绩</td>
                <td><input id="score" name="score" type="text" value=<?php echo $score ?>></td>
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
