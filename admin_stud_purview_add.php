<html>
 <head>
     <title>学生信息管理</title>
 </head>
 <body>
 <center>
     <h3>添加学生修改信息权限</h3>
 
     <form id="addstupurview" name="addstupurview" method="post" action="admin_stud_purview_action.php?action=add">
         <table>
            <tr>
                <td>学号</td>
                <td><input id="sno" name="sno" type="text"/></td>

            </tr>
            <tr>
                <td>个人信息权限</td>
                <td><input id="setinfo" name="setinfo" type="text"/></td>

            </tr>
            <tr>
                <td>个人测评权限</td>
                <td><input id="setassess" name="setassess" type="text"/></td>
             </tr>
             <tr>
                <td>其他档案权限</td>
                <td><input id="seeotherfile" name="seeotherfile" type="text"/></td>
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