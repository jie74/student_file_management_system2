<?php
include "connect.php";
switch ($_GET['action']) {
    case 'add':{   //增加操作
        $pno = $_POST['pno'];
        $sno = $_POST['sno'];
        $pname = $_POST['pname'];
		$result = $_POST['result'];
        $date = $_POST['date'];
		$detail = $_POST['detail'];

        //写sql语句
        $sql = "INSERT INTO punishment VALUES ('{$pno}','{$sno}','{$pname}','{$result}','{$date}','{$detail}')";
        $result = mysqli_query($link, $sql);
		$num = mysqli_affected_rows($link);
        if ($num > 0) {
            echo "<script> alert('增加成功');
                      window.location='admin_punishment.php'; 
                 </script>";
        } else {
            echo "<script> alert('增加失败');
                            window.history.back(); //返回上一页
                 </script>";
        }
        break;
    }
	case "del": {    
        $pno = $_GET['pno'];
        $sql = "DELETE FROM punishment WHERE pno={$pno}";
        $result = mysqli_query($link, $sql);
        header("Location:admin_punishment.php");
        break;
    }
   case "edit" :{   
		$pno = $_POST['pno'];
        $sno = $_POST['sno'];
        $pname = $_POST['pname'];
		$result = $_POST['result'];
        $date = $_POST['date'];
		$detail = $_POST['detail'];

        $sql = "UPDATE punishment SET sno='{$sno}',pname='{$pname}',result='{$result}',date='{$date}',detail='{$detail}' WHERE pno='{$pno}'";
        $result = mysqli_query($link, $sql);
		$num = mysqli_affected_rows($link);
        if($num>0){
            echo "<script>alert('修改成功');window.location='admin_punishment.php'</script>";
        }else{
            echo "<script>alert('修改失败');window.history.back()</script>";
        }


        break;
    }

}