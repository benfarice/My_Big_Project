<html>
	<head>
		<title>Product detail</title>
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/style.css" >
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script>
	</head>
	<body>
		<?php include "includes/header.php"; ?>
		<div class="container">
		   <div class="col-md-12">
			<ol class="breadcrumb">
			    <li><a href="index.php">Home</a></li>
			    <li><a href="#">Watches</a></li>
			    <li class="active">Beautifull Watch</li>
			</ol>
		   </div>
		   <div class="col-md-8">
			<h3 class="product-page-title">Beautifull watch</h3>
			<img src="images/Apple_Watch.jpg" class="img-responsive">
			<h4 class="product-page-desc-head">Description</h4>
			<div class="product-page-descr-detail">
				<p>This is a beautifull watch This is a beautifull watch
				This is a beautifull watch
				</p>
				<ul>
				  <li>It's a beautifull</li>
				  <li>Made of Metal</li>
				  <li>An original and branded quality</li>
				  <li>Free Shipping overall the country</li>
				  <li>Pat Securely via <b>Cash on delivery</b> method</li>
				</ul>
			</div>
		   </div>
		   <div class="col-md-4"></div>
		</div>
		<?php 
		for($i=0;$i<9;$i++) echo "<br>";			
		 ?>
	 	<?php include "includes/footer.php"; ?>
	</body>
</html>
