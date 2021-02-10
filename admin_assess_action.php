<?php
include "connect.php";
$action = htmlspecialchars($_GET['action']);
switch ($action) {
    case 'add':{   //增加操作
		$asno = htmlspecialchars($_POST['asno']); 
		$sno = htmlspecialchars($_POST['sno']);
        $assess_name = htmlspecialchars($_POST['assess_name']);
        $date = htmlspecialchars($_POST['date']);
		$detail = htmlspecialchars($_POST['detail']);
		/*可以抵御xss攻击<script>alert("hacker")</script>
		*/


        //写sql语句
        //$sql = "INSERT INTO assess VALUES ('{$asno}','{$sno}','{$assess_name}','{$date}','{$detail}')";
		$sql=sprintf("INSERT INTO assess VALUES ('%s','%s','%s','%s','%s')",
			mysqli_real_escape_string($link,$asno),
			mysqli_real_escape_string($link,$sno),
			mysqli_real_escape_string($link,$assess_name),
			mysqli_real_escape_string($link,$date),
			mysqli_real_escape_string($link,$detail));
        $result = mysqli_query($link, $sql);
		$num = mysqli_affected_rows($link);
        if ($num > 0) {
            echo "<script> alert('增加成功');
                            window.location='admin_assess.php'; 
                 </script>";
        } else {
            echo "<script> alert('增加失败');
                            window.history.back(); //返回上一页
                 </script>";
        }
        break;
    }
	case "del": {    
        $asno = htmlspecialchars($_GET['asno']);
        //$sql = "DELETE FROM assess WHERE asno={$asno}";
		$sql=sprintf("delete from assess where asno='%s'",mysqli_real_escape_string($link,$asno));
        $result = mysqli_query($link, $sql);
        header("Location:admin_assess.php");
        break;
    }
   case "edit" :{   
		$asno = htmlspecialchars($_POST['asno']); 
		$sno = htmlspecialchars($_POST['sno']);
        $assess_name = htmlspecialchars($_POST['assess_name']);
        $date = htmlspecialchars($_POST['date']);
		$detail = htmlspecialchars($_POST['detail']);

        //$sql = "UPDATE assess SET sno='{$sno}',assess_name='{$assess_name}',date='{$date}',detail='{$detail}' WHERE asno='{$asno}'";
		$sql=sprintf("UPDATE assess SET sno='%s',assess_name='%s',date='%s',detail='%s' WHERE asno='%s'",
			mysqli_real_escape_string($link,$sno),
			mysqli_real_escape_string($link,$assess_name),
			mysqli_real_escape_string($link,$date),
			mysqli_real_escape_string($link,$detail),
			mysqli_real_escape_string($link,$asno));
        $result = mysqli_query($link, $sql);
		$num = mysqli_affected_rows($link);
        if($num>0){
            echo "<script>alert('修改成功');window.location='admin_assess.php'</script>";
        }else{
            echo "<script>alert('修改失败');window.history.back()</script>";
        }


        break;
    }

}