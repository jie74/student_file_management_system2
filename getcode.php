<?php  
$cimg = imagecreate(100, 20);    
imagecolorallocate($cimg, 14, 114, 210); // background color   
$red = imagecolorallocate($cimg, 255, 0, 0);  
$num1 = rand(1, 99);  //����һ��1��99�������1
$num2 = rand(1, 10);  //����һ��1��99�������2
session_start();  
$_SESSION['code'] = $num1 + $num2;  //�������������Ӵ洢��Session��
//��������������ӵ�ͼƬ
imagestring($cimg, 5, 5, 5, $num1, $red);  
imagestring($cimg, 5, 30, 5, "+", $red);  
imagestring($cimg, 5, 45, 5, $num2, $red);  
imagestring($cimg, 5, 70, 5, "=?", $red);   
header("Content-type: image/png");  
imagepng($cimg)  
?>  

