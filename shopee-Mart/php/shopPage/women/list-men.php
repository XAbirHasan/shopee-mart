<?php  
    $sqlquery="SELECT * FROM product WHERE type='women' ORDER BY name ASC";

    try{
        $conn = new PDO("mysql:host=localhost;dbname=shopeemart;","root","");
        // echo "$sqlquery";
        $object=$conn->query($sqlquery);

        if($object->rowCount() == 0)
        {
            echo "<br><br><br><h3>No data found...! <h3>";
        }
        else
        {
            $nrow = $object->rowCount();
            
            foreach( $object as $row ) {
                $id = $row['id'];
                $name = $row['name'];
                $price = $row['price'];
                $details = $row['details'];
                $picSrc = $row['picSrc'];
                $type = $row['type'];
                $sellType = $row['sellType'];


                // echo '<div class="show-result"> 
                //     <form action="donar_info_profile.php" method="post">
                //         <h3> <input type="submit" value= "'.$id.'"></h3>
                //         <p>Gender : '.$name.' , Blood group : '.$sellType.' , Last donate : '.$picSrc.' <input type="hidden" name="p_id" id="p_id" value="'.$sellType.'"></p><br><br>
                //     </form>
                // </div>';?>

                <form action="php\shopPage\addToCart.php" method="post">
                <div class="list-view-box">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                            <div class="products-single fix">
                                <div class="box-img-hover">
                                    <?php if ($sellType =='NEW'){?>
                                        <div class="type-lb">
                                            <p class="new"><?php echo $sellType; ?></p>
                                        </div>
                                    <?php }?>
                                    <?php if ($sellType !='NEW'){?>
                                        <div class="type-lb">
                                            <p class="sale"><?php echo $sellType; ?></p>
                                        </div>
                                    <?php }?>
                                    <?php echo '<img src="'.$picSrc.'" class="img-fluid" alt="Image">';?>
                                    <div class="mask-icon">
                                        <ul>
                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-8 col-xl-8">
                            <div class="why-text full-width">
                            <h4><?php echo $name; ?></h4>
                                <h5>RM<?php echo $price; ?></h5>
                                <p>
                                    <?php $arr =  explode("\n",$details);
                                                for ($x = 0; $x <sizeof($arr); $x++){
                                                    echo '* '.$arr[$x]. '<br>';

                                                    

                                        }?>
                                </p>
                                <?php echo '<input type="hidden" name="p_id" id="p_id" value="'.$id.'">'?>
                                <?php echo '<input type="hidden" name="pageInfo" id="pageInfo" value="women">'?>
                                <input class="btn hvr-hover" type = "submit" value="Add to Cart">
                            </div>
                        </div>
                    </div>
                </div>
                </form>
<?php               
            }
        }
    }
    catch(PDOException $err)
    {
        echo "<script>window.alert('db connection error');</script>";
        echo "<script>location.assign('search.php');</script>";
    }

    
?>













