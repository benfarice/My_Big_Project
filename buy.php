<?php 
session_start();
include "connection.php";
if(isset($_GET['check_item_id'])){
    $date = date('Y-m-d h:i:s');
    $random_num = mt_rand();
    if(isset($_SESSION['ref'])){
        
    }else{
        $_SESSION['ref'] = $date.'_'.$random_num;
    }
    
    $check_query = "insert into checkout (check_item,check_ref,check_timing) values (
    '$_GET[check_item_id]','$_SESSION[ref]','$date')";
    $check_run = mysqli_query($conn,$check_query);
}
?>
<!DOCTYPE html>
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
			   <h2 class="pull-left">Checkout </h2>
			   <div class="pull-right"><button class="btn btn-success"
			   data-toggle="modal" data-target="#proceed_modal" 
			   data-backdrop="static" data-keyboard="false">
			   Proceed</button></div>
			   <div id="proceed_modal" class="modal fade">
				<div class="modal-dialog">
				    <div class="modal-content">
					<div class="modal-header">
					   <button class="close" data-dismiss="modal">
					   &times;</button>
					</div>
					<div class="modal-body">
					   <form>
						<div class="form-group">
						   <label for="name">Name </label>
						   <input type="text" class="form-control"
						   placeholder="Full name" id="name">
						</div>
					        <div class="form-group">
						   <label for="email">Email Address </label>
						   <input type="email" class="form-control"
						   placeholder="Email" id="email">
						</div>
						<div class="form-group">
						   <label for="contact">Contact Number</label>
						   <input type="text" class="form-control"
						   placeholder="Contact Number" id="contact">
						</div>
						<div class="form-group">
						   <label for="city">City</label>
						   <input list="villes" class="form-control">
						   <datalist id="villes" >
							<option>Casablanca</option>
							<option>Fes</option>
							<option>Tetouane</option>
							<option>Rabat</option>
						   </datalist>
						</div>
						<div class="form-group">
						   <label for="address">Delivery address</label>
						   <textarea class="form-control"></textarea>
						</div>
						<div class="form-group">
						   <input type="submit" class="btn btn-danger
						   btn-block btn-lg">
						</div>
					   </form>
					</div>
					<div class="modal-footer">
					  <button class="btn btn-default" data-dismiss="modal">
					  Close
					  </button>
					</div>
				    </div>
				</div>
			   </div>
			   <div class="clearfix"></div>
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
                    <?php 
                    $c = 1 ;
                    $check_select_query ="select * from checkout c
                    join items i on c.check_item = i.item_id
                    where check_ref = '$_SESSION[ref]'";
                    $check_sel_run = mysqli_query($conn,$check_select_query);
                    while($reader_check = mysqli_fetch_assoc($check_sel_run)){
                    $new_price = $reader_check['item_price'] - $reader_check['item_discount'];
                    ?>
					<tr>
					   <td><?php echo $c; ?></td>
					   <td><?php echo $reader_check['item_title']; ?></td>
				           <td>1</td>
					   <td>
					   <button class="btn btn-danger btn-sm">Delete
					   </button></td>
					   <td class="text-right"><b><?php echo $new_price; ?>/=</b></td>
					   
				           <td class="text-right"><b>100/=</b></td>
					   
					</tr>
					<?php 
                    $c++;
                    } ?>
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
