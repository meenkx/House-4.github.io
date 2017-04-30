<?php
  if(!empty($_SESSION['Username']))
  {
    $session_Username=$_SESSION['Username'];
    include('userClass.php');
    $userClass = new userClass();
  }
  if(empty($session_Username))
  {
    $url=BASE_URL.'index.php';
    header("Location: $url");
  }
?>
