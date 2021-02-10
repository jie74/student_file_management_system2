<?php
include "connect.php";
switch ($_GET['action']) {
    case 'add':{   //增加操作
        $awno = $_POST['awno'];
        $sno = $_POST['sno'];
        $aname = $_POST['aname'];
        $date = $_POST['date'];
		$detail = $_POST['detail'];

        //写sql语句
        $sql = "INSERT INTO award VALUES ('{$awno}','{$sno}','{$aname}','{$date}','{$detail}')";
        $result = mysqli_query($link, $sql);
		$num = mysqli_affected_rows($link);
        if ($num > 0) {
            echo "<script> alert('增加成功');
                            window.location='admin_award.php'; 
                 </script>";
        } else {
            echo "<script> alert('增加失败');
                            window.history.back(); //返回上一页
                 </script>";
        }
        break;
    }
	case "del": {    
        $awno = $_GET['awno'];
        $sql = "DELETE FROM award WHERE awno={$awno}";
        $result = mysqli_query($link, $sql);
        header("Location:admin_award.php");
        break;
    }
   case "edit" :{   
		$awno = $_POST['awno'];
        $sno = $_POST['sno'];
        $aname = $_POST['aname'];
        $date = $_POST['date'];
		$detail = $_POST['detail'];

        $sql = "UPDATE award SET sno='{$sno}',aname='{$aname}',date='{$date}',detail='{$detail}' WHERE awno='{$awno}'";
        $result = mysqli_query($link, $sql);
		$num = mysqli_affected_rows($link);
        if($num>0){
            echo "<script>alert('修改成功');window.location='admin_award.php'</script>";
        }else{
            echo "<script>alert('修改失败');window.history.back()</script>";
        }


        break;
    }

}