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
		<?php include "includes/header.php"; 
        $item_check_id = 0;
        ?>
		<div class="container">
		<div class="row">
			<ol class="breadcrumb">
			    <li><a href="index.php">Home</a></li>
                 <?php
            if(isset($_GET['item_id'])){
            $sql = "select * from items where item_id = $_GET[item_id]";
            $item_check_id = $_GET['item_id'];
			$run = mysqli_query($conn,$sql);
			while($rows = mysqli_fetch_assoc($run)){
                $query_cat = "select * from item_cat where item_id = $rows[item_cat]";
                $reader_cat = mysqli_query($conn,$query_cat);
                while($rows_cat = mysqli_fetch_assoc($reader_cat)){
            ?>
			    <li><a href="category.php?category=<?php echo $rows_cat['item_slug'] ?>"><?php echo ucwords($rows_cat['item_name']) ?></a></li>
            <?php } ?>
			    <li class="active"><?php echo ucwords($rows['item_title']) ?></li>
			</ol>
		</div>
		<div class="row">
          
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
			
			<a href="buy.php?check_item_id=<?php echo $item_check_id; ?>" class="btn btn-success btn-lg btn-block">
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
            <?php 
            $rel_query ="select * from items order by rand() limit 4";   
            $rel_reader=mysqli_query($conn,$rel_query);
            while($rel_rows = mysqli_fetch_assoc($rel_reader)){
            ?>
			<div class="col-md-3">
			<div class="col-md-12 single-item noPadding">
				<div class="top">
				<img src="<?php echo $rel_rows['item_image'] ?>">
								
				</div>
				<div class="bottom">
				<h3 class="item-title">
                <?php
                $x = str_replace(' ','-',$rel_rows['item_title']);    
                ?>
				<a href="item.php?item_id=<?php echo $rel_rows['item_id']?>&item_title=
                <?php echo $x ?>">				
				<?php echo $rel_rows['item_title'] ?>
				</a>
				</h3>	
				<div class="pull-right cutted-price text-muted"><del>$ <?php echo $rel_rows['item_price'] ?> /=
				</del></div>
				<div class="clearfix"></div>
				<div class="pull-right discounted-price">$ <?php echo $rel_rows['item_price']-$rel_rows['item_discount'] ?>/=
				</div>			
				</div>
			</div></div>
          <?php } ?>
		  </section>
		</div>
		<?php 
		for($i=0;$i<9;$i++) echo "<br>";			
		 ?>
	 	<?php include "includes/footer.php"; ?>
	</body>
</html>
