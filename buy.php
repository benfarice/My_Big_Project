<html>
	<head>
		<title>Shopping Cart</title>
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/font-awesome.min.css" >
		<link rel="stylesheet" href="css/style.css" >
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script>
	</head>
	<body>
		<?php include "includes/header.php"; ?>
		<div class="container">
			<div class="page-header">
			   <h2>Checkout </h2>
			</div>
			<div class="panel panel-default">
			    <div class="panel-heading">
				Order Detail
			    </div>
		            <div class="panel-body">
				<table class="table">
				   <thead>
					<tr>
					   <th>S.no</th>
					   <th>Item</th>
				           <th>qty</th>
					   <th width="5%">Delete</th>
					   <th class="text-right">Price</th>
					   
				           <th class="text-right">Total</th>
					   
					</tr>
				   </thead>
				   <tbody>
					<tr>
					   <td>1</td>
					   <td>Beautiful watch</td>
				           <td>1</td>
					   <td>
					   <button class="btn btn-danger btn-sm">Delete
					   </button></td>
					   <td class="text-right"><b>100/=</b></td>
					   
				           <td class="text-right"><b>100/=</b></td>
					   
					</tr>
					<tr>
					   <td>1</td>
					   <td>Tea Cup set</td>
				           <td>4</td>
					   <td>
					   <button class="btn btn-danger btn-sm">Delete
					   </button></td>
					   <td class="text-right"><b>150/=</b></td>
					   
				           <td class="text-right"><b>600/=</b></td>
					  
					</tr>
				   </tbody>
				</table>
				<table class="table">
				   <thead>
					<tr>
					    <th class="text-center" colspan="2">
					    Order Summary
					    </th>
					</tr>
			           </thead>
				   <tbody>
					<tr>
					    <td>SubTotal</td>
					    <td class="text-right"><b>700/=</b></td>
					</tr>
					<tr>
					    <td>Delivery Charger</td>
					    <td class="text-right"><b>Free</b></td>
					</tr>
					<tr>
					     <td>Grand Total</td>
					     <td class="text-right"><b>700/=</b></td>
					</tr>
				   </tbody>
				</table>
			    </div>
			</div>
		</div>
		<?php 
		for($i=0;$i<9;$i++) echo "<br>";			
		 ?>
		<?php include "includes/footer.php"; ?>
	</body>
</html>
