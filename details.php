<?php 
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
				   Shop
				</li>
			
			</ul><!-- breadcrumb finish -->
			 
		
		</div><!-- col-md-12 Finish -->
		
		<div class="col-md-3"><!-- col-md-3 begin -->
			
	<?php
	include("includes/sidebar.php");
	
	?>
		</div><!-- col-md-3 Finish -->
		
		<div class="col-md-9"><!-- col-md-9 begin -->
		<div id="productMain" class="row"><!-- row begin -->
			<div class="col-sm-6"><!-- col-sm-6 begin -->
			<div id="mainImage"><!-- #mainImage begin -->
				<div id="myCarousel" class="carousel slide" data-ride="carousel"><!-- carousel slide begin -->
				<ol class="carousel-indicators"><!-- carousel-indicators begin -->
					<li data-target="#myCarousel"data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel"data-slide-to="1"></li>
					<li data-target="#myCarousel"data-slide-to="2"></li>
					</ol><!-- carousel-indicators Finish -->
					
					<div class="carousel-inner"><!-- carousel-innerbegin-->
					<div class="item active"><!-- item active begin -->
						<center><img class="img-responsive" src="admin_area/product_images/effect16.jpg" alt="effect16"></center>
						</div><!-- item active finish -->
						<div class="item"><!-- item  begin -->
						<center><img class="img-responsive" src="admin_area/product_images/effect17.jpg" alt="effect17"></center>
						</div><!-- item  finish-->
						<div class="item"><!-- item  begin -->
						<center><img class="img-responsive" src="admin_area/product_images/effect18.jpg"alt="effect18"></center>
						</div><!-- item finish-->
					</div><!-- carousel-inner Finish -->
					
					<a href="#myCarousel" class="left carousel-control" data-slide="prev"><!-- left carousel-control begin -->
					<span class="glyphicon glyphicon-chevron-left"></span>
						<span class="sr-only">previous</span>
					</a><!-- left carousel-control Finish -->
					<a href="#myCarousel" class="right carousel-control" data-slide="next"><!-- right carousel-control begin -->
					<span class="glyphicon glyphicon-chevron-right"></span>
						<span class="sr-only">next</span>
					</a><!-- right carousel-control Finish -->
					
				</div><!-- carousel slide Finish -->
				</div><!-- #mainImage Finish -->
			</div><!-- col-sm-6 Finish -->
			
			<div class="col-sm-6"><!-- col-sm-6 begin-->
			<div class="box"><!-- box begin -->
				<h1 class="text-center">kitchen drawers </h1>
				
				<form action="details.php" class="form-horizontal" method="post"><!-- form-horizontal begin -->
				<div class="form-group"> <!-- form-group begin -->
					<label for="" class="col-md-5 control-label">products Quantity</label>
					   <div class="col-md-7"><!-- col-md-7  begin -->
						   <select name="product_qty" id="" class="form=control"><!-- select begin -->
						   <option>1</option>
						   <option>2</option>
						   <option>3</option>
						   <option>4</option>
						   <option>5</option>  
						   </select><!-- select finish -->
					
					   </div><!-- col-md-7  finish -->
					</div><!-- form-group finish -->
					
					
					<p class="price">3000ksh</p>
					<p class="text-center buttons"><button class="btn btn-primary i fa fa-shopping-cart"> Add to cart</button></p>
					
				</form><!-- form-horizontal finish -->
				</div><!-- box Finish -->
				
				<div class="row" id="thumbs"><!-- row begin-->
					<div class="col-xs-4"><!-- col-xs-4 begin-->
					<a href="#" class="thumb"><!-- thumb begin-->
						<img src="admin_area/product_images/effect18.jpg" alt="effect18" class="img-responsive">
						
						</a><!-- thumb finish-->
					
					</div><!-- col-xs-4 finish-->
					
					<div class="col-xs-4"><!-- col-xs-4 begin-->
					<a href="#" class="thumb"><!-- thumb begin-->
						<img src="admin_area/product_images/effect18.jpg" alt="effect19" class="img-responsive">
						
						</a><!-- thumb finish-->
					
					</div><!-- col-xs-4 finish-->
					
					<div class="col-xs-4"><!-- col-xs-4 begin-->
					<a href="#" class="thumb"><!-- thumb begin-->
						<img src="admin_area/product_images/effect18.jpg" alt="effect17" class="img-responsive">
						
						</a><!-- thumb finish-->
					
					</div><!-- col-xs-4 finish-->
				
				</div><!-- row finish-->
				
			</div><!-- col-sm-6 Finish -->
			
			</div><!-- row Finish -->
			<div class="box" id="details"><!-- box begin -->
			<h4>Product Details </h4>
				<p>
				high quality wood product perfect for home offices and hotels.
				</p>
				<h4>package</h4>
				<ul>
				    <li>high quality wooden bed</li>
					<li>2 side drawers</li>
					<li>one side stools</li>
				
				</ul>
				<hr/>
			
			</div><!-- box finish -->
			
			<div id="row same-height-row"><!--#row same-height-row begin -->
			<div class="col-md-3 col-sm=6"><!-- col-md-3 col-sm=6 begin -->
				<div class="box same-height headline"><!-- box same-height headline begin -->
				<h3 class="text-center">products you may like</h3>
				</div><!-- box same-height headline finish-->
				</div><!-- col-md-3 col-sm=6 finish -->
				<div class="col-md-3 col-sm-6 center-responsive"><!-- col-md-3 col-sm-6 center-responsive begin -->
					<div class="product same-height"><!-- product same-height begin -->
						<a href="details.php">
							<img class="img-responsive" src="admin_area/product_images/effect12.jpg" alt="effect12">
						</a>
						<div class="text"><!-- text begin -->
							<h3><a href="details.php"> living-room shelf </a></h3>
							<p class="price">ksh 8000</p>
						</div><!-- text finish -->
						 
					
					</div><!-- product same-height finish-->
				</div><!-- col-md-3 col-sm-6 center-responsive finish-->				
				<div class="col-md-3 col-sm-6 center-responsive"><!-- col-md-3 col-sm-6 center-responsive begin -->
					<div class="product same-height"><!-- product same-height begin -->
						<a href="details.php">
							<img class="img-responsive" src="admin_area/product_images/set.jpg" alt="set">
						</a>
						<div class="text"><!-- text begin -->
							<h3><a href="details.php"> full kitchen set </a></h3>
							<p class="price">ksh 80000</p>
						</div><!-- text finish -->
						 
					
					</div><!-- product same-height finish-->
				</div><!-- col-md-3 col-sm-6 center-responsive finish-->				
				<div class="col-md-3 col-sm-6 center-responsive"><!-- col-md-3 col-sm-6 center-responsive begin -->
					<div class="product same-height"><!-- product same-height begin -->
						<a href="details.php">
							<img class="img-responsive" src="admin_area/product_images/23.jpg" alt="23">
						</a>
						<div class="text"><!-- text begin -->
							<h3><a href="details.php"> design table </a></h3>
							<p class="price">ksh 8000</p>
						</div><!-- text finish -->
						 
					
					</div><!-- product same-height finish-->
				</div><!-- col-md-3 col-sm-6 center-responsive finish-->
				
				
			</div><!-- #row same-height-row finish -->
			
		</div><!-- col-md-9 Finish -->
		
		</div><!-- container Finish -->
	</div><!-- #content Finish -->
	<?php
	include("includes/footer.php");
	
	?>
	 
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>
   