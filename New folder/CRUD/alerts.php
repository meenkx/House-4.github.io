<?php
function writeMsg($tipe){
	if ($tipe=='save.complete') {
		$MsgClass = "alert-success";
		$Msg = "<strong>complete!</strong> Data berhasil disimpan. Selamat yah!";	
	} else 
	if ($tipe == 'save.gagal') {
		$MsgClass = "alert-danger";
		$Msg = "<strong>Oops!</strong> Data gagal disimpan!";
	}
	else 
	if ($tipe == 'update.complete') {
		$MsgClass = "alert-success";
		$Msg = "<strong>complete!</strong> ทำการบันทึกข้อมูลเรียบร้อย";
	}
	else 
	if ($tipe == 'update.gagal') {
		$MsgClass = "alert-danger";
		$Msg = "<strong>Oops!</strong> Data gagal diupdate!";
	}

echo "<div class=\"alert alert-dismissible ".$MsgClass."\">
  	  <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
  	  ".$Msg."
	  </div>";		  
}
?>