<?php
header("Content-type: text/html; charset=gb2312"); ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="gb2312" >
<title>文件上传</title>
</head>
<body>
	<h4>单文件上传</h4>
	<hr />
    <p>
    <?php 
	  $location = "upfile/";     // 文件被上传后的目录
	
	
   
		if(empty($_FILES['file']['tmp_name'])){
			echo '文件还未上传！';
		}else {
			echo '上传文件信息: <hr/>';        
			echo '<hr/>';
			if (file_exists("mydata/".$_FILES['file']['name'])) {
				echo $_FILES['file']['name'].'文件已经存在！';
			}else {
				move_uploaded_file($_FILES['file']['tmp_name'], 
				"upfile/".$_FILES['file']['name']);
			}
			echo "<script>window.opener.document.myform.pic.value='".$location.$_FILES['file']['name']."';alert('上传成功！');window.close();</script>";
		}

    ?>
	
    	<form action="<?php echo $_SERVER['PHP_SELF']?>"
        method="post" enctype="multipart/form-data" >
        <label>请选择要上传的文件: </label>
        <input type="file" name="file" id="file"/>
        <input type="submit" name="sumbit" value="上传">
    </form>      
</body>
</html>