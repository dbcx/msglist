<?php 
	//连接数据库
	$con=mysqli_connect('localhost',"root",'','demo') or die("数据库连接错误！");
	//自定义一个函数用来转换\n和空格
    function toHtmlcode($content)  
    {  
        return $content = str_replace("\n","<br>",str_replace(" ", "&nbsp;", $content));  
    }  
 ?>