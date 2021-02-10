<?php
include "connect.php";
switch ($_GET['action']) {
    case 'add':{   //增加操作
        $changeno = $_POST['changeno'];
        $sno = $_POST['sno'];
        $change_name = $_POST['change_name'];
        $date = $_POST['date'];
		$detail = $_POST['detail'];

        //写sql语句
        $sql = "INSERT INTO status_change VALUES ('{$changeno}','{$sno}','{$change_name}','{$date}','{$detail}')";
        $result = mysqli_query($link, $sql);
		$num = mysqli_affected_rows($link);
        if ($num > 0) {
            echo "<script> alert('增加成功');
                            window.location='admin_status_change.php'; 
                 </script>";
        } else {
            echo "<script> alert('增加失败');
                            window.history.back(); //返回上一页
                 </script>";
        }
        break;
    }
	case "del": {    
        $changeno = $_GET['changeno'];
        $sql = "DELETE FROM status_change WHERE changeno={$changeno}";
        $result = mysqli_query($link, $sql);
        header("Location:admin_status_change.php");
        break;
    }
   case "edit" :{   
		$changeno = $_POST['changeno'];
        $sno = $_POST['sno'];
        $change_name = $_POST['change_name'];
        $date = $_POST['date'];
		$detail = $_POST['detail'];

        $sql = "UPDATE status_change SET sno='{$sno}',change_name='{$change_name}',date='{$date}',detail='{$detail}' WHERE changeno='{$changeno}'";
        $result = mysqli_query($link, $sql);
		$num = mysqli_affected_rows($link);
        if($num>0){
            echo "<script>alert('修改成功');window.location='admin_status_change.php'</script>";
        }else{
            echo "<script>alert('修改失败');window.history.back()</script>";
        }


        break;
    }

}