<html>
<head>
<!--
Project Name : CRUD with PHP, MySQL and Bootstrap
Author		 : Hendra Setiawan
Website		 : http://www.hendrasetiawan.net
Email	 	 : hendrabpp[at]gmail.com
-->
<?php 
include "header.php";
include "alertsm62.php";
include "connect.php"; 

$sql = mysql_query("SELECT id,Username,Name,Lastname,University,Faculty ,Note,House FROM member WHERE id BETWEEN 037 AND 072 ");
mysql_query("SET NAMES UTF8");
?>
<script type="text/javascript">
window.apex_search = {};
apex_search.init = function (){
	this.rows = document.getElementById('data').getElementsByTagName('TR');
	this.rows_length = apex_search.rows.length;
	this.rows_text =  [];
	for (var i=0;i<apex_search.rows_length;i++){
        this.rows_text[i] = (apex_search.rows[i].innerText)?apex_search.rows[i].innerText.toUpperCase():apex_search.rows[i].textContent.toUpperCase();
	}
	this.time = false;
}
apex_search.lsearch = function(){
	this.term = document.getElementById('S').value.toUpperCase();
	for(var i=0,row;row = this.rows[i],row_text = this.rows_text[i];i++){
		row.style.display = ((row_text.indexOf(this.term) != -1) || this.term  === '')?'':'none';
	}
	this.time = false;
}
apex_search.search = function(e){
    var keycode;
    if(window.event){keycode = window.event.keyCode;}
    else if (e){keycode = e.which;}
    else {return false;}
    if(keycode == 13) { apex_search.lsearch(); } else { return false; }
}
</script>
<style type="text/css">
	body{
		overflow-x: hidden;
		overflow-y: scroll;
		background-color: #fff;
	}
	/* Let's get this party started */
	::-webkit-scrollbar {
	    width: 10px;
	}
	 
	/* Track */
	::-webkit-scrollbar-track {
	    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
	    -webkit-border-radius: 5px;
	    border-radius: 5px;
	}
	 
	/* Handle */
	::-webkit-scrollbar-thumb {
	    -webkit-border-radius: 10px;
	    border-radius: 10px;
	    background: rgba(226,226,226,0.8); 
	    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); 
	}
	::-webkit-scrollbar-thumb:window-inactive {
		background: rgba(226,226,226,0.4); 
	}
</style>
</head>

<body onload="apex_search.init();">
<br />
<div class="row">
	<div class="col-lg-4">
	    <div class="input-group">
		<input type="text" size="30" class="form-control" maxlength="1000" value="" id="S" onkeyup="apex_search.search(event);" />
		<span class="input-group-btn">
		<input type="button" class="btn btn-default" value="Search" onclick="apex_search.lsearch();"/>
		</span>
		</div>
	</div>
</div>

<br />

<div class="row">
	<div class="col-md-12">
	<p>
		<table class="table table-hover table-bordered">
			<thead>
				<tr>
					<th width="5%"><center>NO</center></th>
					<th>student id</th>
					<th>Name</th>
					<th>House</th>
					<th>University</th>
					<th>Faculty</th>
					<th>Note</th>
					<th width="15%"><center>ACTION</center></th>
				</tr>
			</thead>
			<tbody id="data">
			<?php $no=1; while ($row = mysql_fetch_array($sql)) { ?>
				<tr>
					<td align="center"><?php echo $no; ?></td>
					<td><?php echo $row['Username']; ?></td>
					<td><?php echo $row['Name']; ?> <?php echo $row['Lastname']; ?></td>
					<td><?php echo $row['House']; ?></td>
					<td><?php echo $row['University']; ?></td>
					<td><?php echo $row['Faculty']; ?></td>
					<td><?php echo $row['Note']; ?></td>
					<td align="center">
						<a href="admineditm62.php?id=<?php echo $row['id']; ?>">update</a> 
					</td>
				</tr>
			<?php $no++; } ?>	
			</tbody>
		</table>
	</p>	
	</div>
</div>	

</div>
<?php include "footer.php"; ?>
</body>
</html>
