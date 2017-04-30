<?php
include "../config.php";
$query=mysql_query("SELECT @rownum := @rownum + 1 AS Username,t.* FROM member t,(SELECT @rownum := 0) r");
$data = array();
while($r = mysql_fetch_assoc($query)) {
	$data[] = $r;
}
$i=0;
foreach ($data as $key) {
		// add new button
	$data[$i]['button'] = '
	<button type="submit" Username="'.$data[$i]['Username'].'" class="btn btn-primary btnedit" ><i class="fa fa-edit"></i></button>';
	$i++;
}
$datax = array('data' => $data);
echo json_encode($datax);
?>
