<html>
 <head>
     <title>学生信息管理</title>
 </head>
 <body>
 <center>
     <h3>填写个人信息</h3>
     <form id="myform" name="myform" method="post" action="stud_info1_action.php?action=add">
         <table>
            <tr>
                <td>姓名</td>
                <td><input id="sname" name="sname" type="text"/></td>

            </tr>
            <tr>
                <td>性别</td>
                <td><input type="radio" name="ssex" value="男"/> 男
                    <input type="radio" name="ssex" value="女"/> 女
                </td>
            </tr>
            <tr>
                <td>出生日期</td>
                <td><input id="birth" name="birth" type="text"/></td>
             </tr>
             <tr>
                <td>籍贯</td>
                <td><input id="native_place" name="native_place" type="text"/></td>
             </tr>
             <tr>
                <td>政治面貌</td>
                <td><input id="political_status" name="political_status" type="text"/></td>
             </tr>
             <tr>
                <td>手机</td>
                <td><input id="phone" name="phone" type="text"/></td>
             </tr>
             <tr>
                <td>邮箱</td>
                <td><input id="email" name="email" type="text"/></td>
             </tr>
             <tr>
                <td>照片</td>
                <td>
                <input name="pic" type="text" id="pic" size="30">
           &nbsp; <input type="button" name="Submit2" value="上传文件" onClick="window.open('upload.php','','status=no,scrollbars=no,top=20,left=110,width=420,height=165')" />
           		</td>
             </tr>
             <tr>
                 <td>&nbsp;</td>
                 <td><input type="submit" value="增加"/>&nbsp;&nbsp;
                     <input type="reset" value="重置"/>
                 </td>
             </tr>
         </table>
 
     </form>
 </center>
 </body>
 </html>