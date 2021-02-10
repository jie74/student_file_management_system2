<?php
include "connect.php";
switch ($_GET['action']) {
    case 'add':{   //增加操作
        $ono = $_POST['ono'];
        $sno = $_POST['sno'];
        $oname = $_POST['oname'];
        $date = $_POST['date'];
		$detail = $_POST['detail'];

        //写sql语句
        $sql = "INSERT INTO otherfile VALUES ('{$ono}','{$sno}','{$oname}','{$date}','{$detail}')";
        $result = mysqli_query($link, $sql);
		$num = mysqli_affected_rows($link);
        if ($num > 0) {
            echo "<script> alert('增加成功');
                            window.location='admin_otherfile.php'; 
                 </script>";
        } else {
            echo "<script> alert('增加失败');
                            window.history.back(); //返回上一页
                 </script>";
        }
        break;
    }
	case "del": {    
        $ono = $_GET['ono'];
        $sql = "DELETE FROM otherfile WHERE ono={$ono}";
        $result = mysqli_query($link, $sql);
        header("Location:admin_otherfile.php");
        break;
    }
   case "edit" :{   
		$ono = $_POST['ono'];
        $sno = $_POST['sno'];
        $oname = $_POST['oname'];
        $date = $_POST['date'];
		$detail = $_POST['detail'];

        $sql = "UPDATE otherfile SET sno='{$sno}',oname='{$oname}',date='{$date}',detail='{$detail}' WHERE ono='{$ono}'";
        $result = mysqli_query($link, $sql);
		$num = mysqli_affected_rows($link);
        if($num>0){
            echo "<script>alert('修改成功');window.location='admin_otherfile.php'</script>";
        }else{
            echo "<script>alert('修改失败');window.history.back()</script>";
        }


        break;
    }

}