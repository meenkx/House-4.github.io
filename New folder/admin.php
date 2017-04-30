<?php
  session_start();
  if(!isset($_SESSION['id']))
  {
    echo "<IFRAME SRC='wrong.html' SCROLLING='no' WIDTH='100%' HEIGHT='100%' FRAMEBORDER='0'></IFRAME>";
    exit();
  }
	include("php/connect.php");

  $id = $_SESSION['id'];
  $sql    = "select * from member where id='$id'";
  $query    = mysql_query($sql) or die("error=$sql");
  $row    = mysql_fetch_array($query);
?>

<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/menubar.css">
        <script src="js/menubar/responsive-nav.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
          body{
            background-color: #eee;
            
          }
          iframe{
            width: 100%;
            height: 750px;

            outline: none;
          }
          a:link {text-decoration: none;}
          a:visited {text-decoration: none;}
          a:hover {text-decoration: underline;}
          a:active {text-decoration: underline;}

        </style>

        
    </head>
    <body>
          <!--menu bar-->
          <nav>
            <ul>
              <li><a href="admin.php">Home</a></li>
              <li><a href="detail.php" target="_blank">DETAIL</a>
              <li><a href="logout.php">LOGOUT</a></li>
            </ul>
          </nav>
          <!--tab-->
          <div class="container">

            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#home">M.6/1</a></li>
              <li><a data-toggle="tab" href="#menu1">M.6/2</a></li>
              <li><a data-toggle="tab" href="#menu2">M.6/3</a></li>
              <li><a data-toggle="tab" href="#menu3">M.6/4</a></li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">SAVE FILE<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="php/savem61.php">save file to word m.6/1</a></li>
                  <li><a href="php/savem62.php">save file to word m.6/2</a></li>
                  <li><a href="php/savem63.php">save file to word m.6/3</a></li>
                  <li><a href="php/savem64.php">save file to word m.6/4</a></li>                        
                </ul>
              </li>
            </ul>

            <div class="tab-content">
              <div id="home" class="tab-pane fade in active">
                <iframe src="CRUD/adminprofilem61.php" frameborder="0"></iframe>
              </div>
              <div id="menu1" class="tab-pane fade">
                <iframe src="CRUD/adminprofilem62.php" frameborder="0" ></iframe>
              </div>
              <div id="menu2" class="tab-pane fade">
                <iframe src="CRUD/adminprofilem63.php" frameborder="0"></iframe>
              </div>
              <div id="menu3" class="tab-pane fade">
                <iframe src="CRUD/adminprofilem64.php" frameborder="0"></iframe>
              </div>
            </div>
          </div>

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>
