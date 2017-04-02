<?php
	$toRegUsn = $_POST["username"],
	$toregPwd = $_POST['password']
	
	$conn = new mysqli('localhost','root','','maneger')
	
	$result = $conn->query('select * from user');
	$isExist = false;
	while($row = mysqli_affected_assnc($result)){
		if($row['usernaem'] == $toRegUsn){
			$isExist = true;
		}
	}
	$toSend = array('isOK'=>false);
	if($isExist){
		$toSend['msg'] = "用户名已注册";
	}else{
		if($conn->query('insert into user values(NULL,"$toRegUsn","$toregPwd")'){
			$toSend['isOk'] = true
		}else{
			$toSend['msg'] = "数据库操作失败"
		}
	}
	print json_encode($toSend);



?>