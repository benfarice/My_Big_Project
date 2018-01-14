<nav class="navbar navbar-inverse">
	          <div class="container-fluid">
			<div class="navbar-header">
				<a href="" class="navbar-brand">Online Shopping 
				</a>	
			</div>
			<ul class="nav navbar-nav">
				<li><a href="index.php">Home</a></li>	
                <?php
                $sql_cat = "select * from item_cat";
                $reader = mysqli_query($conn,$sql_cat);
                while($array = mysqli_fetch_assoc($reader)){
                $cat_slug = '';
                    if( $array['item_slug'] == ''){
                        $cat_slug = $array['item_name'];
                    }else{
                        $cat_slug = $array['item_slug'];
                    }
                ?>
				<li><a href="category.php?category=<?php echo $cat_slug ?>"><?php echo ucwords($array['item_name']) ?></a></li>
				<?php
                }
                ?>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#">LogOut</a></li>
			</ul>
		   </div>
</nav>
