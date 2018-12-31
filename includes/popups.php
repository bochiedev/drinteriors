<!-- POPUPS -->
<div class="popup-wrapper">
    <div class="bg-layer"></div>


    <div class="popup-content quick-view-popup" data-rel="4">
        <div class="layer-close"></div>
        <div class="popup-container size-3">
            <div class="popup-align">
                <div class="row separator">
                    <div class="col-sm-5">
                        <!-- swiper -->
                        <div class="swiper-popup">
                            <div class="swiper-button-prev swiper-button" data-pagination-rel="1"></div>
                            <div class="swiper-button-next swiper-button" data-pagination-rel="1"></div>
                            <div class="swiper-container" data-speed="1000" data-pagination-rel="1" data-breakpoints="1" data-slides-per-view="1" data-xs-slides="1" data-sm-slides="1" data-md-slides="1">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="img/shop/swiper-popup-1.png" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="img/shop/swiper-popup-2.png" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="img/shop/swiper-popup-3.png" alt="">
                                    </div>
                                </div>
                                <div class="swiper-pagination swiper-pagination-black"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <h4 class="h4"><? echo $product['name'] ?></h4>
                        <div class="empty-space h25-xs"></div>
                        <h6 class="h6">Price:<span class="price"><? echo number_format($product['price']) ?></span></h6>
                        <div class="empty-space h25-xs"></div>
                        <h6 class="h6">Available:<span class="h4 yellow">
                          <?php

                          if($product['stock'] > 0){

                            echo $product['stock'];
                          }else{
                            echo "RESTOCKING";
                          }

                           ?>
                        </span></h6>
                        <div class="empty-space h25-xs"></div>
                        <p><? echo $product['description'] ?></p>
                        <div class="empty-space h20-xs"></div>
                        <div class="row">
                            <div class="col-sm-6">
                              <?php

                              if($product['stock'] > 0){

                                echo '<div class="quantity-wrapper">
                                    <div class="quantity">
                                        <input type="number" value="1">
                                        <i class="fa fa-caret-left" aria-hidden="true"></i>
                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                    </div>
                                </div>';
                              }else{

                              }

                               ?>

                            </div>
                            <div class="col-sm-6 text-right">
                                <div class="btn-wrap"><a href="#" class="btn-2"><span>add to cart</span></a></div>
                            </div>
                        </div>
                        <div class="empty-space h30-xs"></div>

                    </div>
                </div>
            </div>
            <div class="button-close"></div>
        </div>
    </div>

</div>
