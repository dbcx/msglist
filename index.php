<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>留言板</title>
</head>
<body>
	<h1 align="center">留言展示</h1><hr width="75%" /><hr width="75%" /><br />
	<span style="font-family:Comic Sans MS;font-size:14px;">
		<?php  
		  require("conn.php");  
		?>  
		<table width=500  align="center" cellpadding="6" cellspacing="2" bgcolor="#eff3ff">  
			<?php     
				  $sql = "SELECT * FROM msg order by lastdate desc";  
				  mysqli_query($con,"set names utf8"); 
				  $query = mysqli_query($con,$sql);  
				  while($row = mysqli_fetch_array($query)){  
			?>  
			  
			  <tr bgcolor="#eff3ff">  
			 	 <td>
				  	<b><big> 标题：<?= $row['title']?></big><b/> 
				  	<b><sub> 用户：<?= $row['username']?></sub></b>
			    </td>
			    <td align="right"><?= $row['lastdate'] ?></td>
			  </tr>  
			  <tr bgColor="#ffffff">  
			  <td colspan="2">内容：<?= toHtmlcode($row['content'])?></td>  
			  </tr>  
			<?php } ?>  
		</table>  
	</span> 
	<div><button>我要留言</button></div>
</body>
</html>