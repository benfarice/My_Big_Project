<?php 
session_start();
include "connection.php";
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
                    } 
?>