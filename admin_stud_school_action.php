<?php
include "connect.php";
switch ($_GET['action']) {
    case 'add':{   //增加操作
        $sno = $_POST['sno'];
        $dept_name = $_POST['dept_name'];
        $specialty = $_POST['specialty'];
        $class = $_POST['class'];
		$dormitory = $_POST['dormitory'];

        //写sql语句
        $sql = "INSERT INTO stud_school VALUES ('{$sno}','{$dept_name}','{$specialty}','{$class}','{$dormitory}')";
        $result = mysqli_query($link, $sql);
		$num = mysqli_affected_rows($link);
        if ($num > 0) {
            echo "<script> alert('增加成功');
                            window.location='admin_stud_school.php'; 
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
        $sql = "DELETE FROM stud_school WHERE sno={$sno}";
        $result = mysqli_query($link, $sql);
        header("Location:admin_stud_school.php");
        break;
    }
   case "edit" :{   
		$sno = $_POST['sno'];
        $dept_name = $_POST['dept_name'];
        $specialty = $_POST['specialty'];
        $class = $_POST['class'];
		$dormitory = $_POST['dormitory'];

        $sql = "UPDATE stud_school SET dept_name='{$dept_name}',specialty='{$specialty}',class='{$class}',dormitory='{$dormitory}' WHERE sno='{$sno}'";
        $result = mysqli_query($link, $sql);
		$num = mysqli_affected_rows($link);
        if($num>0){
            echo "<script>alert('修改成功');window.location='admin_stud_school.php'</script>";
        }else{
            echo "<script>alert('修改失败');window.history.back()</script>";
        }


        break;
    }

}