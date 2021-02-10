<?php
include "connect.php";
switch ($_GET['action']) {
    case 'add':{   //增加操作
        $sno = $_POST['sno'];
        $cno = $_POST['cno'];
        $score = $_POST['score'];

        //写sql语句
        $sql = "INSERT INTO sc VALUES ('{$sno}','{$cno}','{$score}')";
        $result = mysqli_query($link, $sql);
		$num = mysqli_affected_rows($link);
        if ($num > 0) {
            echo "<script> alert('增加成功');
                            window.location='admin_score.php'; 
                 </script>";
        } else {
            echo "<script> alert('增加失败');
                            window.history.back(); //返回上一页
                 </script>";
        }
        break;
    }
	case "del": {    
        $sno = $_GET['sno'];
		$cno = $_GET['cno'];
        $sql = "DELETE FROM sc WHERE sno = '".$sno."' AND cno = '".$cno."'";
        $result = mysqli_query($link, $sql);
        header("Location:admin_score.php");
        break;
    }
   case "edit" :{   
		$sno = $_POST['sno'];
        $cno = $_POST['cno'];
        $score = $_POST['score'];

        $sql = "UPDATE sc SET score='".$score."' WHERE sno='".$sno."' and cno='".$cno."'";
        $result = mysqli_query($link, $sql);
		$num = mysqli_affected_rows($link);
        if($num>0){
            echo "<script>alert('修改成功');window.location='admin_score.php'</script>";
        }else{
            echo "<script>alert('修改失败');window.history.back()</script>";
        }


        break;
    }

}