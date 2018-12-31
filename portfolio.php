<?php
require '_includes/db_inc.php';
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from unionagency.one/bristol/portfolio_full.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 May 2018 11:32:57 GMT -->
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/swiper.min.css" rel="stylesheet" type="text/css" />
    <link href="css/simplelightbox.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
     <link href="css/jquery-ui.css" rel="stylesheet" />
    <link href="img/favicon.ico" rel="shortcut icon" />
    <link href="css/sumoselect.css" rel="stylesheet" />
    <link href="../../fonts.googleapis.com/css1233.css?family=Hind:300,500,600%7CTitillium+Web%7CCabin%7COswald:700" rel="stylesheet">
    <title>DRINTERIORS | Portfolio</title>
</head>
<body>

  <?php
  include_once "includes/header.php";
  ?>
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
                               <h2 class="h2 white sm-sepp">Our Portfolio</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>



      <div class="empty-space h25-xs h35-md"></div>

    <section class="section">
        <!-- <div class="empty-space h40-xs h100-md"></div> -->
        <!-- <div class="empty-space h20-xs"></div> -->



            <div class="container-fluid">
            <!-- <div class="empty-space h25-xs h50-sm"></div>
            <div class="sorting-menu">
                <div class="button-drop">
                   <a href="#">
                        <span>All</span>
                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                        <i class="fa fa-angle-up" aria-hidden="true"></i>
                    </a>
                </div>
                <ul>
                    <li data-filter="*" class="active" data-name="All">All</li>
                    <li data-filter=".category-1" data-name="Design" class="">Design</li>
                    <li data-filter=".category-2" data-name="Advertising">Advertising</li>
                    <li data-filter=".category-3" data-name="User Expirience">User Expirience</li>
                    <li data-filter=".category-4" data-name="Branding">Branding</li>
                </ul>
            </div> -->
            <div class="empty-space h50-xs h50-sm"></div>
            <div class="row">
                <div class="col-md-12">
                    <div class="grid">
                        <div class="grid-sizer"></div>

                        <?php

                        $result_per_page = 1 ;
                        // $query = 'SELECT * FROM portfolio ORDER by id ASC';
                        $query = "SELECT portfolio.name,portfolio.image, category.category_name as category FROM portfolio LEFT JOIN category ON portfolio.category = category.id";


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
                        $query = "SELECT portfolio.name,portfolio.image, category.category_name as category
                        FROM portfolio LEFT JOIN category ON portfolio.category = category.id LIMIT " . $this_page_first_result . ',' . $result_per_page;

                        // $query = "SELECT * FROM portfolio LIMIT " . $this_page_first_result . ',' . $result_per_page;
                        $result = mysqli_query($connection, $query);
                        $number_of_result = mysqli_num_rows($result);

                        if($result){
                          if($number_of_result>0){
                            while($product = mysqli_fetch_assoc($result)){
                              ?>

                        <div class="grid-item category-3 w-25 grid-item-full">
                            <a href=<?php echo "img/".$product['image'].""; ?> class="lightbox"><img src=<?php echo "img/".$product['image'].""; ?> alt=""></a>
                            <a class="h6" href="detail.html"><?php echo $product['name']; ?></a>
                            <p><?php echo $product['category']; ?></p>
                        </div>

                        <?php
                      }
                    }
                  }

                  ?>


                    </div>

                </div>

            </div>
        </div>
        </section>


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

<!-- Mirrored from unionagency.one/bristol/portfolio_full.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 May 2018 11:33:14 GMT -->
</html>
