<?php
include "connect.php";
session_start();
$action = $_GET['action'];
switch ($action) {
	case 'add':{   //增加操作
		/*
		$sno = $_SESSION['sno'];
        $sname = $_POST['sname'];
        $ssex = $_POST['ssex'];
        $birth = $_POST['birth'];
		$native_place = $_POST['native_place'];
		$political_status = $_POST['political_status'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$pic = $_POST['pic'];
		*/
		$sno = htmlspecialchars($_SESSION['sno']);
        $sname = htmlspecialchars($_POST['sname']);
        $ssex = htmlspecialchars($_POST['ssex']);
        $birth = htmlspecialchars($_POST['birth']);
		$native_place = htmlspecialchars($_POST['native_place']);
		$political_status = htmlspecialchars($_POST['political_status']);
		$phone = htmlspecialchars($_POST['phone']);
		$email = htmlspecialchars($_POST['email']);
		$pic = htmlspecialchars($_POST['pic']);
		
        //写sql语句
        //$sql = "INSERT INTO stud_info VALUES ('{$sno}','{$sname}','{$ssex}','{$birth}','{$native_place}','{$political_status}','{$phone}','{$email}','{$pic}')";
		$sql=sprintf("INSERT INTO stud_info VALUES ('%s','%s','%s','%s','%s','%s','%s','%s','%s')",
			mysqli_real_escape_string($link,$sno),
			mysqli_real_escape_string($link,$sname),
			mysqli_real_escape_string($link,$ssex),
			mysqli_real_escape_string($link,$birth),
			mysqli_real_escape_string($link,$native_place),
			mysqli_real_escape_string($link,$political_status),
			mysqli_real_escape_string($link,$phone),
			mysqli_real_escape_string($link,$email),
			mysqli_real_escape_string($link,$pic));
        $result = mysqli_query($link, $sql);
		//$num = mysqli_affected_rows($link);
        if ($result > 0) {
            echo "<script> alert('增加成功');
                    window.location='stud_info1.php?sno={$sno}'; 
                 </script>";
        } else {
            echo "<script> alert('增加失败');
                            window.history.back(); //返回上一页
                 </script>";
        }
        break;
    }
    case "del": {    
		$sno = $_SESSION['sno'];
        //$sno = $_GET['sno'];
        //sql = "DELETE FROM stud_info WHERE sno={$sno}";
        //$result = mysqli_query($link, $sql);
		$query=sprintf("select * from stud_info where sno='%s'",mysqli_real_escape_string($link,$sno));
		$result=mysqli_query($link,$query);
        header("Location:stud_info1.php?sno={$sno}");
        break;
    }
   case "edit" :{   
		$sno = htmlspecialchars($_SESSION['sno']);
        $sname = htmlspecialchars($_POST['sname']);
        $ssex = htmlspecialchars($_POST['ssex']);
        $birth = htmlspecialchars($_POST['birth']);
		$native_place = htmlspecialchars($_POST['native_place']);
		$political_status = htmlspecialchars($_POST['political_status']);
		$phone = htmlspecialchars($_POST['phone']);
		$email = htmlspecialchars($_POST['email']);
		$pic = htmlspecialchars($_POST['pic']);

        //$sql = "UPDATE stud_info SET sname='{$sname}',ssex='{$ssex}',birth='{$birth}',native_place='{$native_place}',political_status='{$political_status}',phone='{$phone}',email='{$email}',pic='{$pic}' WHERE sno='{$sno}'";		
		$sql=sprintf("UPDATE stud_info SET sname='%s',ssex='%s',birth='%s',native_place='%s',political_status='%s',phone='%s',email='%s',pic='%s' WHERE sno='%s'",
			mysqli_real_escape_string($link,$sname),
			mysqli_real_escape_string($link,$ssex),
			mysqli_real_escape_string($link,$birth),
			mysqli_real_escape_string($link,$native_place),
			mysqli_real_escape_string($link,$political_status),
			mysqli_real_escape_string($link,$phone),
			mysqli_real_escape_string($link,$email),
			mysqli_real_escape_string($link,$pic),
			mysqli_real_escape_string($link,$sno));
			
        $result = mysqli_query($link, $sql);
		$num = mysqli_affected_rows($link);
        if($num>0){
            echo "<script>alert('修改成功');window.location='stud_info1.php?sno={$sno}'</script>";
        }else{
            echo "<script>alert('修改失败');window.history.back()</script>";
        }


        break;
    }
}

mysqli_close($link);
?>