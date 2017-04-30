<?php
include('php/config.php');
include('php/userClass.php');
include('php/AdminClass.php');
$userClass = new userClass();
$AdminClass = new AdminClass();

$errorMsgReg='';
$errorMsgLogin='';
	/* Login Form */
	if (!empty($_POST['loginSubmit']))
	{
		$usernameEmail=$_POST['usernameEmail'];
		if(strlen(trim($usernameEmail))>1  )
		{
			$Username=$userClass->userLogin($usernameEmail);
			if($Username)
			{
				$url=BASE_URL.'test2.php';
				header("Location: $url"); // Page redirecting to home.php
			}
			else
			{
				$Username=$AdminClass->AdminLogin($usernameEmail);
				if($Username)
				{

					$url=BASE_URL.'dashboard/dashboard.php';
					header("Location: $url"); // Page redirecting to home.php
				}
				else {
					$errorMsgLogin="Please check login details.";
				}
			}
		}
	}


?>
<!-- HTML Code -->
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>House 4 INFORMATION</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/material-kit.css" rel="stylesheet"/>

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="assets/css/demo.css" rel="stylesheet" />

	<style media="screen">
		.box-center{
			/*background-color: yellow;*/
			margin-left:auto;
			margin-right:auto;
			width: 80%;
		}
	</style>
</head>

<body class="index-page">
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
	                    Creative MEENKX
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

	    	</ul>
	    </div>
	</div>
</nav>
<!-- End Navbar -->

<div class="wrapper">
	<div class="header header-filter" style="background-image: url('assets/img/bg2.jpeg');">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="brand">
						<h1>House 4.</h1>
						<h3>Information House 4.</h3>
					</div>
				</div>
			</div>

		</div>
	</div>

	<div class="main main-raised">


				<div class="row text-center">

					<div class="col-md-8 col-md-offset-2">
	                    <h2>LOGIN HERE</h2>
											<div class="box-center" >
												<div class="col-md-6 col-md-offset-3">
													<div class="form-group">
														<div class='errorMsg'><?php echo $errorMsgLogin; ?></div>
														<form method="post" action="" name="login">
															<input type="text" name="usernameEmail" placeholder="Student Id OR Teacher ID" class="form-control" autocomplete="off" autofocus="autofocus"/>
															<button class="btn btn-primary" type="submit" class="button" name="loginSubmit" value="Login">เข้าสู่ระบบ</button>


														</form>
													</div>
												</div>
											</div>

	                </div>


	            </div>

	            <!-- <div class="row sharing-area text-center">
	                    <h3>Thank you for supporting us!</h3>
	                    <a href="#" class="btn btn-twitter">
	                        <i class="fa fa-twitter"></i>
	                        Tweet
	                    </a>
	                    <a href="#" class="btn btn-facebook">
	                        <i class="fa fa-facebook-square"></i>
	                        Share
	                    </a>
						<a href="#" class="btn btn-google-plus">
	                        <i class="fa fa-google-plus"></i>
	                        Share
	                    </a>
						<a href="#" class="btn btn-github">
	                        <i class="fa fa-github"></i>
	                    	Star
	                    </a>
	            </div> -->
	        </div>
	    </div>

	</div>
    <footer class="footer">
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
	        <div class="copyright pull-right">
	            &copy; 2016, made with <i class="material-icons">favorite</i> by Creative Tim for a better web.
	        </div>
	    </div>
	  </footer>
</div>

<!-- Sart Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					<i class="material-icons">clear</i>
				</button>
				<h4 class="modal-title">Modal title</h4>
			</div>
			<div class="modal-body">
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.
				</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default btn-simple">Nice Button</button>
				<button type="button" class="btn btn-danger btn-simple" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<!--  End Modal -->


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

	<script type="text/javascript">

		$().ready(function(){
			// the body of this function is in assets/material-kit.js
			materialKit.initSliders();
            window_width = $(window).width();

            if (window_width >= 992){
                big_image = $('.wrapper > .header');

				$(window).on('scroll', materialKitDemo.checkScrollForParallax);
			}

		});
	</script>
</html>
