<div class="instagram-box">
    <div class="main-instagram owl-carousel owl-theme">
        <?php
        for ($x = 1; $x <=24; $x++) {
        ?>
        <div class="item">
            <div class="ins-inner-box">
                <?php echo '<img src="images\instragram\instagram-img-'.$x.'.jpg" alt="">';?>
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <?php }?>
    </div>
</div>
<!-- End Instagram Feed  -->