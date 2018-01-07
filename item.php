<?php 
include "connection.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Product detail</title>
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/font-awesome.css" >
		<link rel="stylesheet" href="css/style.css" >
			
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script>
		<style>
		.btn{
	                
			height:70px;
			font-size:40px;
			border-radius:0;
		}

		</style>
	</head>
	<body>
		<?php include "includes/header.php"; ?>
		<div class="container">
		<div class="row">
			<ol class="breadcrumb">
			    <li><a href="index.php">Home</a></li>
			    <li><a href="#">Watches</a></li>
			    <li class="active">Beautifull Watch</li>
			</ol>
		</div>
		<div class="row">
           <?php
            if(isset($_GET['item_id'])){
            $sql = "select * from items where item_id = '$_GET[item_id]'";
			$run = mysqli_query($conn,$sql);
			while($rows = mysqli_fetch_assoc($run)){
          ?>
		   <div class="col-md-8">
			<h3 class="product-page-title"><?php echo $rows["item_title"]; ?></h3>
			<img src="<?php echo $rows["item_image"]; ?>" class="img-responsive">
			<h4 class="product-page-desc-head">Description</h4>
			<div class="product-page-descr-detail">
				<?php echo $rows["item_description"]; ?>
			</div>
		   </div>
            <?php  
            }
            } 
            ?>
		   <aside class="col-md-4">
			
			<a href="buy.php" class="btn btn-success btn-lg btn-block">
			  Buy
			</a>			
			<br>
			<ul class="list-group">
			  <li class="list-group-item">
				<div class="row">
				<div class="col-md-3"><i class="fa fa-truck fa-2x"></i></div>
				<div class="col-md-9">Delivered Within 5 days</div>
				</div>
			  <li>
			  <li class="list-group-item">
				<div class="row">
				<div class="col-md-3"><i class="fa fa-refresh fa-2x"></i></div>
				<div class="col-md-9">Easy return in 7 days</div>
				</div>
			  <li>
			  <li class="list-group-item">
				<div class="row">
				<div class="col-md-3"><i class="fa fa-phone fa-2x"></i></div>
				<div class="col-md-9">Call at +212-0600557633</div>
				</div>
			  <li>
			</ul>
		   </aside>
		   </div>
		   <div class="page-header">
		   <h2>Related Items</h2></div>
		   <section class="row">
			<div class="col-md-3">
			<div class="col-md-12 single-item noPadding">
				<div class="top">
				<img src="images/Apple_Watch.jpg">
								
				</div>
				<div class="bottom">
				<h3 class="item-title">
				<a href="product.php">				
				Beautifull Watch
				</a>
				</h3>	
				<div class="pull-right cutted-price text-muted"><del>$ 500/=
				</del></div>
				<div class="clearfix"></div>
				<div class="pull-right discounted-price">$ 450/=
				</div>			
				</div>
			</div></div>
			<div class="col-md-3">
			<div class="col-md-12 single-item noPadding">
				<div class="top">
				<img src="images/Apple_Watch.jpg">
								
				</div>
				<div class="bottom">
				<h3 class="item-title">
				<a href="product.php">				
				Beautifull Watch
				</a>
				</h3>	
				<div class="pull-right cutted-price text-muted"><del>$ 500/=
				</del></div>
				<div class="clearfix"></div>
				<div class="pull-right discounted-price">$ 450/=
				</div>			
				</div>
			</div></div>
			<div class="col-md-3">
			<div class="col-md-12 single-item noPadding">
				<div class="top">
				<img src="images/Apple_Watch.jpg">
								
				</div>
				<div class="bottom">
				<h3 class="item-title">
				<a href="product.php">				
				Beautifull Watch
				</a>
				</h3>	
				<div class="pull-right cutted-price text-muted"><del>$ 500/=
				</del></div>
				<div class="clearfix"></div>
				<div class="pull-right discounted-price">$ 450/=
				</div>			
				</div>
			</div></div>
			<div class="col-md-3">
			<div class="col-md-12 single-item noPadding">
				<div class="top">
				<img src="images/Apple_Watch.jpg">
								
				</div>
				<div class="bottom">
				<h3 class="item-title">
				<a href="product.php">				
				Beautifull Watch
				</a>
				</h3>	
				<div class="pull-right cutted-price text-muted"><del>$ 500/=
				</del></div>
				<div class="clearfix"></div>
				<div class="pull-right discounted-price">$ 450/=
				</div>			
				</div>
			</div></div>
		   </section>
		</div>
		<?php 
		for($i=0;$i<9;$i++) echo "<br>";			
		 ?>
	 	<?php include "includes/footer.php"; ?>
	</body>
</html>
