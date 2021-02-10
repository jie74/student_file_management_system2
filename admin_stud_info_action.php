<?php
include "connect.php";
switch ($_GET['action']) {
	case 'add':{   //增加操作
        $sno = $_POST['sno'];
        $sname = $_POST['sname'];
        $ssex = $_POST['ssex'];
        $birth = $_POST['birth'];
		$native_place = $_POST['native_place'];
		$political_status = $_POST['political_status'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$pic = $_POST['pic'];

        //写sql语句
        $sql = "INSERT INTO stud_info VALUES ('{$sno}','{$sname}','{$ssex}','{$birth}','{$native_place}','{$political_status}','{$phone}','{$email}','{$pic}')";
        $result = mysqli_query($link, $sql);
		$num = mysqli_affected_rows($link);
        if ($num > 0) {
            echo "<script> alert('增加成功');
                    window.location='admin_stud_info.php'; 
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
        $sql = "DELETE FROM stud_info WHERE sno={$sno}";
        $result = mysqli_query($link, $sql);
        header("Location:admin_stud_info.php");
        break;
    }
   case "edit" :{   
        $sno = $_POST['sno'];
        $sname = $_POST['sname'];
        $ssex = $_POST['ssex'];
        $birth = $_POST['birth'];
		$native_place = $_POST['native_place'];
		$political_status = $_POST['political_status'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$pic = $_POST['pic'];

        $sql = "UPDATE stud_info SET sname='{$sname}',ssex='{$ssex}',birth='{$birth}',native_place='{$native_place}',political_status='{$political_status}',phone='{$phone}',email='{$email}',pic='{$pic}' WHERE sno='{$sno}'";
        $result = mysqli_query($link, $sql);
		$num = mysqli_affected_rows($link);
        if($num>0){
            echo "<script>alert('修改成功');window.location='admin_stud_info.php'</script>";
        }else{
            echo "<script>alert('修改失败');window.history.back()</script>";
        }


        break;
    }

}