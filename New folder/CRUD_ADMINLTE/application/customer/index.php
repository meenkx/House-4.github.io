
<?php
  session_start();
  if(!isset($_SESSION['Username']))
  {
    echo '<script>alert(" Please login First !!! ");window.history.back();</script>';
    exit();
  }
	include("../../php/connect.php");
  date_default_timezone_set('Asia/Bangkok');
  $timezone = date('วันที่ d-m-Y เวลา G:i:s');
  $timezone2 = date('เวลา G:i:s');
  $timezone3 = date('G:i:s');


  $Username = $_SESSION['Username'];
  $sql    = "select * from admin where Username='$Username'";
  $query    = mysql_query($sql) or die("error=$sql");
  $row    = mysql_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>KC Admissions | ระบบลงทะเบียนมหาลัย</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

    <!-- SweetAlert  style -->
    <link rel="stylesheet" href="../../plugins/sweetalert/sweetalert.css">

    <!-- responsive datatables -->
     <link rel="stylesheet" href="../../plugins/datatables/extensions/Responsive/css/dataTables.responsive.css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
      </head>
      <body class="hold-transition skin-blue sidebar-mini">
        <!-- Site wrapper -->
        <div class="wrapper">

          <header class="main-header">
            <!-- Logo -->
            <a href="../../index2.html" class="logo">
              <!-- mini logo for sidebar mini 50x50 pixels -->
              <span class="logo-mini"><b>K</b>C</span>
              <!-- logo for regular state and mobile devices -->
              <span class="logo-lg"><b>ADMI</b>N</span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
              <!-- Sidebar toggle button-->
              <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </a>
              <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">

                  <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <img src="../../dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                      <span class="hidden-xs">
					    <?=$row['id']?>
                      </span>
                    </a>
                    <ul class="dropdown-menu">
                      <!-- User image -->
                      <li class="user-header">
                        <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                        <p>
                          <?=$row['id']?> - ADMIN
                          <small>Member since Feb. 2017</small>
                        </p>
                      </li>
                      <!-- Menu Body -->
<!--
                      <li class="user-body">
                        <div class="col-xs-4 text-center">
                          <a href="#">Followers</a>
                        </div>
                        <div class="col-xs-4 text-center">
                          <a href="#">Sales</a>
                        </div>
                        <div class="col-xs-4 text-center">
                          <a href="#">Friends</a>
                        </div>
                      </li>
-->
                      <!-- Menu Footer-->
                      <li class="user-footer">
                        <div class="pull-left">
                          <a href="#" class="btn btn-default btn-flat">Profile</a>
                        </div>
                        <div class="pull-right">
                          <a href="../../logout.php" class="btn btn-default btn-flat">Sign out</a>
                        </div>
                      </li>
                    </ul>
                  </li>
                  <!-- Control Sidebar Toggle Button -->
                  <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                  </li>
                </ul>
              </div>
            </nav>
          </header>

          <!-- =============================================== -->

          <!-- Left side column. contains the sidebar -->
          <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
              <!-- Sidebar user panel -->
              <div class="user-panel">
                <div class="pull-left image">
                  <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                  <p><?=$row['id']?></p>
                  <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
              </div>
              <!-- search form -->
              <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                  <input type="text" name="q" class="form-control" placeholder="Search...">
                  <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                  </span>
                </div>
              </form>
              <!-- /.search form -->
              <!-- sidebar menu: : style can be found in sidebar.less -->
              <ul class="sidebar-menu">
                <li class="header">MAIN NAVIGATION</li>
                <li class="active treeview">
                  <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
                  </a>
                  <ul class="treeview-menu">
<!--                    <li class="active"><a href="../../index.php"><i class="fa fa-circle-o"></i>หน้าแรก</a></li>-->
                    <li><a href="index.php"><i class="fa fa-circle-o"></i>หน้าจัดการข้อมูลผู้ใช้</a></li>
                  </ul>
                </li>
                <li class="active treeview">
                  <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Print data</span> <i class="fa fa-angle-left pull-right"></i>
                  </a>
                  <ul class="treeview-menu">
<!--                    <li class="active"><a href="../../index.php"><i class="fa fa-circle-o"></i>หน้าแรก</a></li>-->
                    <li><a href="php/savem61.php"><i class="fa fa-circle-o"></i>M.6/1</a></li>
                    <li><a href="php/savem62.php"><i class="fa fa-circle-o"></i>M.6/2</a></li>
                    <li><a href="php/savem63.php"><i class="fa fa-circle-o"></i>M.6/3</a></li>
                    <li><a href="php/savem64.php"><i class="fa fa-circle-o"></i>M.6/4</a></li>
                  </ul>
                </li>
                <li class="active treeview">
                  <a href="#">
                    <i class="fa fa-dashboard"></i> <span>แสดงรายชื่อทั้งหมด</span> <i class="fa fa-angle-left pull-right"></i>
                  </a>
                  <ul class="treeview-menu">
