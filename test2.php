<?php
	include('php/config.php');
	include('php/session.php');
	$userDetails=$userClass->userDetails($session_Username);
	if ($userDetails == false) {
		$url=BASE_URL.'index.php';
		header("Location: $url");
	}
?>
<!-- html code -->
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Components Documentation - Material Kit by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/material-kit.css" rel="stylesheet"/>
		<link href="assets/css/demo.css" rel="stylesheet" />

    <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>

</head>

<body class="components-page">

	<!-- Navbar -->
	<nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll">
		<div class="container">
	        <div class="navbar-header">
		    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-index">
		        	<span class="sr-only">Toggle navigation</span>
		        	<span class="icon-bar"></span>
		        	<span class="icon-bar"></span>
		        	<span class="icon-bar"></span>
		    	</button>
		    	<a href="http://www.creative-tim.com">
		        	<div class="logo-container">
		                <div class="logo">
		                    <img src="assets/img/logo.png" alt="Creative Tim Logo" rel="tooltip" title="<b>Material Kit</b> was Designed & Coded with care by the staff from <b>Creative Tim</b>" data-placement="bottom" data-html="true">
		                </div>
		                <div class="brand">
		                    Creative <?php echo $userDetails->Name; ?>
		                </div>


					</div>
		      	</a>
		    </div>

		    <div class="collapse navbar-collapse" id="navigation-index">
		    	<ul class="nav navbar-nav navbar-right">

					<li>
						<a href="components-documentation.html" target="_blank">
							<i class="material-icons">dashboard</i> Components
						</a>
					</li>
					<li>
						<a href="http://demos.creative-tim.com/material-kit-pro/presentation.html?ref=utp-freebie" target="_blank">
							<i class="material-icons">unarchive</i> Upgrade to PRO
						</a>
					</li>
					<li>
						<a rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="https://twitter.com/CreativeTim" target="_blank" class="btn btn-white btn-simple btn-just-icon">
							<i class="fa fa-twitter"></i>
						</a>
					</li>
					<li>
						<a rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com/CreativeTim" target="_blank" class="btn btn-white btn-simple btn-just-icon">
							<i class="fa fa-facebook-square"></i>
						</a>
					</li>
					<li>
						<a rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="https://www.instagram.com/CreativeTimOfficial" target="_blank" class="btn btn-white btn-simple btn-just-icon">
							<i class="fa fa-instagram"></i>
						</a>
					</li>
					<li>
							<button class="btn btn-white btn-round"><a href="php/logout.php" >Logout</a></button>
					</li>


		    	</ul>
		    </div>
		</div>
	</nav>
	<!-- End Navbar -->

