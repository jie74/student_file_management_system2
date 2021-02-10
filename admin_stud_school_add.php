<html>
 <head>
     <title>学生信息管理</title>
 </head>
 <body>
 <center>
     <h3>添加学生在校信息</h3>
 
     <form id="addstuschool" name="addstuschool" method="post" action="admin_stud_school_action.php?action=add">
         <table>
            <tr>
                <td>学号</td>
                <td><input id="sno" name="sno" type="text"/></td>

            </tr>
            <tr>
                <td>学院</td>
                <td><input id="dept_name" name="dept_name" type="text"/></td>

            </tr>
            <tr>
                <td>专业</td>
                <td><input id="specialty" name="specialty" type="text"/></td>
             </tr>
             <tr>
                <td>班级</td>
                <td><input id="class" name="class" type="text"/></td>
             </tr>
             <tr>
                <td>宿舍</td>
                <td><input id="dormitory" name="dormitory" type="text"/></td>
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