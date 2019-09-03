
<?php 
$active='Cart';
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
				   cart
				</li>
			
			</ul><!-- breadcrumb finish -->
			 
		
		</div><!-- col-md-12 Finish -->
		<div id="cart" class="col-md-9"> <!-- col-md-9 begin -->
		<div class="box"><!-- box begin -->
			
			<form action="cart.php" method="post" enctype="multipart/form-data"><!-- form begin -->
			<h1> Shopping Cart</h1>
			<p class="text-muted">you currently have 3 item(s) in your cart</p>
				
				<div class="table-responsive">  <!-- table-responsive begin -->
					
				<table class="table"><!-- table begin -->
					<thead><!-- thead begin -->
					<tr><!-- tr begin -->
						<th colspan="2">product</th>
						<th>quantity</th>
						<th>unit price</th>
						
						<th colspan="1">delete</th>
						<th colspan="2">sub-total </th>
						
					</tr><!-- tr finish -->
					
					</thead><!-- thead finish -->
					<tbody><!-- tbody begin -->
					<tr><!-- tr begin -->
						<td>
						
						<img class="img-responsive" src="admin_area/product_images/advertising.jpg" alt="20">
						
						</td>
						<td>
						<a href ="#">kitchen drawers</a>
						
						</td>
						<td>
						
						2
						</td>
						<td>
						3000ksh
						</td>
						<td>
						<input type="checkbox" name="remove[]">
						</td>
						<td>
						
						6000
						</td>
						</tr><!-- tr finish -->
					
					</tbody><!-- tbody finish -->
					<tbody><!-- tbody begin -->
					<tr><!-- tr begin -->
						<td>
						
						<img class="img-responsive" src="admin_area/product_images/home1-post2.jpg" alt="20">
						
						</td>
						<td>
						<a href ="#">classic drawers</a>
						
						</td>
						<td>
						
						2
						</td>
						<td>
						3000ksh
						</td>
						<td>
						<input type="checkbox" name="remove[]">
						</td>
						<td>
						
						6000
						</td>
						</tr><!-- tr finish -->
					
					</tbody><!-- tbody finish -->
					<tbody><!-- tbody begin -->
					<tr><!-- tr begin -->
						<td>
						
						<img class="img-responsive" src="admin_area/product_images/effect3.jpg" alt="20">
						
						</td>
						<td>
						<a href ="#">dining set</a>
						
						</td>
						<td>
						
						2
						</td>
						<td>
						3000ksh
						</td>
						<td>
						<input type="checkbox" name="remove[]">
						</td>
						<td>
						
						6000
						</td>
						</tr><!-- tr finish -->
					
					</tbody><!-- tbody finish -->
					
					<tfoot><!-- tfoot begin -->
						<tr><!-- tr begin -->
						
							<th colspan="5">Total</th>
							<th colspan="2">ksh 10000</th>
						</tr><!-- tr finish -->
					
					
					</tfoot><!-- tfoot finish -->
					
					</table><!-- table finish -->
				
				</div><!-- table-responsive finish -->
				<div class="box-footer"><!--box-footer begin -->
				<div class="pull-left"><!--pull-left begin -->
					
					<a href="index.php" class="btn btn-default"><!--btn btn-default begin -->
						<i class="fa fa-chevron-left"></i> Continue shopping
					
					</a><!--btn btn-default finish -->
					</div><!--pull-left finish -->
				<div class="pull-right"><!--pull-right begin -->
					
					<button type="submit" name="update" value="update cart" class="btn btn-default"><!--btn btn-default begin -->
						<i class="fa fa-refresh"></i> update cart
					
					</button><!--btn btn-default finish -->
					<a href="checkout.php" class="btn btn-primary">
						proceed checkout <i class="fa fa-chevron-right"></i>
						 
					
					</a>
					</div><!--pull-right finish -->
				
				
				
				</div><!--box-footer finish -->
				
			</form><!-- form finish -->
			
			</div><!-- box finish --><div id="row same-height-row"><!--#row same-height-row begin -->
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
		<div class="col-md-3"><!-- col-md-3 begin -->
			<div id="order-summary" class="box"><!-- box begin -->
			
				<div class="box-header"><!-- box-header begin-->
					<h3>Order Summary</h3>
				
				</div><!-- box-header finish -->
			</div><!-- box finish -->
			
			<p class="text-muted"><!-- text-muted begin -->
				shipping and additional costs are calculated based on value you have entered
			
			</p><!-- text-muted finish -->
			<div class="table-responsive"><!-- table-responive begin -->
				<table class="table"><!-- table begin -->
					<tbody><!-- tbody begin -->
						<tr><!-- tr begin -->
						<td>Order sub-total</td>
							<th>ksh20000</th>
						
						
						</tr><!-- tr finish -->
						<tr><!-- tr begin -->
							<td> Shipping and handling</td>
							<td>ksh 0</td>
						
						</tr><!-- tr finish -->
						<tr><!-- tr begin -->
							<td> Tax</td>
							<th>ksh 0</th>
						
						</tr><!-- tr finish -->
						<tr class="total"><!-- tr begin -->
							<td> Total</td>
							<th>ksh 200000</th>
						
						</tr><!-- tr finish -->
					</tbody><!-- tbody finish -->
					
				</table><!-- table finish -->
			
			</div><!-- table-responive finish -->
		
		</div><!-- col-md-3 Finish -->
		
		</div><!-- container Finish -->
	</div><!-- #content Finish -->
	<?php
	include("includes/footer.php");
	?>
	 
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>
   