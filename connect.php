<?php
//Mysql连接初始化程序
	$con = mysqli_connect('127.0.0.1','root','','message');
	if (!$con) { 
  		printf("Can't connect to MySQL Server. Errorcode: %s ", mysqli_connect_error()); 
 	 exit; 
	}
?>