<?php
include "../config.php";

$Username=$_POST['Username'];
$query=mysql_query("select * from member where Username='$Username'");
$array = array();
while($data = mysql_fetch_array($query)){
	$array['No']= $data['No'];
	
	$array['Name']= $data['Name'];
	$array['Username']= $data['Username'];
	$array['Lastname']= $data['Lastname'];
	$array['House']= $data['House'];
	$array['University']= $data['University'];
	$array['Faculty']= $data['Faculty'];
	$array['Note']= $data['Note'];

}
echo json_encode($array);

?>
