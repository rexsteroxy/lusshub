				<?php	
  $con=mysqli_connect('localhost', 'root' ,'','predictions');
  if(!$con){
  	die("cannot connect to database");
  }
  else{
  	include("header.html");
  	
  }

?>
				
						<form  method="POST" action="predict.php" enctype="multipart/form-data">
		                        <div class="row">
		                            <div class="col-lg-12 d-flex flex-column">
		                                <input name="name" type="text" placeholder="Enter your name"  class="form-control mt-20" required="yes" >
		                            </div>
		                            <div class="col-lg-12 d-flex flex-column">
		                                <input name="email" type="text" placeholder="Enter email address"  class="form-control mt-20" required="yes" >
		                            </div>
		                            
		                            <div class="col-lg-12 flex-column">
		                                <input class="form-control mt-20" name="subject" placeholder="Enter Your Subject" required="yes">
		                            </div>
		                            <div class="col-lg-12 flex-column">
		                                <textarea rows="5" class="form-control mt-20" name="message" placeholder="message" required="yes"></textarea>
		                            </div>

		                            <div class="col-lg-12 d-flex justify-content-end send-btn">
		                                <button class="genric-btn primary mt-20 text-uppercase " name="submit" type="submit" >Send Message</button>
		                            </div>
		                        </div>
		                    </form>
		                    <?php
	if(isset($_POST["submit"])){
		$name=pg_real_escape_string($con,$_POST['name']);
		$email=pg_real_escape_string($con,$_POST['email']);
		$subject= pg_real_escape_string($con,$_POST['subject']);
		$message= pg_real_escape_string($con,$_POST['message']);
		
		if($name=="" OR $message==""){
				echo"<script>alert('PLEASE FILL IN THE FOLLOWING FIELDS BEFORE YOU CONTINUE')</script>";
				exit();
			}
			else{
				 $insert ="insert into contacts(name,email,subject,message,time) values ('$name','$email','$subject','$message',NOW())";
						$run_insert=pg_query($con,$insert);
							if($run_insert){
									echo"<script>alert('Thanks!! We will repy as soon as possible')</script>";
									echo"<script>window.open('sales.php','_self')</script>";	
							}
							
                       }
					
}
			?>