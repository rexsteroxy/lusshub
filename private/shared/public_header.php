<?php

if(!isset($page_title)){$page_title ="home";}

?>



<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="lusshub">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>LussHub <?php echo h($page_title);?></title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">							
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>	
			  <header id="header" id="home">
		  		<div class="header-top light">
		  			<div class="container">
				  		<div class="row">
				  			<div class="col-lg-6 col-sm-6 col-4 header-top-left no-padding">
				  				<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				  				</ul>
				  			</div>
				  			<div class="col-lg-6 col-sm-6 col-8 header-top-right no-padding">
				  				<a href="tel:+234 080 3064 5528">+234 080 3064 5528</a>
				  				<a href="tel:+234 080 3064 5528">+234 090 370 962 90</a>
				  				<a href="mailto:support@lusshub.com">support@lusshub.com</a>				
				  			</div>
				  		</div>			  					
		  			</div>
				</div>
			    <div class="container main-menu">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="index.php"><h4>
								Connect || <b>L</b>ss<b>H</b>ub
							</h4></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
						  <li class="menu-active"><a href="index.php">Home</a></li>
						  <li class="menu-has-children">Divisions
				            <ul>
				              <li><a href="#">Imo</a></li>
				              <li><a href="#">Abia</a></li>
				            </ul>
				          </li>	
				          <li><a href="sales.php">Quick Sales</a></li>
				          <li class="menu-has-children">Account
				            <ul>
				              <li data-toggle="modal" data-target="#login"><i class="fa fa-sign-in"></i>Login</li>
				              <li><a href="register.php"><i class="lnr lnr-user"></i> Register</a></li>
				            </ul>
				          </li>	
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->
				<!-- Modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
			<form class="form-area " id="myForm" action="mail.php" method="post" class="contact-form text-right">
									<div class="col-lg-6 form-group">
										<input name="userName" placeholder="userName" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">
									
										<input name="password" placeholder="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

									</div>
							</form>	
      </div>
      <div class="modal-footer">
        <button type="button" class="genric-btn primary circle">Save changes</button>
      </div>
    </div>
  </div>
</div>