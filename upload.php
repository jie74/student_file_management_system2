<?php
header("Content-type: text/html; charset=gb2312"); ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="gb2312" >
<title>�ļ��ϴ�</title>
</head>
<body>
	<h4>���ļ��ϴ�</h4>
	<hr />
    <p>
    <?php 
	  $location = "upfile/";     // �ļ����ϴ����Ŀ¼
	
	
   
		if(empty($_FILES['file']['tmp_name'])){
			echo '�ļ���δ�ϴ���';
		}else {
			echo '�ϴ��ļ���Ϣ: <hr/>';        
			echo '<hr/>';
			if (file_exists("mydata/".$_FILES['file']['name'])) {
				echo $_FILES['file']['name'].'�ļ��Ѿ����ڣ�';
			}else {
				move_uploaded_file($_FILES['file']['tmp_name'], 
				"upfile/".$_FILES['file']['name']);
			}
			echo "<script>window.opener.document.myform.pic.value='".$location.$_FILES['file']['name']."';alert('�ϴ��ɹ���');window.close();</script>";
		}

    ?>
	
    	<form action="<?php echo $_SERVER['PHP_SELF']?>"
        method="post" enctype="multipart/form-data" >
        <label>��ѡ��Ҫ�ϴ����ļ�: </label>
        <input type="file" name="file" id="file"/>
        <input type="submit" name="sumbit" value="�ϴ�">
    </form>      
</body>
</html>