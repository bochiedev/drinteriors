<?php
include_once '_includes/db_inc.php';
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from unionagency.one/bristol/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 May 2018 11:33:57 GMT -->
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/swiper.min.css" rel="stylesheet" type="text/css" />
    <link href="css/jquery-ui.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="img/favicon.ico" rel="shortcut icon" />
    <link href="css/sumoselect.css" rel="stylesheet" />
    <link href="../../fonts.googleapis.com/css8b9f.css?family=Hind:300,500,600%7CTitillium+Web%7COswald:700" rel="stylesheet">
    <title>DRINTERIORS | Shop</title>
</head>
<body>
  <?php
  include_once "includes/header.php";
  ?>
    <!-- content -->
    <!-- content -->
    <div id="content">

        <div class="shop shop-2">
            <!-- products -->
            <div class="container">
                <div class="empty-space h90-xs h100-md"></div>
                <div class="empty-space h0-xs h80-md"></div>
                <div class="row text-center">
                    <div class="col-xs-12">
                       <h1 class="h1-2">Products</h1>
                    </div>
                    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
                        <div class="empty-space h20-xs"></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                    </div>
                </div>



                <!-- <div class="empty-space h30-xs h60-md"></div> -->

                <!-- <form class="shop-form">
                    <div class="row">
                        <div class="col-sm-12 col-md-5 col-lg-5">
                            <div class="found">
                                <p>found <span>127</span> items</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-7 col-lg-7">
                            <div class="inline-wrapper">
                                <select name="sortby" class="select-box">
                                    <option disabled selected>Sort by</option>
                                    <option value="sort1">Sort1</option>
                                    <option value="sort2">Sort2</option>
                                    <option value="sort3">Sort3</option>
                                    <option value="sort4">Sort4</option>
                                </select>
                                <span class="input-txt-left">Show</span>
                                <select name="show" class="select-box">
                                    <option value="10">10</option>
                                    <option value="30">30</option>
                                    <option value="50">50</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </form> -->

                <div class="empty-space h30-xs"></div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="prod-item-wrapper">


                            <?php

                            $query = 'SELECT * FROM shop ORDER by id ASC';
                            $result = mysqli_query($connection, $query);
                            $result_per_page = 2 ;
                            $number_of_result = mysqli_num_rows($result);
                            $number_of_pages = ceil($number_of_result/$result_per_page) ;
                            echo $number_of_pages;






                            if($result){
                              if($number_of_result>0){
                                while($product = mysqli_fetch_assoc($result)){
                                  ?>
                                  <form method="post" action="shop.php?action=add&id=<?php echo $product['id']; ?>">
                                  <div class="shop-prod-item">
                                      <a href="shopdetail.php" class="img-hover-1">
                                          <img src="img/shop/item-1.jpg" alt="">
                                          <span class="shop-prod-item-hover">
                                              <span class="btn-2 open-popup" data-rel="4"><span>Quick view</span></span>
                                              <span class="btn-2"><span>add to cart</span></span>
                                              <i class="fa fa-heart-o fa-lg" aria-hidden="true"></i>
                                          </span>
                                      </a>
                                      <div class="description">
                                          <article>
                                              <a href="shopdetail.php"><h6 class="h6 hover-1"><?php echo $product['name']; ?></h6></a>
                                              <div class="empty-space h5-xs"></div>
                                              <p><?php echo $product['description']; ?></p>
                                          </article>
                                      </div>
                                      <span class="price">Kes <?php echo number_format($product['price']); ?></span>
                                  </div>
                                </form>

                                  <?php
                                }
                              }
                            }

                            ?>




                            <!-- <div class="shop-prod-item">
                                <a href="shopdetail.html" class="img-hover-1">
                                    <img src="img/shop/item-2.jpg" alt="">
                                    <span class="shop-prod-item-hover">
                                        <span class="btn-2 open-popup" data-rel="4"><span>Quick view</span></span>
                                        <span class="btn-2"><span>add to cart</span></span>
                                        <i class="fa fa-heart-o fa-lg" aria-hidden="true"></i>
                                    </span>
                                </a>
                                <div class="description">
                                    <article>
                                        <a href="shopdetail.html"><h6 class="h6 hover-1">chair with open space</h6></a>
                                        <div class="empty-space h5-xs"></div>
                                        <p>Lorem ipsum dolor sit amet, cons adipisicing elit</p>
                                    </article>
                                </div>
                                <span class="price">&#36;567<sup>00</sup></span>
                            </div>
                            <div class="shop-prod-item">
                                <a href="shopdetail.html" class="img-hover-1">
                                    <img src="img/shop/item-3.jpg" alt="">
                                    <span class="shop-prod-item-hover">
                                        <span class="btn-2 open-popup" data-rel="4"><span>Quick view</span></span>
                                        <span class="btn-2"><span>add to cart</span></span>
                                        <i class="fa fa-heart-o fa-lg" aria-hidden="true"></i>
                                    </span>
                                </a>
                                <div class="description">
                                    <article>
                                        <a href="shopdetail.html"><h6 class="h6 hover-1">wooden commode</h6></a>
                                        <div class="empty-space h5-xs"></div>
                                        <p>Lorem ipsum dolor sit amet, cons adipisicing elit</p>
                                    </article>
                                </div>
                                <span class="price">&#36;690<sup>00</sup></span>
                            </div>
                            <div class="shop-prod-item">
                                <a href="shopdetail.html" class="img-hover-1">
                                    <img src="img/shop/item-4.jpg" alt="">
                                    <span class="shop-prod-item-hover">
                                        <span class="btn-2 open-popup" data-rel="4"><span>Quick view</span></span>
                                        <span class="btn-2"><span>add to cart</span></span>
                                        <i class="fa fa-heart-o fa-lg" aria-hidden="true"></i>
                                    </span>
                                </a>
                                <div class="description">
                                    <article>
                                        <a href="shopdetail.html"><h6 class="h6 hover-1">chair with open space</h6></a>
                                        <div class="empty-space h5-xs"></div>
                                        <p>Lorem ipsum dolor sit amet, cons adipisicing elit</p>
                                    </article>
                                </div>
                                <span class="price">&#36;286<sup>00</sup></span>
                            </div>
                            <div class="shop-prod-item">
                                <a href="shopdetail.html" class="img-hover-1">
                                    <img src="img/shop/item-5.jpg" alt="">
                                    <span class="shop-prod-item-hover">
                                        <span class="btn-2 open-popup" data-rel="4"><span>Quick view</span></span>
                                        <span class="btn-2"><span>add to cart</span></span>
                                        <i class="fa fa-heart-o fa-lg" aria-hidden="true"></i>
                                    </span>
                                </a>
                                <div class="description">
                                    <article>
                                        <a href="shopdetail.html"><h6 class="h6 hover-1">comfortable kitchen chair</h6></a>
                                        <div class="empty-space h5-xs"></div>
                                        <p>Lorem ipsum dolor sit amet, cons adipisicing elit</p>
                                    </article>
                                </div>
                                <span class="price">&#36;567<sup>00</sup></span>
                            </div>
                            <div class="shop-prod-item">
                                <a href="shopdetail.html" class="img-hover-1">
                                    <img src="img/shop/item-6.jpg" alt="">
                                    <span class="shop-prod-item-hover">
                                        <span class="btn-2 open-popup" data-rel="4"><span>Quick view</span></span>
                                        <span class="btn-2"><span>add to cart</span></span>
                                        <i class="fa fa-heart-o fa-lg" aria-hidden="true"></i>
                                    </span>
                                </a>
                                <div class="description">
                                    <article>
                                        <a href="shopdetail.html"><h6 class="h6 hover-1">great red sofa</h6></a>
                                        <div class="empty-space h5-xs"></div>
                                        <p>Lorem ipsum dolor sit amet, cons adipisicing elit</p>
                                    </article>
                                </div>
                                <span class="price">&#36;690<sup>00</sup></span>
                            </div>
                            <div class="shop-prod-item">
                                <a href="shopdetail.html" class="img-hover-1">
                                    <img src="img/shop/item-7.jpg" alt="">
                                    <span class="shop-prod-item-hover">
                                        <span class="btn-2 open-popup" data-rel="4"><span>Quick view</span></span>
                                        <span class="btn-2"><span>add to cart</span></span>
                                        <i class="fa fa-heart-o fa-lg" aria-hidden="true"></i>
                                    </span>
                                </a>
                                <div class="description">
                                    <article>
                                        <a href="shopdetail.html"><h6 class="h6 hover-1">geometric chandelier</h6></a>
                                        <div class="empty-space h5-xs"></div>
                                        <p>Lorem ipsum dolor sit amet, cons adipisicing elit</p>
                                    </article>
                                </div>
                                <span class="price">&#36;96<sup>00</sup></span>
                            </div>
                            <div class="shop-prod-item">
                                <a href="shopdetail.html" class="img-hover-1">
                                    <img src="img/shop/item-8.jpg" alt="">
                                    <span class="shop-prod-item-hover">
                                        <span class="btn-2 open-popup" data-rel="4"><span>Quick view</span></span>
                                        <span class="btn-2"><span>add to cart</span></span>
                                        <i class="fa fa-heart-o fa-lg" aria-hidden="true"></i>
                                    </span>
                                </a>
                                <div class="description">
                                    <article>
                                        <a href="shopdetail.html"><h6 class="h6 hover-1">stone journal table</h6></a>
                                        <div class="empty-space h5-xs"></div>
                                        <p>Lorem ipsum dolor sit amet, cons adipisicing elit</p>
                                    </article>
                                </div>
                                <span class="price">&#36;337<sup>00</sup></span>
                            </div>
                            <div class="shop-prod-item">
                                <a href="shopdetail.html" class="img-hover-1">
                                    <img src="img/shop/item-9.jpg" alt="">
                                    <span class="shop-prod-item-hover">
                                        <span class="btn-2 open-popup" data-rel="4"><span>Quick view</span></span>
                                        <span class="btn-2"><span>add to cart</span></span>
                                        <i class="fa fa-heart-o fa-lg" aria-hidden="true"></i>
                                    </span>
                                </a>
                                <div class="description">
                                    <article>
                                        <a href="shopdetail.html"><h6 class="h6 hover-1">vase with geometric ornament</h6></a>
                                        <div class="empty-space h5-xs"></div>
                                        <p>Lorem ipsum dolor sit amet, cons adipisicing elit</p>
                                    </article>
                                </div>
                                <span class="price">&#36;120<sup>00</sup></span>
                            </div> -->
                        </div>
                        <div class="page-pagination">
                          <?php
                            // <a href="#"><img src="img/shop/prev.png" alt=""></a>
                            // <a class="active" href="#">1</a>
                            // <a href="#">2</a>
                            // <a href="#">3</a>
                            // <a href="#">4</a>
                            // <a href="#">5</a>
                            // <a href="#"><img src="img/shop/next.png" alt=""></a>
                            ?>
                            <a href="#"><img src="img/shop/prev.png" alt=""></a>
                            <?php
                              for($page=1; $page<=$number_of_pages; $page++){

                                ?><a class="active" href="shop.php?page=<?php echo $page; ?>"><?php echo $page ?></a> <?php

                              }
                              ?>
                              <a href="#"><img src="img/shop/next.png" alt=""></a>


                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="empty-space h60-xs h100-md"></div>
        <div class="empty-space h0-xs h20-md"></div>


        <!-- footer -->
        <?php
        include "includes/footer.php";
        ?>
        <!-- footer -->

    </div>
    <!-- content -->

    <?php include "includes/popups.php" ?>


    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/swiper.jquery.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;language=en"></script>
    <script src="js/map.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/simple-lightbox.min.js"></script>
    <script src="js/jquery.sumoselect.min.js"></script>
    <script src="js/global.js"></script>



</body>

<!-- Mirrored from unionagency.one/bristol/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 May 2018 11:34:10 GMT -->
</html>
