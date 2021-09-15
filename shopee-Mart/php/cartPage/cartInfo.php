<div class="cart-box-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-main table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Images</th>
                                <th>Product Name</th>
                                <th>Category</th>
                                <th>Price</th>
                                
                                <!-- <th>Total</th>
                                <th>Remove</th> -->
                            </tr>
                        </thead>
                        <tbody>

                        <?php 
                        // session_start();
                        // $user_id = $_SESSION['user_id'];

                        $total = 0;

                        $sqlquery="SELECT * FROM cart WHERE userid= 1";
                        try{
                            $conn = new PDO("mysql:host=localhost;dbname=shopeemart;","root","");
                            // echo "$sqlquery";
                            $object=$conn->query($sqlquery);
                            $nrow = $object->rowCount();
                            if($object->rowCount() == 0)
                            {
                                echo "<br><br><br><h3>No data found...! <h3>";
                            }
                            else
                            {
                                $nrow = $object->rowCount();
                                
                                foreach( $object as $row ) {
                                    $productid = $row['productid'];
                                    $sqlquery2="SELECT * FROM product WHERE id='$productid' ORDER BY name ASC";
                                    $object2=$conn->query($sqlquery2);


                                    if($object2->rowCount() == 0)
                                    {
                                        // echo "<br><br><br><h3>No data found...! <h3>";
                                    }
                                    else
                                    {
                                        $nrow2 = $object2->rowCount();
                                        
                                        foreach( $object2 as $row2 ) {
                                            $id = $row2['id'];
                                            $name = $row2['name'];
                                            $price = $row2['price'];
                                            $details = $row2['details'];
                                            $picSrc = $row2['picSrc'];
                                            $type = $row2['type'];
                                            $sellType = $row2['sellType']; 
                                            $total += $price;   ?>
                                            

                            <tr>
                                <td class="thumbnail-img">
                                    <a href="#">
                                        <?php echo '<img class="img-fluid" src="'.$picSrc.'" alt="" />';?>
                                    </a>
                                </td>
                                <td class="name-pr">
                                    <a href="#">
                                        <?php echo $name;?>
                                    </a>
                                </td>
                                <td class="name-pr">
                                    <a href="#">
                                        <?php echo $type;?>
                                    </a>
                                </td>
                                <td class="total-pr">
                                    <p><?php echo 'RM'.$price;?></p>
                                </td>
                            </tr>

                            <?php 
                                            }
                                        }
                                    }
                                }


                            }
                            catch(PDOException $err)
                            {
                                echo "<script>window.alert('db connection error');</script>";
                                echo "<script>location.assign('../../index.php');</script>";
                            }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="row my-5">
            <div class="col-lg-6 col-sm-6">
                <div class="coupon-box">
                    <div class="input-group input-group-sm">
                        <input class="form-control" placeholder="Enter your coupon code" aria-label="Coupon code" type="text">
                        <div class="input-group-append">
                            <button class="btn btn-theme" type="button">Apply Coupon</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="update-box">
                    <input value="Update Cart" type="submit">
                </div>
            </div>
        </div>

        <div class="row my-5">
            <div class="col-lg-8 col-sm-12"></div>
            <div class="col-lg-4 col-sm-12">
                <div class="order-box">
                    <h3>Order summary</h3>
                    <div class="d-flex">
                        <h4>Sub Total</h4>
                        <div class="ml-auto font-weight-bold"> <?php echo 'RM '.$total;?> </div>
                    </div>
                    <div class="d-flex">
                        <h4>Discount</h4>
                        <div class="ml-auto font-weight-bold"> RM 0.00 </div>
                    </div>
                    <hr class="my-1">
                    <div class="d-flex">
                        <h4>Coupon Discount</h4>
                        <div class="ml-auto font-weight-bold"> RM 0.00 </div>
                    </div>
                    <div class="d-flex">
                        <h4>Tax</h4>
                        <div class="ml-auto font-weight-bold"> RM 0.00 </div>
                    </div>
                    <div class="d-flex">
                        <h4>Shipping Cost</h4>
                        <div class="ml-auto font-weight-bold"> Free </div>
                    </div>
                    <hr>
                    <div class="d-flex gr-total">
                        <h5>Grand Total</h5>
                        <div class="ml-auto h5"> <?php echo 'RM '.$total;?> </div>
                    </div>
                    <hr> </div>
            </div>
            <div class="col-12 d-flex shopping-box"><?php echo '<a href="checkout.php?total='.$total.'" class="ml-auto btn hvr-hover">Checkout</a>';?> </div>
        </div>

    </div>
</div>