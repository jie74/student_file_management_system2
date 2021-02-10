<html>
 <head>
     <title>学生信息管理</title>
 </head>
 <body>
 <center>
     <h3>填写个人测评信息</h3>
     <form id="addassess1" name="addassess1" method="post" action="assess1_action.php?action=add">
         <!--<input type="hidden" name="asno" id="asno" value="<?php echo $asno;?>"/>-->
         <input type="hidden" name="sno" id="sno" value="<?php echo $_GET['sno'] ?>"/>
         <table>
            <tr>
                <td>编号</td>
                <td><input id="asno" name="asno" type="text"/></td>

            </tr>
            <!--<tr>
                <td>学号</td>
                <td><input id="sno" name="sno" type="text"/></td>

            </tr>-->
            <tr>
                <td>测评项目</td>
				<td><input id="assess_name" name="assess_name" type="text"/></td>
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