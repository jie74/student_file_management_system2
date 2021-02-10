<?php
include "connect.php";
switch ($_GET['action']) {
    case 'add':{   //增加操作
        $sno = $_POST['sno'];
        $setinfo = $_POST['setinfo'];
        $setassess = $_POST['setassess'];
		$seeotherfile = $_POST['seeotherfile'];

        //写sql语句
        $sql = "INSERT INTO stud_purview VALUES ('{$sno}','{$setinfo}','{$setassess}','{$seeotherfile}')";
        $result = mysqli_query($link, $sql);
		$num = mysqli_affected_rows($link);
        if ($num > 0) {
            echo "<script> alert('增加成功');
           			window.location='admin_stud_purview.php'; 
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
        $sql = "DELETE FROM stud_purview WHERE sno={$sno}";
        $result = mysqli_query($link, $sql);
        header("Location:admin_stud_purview.php");
        break;
    }
   case "edit" :{   
		$sno = $_POST['sno'];
        $setinfo = $_POST['setinfo'];
        $setassess = $_POST['setassess'];
		$seeotherfile = $_POST['seeotherfile'];

        $sql = "UPDATE stud_purview SET setinfo='{$setinfo}',setassess='{$setassess}',seeotherfile='{$seeotherfile}' WHERE sno='{$sno}'";
        $result = mysqli_query($link, $sql);
		$num = mysqli_affected_rows($link);
        if($num>0){
            echo "<script>alert('修改成功');window.location='admin_stud_purview.php'</script>";
        }else{
            echo "<script>alert('修改失败');window.history.back()</script>";
        }


        break;
    }

}