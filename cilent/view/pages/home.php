  
  <!--slider section start-->
  <div class="hero-section section position-relative">
            <div class="tf-element-carousel slider-nav" data-slick-options='{
                "slidesToShow": 1,
                "slidesToScroll": 1,
                "infinite": true,
                "arrows": true,
                "dots": true
            }' data-slick-responsive='[
                {"breakpoint":768, "settings": {
                "slidesToShow": 1
                }},
                {"breakpoint":575, "settings": {
                "slidesToShow": 1,
                "arrows": false,
                "autoplay": true
                }}
            ]'>
                <!--Hero Item start-->
                <div class="hero-item bg-image">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                            <img src="./assets/images/hero/banner 5.png" width="100%"  alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!--Hero Item end-->

                <!--Hero Item start-->
                <div class="hero-item bg-image" >
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                            <img src="./assets/images/hero/banner 6.png" width="100%"  alt="">
                              </div>
                        </div>
                    </div>
                </div>
                <!--Hero Item end-->

                  <!--Hero Item start-->
                  <div class="hero-item bg-image" >
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                            <img src="./assets/images/hero/banner 7.png" width="100%"  alt="">
                              </div>
                        </div>
                    </div>
                </div>
                <!--Hero Item end-->

                 <!--Hero Item start-->
                 <div class="hero-item bg-image" >
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                            <img src="./assets/images/hero/banner 8.png" width="100%"  alt="">
                              </div>
                        </div>
                    </div>
                </div>
                <!--Hero Item end-->
            </div>
        </div>
        <!--slider section end-->

        <!-- Feature Section Start -->
        <div class="feature-section section pt-100 pt-md-75 pt-sm-60 pt-xs-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <!-- Single Faeture Start -->
                        <div class="single-feature feature-style-2 mb-30">
                            <div class="icon">
                                <i class="fa-truck fa"></i>
                            </div>
                            <div class="content">
                                <h2>Free shipping worldwide</h2>
                                <p>On order over $200</p>
                            </div>
                        </div>
                        <!-- Single Faeture End -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <!-- Single Faeture Start -->
                        <div class="single-feature feature-style-2 mb-30">
                            <div class="icon">
                                <i class="fa fa-undo"></i>
                            </div>
                            <div class="content">
                                <h2>30 days free return</h2>
                                <p>Money back guarantee</p>
                            </div>
                        </div>
                        <!-- Single Faeture End -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <!-- Single Faeture Start -->
                        <div class="single-feature feature-style-2 mb-30 br-0">
                            <div class="icon">
                                <i class="fa fa-thumbs-o-up"></i>
                            </div>
                            <div class="content">
                                <h2>Member safe shopping</h2>
                                <p>Safe shopping guarantee</p>
                            </div>
                        </div>
                        <!-- Single Faeture End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature Section End -->

        <!--Product section start-->
        <div class="product-section section pt-70 pt-lg-45 pt-md-40 pt-sm-30 pt-xs-15">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="product-tab-menu mb-40 mb-xs-20">
                            <ul class="nav">
                                <li><a class="active" data-toggle="tab" href="#products"> New Products</a></li>
                                <li><a data-toggle="tab" href="#onsale"> OnSale</a></li>
                                <li><a data-toggle="tab" href="#featureproducts"> Feature Products</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-12">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="products">
                                <div class="row tf-element-carousel" data-slick-options='{
                                "slidesToShow": 4,
                                "slidesToScroll": 1,
                                "infinite": true,
                                "rows": 2,
                                "arrows": true,
                                "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-left" },
                                "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-right" }
                                }' data-slick-responsive='[
                                {"breakpoint":1199, "settings": {
                                "slidesToShow": 3
                                }},
                                {"breakpoint":992, "settings": {
                                "slidesToShow": 2
                                }},
                                {"breakpoint":768, "settings": {
                                "slidesToShow": 2,
                                "arrows": false,
                                "autoplay": true
                                }},
                                {"breakpoint":576, "settings": {
                                "slidesToShow": 1,
                                "arrows": false,
                                "autoplay": true
                                }}
                                ]'>
                               
                                
                                    <div class="col-12">
                                        <!-- Single Product Start -->
                                        <?php foreach ($sp_cilent as $sp) {
                                            extract($sp);
                                            $link_sp = 'index.php?page=sp_chititet&idsp='.$id;
                                            echo '
                                        <div class="single-product mb-30">
                                          
                                            <div class="product-img">
                                                <a href="'.$link_sp.'">
                                                  <img src="../admin/upload/'.$img.'" alt="">
                                                </a>
                                                <span class="descount-sticker">-10%</span>
                                                <span class="sticker">New</span>
                                                <div class="product-action d-flex justify-content-between">
                                                    <a class="product-btn" href="#">Add to Cart</a>
                                                       <ul class="d-flex">
                                                            <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                            title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                                        </ul>
                                            
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                   <h3><a href="single-product.html">'.$name.'</a></h3>
                                                <div class="ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                    <h4 class="price"><span class="new">'.$giasp.'đ</span>
                                                    <span class="old">€130.00</span>
                                                    </h4>
                                            </div>
                                        </div>    
                                            ';
                                           } ?>
                                           
                                       
                                        <!-- Single Product End -->
                                    </div>

                                   
                                </div>
                            </div>
                            <div class="tab-pane fade" id="onsale">
                                <div class="row tf-element-carousel" data-slick-options='{
                                    "slidesToShow": 4,
                                    "slidesToScroll": 1,
                                    "infinite": true,
                                    "rows": 2,
                                    "arrows": true,
                                    "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-left" },
                                    "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-right" }
                                    }' data-slick-responsive='[
                                    {"breakpoint":1199, "settings": {
                                    "slidesToShow": 3
                                    }},
                                    {"breakpoint":992, "settings": {
                                    "slidesToShow": 2
                                    }},
                                    {"breakpoint":768, "settings": {
                                    "slidesToShow": 2,
                                    "arrows": false,
                                    "autoplay": true
                                    }},
                                    {"breakpoint":576, "settings": {
                                    "slidesToShow": 1,
                                    "arrows": false,
                                    "autoplay": true
                                    }}
                                    ]'>

                                    <div class="col-12">
                                        <!-- Single Product Start -->
                                        <?php foreach ($sp_cilent as $sp) {
                                            extract($sp);
                                            echo '
                                        <div class="single-product mb-30">
                                          
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                  <img src="../admin/upload/'.$img.'"  alt="">
                                                </a>
                                                <span class="descount-sticker">-10%</span>
                                                <span class="sticker">New</span>
                                                <div class="product-action d-flex justify-content-between">
                                                    <a class="product-btn" href="#">Add to Cart</a>
                                                       <ul class="d-flex">
                                                            <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                            title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                                        </ul>
                                            
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                   <h3><a href="single-product.html">'.$name.'</a></h3>
                                                <div class="ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                    <h4 class="price"><span class="new">'.$giasp.'đ</span><span
                                                    class="old">€130.00</span></h4>
                                            </div>
                                        </div>    
                                            ';
                                           } ?>
                                           
                                       
                                        <!-- Single Product End -->
                                    </div>

                                    
                                
                                   
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--Product section end-->

        <!--Banner section start-->
        <div class="banner-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <!-- Single Banner Start -->
                        <div class="single-banner mb-30">
                            <a href="#">
                                <img src="./assets/images/hero/banner 8.png" height="300px" alt="">
                            </a>
                        </div>
                        <!-- Single Banner End -->
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <!-- Single Banner Start -->
                        <div class="single-banner mb-30">
                            <a href="#">
                                <img src="./assets/images/hero/banner 5.png" alt="">
                            </a>
                        </div>
                        <!-- Single Banner End -->
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <!-- Single Banner Start -->
                        <div class="single-banner mb-30">
                            <a href="#">
                                <img src="./assets/images/hero/banner 7.png"  height="300px" alt="">
                            </a>
                        </div>
                        <!-- Single Banner End -->
                    </div>
                </div>
            </div>
        </div>
        <!--Banner section end-->

        <!--List Product section start-->
        <div class="list-section section pt-60 pt-lg-75 pt-md-65 pt-sm-55 pt-xs-45 pb-30 pb-lg-10 pb-md-0 pb-sm-0 pb-xs-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-40 mb-sm-30 mb-xs-20">
                        <div class="row">
                            <div class="col-12">
                                <!--List Product Section Title Start-->
                                <div class="list-product-section-title mb-30">
                                    <h2>Top rated </h2>
                                </div>
                                <!--List Product Section Title End-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="tf-element-carousel" data-slick-options='{
                                    "slidesToShow": 1,
                                    "slidesToScroll": 1,
                                    "infinite": true,
                                    "arrows": true,
                                    "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-left" },
                                    "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-right" }
                                    }' data-slick-responsive='[
                                    {"breakpoint":768, "settings": {
                                    "slidesToShow": 1,
                                    "arrows": false,
                                    "autoplay": true
                                    }},
                                    {"breakpoint":575, "settings": {
                                    "slidesToShow": 1,
                                    "arrows": false,
                                    "autoplay": true
                                    }}
                                    ]'>
                                    
                                    <div class="list-product-group">
                                        <!-- Single List Product Start -->
                                        <?php foreach ($sp_cilent as $sp) {
                                            extract($sp);
                                            echo '
                                            <div class="single-list-product">
                                            <div class="product-image">
                                                <a href="single-product.html"><img
                                                        src="../admin/upload/'.$img.'" alt=""></a>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="single-product.html">'.$name.' </a></h3>
                                                <h4 class="price"><span class="new">'.$giasp.'đ</span><span
                                                        class="old">€130.00</span></h4>
                                            </div>
                                        </div>
                                            ';
                                        } ?>  
                                        </div>
                                        <!-- Single List Product End -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-40 mb-sm-30 mb-xs-20">
                        <div class="row">
                            <div class="col-12">
                                <!--List Product Section Title Start-->
                                <div class="list-product-section-title mb-30">
                                    <h2>On-sale</h2>
                                </div>
                                <!--List Product Section Title End-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="tf-element-carousel" data-slick-options='{
                                    "slidesToShow": 1,
                                    "slidesToScroll": 1,
                                    "infinite": true,
                                    "arrows": true,
                                    "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-left" },
                                    "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-right" }
                                    }' data-slick-responsive='[
                                    {"breakpoint":768, "settings": {
                                    "slidesToShow": 1,
                                    "arrows": false,
                                    "autoplay": true
                                    }},
                                    {"breakpoint":575, "settings": {
                                    "slidesToShow": 1,
                                    "arrows": false,
                                    "autoplay": true
                                    }}
                                    ]'>
                                    
                                    <div class="list-product-group">
                                        <!-- Single List Product Start -->
                                        <?php foreach ($sp_cilent as $sp) {
                                            extract($sp);
                                            echo '
                                            <div class="single-list-product">
                                            <div class="product-image">
                                                <a href="single-product.html"><img
                                                        src="../admin/upload/'.$img.'" alt=""></a>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="single-product.html">'.$name.' </a></h3>
                                                <h4 class="price"><span class="new">'.$giasp.'đ</span><span
                                                        class="old">€130.00</span></h4>
                                            </div>
                                        </div>
                                            ';
                                        } ?>  
                                        <!-- Single List Product End -->
                                    </div>
                                    <div class="list-product-group">
                                        <!-- Single List Product Start -->
                                        <?php foreach ($sp_cilent as $sp) {
                                            extract($sp);
                                            echo '
                                            <div class="single-list-product">
                                            <div class="product-image">
                                                <a href="single-product.html"><img
                                                        src="../admin/upload/'.$img.'" alt=""></a>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="single-product.html">'.$name.' </a></h3>
                                                <h4 class="price"><span class="new">'.$giasp.'đ</span><span
                                                        class="old">€130.00</span></h4>
                                            </div>
                                        </div>
                                            ';
                                        } ?>  
                                        <!-- Single List Product End -->
                                    </div>
                                    <div class="list-product-group">
                                        <!-- Single List Product Start -->
                                        <?php foreach ($sp_cilent as $sp) {
                                            extract($sp);
                                            echo '
                                            <div class="single-list-product">
                                            <div class="product-image">
                                                <a href="single-product.html"><img
                                                        src="../admin/upload/'.$img.'" alt=""></a>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="single-product.html">'.$name.' </a></h3>
                                                <h4 class="price"><span class="new">'.$giasp.'đ</span><span
                                                        class="old">€130.00</span></h4>
                                            </div>
                                        </div>
                                            ';
                                        } ?>  
                                        <!-- Single List Product End -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-40 mb-sm-30 mb-xs-20">
                        <div class="row">
                            <div class="col-12">
                                <!--List Product Section Title Start-->
                                <div class="list-product-section-title mb-30">
                                    <h2>Trending items</h2>
                                </div>
                                <!--List Product Section Title End-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="tf-element-carousel" data-slick-options='{
                                    "slidesToShow": 1,
                                    "slidesToScroll": 1,
                                    "infinite": true,
                                    "arrows": true,
                                    "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-left" },
                                    "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-right" }
                                    }' data-slick-responsive='[
                                    {"breakpoint":768, "settings": {
                                    "slidesToShow": 1,
                                    "arrows": false,
                                    "autoplay": true
                                    }},
                                    {"breakpoint":575, "settings": {
                                    "slidesToShow": 1,
                                    "arrows": false,
                                    "autoplay": true
                                    }}
                                    ]'>
                                    <div class="list-product-group">
                                        <!-- Single List Product Start -->
                                        <?php foreach ($sp_cilent as $sp) {
                                            extract($sp);
                                            echo '
                                            <div class="single-list-product">
                                            <div class="product-image">
                                                <a href="single-product.html"><img
                                                        src="../admin/upload/'.$img.'" alt=""></a>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="single-product.html">'.$name.' </a></h3>
                                                <h4 class="price"><span class="new">'.$giasp.'đ</span><span
                                                        class="old">€130.00</span></h4>
                                            </div>
                                        </div>
                                            ';
                                        } ?>  
                                        <!-- Single List Product End -->
                                    </div>
                                    <div class="list-product-group">
                                        <!-- Single List Product Start -->
                                        <?php foreach ($sp_cilent as $sp) {
                                            extract($sp);
                                            echo '
                                            <div class="single-list-product">
                                            <div class="product-image">
                                                <a href="single-product.html"><img
                                                        src="../admin/upload/'.$img.'" alt=""></a>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="single-product.html">'.$name.' </a></h3>
                                                <h4 class="price"><span class="new">'.$giasp.'đ</span><span
                                                        class="old">€130.00</span></h4>
                                            </div>
                                        </div>
                                            ';
                                        } ?>  
                                        <!-- Single List Product End -->
                                    </div>
                                    <div class="list-product-group">
                                        <!-- Single List Product Start -->
                                        <?php foreach ($sp_cilent as $sp) {
                                            extract($sp);
                                            echo '
                                            <div class="single-list-product">
                                            <div class="product-image">
                                                <a href="single-product.html"><img
                                                        src="../admin/upload/'.$img.'" alt=""></a>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="single-product.html">'.$name.' </a></h3>
                                                <h4 class="price"><span class="new">'.$giasp.'đ</span><span
                                                        class="old">€130.00</span></h4>
                                            </div>
                                        </div>
                                            ';
                                        } ?>  
                                        <!-- Single List Product End -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--List Product section end-->

       