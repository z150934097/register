<?php

	if($_POST['id']=='h51601' && $_POST['pwd']=='123456'){
		echo '登陆成功';
	}else if($_POST['id']=='2'){
		echo 'post2';
	}else if($_POST['id']=='3'){
		echo 'post3';
	}else if($_POST['id']=='4'){
		echo 'post4';
	}else{
		echo 'wrong';
	}
?>