<link rel="stylesheet" href="plugins/sweetalert/sweetalert.css">,
<script src="plugins/sweetalert/sweetalert.min.js" charset="utf-8"></script>
<?php
	session_start();
	include "php/connect.php";

	$Username	= $_POST['Username'];
	$strSQL = "SELECT * FROM admin WHERE Username='$Username' ";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
	if(!$objResult)
	{
			//header("Location: pages/examples/500.php");

			echo '<script type="text/javascript">';
			//echo 'alert("message successfully sent")';
			echo 'swal({
				  title: " ADMIN PAGE ONLY !!!",
				  text: "Submit to run form request [ PLEASE LOGIN AGAIN ]",
				  type: "info",
				  showCancelButton: true,
				  closeOnConfirm: false,
				  showLoaderOnConfirm: true,
				},
				function(){
				  setTimeout(function(){
				    window.history.back();
				  }, 2000);
				});
			';
			//echo 'window.history.back();';
			echo '</script>';


	}
	else
	{
			$_SESSION['Username'] = $Username;
		    echo "<script>window.location='application/customer/index.php';</script>";
			

	}
	mysql_close();
?>
