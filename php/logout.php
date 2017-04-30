<?php
include('config.php');
$session_Username='';
$_SESSION['Username']='';
  if(empty($session_Username) && empty($_SESSION['Username']))
  {

    $url=BASE_URL.'index.php';
    header("Location: $url");
    //echo "<script>window.location='$url'</script>";
  }
?>
