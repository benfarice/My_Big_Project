<?php 
session_start();
include "connection.php";
if(isset($_REQUEST['check_id'])){
    $query_delete = "delete from checkout where check_id = $_REQUEST[check_id]";
    $check_del_run = mysqli_query($conn,$query_delete);
}
if(isset($_REQUEST['check_qty'])){
    $query_update_qty="update checkout set check_qty '$_REQUEST[check_qty]' where check_id = '$_REQUEST[updated_check_id]'";
    //echo $query_update_qty;
    $update_checkout_qty = mysqli_query($conn,$query_update_qty);
}
                    $c = 1 ;
                    $check_select_query ="select * from checkout c
                    join items i on c.check_item = i.item_id
                    where check_ref = '$_SESSION[ref]'";
                    $check_sel_run = mysqli_query($conn,$check_select_query);
                    while($reader_check = mysqli_fetch_assoc($check_sel_run)){
                    $new_price = $reader_check['item_price'] - $reader_check['item_discount'];
                    $total = $new_price * $reader_check['check_qty'];
                    ?>
					<tr>
					   <td><?php echo $c; ?></td>
					   <td><?php echo $reader_check['item_title']; ?></td>
				       <td>
                       <input type="number" style="width:60px"
                       onblur="update_qty(this.value,'<?php echo $reader_check['check_id'] ?>');"
                         value="<?php echo $reader_check['check_qty'] ?>"> 
                       </td>
					   <td>
					   <button class="btn btn-danger btn-sm"
                        onclick="del_func(<?php echo $reader_check['check_id'] ?>);">Delete
					   </button></td>
					   <td class="text-right"><b><?php echo $new_price; ?>/=</b></td>
					   
				           <td class="text-right"><b><?php echo $total; ?>/=</b></td>
					   
					</tr>
					<?php 
                    $c++;
                    } 
?>