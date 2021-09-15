
<div class="shop-box-inner">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-9 col-sm-12 col-xs-12 shop-content-right">
                <div class="right-product-box">
                    <div class="product-item-filter row">
                        <div class="col-12 col-sm-8 text-center text-sm-left">
                            <?php include 'php\shopPage\kids\productCount.php'; ?>
                        </div>
                        <div class="col-12 col-sm-4 text-center text-sm-right">
                            <ul class="nav nav-tabs ml-auto">
                                <li>
                                    <a class="nav-link active" href="#grid-view" data-toggle="tab"> <i class="fa fa-th"></i> </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="#list-view" data-toggle="tab"> <i class="fa fa-list-ul"></i> </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="product-categorie-box">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade show active" id="grid-view">
                                <div class="row">

                                    <?php include 'php\shopPage\kids\grid-men.php'; ?>

                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="list-view">
                            
                                <?php include 'php\shopPage\kids\list-men.php'; ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-sm-12 col-xs-12 sidebar-shop-left">
                <div class="product-categori">
                    <div class="search-product">
                        <form action="#">
                            <input class="form-control" placeholder="Search here..." type="text">
                            <button type="submit"> <i class="fa fa-search"></i> </button>
                        </form>
                    </div>
                    <div class="filter-sidebar-left">
                        <div class="title-left">
                            <h3>Categories</h3>
                        </div>
                        <div class="list-group list-group-collapse list-group-sm list-group-tree" id="list-group-men" data-children=".sub-men">
                            <div class="list-group-collapse sub-men">
                                <a class="list-group-item list-group-item-action" href="#sub-men1" data-toggle="collapse" aria-expanded="true" aria-controls="sub-men1">Cloths<small class="text-muted">(27)</small>
                            </a>
                                <div class="collapse show" id="sub-men1" data-parent="#list-group-men">
                                    <div class="list-group">
                                        <a href="shop.php" class="list-group-item list-group-item-action">Men<small class="text-muted">(9)</small></a>
                                        <a href="shop-women.php" class="list-group-item list-group-item-action">Women<small class="text-muted">(9)</small></a>
                                        <a href="shop-kids.php" class="list-group-item list-group-item-action active">Kids <small class="text-muted">(9)</small></a>
                                    </div>
                                </div>
                            </div>
                            <a href="shop-mobile.php" class="list-group-item list-group-item-action"> Mobile <small class="text-muted">(9) </small></a>
                            <a href="shop-laptop.php" class="list-group-item list-group-item-action"> Laptop <small class="text-muted">(9) </small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Shop Page -->