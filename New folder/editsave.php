<?PHP
	session_start();
	if(!isset($_SESSION['Username']))
	{
		echo "<script>alert('!! Please Login !! ');window.location='index.html';</script>";
		exit();
	}
		include("php/connect.php");

	$cddropdown		 =$_POST['cd-dropdown'];
	$faculty		 =$_POST['faculty'];
	$note	 =$_POST['note'];

	if(empty($note))
	{
		echo "<script>alert(' กรุณาลงข้อมูลให้ครบ ( ถ้ายังไม่มีมหาวิทยาลัย ให้ลงตรงช่องมหาลัยว่า ยังไม่มีที่เรียนหรือ รอแอดมิชชั่น ส่วนช่องคณใส่ - และช่องหมายเหตุใส่ -)');history.back();</script>";
		exit();
	}


		$sql= "update member set
				university	= '$cddropdown',
				faculty	= '$faculty',
				note	= '$note'
				where Username	= '{$_SESSION['Username']}'";
		mysql_query($sql) or die("error=$sql");
		echo "<script>alert(' ++ Complete ++ ');window.location='logout.php';</script>";
?>
<meta charset="utf-8">