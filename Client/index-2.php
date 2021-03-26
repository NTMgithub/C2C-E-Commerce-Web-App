<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Trang chủ 2 | Web C2C</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicons -->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Fontawesome css -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Ionicons css -->
    <link rel="stylesheet" href="css/ionicons.min.css">
    <!-- linearicons css -->
    <link rel="stylesheet" href="css/linearicons.css">
    <!-- Nice select css -->
    <link rel="stylesheet" href="css/nice-select.css">
    <!-- Jquery fancybox css -->
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <!-- Jquery ui price slider css -->
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <!-- Meanmenu css -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- Nivo slider css -->
    <link rel="stylesheet" href="css/nivo-slider.css">
    <!-- Owl carousel css -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Custom css -->
    <link rel="stylesheet" href="css/default.css">
    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">

    <!-- Modernizer js -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
</head>

<body>
    <!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

    <!-- Main Wrapper Start Here -->
    <div class="wrapper">
       <!-- Banner Popup Start -->
       <?php
        require_once("./lib/header.php");
        ?>
        <!-- Main Header Area End Here -->
        <!-- Categorie Menu & Slider Area Start Here -->
        <div class="main-page-banner pb-50 off-white-bg">
            <div class="container">
                <div class="row">
                    <!-- Vertical Menu Start Here -->
                    <?php
                    require_once("./lib/menu-left.php");
                    ?>
                    <!-- Vertical Menu End Here -->
                    <!-- Slider Area Start Here -->
                    <div class="col-xl-9 col-lg-8 slider_box">
                        <div class="slider-wrapper theme-default">
                            <!-- Slider Background  Image Start-->
                            <div id="slider" class="nivoSlider">
                                <a href="shop.php"><img src="img/slider/4.jpg" data-thumb="img/slider/1.jpg" alt="" title="#htmlcaption" /></a>
                                <a href="shop.php"><img src="img/slider/3.jpg" data-thumb="img/slider/2.jpg" alt="" title="#htmlcaption2" /></a>
                            </div>
                            <!-- Slider Background  Image Start-->
                        </div>
                    </div>
                    <!-- Slider Area End Here -->
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Categorie Menu & Slider Area End Here -->
        <!-- Brand Banner Area Start Here -->
        
        <!-- Brand Banner Area End Here -->
        <!-- Hot Deal Products Start Here -->
        <div class="hot-deal-products off-white-bg pb-90 pb-sm-50">
            <div class="container">
               <!-- Product Title Start -->
               <div class="post-title pb-30">
                   <h2>FLASH SALES</h2>
               </div>
               <!-- Product Title End -->
                <!-- Hot Deal Product Activation Start -->
                <div class="hot-deal-active owl-carousel">
                    <!-- Single Product Start -->
                    <div class="single-product">
                        <!-- Product Image Start -->
                        <div class="pro-img">
                            <a href="product.php">
                                <img class="primary-img" src="img/products/1.jpg" alt="single-product">
                                <img class="secondary-img" src="img/products/7.jpg" alt="single-product">
                            </a>
                            <div class="countdown" data-countdown="2021/04/04"></div> <!--Giới hạn sales-->
                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                        </div>
                        <!-- Product Image End -->
                        <!-- Product Content Start -->
                        <div class="pro-content">
                            <div class="pro-info">
                                <h4><a href="product.php">Sản phẩm</a></h4>
                                <p><span class="price">40.000 VNĐ</span><del class="prev-price">60.000 VNĐ</del></p>
                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                            </div>
                            <div class="pro-actions">
                                <div class="actions-primary">
                                    <a href="cart.php" title="Add to Cart">+ Thêm vào giỏ hàng</a>
                                </div>
                                <div class="actions-secondary">
                                    <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So sánh</span></a>
                                    <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu thích</span></a>
                                </div>
                            </div>
                        </div>
                        <!-- Product Content End -->
                    </div>
                    <!-- Single Product End -->
                    <!-- Single Product Start -->
                    <div class="single-product">
                        <!-- Product Image Start -->
                        <div class="pro-img">
                            <a href="product.php">
                                <img class="primary-img" src="img/products/24.jpg" alt="single-product">
                                <img class="secondary-img" src="img/products/25.jpg" alt="single-product">
                            </a>
                            <div class="countdown" data-countdown="2021/04/04"></div>
                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                        </div>
                        <!-- Product Image End -->
                        <!-- Product Content Start -->
                        <div class="pro-content">
                            <div class="pro-info">
                                <h4><a href="product.php">Sản phẩm</a></h4>
                                <p><span class="price">40.000 VNĐ</span><del class="prev-price">60.000 VNĐ</del></p>
                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                            </div>
                            <div class="pro-actions">
                                <div class="actions-primary">
                                    <a href="cart.php" title="Add to Cart">+ Thêm vào giỏ hàng</a>
                                </div>
                                <div class="actions-secondary">
                                    <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So sánh</span></a>
                                    <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu thích</span></a>
                                </div>
                            </div>
                        </div>
                        <!-- Product Content End -->
                    </div>
                    <!-- Single Product End -->
                    <!-- Single Product Start -->
                    <div class="single-product">
                        <!-- Product Image Start -->
                        <div class="pro-img">
                            <a href="product.php">
                                <img class="primary-img" src="img/products/42.jpg" alt="single-product">
                                <img class="secondary-img" src="img/products/43.jpg" alt="single-product">
                            </a>
                            <div class="countdown" data-countdown="2021/04/04"></div>
                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                        </div>
                        <!-- Product Image End -->
                        <!-- Product Content Start -->
                        <div class="pro-content">
                            <div class="pro-info">
                                <h4><a href="product.php">Sản phẩm</a></h4>
                                <p><span class="price">40.000 VNĐ</span><del class="prev-price">60.000 VNĐ</del></p>
                                <div class="label-product l_sale">15<span class="symbol-percent">%</span></div>
                            </div>
                            <div class="pro-actions">
                                <div class="actions-primary">
                                    <a href="cart.php" title="Add to Cart">+ Thêm vào giỏ hàng</a>
                                </div>
                                <div class="actions-secondary">
                                    <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So sánh</span></a>
                                    <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu thích</span></a>
                                </div>
                            </div>
                        </div>
                        <!-- Product Content End -->
                        <span class="sticker-new">MỚI</span>
                    </div>
                    <!-- Single Product End -->
                    <!-- Single Product Start -->
                    <div class="single-product">
                        <!-- Product Image Start -->
                        <div class="pro-img">
                            <a href="product.php">
                                <img class="primary-img" src="img/products/30.jpg" alt="single-product">
                                <img class="secondary-img" src="img/products/31.jpg" alt="single-product">
                            </a>
                            <div class="countdown" data-countdown="2021/04/04"></div>
                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                        </div>
                        <!-- Product Image End -->
                        <!-- Product Content Start -->
                        <div class="pro-content">
                            <div class="pro-info">
                                <h4><a href="product.php">Sản phẩm</a></h4>
                                <p><span class="price">40.000 VNĐ</span><del class="prev-price">60.000 VNĐ</del></p>
                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                            </div>
                            <div class="pro-actions">
                                <div class="actions-primary">
                                    <a href="cart.php" title="Add to Cart">+ Thêm vào giỏ hàng</a>
                                </div>
                                <div class="actions-secondary">
                                    <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So sánh</span></a>
                                    <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu thích</span></a>
                                </div>
                            </div>
                        </div>
                        <!-- Product Content End -->
                    </div>
                    <!-- Single Product End -->
                    <!-- Single Product Start -->
                    <div class="single-product">
                        <!-- Product Image Start -->
                        <div class="pro-img">
                            <a href="product.php">
                                <img class="primary-img" src="img/products/8.jpg" alt="single-product">
                                <img class="secondary-img" src="img/products/9.jpg" alt="single-product">
                            </a>
                            <div class="countdown" data-countdown="2021/04/04"></div>
                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                        </div>
                        <!-- Product Image End -->
                        <!-- Product Content Start -->
                        <div class="pro-content">
                            <div class="pro-info">
                                <h4><a href="product.php">Sản phẩm</a></h4>
                                <p><span class="price">40.000 VNĐ</span><del class="prev-price">60.000 VNĐ</del></p>
                                <div class="label-product l_sale">10<span class="symbol-percent">%</span></div>
                            </div>
                            <div class="pro-actions">
                                <div class="actions-primary">
                                    <a href="cart.php" title="Add to Cart">+ Thêm vào giỏ hàng</a>
                                </div>
                                <div class="actions-secondary">
                                    <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So sánh</span></a>
                                    <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu thích</span></a>
                                </div>
                            </div>
                        </div>
                        <!-- Product Content End -->
                        <span class="sticker-new">HOT</span>
                    </div>
                    <!-- Single Product End -->
                    <!-- Single Product Start -->
                    <div class="single-product">
                        <!-- Product Image Start -->
                        <div class="pro-img">
                            <a href="product.php">
                                <img class="primary-img" src="img/products/10.jpg" alt="single-product">
                                <img class="secondary-img" src="img/products/11.jpg" alt="single-product">
                            </a>
                            <div class="countdown" data-countdown="2021/04/04"></div>
                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                        </div>
                        <!-- Product Image End -->
                        <!-- Product Content Start -->
                        <div class="pro-content">
                            <div class="pro-info">
                                <h4><a href="product.php">Sản phẩm</a></h4>
                                <p><span class="price">50.000 VNĐ</span><del class="prev-price">75.000 VNĐ</del></p>
                                <div class="label-product l_sale">37<span class="symbol-percent">%</span></div>
                            </div>
                            <div class="pro-actions">
                                <div class="actions-primary">
                                    <a href="cart.php" title="Add to Cart">+ Thêm vào giỏ hàng</a>
                                </div>
                                <div class="actions-secondary">
                                    <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So sánh</span></a>
                                    <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu thích</span></a>
                                </div>
                            </div>
                        </div>
                        <!-- Product Content End -->
                        <span class="sticker-new">MỚI</span>
                    </div>
                    <!-- Single Product End -->
                </div>
                <!-- Hot Deal Product Active End -->

            </div>
            <!-- Container End -->
        </div>
        <!-- Hot Deal Products End Here -->
        <!-- Hot Deal Products End Here -->
        <!-- Big Banner Start Here -->
        <div class="big-banner mt-100 pb-85 mt-sm-60 pb-sm-45">
            <div class="container banner-2">
                <div class="banner-box">
                    <div class="col-img">
                        <a href="#"><img src="img/banner/banner3-1.jpg" alt="banner 3"></a>
                    </div>
                    <div class="col-img">
                        <a href="#"><img src="img/banner/banner3-2.jpg" alt="banner 3"></a>
                    </div>
                </div>
                <div class="banner-box">
                    <div class="col-img">
                        <a href="#"><img src="img/banner/banner3-3.jpg" alt="banner 3"></a>
                    </div>
                </div>
                <div class="banner-box">
                    <div class="col-img">
                        <a href="#"><img src="img/banner/banner3-4.jpg" alt="banner 3"></a>
                    </div>
                    <div class="col-img">
                        <a href="#"><img src="img/banner/banner3-5.jpg" alt="banner 3"></a>
                    </div>
                </div>
                <div class="banner-box">
                    <div class="col-img">
                        <a href="#"><img src="img/banner/banner3-6.jpg" alt="banner 3"></a>
                    </div>
                </div>
                <div class="banner-box">
                    <div class="col-img">
                        <a href="#"><img src="img/banner/banner3-7.jpg" alt="banner 3"></a>
                    </div>
                    <div class="col-img">
                        <a href="#"><img src="img/banner/banner3-8.jpg" alt="banner 3"></a>
                    </div>
                </div>
            </div>
            <!-- Container End -->
        </div>
        <!-- Big Banner End Here -->
        <!-- Arrivals Products Area Start Here -->
        <div class="arrivals-product pb-85 pb-sm-45">
            <div class="container">
                <div class="main-product-tab-area">
                    <div class="tab-menu mb-25">
                        <div class="section-ttitle">
                            <h2>SẢN PHẨM YÊU THÍCH NHẤT</h2>
                       </div>
                        <!-- Nav tabs -->
                        <ul class="nav tabs-area" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#electronics">Menu 1 </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#beauty">Menu 2</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#electronics">Menu 3</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kids">Menu 4</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#beauty">Menu 5</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kids">Menu 6</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#fshion">Menu 7</a>
                            </li>
                        </ul>                       

                    </div> 

                    <!-- Tab Contetn Start -->
                    <div class="tab-content">
                        <div id="fshion" class="tab-pane fade">
                            <div class="row">
                                <div class="col-lg-5 order-2 order-lg-1">
                                    <div class="banner-site-box mt-10">
                                        <div class="col-img">
                                            <a href="#"><img src="img/banner/electorince.jpg" alt=""></a>
                                        </div>
                                        <!-- Single Product Start -->
                                        <div class="single-product mt-20">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.php">
                                                    <img class="primary-img" src="img/products/43.jpg" alt="single-product">
                                                    <img class="secondary-img" src="img/products/42.jpg" alt="single-product">
                                                </a>
                                                <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <div class="pro-info">
                                                    <h4><a href="product.php">Sản phâm 1</a></h4>
                                                    <p><span class="price">188.00 VNĐ</span><del class="prev-price">190.000 VNĐ</del></p>
                                                    <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                </div>
                                            </div>
                                            <!-- Product Content End -->
                                            <span class="sticker-new">MỚI</span>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                </div>
                                <div class="col-lg-7 order-1 order-lg-2">
                                    <!-- Arrivals Product Activation Start Here -->
                                    <div class="electronics-pro-active2 owl-carousel">
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/2.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản phẩm</a></h4>
                                                        <p><span class="price">320.000 VNĐ</span><del class="prev-price">400.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/2.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản phẩm</a></h4>
                                                        <p><span class="price">320.000 VNĐ</span><del class="prev-price">400.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/2.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản phẩm</a></h4>
                                                        <p><span class="price">320.000 VNĐ</span><del class="prev-price">400.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/2.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản phẩm</a></h4>
                                                        <p><span class="price">320.000 VNĐ</span><del class="prev-price">400.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/2.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản phẩm</a></h4>
                                                        <p><span class="price">320.000 VNĐ</span><del class="prev-price">400.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/2.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản phẩm</a></h4>
                                                        <p><span class="price">320.000 VNĐ</span><del class="prev-price">400.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/2.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản phẩm</a></h4>
                                                        <p><span class="price">320.000 VNĐ</span><del class="prev-price">400.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/2.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản phẩm</a></h4>
                                                        <p><span class="price">320.000 VNĐ</span><del class="prev-price">400.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                    </div>
                                    <!-- Arrivals Product Activation End Here -->
                                </div>
                            </div>
                        </div>
                        <!-- #fshion End Here -->
                        <div id="kids" class="tab-pane fade show active">
                            <div class="row">
                                <div class="col-lg-5 order-2 order-lg-1">
                                    <div class="banner-site-box mt-10">
                                        <div class="col-img">
                                            <a href="#"><img src="img/banner/electorince.jpg" alt=""></a>
                                        </div>
                                        <!-- Single Product Start -->
                                        <div class="single-product mt-20">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.php">
                                                    <img class="primary-img" src="img/products/43.jpg" alt="single-product">
                                                    <img class="secondary-img" src="img/products/42.jpg" alt="single-product">
                                                </a>
                                                <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <div class="pro-info">
                                                    <h4><a href="product.php">Sản Phẩm</a></h4>
                                                    <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                    <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                </div>
                                            </div>
                                            <!-- Product Content End -->
                                            <span class="sticker-new">MỚI</span>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                </div>
                                <div class="col-lg-7 order-1 order-lg-2">
                                    <!-- Arrivals Product Activation Start Here -->
                                    <div class="electronics-pro-active2 owl-carousel">
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/42.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/43.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/42.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/43.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/42.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/43.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/42.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/43.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/42.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/43.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/42.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/43.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/42.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/43.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/42.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/43.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                    </div>
                                    <!-- Arrivals Product Activation End Here -->
                                </div>
                            </div>
                        </div>
                        <!-- #fshion End Here -->
                        <div id="beauty" class="tab-pane fade">
                            <div class="row">
                                <div class="col-lg-5 order-2 order-lg-1">
                                    <div class="banner-site-box mt-10">
                                        <div class="col-img">
                                            <a href="#"><img src="img/banner/electorince.jpg" alt=""></a>
                                        </div>
                                        <!-- Single Product Start -->
                                        <div class="single-product mt-20">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.php">
                                                    <img class="primary-img" src="img/products/43.jpg" alt="single-product">
                                                    <img class="secondary-img" src="img/products/42.jpg" alt="single-product">
                                                </a>
                                                <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <div class="pro-info">
                                                    <h4><a href="product.php">Sản Phẩm</a></h4>
                                                    <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                    <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                </div>
                                            </div>
                                            <!-- Product Content End -->
                                            <span class="sticker-new">MỚI</span>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                </div>
                                <div class="col-lg-7 order-1 order-lg-2">
                                    <!-- Arrivals Product Activation Start Here -->
                                    <div class="electronics-pro-active2 owl-carousel">
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/43.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/42.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">90.000 VNĐ</span><del class="prev-price">120.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/43.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/42.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">90.000 VNĐ</span><del class="prev-price">120.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/43.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/42.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">90.000 VNĐ</span><del class="prev-price">120.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/43.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/42.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">90.000 VNĐ</span><del class="prev-price">120.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/43.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/42.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">90.000 VNĐ</span><del class="prev-price">120.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/43.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/42.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">90.000 VNĐ</span><del class="prev-price">120.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/43.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/42.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">90.000 VNĐ</span><del class="prev-price">120.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/43.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/42.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">90.000 VNĐ</span><del class="prev-price">120.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                    </div>
                                    <!-- Arrivals Product Activation End Here -->
                                </div>
                            </div>
                        </div>
                        <!-- #beauty End Here -->
                        <div id="electronics" class="tab-pane fade">
                            <div class="row">
                                <div class="col-lg-5 order-2 order-lg-1">
                                    <div class="banner-site-box mt-10">
                                        <div class="col-img">
                                            <a href="#"><img src="img/banner/electorince.jpg" alt=""></a>
                                        </div>
                                        <!-- Single Product Start -->
                                        <div class="single-product mt-20">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.php">
                                                    <img class="primary-img" src="img/products/43.jpg" alt="single-product">
                                                    <img class="secondary-img" src="img/products/42.jpg" alt="single-product">
                                                </a>
                                                <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <div class="pro-info">
                                                    <h4><a href="product.php">Sản Phẩm</a></h4>
                                                    <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                    <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                </div>
                                            </div>
                                            <!-- Product Content End -->
                                            <span class="sticker-new">MỚI</span>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                </div>
                                <div class="col-lg-7 order-1 order-lg-2">
                                    <!-- Arrivals Product Activation Start Here -->
                                    <div class="electronics-pro-active2 owl-carousel">
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/17.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/18.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/17.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/18.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/17.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/18.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/17.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/18.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/17.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/18.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/17.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/18.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/17.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/18.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/17.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/18.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                    </div>
                                    <!-- Arrivals Product Activation End Here -->
                                </div>
                            </div>                            
                        </div>
                        <!-- #electronics End Here -->
                    </div>
                    <!-- Tab Content End -->
                </div>
                <!-- main-product-tab-area-->
            </div>
            <!-- Container End -->
        </div>
        <!-- Arrivals Products Area End Here -->
        <!-- Womens Products Area Start Here -->
        <div class="arrivals-product pb-85 pb-sm-45">
            <div class="container">
                <div class="main-product-tab-area">
                    <div class="tab-menu mb-25">
                        <div class="section-ttitle">
                            <h2>Nam & Nữ</h2>
                       </div>
                        <!-- Nav tabs -->
                        <ul class="nav tabs-area" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#electronics">Menu 1 </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#beauty">Menu 2</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#electronics">Menu 3</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kids">Menu 4</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#beauty">Menu 5</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kids">Menu 6</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#fshion">Menu 7</a>
                            </li>
                        </ul>                       

                    </div> 

                    <!-- Tab Contetn Start -->
                    <div class="tab-content">
                        <div id="fshion" class="tab-pane fade">
                            <div class="row">
                                <div class="col-lg-5 order-2 order-lg-1">
                                    <div class="banner-site-box mt-10">
                                        <div class="col-img">
                                            <a href="#"><img src="img/banner/electorince.jpg" alt=""></a>
                                        </div>
                                        <!-- Single Product Start -->
                                        <div class="single-product mt-20">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.php">
                                                    <img class="primary-img" src="img/products/43.jpg" alt="single-product">
                                                    <img class="secondary-img" src="img/products/42.jpg" alt="single-product">
                                                </a>
                                                <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <div class="pro-info">
                                                    <h4><a href="product.php">Sản phâm 1</a></h4>
                                                    <p><span class="price">188.00 VNĐ</span><del class="prev-price">190.000 VNĐ</del></p>
                                                    <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                </div>
                                            </div>
                                            <!-- Product Content End -->
                                            <span class="sticker-new">MỚI</span>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                </div>
                                <div class="col-lg-7 order-1 order-lg-2">
                                    <!-- Arrivals Product Activation Start Here -->
                                    <div class="electronics-pro-active2 owl-carousel">
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/2.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản phẩm</a></h4>
                                                        <p><span class="price">320.000 VNĐ</span><del class="prev-price">400.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/2.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản phẩm</a></h4>
                                                        <p><span class="price">320.000 VNĐ</span><del class="prev-price">400.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/2.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản phẩm</a></h4>
                                                        <p><span class="price">320.000 VNĐ</span><del class="prev-price">400.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/2.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản phẩm</a></h4>
                                                        <p><span class="price">320.000 VNĐ</span><del class="prev-price">400.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/2.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản phẩm</a></h4>
                                                        <p><span class="price">320.000 VNĐ</span><del class="prev-price">400.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/2.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản phẩm</a></h4>
                                                        <p><span class="price">320.000 VNĐ</span><del class="prev-price">400.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/2.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản phẩm</a></h4>
                                                        <p><span class="price">320.000 VNĐ</span><del class="prev-price">400.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/2.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản phẩm</a></h4>
                                                        <p><span class="price">320.000 VNĐ</span><del class="prev-price">400.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                    </div>
                                    <!-- Arrivals Product Activation End Here -->
                                </div>
                            </div>
                        </div>
                        <!-- #fshion End Here -->
                        <div id="kids" class="tab-pane fade show active">
                            <div class="row">
                                <div class="col-lg-5 order-2 order-lg-1">
                                    <div class="banner-site-box mt-10">
                                        <div class="col-img">
                                            <a href="#"><img src="img/banner/electorince.jpg" alt=""></a>
                                        </div>
                                        <!-- Single Product Start -->
                                        <div class="single-product mt-20">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.php">
                                                    <img class="primary-img" src="img/products/43.jpg" alt="single-product">
                                                    <img class="secondary-img" src="img/products/42.jpg" alt="single-product">
                                                </a>
                                                <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <div class="pro-info">
                                                    <h4><a href="product.php">Sản Phẩm</a></h4>
                                                    <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                    <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                </div>
                                            </div>
                                            <!-- Product Content End -->
                                            <span class="sticker-new">MỚI</span>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                </div>
                                <div class="col-lg-7 order-1 order-lg-2">
                                    <!-- Arrivals Product Activation Start Here -->
                                    <div class="electronics-pro-active2 owl-carousel">
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/42.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/43.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/42.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/43.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/42.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/43.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/42.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/43.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/42.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/43.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/42.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/43.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/42.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/43.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/42.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/43.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                    </div>
                                    <!-- Arrivals Product Activation End Here -->
                                </div>
                            </div>
                        </div>
                        <!-- #fshion End Here -->
                        <div id="beauty" class="tab-pane fade">
                            <div class="row">
                                <div class="col-lg-5 order-2 order-lg-1">
                                    <div class="banner-site-box mt-10">
                                        <div class="col-img">
                                            <a href="#"><img src="img/banner/electorince.jpg" alt=""></a>
                                        </div>
                                        <!-- Single Product Start -->
                                        <div class="single-product mt-20">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.php">
                                                    <img class="primary-img" src="img/products/43.jpg" alt="single-product">
                                                    <img class="secondary-img" src="img/products/42.jpg" alt="single-product">
                                                </a>
                                                <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <div class="pro-info">
                                                    <h4><a href="product.php">Sản Phẩm</a></h4>
                                                    <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                    <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                </div>
                                            </div>
                                            <!-- Product Content End -->
                                            <span class="sticker-new">MỚI</span>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                </div>
                                <div class="col-lg-7 order-1 order-lg-2">
                                    <!-- Arrivals Product Activation Start Here -->
                                    <div class="electronics-pro-active2 owl-carousel">
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/43.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/42.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">90.000 VNĐ</span><del class="prev-price">120.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/43.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/42.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">90.000 VNĐ</span><del class="prev-price">120.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/43.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/42.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">90.000 VNĐ</span><del class="prev-price">120.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/43.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/42.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">90.000 VNĐ</span><del class="prev-price">120.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/43.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/42.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">90.000 VNĐ</span><del class="prev-price">120.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/43.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/42.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">90.000 VNĐ</span><del class="prev-price">120.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/43.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/42.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">90.000 VNĐ</span><del class="prev-price">120.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/43.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/42.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">90.000 VNĐ</span><del class="prev-price">120.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                    </div>
                                    <!-- Arrivals Product Activation End Here -->
                                </div>
                            </div>
                        </div>
                        <!-- #beauty End Here -->
                        <div id="electronics" class="tab-pane fade">
                            <div class="row">
                                <div class="col-lg-5 order-2 order-lg-1">
                                    <div class="banner-site-box mt-10">
                                        <div class="col-img">
                                            <a href="#"><img src="img/banner/electorince.jpg" alt=""></a>
                                        </div>
                                        <!-- Single Product Start -->
                                        <div class="single-product mt-20">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.php">
                                                    <img class="primary-img" src="img/products/43.jpg" alt="single-product">
                                                    <img class="secondary-img" src="img/products/42.jpg" alt="single-product">
                                                </a>
                                                <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <div class="pro-info">
                                                    <h4><a href="product.php">Sản Phẩm</a></h4>
                                                    <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                    <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                </div>
                                            </div>
                                            <!-- Product Content End -->
                                            <span class="sticker-new">MỚI</span>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                </div>
                                <div class="col-lg-7 order-1 order-lg-2">
                                    <!-- Arrivals Product Activation Start Here -->
                                    <div class="electronics-pro-active2 owl-carousel">
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/17.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/18.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/17.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/18.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/17.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/18.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/17.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/18.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/17.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/18.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/17.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/18.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/17.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/18.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/17.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/18.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                    </div>
                                    <!-- Arrivals Product Activation End Here -->
                                </div>
                            </div>                            
                        </div>
                        <!-- #electronics End Here -->
                    </div>
                    <!-- Tab Content End -->
                </div>
                <!-- main-product-tab-area-->
            </div>
            <!-- Container End -->
        </div>
        <!-- Womens Products Area End Here -->
        <!-- Furniture Products Area Start Here -->
        <div class="arrivals-product pb-85 pb-sm-45">
            <div class="container">
                <div class="main-product-tab-area">
                    <div class="tab-menu mb-25">
                        <div class="section-ttitle">
                            <h2>Hàng Trẻ Con</h2>
                       </div>
                        <!-- Nav tabs -->
                        <ul class="nav tabs-area" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#electronics">Menu 1 </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#beauty">Menu 2</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#electronics">Menu 3</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kids">Menu 4</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#beauty">Menu 5</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kids">Menu 6</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#fshion">Menu 7</a>
                            </li>
                        </ul>                        

                    </div> 

                    <!-- Tab Contetn Start -->
                    <div class="tab-content">
                        <div id="fshion" class="tab-pane fade">
                            <div class="row">
                                <div class="col-lg-5 order-2 order-lg-1">
                                    <div class="banner-site-box mt-10">
                                        <div class="col-img">
                                            <a href="#"><img src="img/banner/electorince.jpg" alt=""></a>
                                        </div>
                                        <!-- Single Product Start -->
                                        <div class="single-product mt-20">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.php">
                                                    <img class="primary-img" src="img/products/43.jpg" alt="single-product">
                                                    <img class="secondary-img" src="img/products/42.jpg" alt="single-product">
                                                </a>
                                                <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <div class="pro-info">
                                                    <h4><a href="product.php">Sản phâm 1</a></h4>
                                                    <p><span class="price">188.00 VNĐ</span><del class="prev-price">190.000 VNĐ</del></p>
                                                    <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                </div>
                                            </div>
                                            <!-- Product Content End -->
                                            <span class="sticker-new">MỚI</span>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                </div>
                                <div class="col-lg-7 order-1 order-lg-2">
                                    <!-- Arrivals Product Activation Start Here -->
                                    <div class="electronics-pro-active2 owl-carousel">
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/2.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản phẩm</a></h4>
                                                        <p><span class="price">320.000 VNĐ</span><del class="prev-price">400.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/2.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản phẩm</a></h4>
                                                        <p><span class="price">320.000 VNĐ</span><del class="prev-price">400.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/2.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản phẩm</a></h4>
                                                        <p><span class="price">320.000 VNĐ</span><del class="prev-price">400.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/2.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản phẩm</a></h4>
                                                        <p><span class="price">320.000 VNĐ</span><del class="prev-price">400.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/2.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản phẩm</a></h4>
                                                        <p><span class="price">320.000 VNĐ</span><del class="prev-price">400.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/2.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản phẩm</a></h4>
                                                        <p><span class="price">320.000 VNĐ</span><del class="prev-price">400.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/2.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản phẩm</a></h4>
                                                        <p><span class="price">320.000 VNĐ</span><del class="prev-price">400.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/2.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản phẩm</a></h4>
                                                        <p><span class="price">320.000 VNĐ</span><del class="prev-price">400.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                    </div>
                                    <!-- Arrivals Product Activation End Here -->
                                </div>
                            </div>
                        </div>
                        <!-- #fshion End Here -->
                        <div id="kids" class="tab-pane fade show active">
                            <div class="row">
                                <div class="col-lg-5 order-2 order-lg-1">
                                    <div class="banner-site-box mt-10">
                                        <div class="col-img">
                                            <a href="#"><img src="img/banner/electorince.jpg" alt=""></a>
                                        </div>
                                        <!-- Single Product Start -->
                                        <div class="single-product mt-20">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.php">
                                                    <img class="primary-img" src="img/products/43.jpg" alt="single-product">
                                                    <img class="secondary-img" src="img/products/42.jpg" alt="single-product">
                                                </a>
                                                <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <div class="pro-info">
                                                    <h4><a href="product.php">Sản Phẩm</a></h4>
                                                    <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                    <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                </div>
                                            </div>
                                            <!-- Product Content End -->
                                            <span class="sticker-new">MỚI</span>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                </div>
                                <div class="col-lg-7 order-1 order-lg-2">
                                    <!-- Arrivals Product Activation Start Here -->
                                    <div class="electronics-pro-active2 owl-carousel">
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/42.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/43.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/42.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/43.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/42.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/43.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/42.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/43.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/42.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/43.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/42.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/43.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/42.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/43.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/42.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/43.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                    </div>
                                    <!-- Arrivals Product Activation End Here -->
                                </div>
                            </div>
                        </div>
                        <!-- #fshion End Here -->
                        <div id="beauty" class="tab-pane fade">
                            <div class="row">
                                <div class="col-lg-5 order-2 order-lg-1">
                                    <div class="banner-site-box mt-10">
                                        <div class="col-img">
                                            <a href="#"><img src="img/banner/electorince.jpg" alt=""></a>
                                        </div>
                                        <!-- Single Product Start -->
                                        <div class="single-product mt-20">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.php">
                                                    <img class="primary-img" src="img/products/43.jpg" alt="single-product">
                                                    <img class="secondary-img" src="img/products/42.jpg" alt="single-product">
                                                </a>
                                                <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <div class="pro-info">
                                                    <h4><a href="product.php">Sản Phẩm</a></h4>
                                                    <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                    <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                </div>
                                            </div>
                                            <!-- Product Content End -->
                                            <span class="sticker-new">MỚI</span>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                </div>
                                <div class="col-lg-7 order-1 order-lg-2">
                                    <!-- Arrivals Product Activation Start Here -->
                                    <div class="electronics-pro-active2 owl-carousel">
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/43.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/42.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">90.000 VNĐ</span><del class="prev-price">120.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/43.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/42.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">90.000 VNĐ</span><del class="prev-price">120.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/43.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/42.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">90.000 VNĐ</span><del class="prev-price">120.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/43.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/42.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">90.000 VNĐ</span><del class="prev-price">120.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/43.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/42.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">90.000 VNĐ</span><del class="prev-price">120.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/43.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/42.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">90.000 VNĐ</span><del class="prev-price">120.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/43.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/42.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">90.000 VNĐ</span><del class="prev-price">120.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/43.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/42.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">90.000 VNĐ</span><del class="prev-price">120.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                    </div>
                                    <!-- Arrivals Product Activation End Here -->
                                </div>
                            </div>
                        </div>
                        <!-- #beauty End Here -->
                        <div id="electronics" class="tab-pane fade">
                            <div class="row">
                                <div class="col-lg-5 order-2 order-lg-1">
                                    <div class="banner-site-box mt-10">
                                        <div class="col-img">
                                            <a href="#"><img src="img/banner/electorince.jpg" alt=""></a>
                                        </div>
                                        <!-- Single Product Start -->
                                        <div class="single-product mt-20">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.php">
                                                    <img class="primary-img" src="img/products/43.jpg" alt="single-product">
                                                    <img class="secondary-img" src="img/products/42.jpg" alt="single-product">
                                                </a>
                                                <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <div class="pro-info">
                                                    <h4><a href="product.php">Sản Phẩm</a></h4>
                                                    <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                    <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                </div>
                                            </div>
                                            <!-- Product Content End -->
                                            <span class="sticker-new">MỚI</span>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                </div>
                                <div class="col-lg-7 order-1 order-lg-2">
                                    <!-- Arrivals Product Activation Start Here -->
                                    <div class="electronics-pro-active2 owl-carousel">
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/17.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/18.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/17.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/18.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/17.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/18.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/17.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/18.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/17.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/18.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/17.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/18.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/17.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/18.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/17.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/18.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                    </div>
                                    <!-- Arrivals Product Activation End Here -->
                                </div>
                            </div>                            
                        </div>
                        <!-- #electronics End Here -->
                    </div>
                    <!-- Tab Content End -->
                </div>
                <!-- main-product-tab-area-->
            </div>
            <!-- Container End -->
        </div>
        <!-- Furniture Products Area End Here -->
        <!-- Kids Products Area Start Here -->
        <div class="arrivals-product pb-85 pb-sm-45">
            <div class="container">
                <div class="main-product-tab-area">
                    <div class="tab-menu mb-25">
                        <div class="section-ttitle">
                            <h2>HOT</h2>
                       </div>
                        <!-- Nav tabs -->
                        <ul class="nav tabs-area" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#electronics">Menu 1 </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#beauty">Menu 2</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#electronics">Menu 3</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kids">Menu 4</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#beauty">Menu 5</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kids">Menu 6</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#fshion">Menu 7</a>
                            </li>
                        </ul>                       

                    </div> 

                    <!-- Tab Contetn Start -->
                    <div class="tab-content">
                        <div id="fshion" class="tab-pane fade">
                            <div class="row">
                                <div class="col-lg-5 order-2 order-lg-1">
                                    <div class="banner-site-box mt-10">
                                        <div class="col-img">
                                            <a href="#"><img src="img/banner/electorince.jpg" alt=""></a>
                                        </div>
                                        <!-- Single Product Start -->
                                        <div class="single-product mt-20">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.php">
                                                    <img class="primary-img" src="img/products/43.jpg" alt="single-product">
                                                    <img class="secondary-img" src="img/products/42.jpg" alt="single-product">
                                                </a>
                                                <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <div class="pro-info">
                                                    <h4><a href="product.php">Sản phâm 1</a></h4>
                                                    <p><span class="price">188.00 VNĐ</span><del class="prev-price">190.000 VNĐ</del></p>
                                                    <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                </div>
                                            </div>
                                            <!-- Product Content End -->
                                            <span class="sticker-new">MỚI</span>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                </div>
                                <div class="col-lg-7 order-1 order-lg-2">
                                    <!-- Arrivals Product Activation Start Here -->
                                    <div class="electronics-pro-active2 owl-carousel">
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/2.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản phẩm</a></h4>
                                                        <p><span class="price">320.000 VNĐ</span><del class="prev-price">400.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/2.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản phẩm</a></h4>
                                                        <p><span class="price">320.000 VNĐ</span><del class="prev-price">400.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/2.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản phẩm</a></h4>
                                                        <p><span class="price">320.000 VNĐ</span><del class="prev-price">400.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/2.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản phẩm</a></h4>
                                                        <p><span class="price">320.000 VNĐ</span><del class="prev-price">400.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/2.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản phẩm</a></h4>
                                                        <p><span class="price">320.000 VNĐ</span><del class="prev-price">400.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/2.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản phẩm</a></h4>
                                                        <p><span class="price">320.000 VNĐ</span><del class="prev-price">400.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/2.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản phẩm</a></h4>
                                                        <p><span class="price">320.000 VNĐ</span><del class="prev-price">400.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/2.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản phẩm</a></h4>
                                                        <p><span class="price">320.000 VNĐ</span><del class="prev-price">400.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                    </div>
                                    <!-- Arrivals Product Activation End Here -->
                                </div>
                            </div>
                        </div>
                        <!-- #fshion End Here -->
                        <div id="kids" class="tab-pane fade show active">
                            <div class="row">
                                <div class="col-lg-5 order-2 order-lg-1">
                                    <div class="banner-site-box mt-10">
                                        <div class="col-img">
                                            <a href="#"><img src="img/banner/electorince.jpg" alt=""></a>
                                        </div>
                                        <!-- Single Product Start -->
                                        <div class="single-product mt-20">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.php">
                                                    <img class="primary-img" src="img/products/43.jpg" alt="single-product">
                                                    <img class="secondary-img" src="img/products/42.jpg" alt="single-product">
                                                </a>
                                                <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <div class="pro-info">
                                                    <h4><a href="product.php">Sản Phẩm</a></h4>
                                                    <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                    <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                </div>
                                            </div>
                                            <!-- Product Content End -->
                                            <span class="sticker-new">MỚI</span>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                </div>
                                <div class="col-lg-7 order-1 order-lg-2">
                                    <!-- Arrivals Product Activation Start Here -->
                                    <div class="electronics-pro-active2 owl-carousel">
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/42.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/43.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/42.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/43.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/42.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/43.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/42.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/43.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/42.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/43.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/42.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/43.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/42.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/43.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/42.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/43.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                    </div>
                                    <!-- Arrivals Product Activation End Here -->
                                </div>
                            </div>
                        </div>
                        <!-- #fshion End Here -->
                        <div id="beauty" class="tab-pane fade">
                            <div class="row">
                                <div class="col-lg-5 order-2 order-lg-1">
                                    <div class="banner-site-box mt-10">
                                        <div class="col-img">
                                            <a href="#"><img src="img/banner/electorince.jpg" alt=""></a>
                                        </div>
                                        <!-- Single Product Start -->
                                        <div class="single-product mt-20">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.php">
                                                    <img class="primary-img" src="img/products/43.jpg" alt="single-product">
                                                    <img class="secondary-img" src="img/products/42.jpg" alt="single-product">
                                                </a>
                                                <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <div class="pro-info">
                                                    <h4><a href="product.php">Sản Phẩm</a></h4>
                                                    <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                    <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                </div>
                                            </div>
                                            <!-- Product Content End -->
                                            <span class="sticker-new">MỚI</span>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                </div>
                                <div class="col-lg-7 order-1 order-lg-2">
                                    <!-- Arrivals Product Activation Start Here -->
                                    <div class="electronics-pro-active2 owl-carousel">
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/43.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/42.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">90.000 VNĐ</span><del class="prev-price">120.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/43.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/42.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">90.000 VNĐ</span><del class="prev-price">120.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/43.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/42.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">90.000 VNĐ</span><del class="prev-price">120.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/43.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/42.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">90.000 VNĐ</span><del class="prev-price">120.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/43.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/42.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">90.000 VNĐ</span><del class="prev-price">120.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/43.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/42.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">90.000 VNĐ</span><del class="prev-price">120.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/43.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/42.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">90.000 VNĐ</span><del class="prev-price">120.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/43.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/42.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">90.000 VNĐ</span><del class="prev-price">120.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                    </div>
                                    <!-- Arrivals Product Activation End Here -->
                                </div>
                            </div>
                        </div>
                        <!-- #beauty End Here -->
                        <div id="electronics" class="tab-pane fade">
                            <div class="row">
                                <div class="col-lg-5 order-2 order-lg-1">
                                    <div class="banner-site-box mt-10">
                                        <div class="col-img">
                                            <a href="#"><img src="img/banner/electorince.jpg" alt=""></a>
                                        </div>
                                        <!-- Single Product Start -->
                                        <div class="single-product mt-20">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.php">
                                                    <img class="primary-img" src="img/products/43.jpg" alt="single-product">
                                                    <img class="secondary-img" src="img/products/42.jpg" alt="single-product">
                                                </a>
                                                <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <div class="pro-info">
                                                    <h4><a href="product.php">Sản Phẩm</a></h4>
                                                    <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                    <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                </div>
                                            </div>
                                            <!-- Product Content End -->
                                            <span class="sticker-new">MỚI</span>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                </div>
                                <div class="col-lg-7 order-1 order-lg-2">
                                    <!-- Arrivals Product Activation Start Here -->
                                    <div class="electronics-pro-active2 owl-carousel">
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/17.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/18.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/17.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/18.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/17.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/18.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/17.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/18.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/17.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/18.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/17.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/18.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/17.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/18.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/17.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/18.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                    </div>
                                    <!-- Arrivals Product Activation End Here -->
                                </div>
                            </div>                            
                        </div>
                        <!-- #electronics End Here -->
                    </div>
                    <!-- Tab Content End -->
                </div>
                <!-- main-product-tab-area-->
            </div>
            <!-- Container End -->
        </div>
        <!-- Kids Products Area End Here -->
        <!-- Arrivals Products Area Start Here -->
        <div class="second-arrivals-product pb-45 pb-sm-5">
            <div class="container">
                <div class="main-product-tab-area">
                    <div class="tab-menu mb-25">
                        <div class="section-ttitle">
                            <h2>Giảm giá nhiều nhất</h2>
                       </div>
                        <!-- Nav tabs -->
                        <ul class="nav tabs-area" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#electronics">Menu 1 </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#beauty">Menu 2</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#electronics">Menu 3</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kids">Menu 4</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#beauty">Menu 5</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kids">Menu 6</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#fshion">Menu 7</a>
                            </li>
                        </ul>                        

                    </div> 

                    <!-- Tab Contetn Start -->
                    <div class="tab-content">
                        <div id="fshion" class="tab-pane fade">
                            <div class="row">
                                <div class="col-lg-5 order-2 order-lg-1">
                                    <div class="banner-site-box mt-10">
                                        <div class="col-img">
                                            <a href="#"><img src="img/banner/electorince.jpg" alt=""></a>
                                        </div>
                                        <!-- Single Product Start -->
                                        <div class="single-product mt-20">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.php">
                                                    <img class="primary-img" src="img/products/43.jpg" alt="single-product">
                                                    <img class="secondary-img" src="img/products/42.jpg" alt="single-product">
                                                </a>
                                                <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <div class="pro-info">
                                                    <h4><a href="product.php">Sản phâm 1</a></h4>
                                                    <p><span class="price">188.00 VNĐ</span><del class="prev-price">190.000 VNĐ</del></p>
                                                    <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                </div>
                                            </div>
                                            <!-- Product Content End -->
                                            <span class="sticker-new">MỚI</span>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                </div>
                                <div class="col-lg-7 order-1 order-lg-2">
                                    <!-- Arrivals Product Activation Start Here -->
                                    <div class="electronics-pro-active2 owl-carousel">
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/2.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản phẩm</a></h4>
                                                        <p><span class="price">320.000 VNĐ</span><del class="prev-price">400.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/2.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản phẩm</a></h4>
                                                        <p><span class="price">320.000 VNĐ</span><del class="prev-price">400.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/2.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản phẩm</a></h4>
                                                        <p><span class="price">320.000 VNĐ</span><del class="prev-price">400.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/2.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản phẩm</a></h4>
                                                        <p><span class="price">320.000 VNĐ</span><del class="prev-price">400.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/2.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản phẩm</a></h4>
                                                        <p><span class="price">320.000 VNĐ</span><del class="prev-price">400.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/2.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản phẩm</a></h4>
                                                        <p><span class="price">320.000 VNĐ</span><del class="prev-price">400.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/2.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản phẩm</a></h4>
                                                        <p><span class="price">320.000 VNĐ</span><del class="prev-price">400.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/2.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản phẩm</a></h4>
                                                        <p><span class="price">320.000 VNĐ</span><del class="prev-price">400.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                    </div>
                                    <!-- Arrivals Product Activation End Here -->
                                </div>
                            </div>
                        </div>
                        <!-- #fshion End Here -->
                        <div id="kids" class="tab-pane fade show active">
                            <div class="row">
                                <div class="col-lg-5 order-2 order-lg-1">
                                    <div class="banner-site-box mt-10">
                                        <div class="col-img">
                                            <a href="#"><img src="img/banner/electorince.jpg" alt=""></a>
                                        </div>
                                        <!-- Single Product Start -->
                                        <div class="single-product mt-20">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.php">
                                                    <img class="primary-img" src="img/products/43.jpg" alt="single-product">
                                                    <img class="secondary-img" src="img/products/42.jpg" alt="single-product">
                                                </a>
                                                <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <div class="pro-info">
                                                    <h4><a href="product.php">Sản Phẩm</a></h4>
                                                    <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                    <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                </div>
                                            </div>
                                            <!-- Product Content End -->
                                            <span class="sticker-new">MỚI</span>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                </div>
                                <div class="col-lg-7 order-1 order-lg-2">
                                    <!-- Arrivals Product Activation Start Here -->
                                    <div class="electronics-pro-active2 owl-carousel">
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/42.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/43.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/42.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/43.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/42.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/43.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/42.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/43.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/42.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/43.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/42.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/43.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/42.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/43.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/42.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/43.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                    </div>
                                    <!-- Arrivals Product Activation End Here -->
                                </div>
                            </div>
                        </div>
                        <!-- #fshion End Here -->
                        <div id="beauty" class="tab-pane fade">
                            <div class="row">
                                <div class="col-lg-5 order-2 order-lg-1">
                                    <div class="banner-site-box mt-10">
                                        <div class="col-img">
                                            <a href="#"><img src="img/banner/electorince.jpg" alt=""></a>
                                        </div>
                                        <!-- Single Product Start -->
                                        <div class="single-product mt-20">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.php">
                                                    <img class="primary-img" src="img/products/43.jpg" alt="single-product">
                                                    <img class="secondary-img" src="img/products/42.jpg" alt="single-product">
                                                </a>
                                                <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <div class="pro-info">
                                                    <h4><a href="product.php">Sản Phẩm</a></h4>
                                                    <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                    <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                </div>
                                            </div>
                                            <!-- Product Content End -->
                                            <span class="sticker-new">MỚI</span>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                </div>
                                <div class="col-lg-7 order-1 order-lg-2">
                                    <!-- Arrivals Product Activation Start Here -->
                                    <div class="electronics-pro-active2 owl-carousel">
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/43.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/42.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">90.000 VNĐ</span><del class="prev-price">120.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/43.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/42.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">90.000 VNĐ</span><del class="prev-price">120.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/43.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/42.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">90.000 VNĐ</span><del class="prev-price">120.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/43.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/42.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">90.000 VNĐ</span><del class="prev-price">120.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/43.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/42.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">90.000 VNĐ</span><del class="prev-price">120.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/43.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/42.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">90.000 VNĐ</span><del class="prev-price">120.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/43.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/42.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">90.000 VNĐ</span><del class="prev-price">120.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/43.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/42.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">90.000 VNĐ</span><del class="prev-price">120.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                    </div>
                                    <!-- Arrivals Product Activation End Here -->
                                </div>
                            </div>
                        </div>
                        <!-- #beauty End Here -->
                        <div id="electronics" class="tab-pane fade">
                            <div class="row">
                                <div class="col-lg-5 order-2 order-lg-1">
                                    <div class="banner-site-box mt-10">
                                        <div class="col-img">
                                            <a href="#"><img src="img/banner/electorince.jpg" alt=""></a>
                                        </div>
                                        <!-- Single Product Start -->
                                        <div class="single-product mt-20">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.php">
                                                    <img class="primary-img" src="img/products/43.jpg" alt="single-product">
                                                    <img class="secondary-img" src="img/products/42.jpg" alt="single-product">
                                                </a>
                                                <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <div class="pro-info">
                                                    <h4><a href="product.php">Sản Phẩm</a></h4>
                                                    <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                    <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                </div>
                                            </div>
                                            <!-- Product Content End -->
                                            <span class="sticker-new">MỚI</span>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                </div>
                                <div class="col-lg-7 order-1 order-lg-2">
                                    <!-- Arrivals Product Activation Start Here -->
                                    <div class="electronics-pro-active2 owl-carousel">
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/17.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/18.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/17.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/18.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/17.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/18.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/17.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/18.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/17.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/18.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/17.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/18.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/17.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/18.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                             <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/17.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/18.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">84.000 VNĐ</span><del class="prev-price">105.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm Vào Giỏ Hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So Sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu Thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">MỚI</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                    </div>
                                    <!-- Arrivals Product Activation End Here -->
                                </div>
                            </div>                            
                        </div>
                        <!-- #electronics End Here -->
                    </div>
                    <!-- Tab Content End -->
                </div>
                <!-- main-product-tab-area-->
            </div>
            <!-- Container End -->
        </div>
        <!-- Arrivals Products Area End Here -->
        <!-- Latest Blog Area Start Here -->
        <div class="blog-area ptb-95 off-white-bg ptb-sm-55">
            <div class="container">
                <div class="like-product-area"> 
                    <h2 class="section-ttitle2 mb-30">Các bài đăng mới nhất trên Blog</h2>
               <!-- Latest Blog Active Start Here -->
               <div class="latest-blog-active owl-carousel">
                   <!-- Single Blog Start -->
                   <div class="single-latest-blog">
                               <div class="blog-img">
                                   <a href="single-blog.php"><img src="img/blog/1.jpg" alt="blog-image"></a>
                               </div>
                               <div class="blog-desc">
                                   <h4><a href="single-blog.php">Bài viết 1</a></h4>
                                    <ul class="meta-box d-flex">
                                        <li><a href="#">Customer</a></li>
                                    </ul>
                                    <p>Nội dung bài viết</p>
                                    <a  class="readmore" href="single-blog.php">Đọc Thêm</a>
                               </div>
                               <div class="blog-date">
                                    <span>28</span>
                                    Tháng 6
                                </div>
                           </div>
                   <!-- Single Blog End -->
                   <!-- Single Blog Start -->
                   <div class="single-latest-blog">
                               <div class="blog-img">
                                   <a href="single-blog.php"><img src="img/blog/1.jpg" alt="blog-image"></a>
                               </div>
                               <div class="blog-desc">
                                   <h4><a href="single-blog.php">Bài viết 1</a></h4>
                                    <ul class="meta-box d-flex">
                                        <li><a href="#">Customer</a></li>
                                    </ul>
                                    <p>Nội dung bài viết</p>
                                    <a  class="readmore" href="single-blog.php">Đọc Thêm</a>
                               </div>
                               <div class="blog-date">
                                    <span>28</span>
                                    Tháng 6
                                </div>
                           </div>
                   <!-- Single Blog End -->
                   <!-- Single Blog Start -->
                   <div class="single-latest-blog">
                               <div class="blog-img">
                                   <a href="single-blog.php"><img src="img/blog/1.jpg" alt="blog-image"></a>
                               </div>
                               <div class="blog-desc">
                                   <h4><a href="single-blog.php">Bài viết 1</a></h4>
                                    <ul class="meta-box d-flex">
                                        <li><a href="#">Customer</a></li>
                                    </ul>
                                    <p>Nội dung bài viết</p>
                                    <a  class="readmore" href="single-blog.php">Đọc Thêm</a>
                               </div>
                               <div class="blog-date">
                                    <span>28</span>
                                    Tháng 6
                                </div>
                           </div>
                   <!-- Single Blog End -->
                   <!-- Single Blog Start -->
                   <div class="single-latest-blog">
                               <div class="blog-img">
                                   <a href="single-blog.php"><img src="img/blog/1.jpg" alt="blog-image"></a>
                               </div>
                               <div class="blog-desc">
                                   <h4><a href="single-blog.php">Bài viết 1</a></h4>
                                    <ul class="meta-box d-flex">
                                        <li><a href="#">Customer</a></li>
                                    </ul>
                                    <p>Nội dung bài viết</p>
                                    <a  class="readmore" href="single-blog.php">Đọc Thêm</a>
                               </div>
                               <div class="blog-date">
                                    <span>28</span>
                                    Tháng 6
                                </div>
                           </div>
                   <!-- Single Blog End -->

               </div>
               <!-- Latest Blog Active End Here -->
                </div>
                <!-- main-product-tab-area-->
            </div>
            <!-- Container End -->
        </div>
        <!-- Latest Blog s Area End Here -->

        <!-- Brand Banner Area Start Here -->
        <div class="main-brand-banner pt-95 pb-100 pt-sm-55 pb-sm-60">
            <div class="container">
                <div class="section-ttitle mb-30">
                    <h2>Thương Hiệu Nổi Tiếng</h2>
               </div>
                <div class="row no-gutters">
                    <div class="col-lg-3">
                        <div class="col-img">
                            <img src="img/banner/h1-band1.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- Brand Banner Start -->
                        <div class="brand-banner owl-carousel">
                            <div class="single-brand">
                                <a href="#"><img class="img" src="img/brand/1.jpg" alt="brand-image"></a>
                                <a href="#"><img src="img/brand/2.jpg" alt="brand-image"></a>
                                <a href="#"><img src="img/brand/3.jpg" alt="brand-image"></a>
                            </div>
                            <div class="single-brand">
                                <a href="#"><img class="img" src="img/brand/1.jpg" alt="brand-image"></a>
                                <a href="#"><img src="img/brand/2.jpg" alt="brand-image"></a>
                                <a href="#"><img src="img/brand/3.jpg" alt="brand-image"></a>
                            </div>
                            <div class="single-brand">
                                <a href="#"><img src="img/brand/1.jpg" alt="brand-image"></a>
                                <a href="#"><img src="img/brand/2.jpg" alt="brand-image"></a>
                                <a href="#"><img src="img/brand/3.jpg" alt="brand-image"></a>

                            </div>
                            <div class="single-brand">
                                <a href="#"><img src="img/brand/2.jpg" alt="brand-image"></a>
                                <a href="#"><img src="img/brand/3.jpg" alt="brand-image"></a>
                                <a href="#"><img src="img/brand/4.jpg" alt="brand-image"></a>
                            </div>
                            <div class="single-brand">
                                <a href="#"><img src="img/brand/2.jpg" alt="brand-image"></a>
                                <a href="#"><img src="img/brand/3.jpg" alt="brand-image"></a>
                                <a href="#"><img src="img/brand/4.jpg" alt="brand-image"></a>
                            </div>
                            <div class="single-brand">
                                <a href="#"><img src="img/brand/2.jpg" alt="brand-image"></a>
                                <a href="#"><img src="img/brand/3.jpg" alt="brand-image"></a>
                                <a href="#"><img src="img/brand/4.jpg" alt="brand-image"></a>
                            </div>
                            <div class="single-brand">
                                <a href="#"><img src="img/brand/2.jpg" alt="brand-image"></a>
                                <a href="#"><img src="img/brand/3.jpg" alt="brand-image"></a>
                                <a href="#"><img src="img/brand/4.jpg" alt="brand-image"></a>
                            </div>
                        </div>
                        <!-- Brand Banner End -->                        

                    </div>
                    <div class="col-lg-3">
                        <div class="col-img">
                            <img src="img/banner/h1-band2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container End -->
        </div>
        <!-- Brand Banner Area End Here -->
        <div class="big-banner pb-100 pb-sm-60">
            <div class="container big-banner-box">
                <div class="col-img">
                    <a href="#">
                    <img src="img/banner/5.jpg" alt="">
                    </a>
                </div>
                <div class="col-img">
                    <a href="#">
                    <img src="img/banner/h1-banner3.jpg" alt="">
                    </a>
                </div>
            </div>
            <!-- Container End -->
        </div>
        <!-- Support Area Start Here -->
        <?php 
        require_once("./lib/footer.php");
        ?>
        <!-- Quick View Content End -->
    </div>
    <!-- Main Wrapper End Here -->

    <!-- jquery 3.2.1 -->
    <script src="js/vendor/jquery-3.2.1.min.js"></script>
    <!-- Countdown js -->
    <script src="js/jquery.countdown.min.js"></script>
    <!-- Mobile menu js -->
    <script src="js/jquery.meanmenu.min.js"></script>
    <!-- ScrollUp js -->
    <script src="js/jquery.scrollUp.js"></script>
    <!-- Nivo slider js -->
    <script src="js/jquery.nivo.slider.js"></script>
    <!-- Fancybox js -->
    <script src="js/jquery.fancybox.min.js"></script>
    <!-- Jquery nice select js -->
    <script src="js/jquery.nice-select.min.js"></script>
    <!-- Jquery ui price slider js -->
    <script src="js/jquery-ui.min.js"></script>
    <!-- Owl carousel -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- Bootstrap popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugin js -->
    <script src="js/plugins.js"></script>
    <!-- Main activaion js -->
    <script src="js/main.js"></script>
</body>

</html>