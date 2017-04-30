<?php
include "../config.php";
$No = $_POST['No'];
$Username = $_POST['Username'];
$Name = $_POST['Name'];

$Lastname = $_POST['Lastname'];
$University = $_POST['University'];
$Faculty = $_POST['Faculty'];
$Note = $_POST['Note'];
$crud=$_POST['crud'];

if($crud=='N'){
	mysql_query("insert into member(No,Username,Name,Lastname,University,Faculty,Note) values('$No','$Username','$Name','$Lastname','$University','$Faculty','$Note')");
	if(mysql_error()){
		$result['error']=mysql_error();
		$result['result']=0;
	}else{
		$result['error']='';
		$result['result']=1;
	}
}else if($crud == 'E'){
	mysql_query("update member set  University='$University',Faculty='$Faculty',Note='$Note' where Username=$Username");
	if(mysql_error()){
		$result['error']=mysql_error();
		$result['result']=0;
	}else{
		$result['error']='';
		$result['result']=1;
	}
}else{

	$result['error']='Invalid Order';
	$result['result']=0;
}
$result['crud']=$crud;
echo json_encode($result);

?>
