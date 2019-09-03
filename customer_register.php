<?php
$active='Account';
include("includes/header.php");
?>
   
	
	<div id="content"><!-- #content begin -->
	<div class="container"><!-- container begin -->
		<div class="col-md-12"><!-- col-md-12 begin -->
			<ul class="breadcrumb"><!-- breadcrumb begin -->
				<li>
				<a href="index.php">Home</a>
				</li>
				<li>
				 Register
				</li>
			
			</ul><!-- breadcrumb finish -->
			 
		
		</div><!-- col-md-12 Finish -->
		
		<div class="col-md-3"><!-- col-md-3 begin -->
			
			
	<?php
	include("includes/sidebar.php");
	
	?>
		</div><!-- col-md-3 Finish -->
		<div class="col-md-9"><!-- col-md-9 begin -->
			<div class="box"><!-- box begin-->
				<div class="box-header"><!-- box-header begin-->
				 <center><!-- center begin-->
					 <h2>Register a new account</h2>
					
					</center><!-- center finish-->
					
					<form action="customer_register.php" method="post" enctype="multipart/form-data"><!--form begin-->
						<div class="form-group"><!--form-group begin-->
						<label>Your Name</label>
							<input type="text" class="form-control" name="c_name" required>
						
						</div><!--form-group finish-->
						<div class="form-group"><!--form-group begin-->
						<label>Your_Email</label>
							<input type="text" class="form-control" name="c_email" required>
						
						</div><!--form-group finish-->
						<div class="form-group"><!--form-group begin-->
						<label>Your Password</label>
							<input type="password" class="form-control" name="c_pass" required>
						</div><!--form-group finish-->
						<div class="form-group"><!--form-group begin-->
						<label>Your county</label>
							<input type="text" class="form-control" name="c_county" required>
						</div><!--form-group finish-->
						<div class="form-group"><!--form-group begin-->
						<label>Your city</label>
							<input type="text" class="form-control" name="c_city" required>
						</div><!--form-group finish-->
						<div class="form-group"><!--form-group begin-->
						<label>Your contact</label>
							<input type="text" class="form-control" name="c_contact" required>
						</div><!--form-group finish-->
						<div class="form-group"><!--form-group begin-->
						<label>Your Address</label>
							<input type="text" class="form-control" name="c_address" required>
						</div><!--form-group finish-->
						<div class="form-group"><!--form-group begin-->
						<label>Your profile picture</label>
							<input type="file" class="form-control form-height-custom" name="c_image" required>
						</div><!--form-group finish-->
						
						<div class="text-center"><!--text-center begin-->
						<button type="submit" name="register" class="btn btn-primary">
							<i class="fa fa-user-md"></i> Register
							</button>
						</div><!--text-center finish-->
						
					
					</form><!--form finish-->
				</div><!-- box-header finish-->
			
			</div><!-- box finish-->
			</div><!-- col-md-9 finish-->
		
		</div><!-- container Finish -->
	</div><!-- #content Finish -->
	<?php
	include("includes/footer.php");
	?>
	 
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>
   