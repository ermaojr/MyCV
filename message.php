<?php
	require_once('connect.php');
	if(!($_POST['content']&&(!empty($_POST['content'])))){
		echo "<script>alert('请输入内容');window.location.href = 'index.html';</script>";
	}
	$content = $_POST['content'];
	$dateline = time();
	$insertsql = "insert into message(content,dateline) values('$content',$dateline)";
	if(mysqli_query($con,$insertsql)){
		echo "<script>alert('留言成功！谢谢！');window.location.href = 'index.html';</script>";
	}
	else{
		echo "<script>alert('留言失败！');window.location.href = 'index.html';</script>";
	}

?>