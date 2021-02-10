
<html>
 <head>
     <title>学生信息管理</title>
 </head>
 <body>
 <center>
     <h3>添加学生其他档案信息</h3>
 
     <form id="addotherfile" name="addotherfile" method="post" action="admin_otherfile_action.php?action=add">
         <table>
            <tr>
                <td>编号</td>
                <td><input id="ono" name="ono" type="text"/></td>

            </tr>
            <tr>
                <td>学号</td>
                <td><input id="sno" name="sno" type="text"/></td>

            </tr>
            <tr>
                <td>其它档案</td>
                <td><input id="oname" name="oname" type="text"/></td>
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