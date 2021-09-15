<!-- use loop here future work -->

<?php
for ($x = 1; $x <=7; $x++) {
?>

<li class="text-center">
    <?php echo '<img src="images\Banner\banner-img-'.$x.'.jpg" alt="">';?>  
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="m-b-20"><strong>Welcome To <br> Shopee Mart</strong></h1>
                <p class="m-b-40">I'M NICER WHEN I LIKE MY OUTFIT.</p>
                <p><a class="btn hvr-hover" href="shop.php">Shop Now</a></p>
            </div>
        </div>
    </div>
</li>


<?php }?>