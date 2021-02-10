# student_file_management_system2
学籍管理系统优化版

学习了网络攻防后，以前漏洞的代码就要升级换代了哈哈哈
旧代码如下：
gitee：https://gitee.com/chiuyj/student_file_management_system
github：https://github.com/jie74/student_file_management_system

新代码：
gitee：https://gitee.com/chiuyj/student_file_management_system2
github：https://github.com/jie74/student_file_management_system2

在大多数页面解决sql注入和xss漏洞
防止sql注入漏洞：使用参数化查询语句，把mysqli_real_escape_string函数处理过的参数传给sql语句，mysqli_real_escape_string函数可以转义特殊字符，例如可以转义单引号。
防止xss漏洞：htmlspecialchars() 函数把预定义的字符转换为 HTML 实体
