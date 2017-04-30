
<?php
	session_start();
		include("php/connect.php");

	$Username	= $_POST['Username'];
	$strSQL = "SELECT * FROM member where Username='$Username' ";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
	if(!$objResult)
	{
		//header("Location: wrong.html");
		$strSQL = "SELECT * FROM admin where Username='$Username' ";
		$objQuery = mysql_query($strSQL);
		$objResult = mysql_fetch_array($objQuery);
		if(!$objResult)
		{
			header("Location: wrong.html");
		}
		else{
			$_SESSION['Username'] = $Username;
			echo "<script>window.location='CRUD_ADMINLTE/application/customer/index.php';</script>";
			
		}
	}
	else
	{
			$_SESSION['Username'] = $Username;
			echo "<script>window.location='profile.php';</script>";
	}
	mysql_close();
?>