<!--                    <li class="active"><a href="../../index.php"><i class="fa fa-circle-o"></i>หน้าแรก</a></li>-->
                    <li><a href="list/list.php"><i class="fa fa-circle-o"></i>- รายชื่อมหาลัยทั้งหมด</a></li>
                    <li><a href="list/listtype.php"><i class="fa fa-circle-o"></i>- รายชื่อมหาลัยแยกตามประเภท</a></li>
                  </ul>
                </li>
                <li class="active treeview">
                  <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Print data excel</span> <i class="fa fa-angle-left pull-right"></i>
                  </a>
                  <ul class="treeview-menu">
<!--                    <li class="active"><a href="../../index.php"><i class="fa fa-circle-o"></i>หน้าแรก</a></li>-->
                    <li><a href="php/savetoexcel.php"><i class="fa fa-circle-o"></i>- excel</a></li>
                    
                  </ul>
                </li>
<!--
                <li class="header">MANU</li>
                <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
                <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
                <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
-->
              </ul>
            </section>
            <!-- /.sidebar -->
          </aside>

          <!-- =============================================== -->

          <!-- Content Wrapper. Contains page content -->
          <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
              <h1>
                Member
                <small>CRUD Application | CRUD = [ Create Read Update and Delete ] </small>
              </h1>
              <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Examples</a></li>
                <li class="active">Blank page</li>
              </ol>
            </section>

            <!-- ========================================================================================================== -->
            <!-- Main content -->
            <section class="content">
              <!-- Default box -->
              <div class="box">
                <div class="box-body">
<!--                 <button type="submit" class="btn btn-primary " id="btnadd" name="btnadd"><i class="fa fa-plus"></i> Add member</button>-->
                 &nbsp;<a href="#"><i class="fa fa-circle text-success"></i> Online : <?php echo $timezone; ?></a>
                 <br>
                 <br>
                 <div class="box-body" style="max-width:100%;" >
                  <table id="table_cust" class="table table-striped table-bordered table-hover">
                    <thead>
                      <tr class="tableheader">
                        <th style="width:40px">No</th>
                        <th style="width:40px">Username</th>
                        <th style="width:100px">Name</th>
                        <th style="width:100px">Lastname</th>
                        <th style="width:40px">House</th>
                        <th style="width:300px">University</th>
                        <th style="width:300px">Faculty</th>
                        <th style="width:300px">Note</th>
                        <th style="width:100px">Button</th>
                      </tr>
                    </thead>
                    <tbody>
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

              <div id="modalcust" class="modal">
                <div class="modal-dialog modal-md">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">×</button>
                      <h4 class="modal-title">Form Master member</h4>
                    </div>
                    <!--modal header-->
                    <div class="modal-body">
                      <div class="pad" id="infopanel"></div>
                      <div class="form-horizontal">
                        <div class="form-group">
                          <label class="col-sm-3  control-label">No</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" id="txtNo" placeholder="No">
                              <input type="hidden" id="crudmethod" value="N">
                              <input type="hidden" id="txtid" value="0">
                            </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-3  control-label">Username</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" id="txtUsername" placeholder="Username">
                              <input type="hidden" id="crudmethod" value="N">
                              <input type="hidden" id="txtid" value="0">
                            </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-3  control-label">Name</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" id="txtName" placeholder="Name">
                              <input type="hidden" id="crudmethod" value="N">
                              <input type="hidden" id="txtid" value="0">
                            </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-3  control-label">Lastname</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" id="txtLastname" placeholder="Name">
                              <input type="hidden" id="crudmethod" value="N">
                              <input type="hidden" id="txtid" value="0">
                            </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-3  control-label">University</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" id="cboUniversity" placeholder="Name">
                              <input type="hidden" id="txtid" value="0">
                            </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-3  control-label">Faculty</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" id="txtFaculty" placeholder="Name">
                              <input type="hidden" id="txtid" value="0">
                            </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-3  control-label">Note</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" id="txtNote" placeholder="Name">
                              <input type="hidden" id="txtid" value="0">
                            </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-3  control-label"></label>
                          <div class="col-sm-9">
                            <button type="submit" class="btn btn-primary " id="btnsave"><i class="fa fa-save"></i> Save</button></div>
                        </div>
                      </div>
                      <!--modal footer-->
                    </div>
                    <!--modal-content-->
                  </div>
                  <!--modal-dialog modal-lg-->
                </div>
                <!--form-kantor-modal-->
              </div>


            </section><!-- /.content -->

            <!-- ========================================================================================================== -->

          </div><!-- /.content-wrapper -->

          <footer class="main-footer">
            <div class="pull-right hidden-xs">
              <b>Version</b> 2.3.0
            </div>
            <strong>Copyright &copy; 1997-2017 <a href="#">Thanamongkhon Yamdej</a>.</strong> All rights reserved.
          </footer>

    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="../../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../../plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>

    <!-- SweetAlert -->
    <script src="../../plugins/sweetalert/sweetalert.min.js"></script>
    <!-- Bootstrap-notify -->
    <script src="../../plugins/bootstrap-notify/bootstrap-notify.min.js"></script>
    <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../plugins/datatables/dataTables.bootstrap.min.js"></script>
    <script src="../../plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
    <script src="customer.js"></script>

  </body>
  </html>
