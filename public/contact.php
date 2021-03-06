<?php 
require_once ('../private/initialize.php');
$page_title = "contact";
include_once (SHARED_PATH .'/public_header.php');
 if(is_post_request()){
$contact = [];
 	$contact['name'] = $_POST['name'] ?? '';
	$contact['email'] = $_POST['email'] ?? '';
	$contact['subject'] = $_POST['subject'] ?? '';
	$contact['message'] = $_POST['message'] ?? '';


 	$result=insert_contact($contact);
 	
 }

?>
<!-- start banner Area -->
<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Contact Us				
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="contact.php"> Contact Us</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->
			

			<!-- Start contact-page Area -->
			<section class="contact-page-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 d-flex flex-column address-wrap">
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-home"></span>
								</div>
								<div class="contact-details">
									<h5>Owerri, Imo State</h5>
									<p>
										4343 Tetlow Road
									</p>
								</div>
							</div>
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-phone-handset"></span>
								</div>
								<div class="contact-details">
									<h5>+2348030645528</h5>
									<p>Mon to Fri 9am to 6 pm</p>
								</div>
							</div>
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-envelope"></span>
								</div>
								<div class="contact-details">
									<h5>support@lusshub.com</h5>
									<p>Send us your query anytime!</p>
								</div>
							</div>														
						</div>
						<div class="col-lg-8">
							<form  method="POST" action="contact.php" enctype="multipart/form-data">
		                        <div class="row">
		                            <div class="col-lg-6 d-flex flex-column">
		                                <input name="name" type="text" placeholder="Your name"  class="form-control mt-20" required="yes" >
		                                 <input name="email" type="text" placeholder="enter your email"  class="form-control mt-20" required="yes" >

		                                <input name="subject" type="text" placeholder="enter your subject"  class="form-control mt-20" required="yes" >
		                            </div>
		                            
		                            <div class="col-lg-6 form-group">
		                                <textarea rows="5" class="form-control mt-20" name="message" placeholder="message" required="yes"></textarea>
		                            </div>

									<div class="col-lg-12">
										<div class="alert-msg" style="text-align: left;"></div>
										<button class="genric-btn primary circle" style="float: right;">Send Message</button>											
									</div>
								</div>
							</form>	
						</div>
					</div>
				</div>	
			</section>
			<!-- End contact-page Area -->

		<?php include_once(SHARED_PATH . '/public_footer.php');	