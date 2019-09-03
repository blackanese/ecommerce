<?php 
$active='Contact';
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
				  contact us
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
					 <h2>feel free to contact us</h2>
					 <p class="text-muted"><!-- text-muted begin-->
						 If you have any questions, feel free to contact us. our customer service works <strong>24/7</strong>
					 
					 </p><!-- text-muted finish-->
					
					</center><!-- center finish-->
					
					<form action="contact.php" method="post"><!--form begin-->
						<div class="form-group"><!--form-group begin-->
						<label>Name</label>
							<input type="text" class="form-control" name="name" required>
						
						</div><!--form-group finish-->
						<div class="form-group"><!--form-group begin-->
						<label>Email</label>
							<input type="text" class="form-control" name="email" required>
						
						</div><!--form-group finish-->
						<div class="form-group"><!--form-group begin-->
						<label>Subject</label>
							<input type="text" class="form-control" name="subject" required>
						
						</div><!--form-group finish-->
						<div class="form-group"><!--form-group begin-->
						<label>Message</label>
							<textarea name="message" class="form-control"></textarea>
						
						</div><!--form-group finish-->
						<div class="text-center"><!--text-center begin-->
						<button type="submit" name="submit" class="btn btn-primary">
							<i class="fa fa-user-md"></i> send message
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
   