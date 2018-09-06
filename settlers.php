<?php	
  $con=mysqli_connect('localhost', 'root' ,'','predictions');
  if(!$con){
  	die("cannot connect to database");
  }
  else{
  	include("header.html");
  	
  }

?>
 <?php
	if(isset($_POST["submit"])){
		
		$email=pg_real_escape_string($con,$_POST['EMAIL']);
		
		
		if($email=="" ){
				echo"<script>alert('PLEASE FILL IN THE FOLLOWING FIELD BEFORE YOU CLICK')</script>";
				exit();
			}
			else{
				 $insert ="insert into settlers(email,time) values ($email',NOW())";
						$run_insert=pg_query($con,$insert);
							if($run_insert){
									echo"<script>alert('Thanks!! for Subscibing with us')</script>";
									echo"<script>window.open('sales.php','_self')</script>";	
							}
							
                       }
					
}
			?>