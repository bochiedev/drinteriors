<?php
require '_includes/db_inc.php';
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

      <div class="full-height-banner" style="height:300px!important; min-height:300px!important;">
        <div class="clip">
            <div class="bg fix" style="background-image: url(img/service_bg.jpg);">
                <div class="bg-layer-5"></div>
            </div>
        </div>
        <div class="vertical-align full">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="row text-center">
                            <div class="col-xs-12">
                               <h2 class="h2 white sm-sepp">Our Shop</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>



      <div class="empty-space h25-xs h35-md"></div>

        <div class="shop shop-2">
            <!-- products -->
            <div class="container">
                <!-- <div class="empty-space h90-xs h100-md"></div> -->
                <!-- <div class="empty-space h0-xs h80-md"></div> -->
                <!-- <div class="row text-center">
                    <div class="col-xs-12">
                       <h1 class="h1-2">Products</h1>
                    </div>
                    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
                        <div class="empty-space h20-xs"></div>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                    </div>
                </div> -->


                <div class="empty-space h30-xs"></div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="prod-item-wrapper">


                            <?php

                            $result_per_page = 1 ;
                            $query = 'SELECT * FROM shop ORDER by id ASC';
                            $result = mysqli_query($connection, $query);
                            $number_of_result = mysqli_num_rows($result);
                            $number_of_pages = ceil($number_of_result/$result_per_page) ;

                            ?>

                            <?php

                            if(!isset($_GET['page'])){

                              $page = 1;

                            }else{
                              $page = $_GET['page'];
                            }

                            $this_page_first_result = ($page-1)*$result_per_page;
                            $query = "SELECT * FROM shop LIMIT " . $this_page_first_result . ',' . $result_per_page;
                            $result = mysqli_query($connection, $query);
                            $number_of_result = mysqli_num_rows($result);

                            if($result){
                              if($number_of_result>0){
                                while($product = mysqli_fetch_assoc($result)){
                                  ?>
                                  <?php include "includes/popups.php" ?>

                                  <form method="post" action="shop.php?action=add&id=<?php echo $product['id']; ?>">
                                  <div class="shop-prod-item">
                                      <a href="shopdetail.php" class="img-hover-1">
                                          <img src="img/shop/item-1.jpg" alt="">
                                          <span class="shop-prod-item-hover">
                                              <span class="btn-2 open-popup" data-rel="4"><span>Quick view</span></span>
                                              <span class="btn-2"><span>add to cart</span></span>
                                              <!-- <i class="fa fa-heart-o fa-lg" aria-hidden="true"></i> -->
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


                        </div>
                        <div class="page-pagination">

                            <?php

                            if($page == 1){


                              echo '<a class="disabled"><img src="img/shop/prev.png" alt=""></a>';

                            }else{

                              echo '<a href="shop.php?page='. ($page-1).'"><img src="img/shop/prev.png" alt=""></a>';

                            }


                              for($page_no=1; $page_no<=$number_of_pages; $page_no++){

                                $active_class = '';

                                if($page == $page_no){
                                  $active_class = 'active';
                                }



                                echo '<a class="'.$active_class.'" href="shop.php?page='. $page_no .'">'. $page_no .'</a>';



                              }

                              if($page == $number_of_pages){

                                echo '<a class="disabled"><img src="img/shop/next.png" alt=""></a>';


                              }else{

                                echo '<a href="shop.php?page='. ($page+1).'"><img src="img/shop/next.png" alt=""></a>';

                              }


                              ?>


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