<div class="wrapper">
	<div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450');">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<h1 class="title text-center"> -= PROFILE UPDATE =-</h1>
				</div>
			</div>
		</div>
	</div>

    <div class="main main-raised">
        <div class="section">
					<div class="container">
					    <h1>Edit Profile</h1>
					  	<hr>
						<div class="row">
					      <!-- left column -->
					      <div class="col-md-3">
					        <div class="text-center">
					          <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
					          <h6>Upload a different photo...</h6>

					          <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
					        </div>
					      </div>

					      <!-- edit form column -->
					      <div class="col-md-9 personal-info">

					        <div class="alert alert-info alert-dismissable">
					          <a class="panel-close close" data-dismiss="alert">×</a>
					          <i class="fa fa-coffee"></i>
					          This is an <strong>.alert</strong>. Use this to show important messages to the user.
					        </div>

					        <h3>Personal info</h3>

					        <form class="form-horizontal" role="form">
					          <div class="form-group">
					            <label class="col-lg-3 control-label">First name:</label>
					            <div class="col-lg-8">
					              <input class="form-control" type="text" value="Jane">
					            </div>
					          </div>
					          <div class="form-group">
					            <label class="col-lg-3 control-label">Last name:</label>
					            <div class="col-lg-8">
					              <input class="form-control" type="text" value="Bishop">
					            </div>
					          </div>
					          <div class="form-group">
					            <label class="col-lg-3 control-label">Company:</label>
					            <div class="col-lg-8">
					              <input class="form-control" type="text" value="">
					            </div>
					          </div>
					          <div class="form-group">
					            <label class="col-lg-3 control-label">Email:</label>
					            <div class="col-lg-8">
					              <input class="form-control" type="text" value="janesemail@gmail.com">
					            </div>
					          </div>
					          <div class="form-group">
					            <label class="col-lg-3 control-label">Time Zone:</label>
					            <div class="col-lg-8">
					              <div class="ui-select">
					                <select id="user_time_zone" class="form-control">
					                  <option value="Hawaii">(GMT-10:00) Hawaii</option>
					                  <option value="Alaska">(GMT-09:00) Alaska</option>
					                  <option value="Pacific Time (US &amp; Canada)">(GMT-08:00) Pacific Time (US &amp; Canada)</option>
					                  <option value="Arizona">(GMT-07:00) Arizona</option>
					                  <option value="Mountain Time (US &amp; Canada)">(GMT-07:00) Mountain Time (US &amp; Canada)</option>
					                  <option value="Central Time (US &amp; Canada)" selected="selected">(GMT-06:00) Central Time (US &amp; Canada)</option>
					                  <option value="Eastern Time (US &amp; Canada)">(GMT-05:00) Eastern Time (US &amp; Canada)</option>
					                  <option value="Indiana (East)">(GMT-05:00) Indiana (East)</option>
					                </select>
					              </div>
					            </div>
					          </div>
					          <div class="form-group">
					            <label class="col-md-3 control-label">Username:</label>
					            <div class="col-md-8">
					              <input class="form-control" type="text" value="janeuser">
					            </div>
					          </div>
					          <div class="form-group">
					            <label class="col-md-3 control-label">Password:</label>
					            <div class="col-md-8">
					              <input class="form-control" type="password" value="11111122333">
					            </div>
					          </div>
					          <div class="form-group">
					            <label class="col-md-3 control-label">Confirm password:</label>
					            <div class="col-md-8">
					              <input class="form-control" type="password" value="11111122333">
					            </div>
					          </div>
					          <div class="form-group">
					            <label class="col-md-3 control-label"></label>
					            <div class="col-md-8">
					              <input type="button" class="btn btn-primary" value="Save Changes">
					              <span></span>
					              <input type="reset" class="btn btn-default" value="Cancel">
					            </div>
					          </div>
					        </form>
					      </div>
					  </div>
					</div>
					<hr>

    <footer class="footer footer-transparent">
        <div class="container">
            <nav class="pull-left">
                <ul>
					<li>
						<a href="http://www.creative-tim.com">
							Creative Tim
						</a>
					</li>
					<li>
						<a href="http://presentation.creative-tim.com">
						   About Us
						</a>
					</li>
					<li>
						<a href="http://blog.creative-tim.com">
						   Blog
						</a>
					</li>
					<li>
						<a href="http://www.creative-tim.com/license">
							Licenses
						</a>
					</li>
                </ul>
            </nav>
            <div class="social-area pull-right">
                <a class="btn btn-social btn-twitter btn-simple" href="https://twitter.com/CreativeTim">
                    <i class="fa fa-twitter"></i>
                </a>
                <a class="btn btn-social btn-facebook btn-simple" href="https://www.facebook.com/CreativeTim">
                    <i class="fa fa-facebook-square"></i>
                </a>
                <a class="btn btn-social btn-google btn-simple" href="https://plus.google.com/+CreativetimPage">
                    <i class="fa fa-google-plus"></i>
                </a>
            </div>
            <div class="copyright">
                &copy; 2016 Creative Tim, made with love
            </div>
        </div>
    </footer>

</div>

<!-- Modal Core -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
	<div class="modal-content">
	  <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h4 class="modal-title" id="myModalLabel">Modal title</h4>
	  </div>
	  <div class="modal-body">
		Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.
	  </div>
	  <div class="modal-footer">
		<button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Close</button>
		<button type="button" class="btn btn-info btn-simple">Save</button>
	  </div>
	</div>
  </div>
</div>


</body>
	<!--   Core JS Files   -->
	<script src="assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/material.min.js"></script>

	<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="assets/js/nouislider.min.js" type="text/javascript"></script>

	<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
	<script src="assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
	<script src="assets/js/material-kit.js" type="text/javascript"></script>

    <script>
        var header_height;
        var fixed_section;
        var floating = false;

        $().ready(function(){
            suggestions_distance = $("#suggestions").offset();
            pay_height = $('.fixed-section').outerHeight();

			$(window).on('scroll', materialKit.checkScrollForTransparentNavbar);

			// the body of this function is in assets/material-kit.js
			materialKit.initSliders();
        });
    </script>

</html>
