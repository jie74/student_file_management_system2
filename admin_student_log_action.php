<?php
include "connect.php";
switch ($_GET['action']) {
    case 'addall':{   //一键添加所有学生信息，此功能不能实现
        //写sql语句
        //$sql = "INSERT INTO student_log(sno,password) VALUES ($sno,default) ";
		
		$query=mysqli_query($link, "select sno from stud_school");
		while($row=mysqli_fetch_array($link, $query)){
			$sno = $row['sno'];
			$sql2="INSERT INTO student_log(sno) VALUES ('{$sno}')";
			//$sql2="insert into student_log values(".$sno.", ".$pwd.")";
			$sql=mysqli_query($link, $sql2);
			$num = mysqli_affected_rows($link);
		}

		
        //$result = mysqli_query($link, $sql);
		//$num = mysqli_affected_rows($link);
        if ($num > 0) {
            echo "<script> alert('增加成功');
                            window.location='admin_student_log.php'; 
                 </script>";
        } else {
            echo "<script> alert('增加失败');
                            window.history.back(); //返回上一页
                 </script>";
        }
        break;
    }
	case 'add':{   //增加操作
        $sno = $_POST['sno'];
        $pwd = $_POST['pwd'];

        //写sql语句
        $sql = "INSERT INTO student_log VALUES ('{$sno}','{$pwd}')";
        $result = mysqli_query($link, $sql);
		$num = mysqli_affected_rows($link);
        if ($num > 0) {
            echo "<script> alert('增加成功');
                            window.location='admin_student_log.php'; 
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
        $sql = "DELETE FROM student_log WHERE sno={$sno}";
        $result = mysqli_query($link, $sql);
        header("Location:admin_student_log.php");
        break;
    }
   case "edit" :{   
		$sno = $_POST['sno'];
        $pwd = $_POST['pwd'];

        $sql = "UPDATE student_log SET password='{$pwd}' WHERE sno='{$sno}'";
        $result = mysqli_query($link, $sql);
		$num = mysqli_affected_rows($link);
        if($num>0){
            echo "<script>alert('修改成功');window.location='admin_student_log.php'</script>";
        }else{
            echo "<script>alert('修改失败');window.history.back()</script>";
        }


        break;
    }

}