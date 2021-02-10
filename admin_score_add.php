
<html>
 <head>
     <title>学生信息管理</title>
 </head>
 <body>
 <center>
     <h3>添加学生成绩信息</h3>
 
     <form id="addscore" name="addscore" method="post" action="admin_score_action.php?action=add">
         <table>
            <tr>
                <td>学号</td>
                <td><input id="sno" name="sno" type="text"/></td>

            </tr>
            <tr>
                <td>课程号</td>
                <td><input id="cno" name="cno" type="text"/></td>

            </tr>
            <tr>
                <td>成绩</td>
                <td><input id="score" name="score" type="text"/></td>
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