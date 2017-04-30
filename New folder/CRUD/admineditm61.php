<html>
<head>
<!--
Project Name : CRUD with PHP, MySQL and Bootstrap
Author		 : Hendra Setiawan
Website		 : http://www.hendrasetiawan.net
University	 	 : hendrabpp[at]gmail.com
-->
<?php 
include "header.php";
include "alertsm61.php";
include "connect.php"; 

$sql = mysql_query("SELECT id,Username,Name,Lastname,University,Faculty ,Note FROM member WHERE id = '".$_GET['id']."'");
$data = mysql_fetch_array($sql);
?>
</head>
<body>

<div class="container">
<div class="row">
    <div class="col-lg-12">
        <div class="page-header">
            <h1>Form Edit (Update)</h1>
        </div>
    </div>
</div>

<div class="row">
	<div class="col-md-6">
	<form id="form_input" method="POST">	

<?php  
if(isset($_POST['update']))
{
	mysql_query("UPDATE member SET University = '".$_POST['University']."', Faculty = '".$_POST['Faculty']."', Note = '".$_POST['Note']."' WHERE id = '".$_GET['id']."'");
	writeMsg('update.complete');

	//Re-Load Data from DB
	$sql = mysql_query("SELECT id,Name,Lastname,University,Faculty ,Note FROM member WHERE id = '".$_GET['id']."'");
	$data = mysql_fetch_array($sql);
}
?>



	<div class="form-group">
  		<label class="control-label" for="University">University</label>
  		<input type="University" class="form-control" name="University" id="University" value="<?php echo $data['University']; ?>" >
	</div>

	<div class="form-group">
  		<label class="control-label" for="Faculty">Faculty</label>
  		<input type="text" class="form-control" name="Faculty" id="Faculty" value="<?php echo $data['Faculty']; ?>">
	</div>

	<div class="form-group">
  		<label class="control-label" for="Note">Note</label>
  		<input type="text" class="form-control" name="Note" id="Note" value="<?php echo $data['Note']; ?>" required> 
	</div>

	<div class="form-group">
	<input type="submit" value="Update" name="update" class="btn btn-primary">
	</div>

	</form>
	</div>
</div>

</div>
<?php include "footer.php"; ?>
</body>
</html>