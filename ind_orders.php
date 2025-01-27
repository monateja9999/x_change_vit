<!-- Sales Details -->
<!DOCTYPE html>
<html>
<body>
<div class="modal fade" id="details<?php echo $row['regno']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Order Details</h4></center>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <h5> Customer: <b><?php echo $row['regno']; ?></b> 
                        <span class="pull-right">
                            <?php echo date('M d, Y h:i A', strtotime($row['date_of_purchase'])) ?>
                        </span>
                    </h5>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Purchase Quantity</th>
                            <th>Subtotal</th>
                        </thead>
                        <tbody>
                            <?php
                            	include('config.php');
                                $sql="select * from purchase_detail left join menu on menu.item_name=purchase_detail.item_name where regno='".$row['regno']."'";
                                $dquery=$con->query($sql);
                                while($drow=$dquery->fetch_array()){
                                    ?>
                                    <tr>
                                        <td><?php echo $drow['item_name']; ?></td>
                                        <td class="text-right">&#8369; <?php echo number_format($drow['item_cost'], 2); ?></td>
                                        <td><?php echo $drow['quantity']; ?></td>
                                        <td class="text-right">&#8369;
                                            <?php
                                                $subt = $drow['item_cost']*$drow['quantity'];
                                                echo number_format($subt, 2);
                                            ?>
                                        </td>
                                    </tr>
                                    <?php
                                    
                                }
                            ?>
                            <tr>
                                <td colspan="3" class="text-right"><b>TOTAL</b></td>
                                <td class="text-right">&#8369; <?php echo number_format($row['total'], 2); ?></td>
                            </tr>
                        </tbody>
                    </table>

                </div>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
</body>
</html>
