<html>
 <head>
     <title>学生信息管理</title>
 </head>
 <body>
 <center>
     <h3>添加学生处罚信息</h3>
 
     <form id="addpunishment" name="addpunishment" method="post" action="admin_punishment_action.php?action=add">
         <table>
            <tr>
                <td>编号</td>
                <td><input id="pno" name="pno" type="text"/></td>

            </tr>
            <tr>
                <td>学号</td>
                <td><input id="sno" name="sno" type="text"/></td>

            </tr>
            <tr>
                <td>处罚名称</td>
                <td><input id="pname" name="pname" type="text"/></td>
             </tr>
             <tr>
                <td>处罚结果</td>
                <td><input id="result" name="result" type="text"/></td>
             </tr>
             <tr>
                <td>日期</td>
                <td><input id="date" name="date" type="text"/></td>
             </tr>
             <tr>
                <td>细节</td>
                <td><input id="detail" name="detail" type="text"/></td>
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