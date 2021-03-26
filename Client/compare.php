<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>So sánh sản phẩm | Web C2C</title>
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
        <div class="main-page-banner home-3">
            <div class="container">
                <div class="row">
                    <!-- Vertical Menu Start Here -->
                    <?php
                    require_once("./lib/menu-left.php");
                    ?>
                    <!-- Vertical Menu End Here -->
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->           
        </div>
        <!-- Categorie Menu & Slider Area End Here -->
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-area mt-30">
            <div class="container">
                <div class="breadcrumb">
                    <ul class="d-flex align-items-center">
                        <li><a href="index.php">Trang Chủ</a></li>
                        <li class="active"><a href="compare.php">So sánh</a></li>
                    </ul>
                </div>
            </div>
            <!-- Container End -->
        </div>
        <!-- Breadcrumb End -->       
         <!-- Compare Page Start -->
        <div class="compare-product ptb-100 ptb-sm-60">
            <div class="container">
                <div class="table-responsive-sm">
                    <table class="table text-center compare-content">
                        <tbody>
                            <tr>
                                <td class="product-title">Sản Phẩm</td>
                                <td class="product-description">
                                    <div class="compare-details">
                                        <div class="compare-detail-img">
                                            <a href="#"><img src="img/products/20.jpg" alt="compare-product"></a>
                                        </div>
                                        <div class="compare-detail-content">
                                            <span>Sản phẩm 1</span>
                                            <h4><a href="product.php">Tên sản phẩm 1</a></h4>
                                        </div>
                                    </div>
                                </td>
                                <td class="product-description">
                                    <div class="compare-details">
                                        <div class="compare-detail-img">
                                            <a href="#"><img src="img/products/21.jpg" alt="compare-product"></a>
                                        </div>
                                        <span>Sản phẩm 2</span>
                                        <h4><a href="product.php">Tên sản phẩm 2</a></h4>
                                    </div>
                                </td>
                                <td class="product-description">
                                    <div class="compare-details">
                                        <div class="compare-detail-img">
                                            <a href="#"><img src="img/products/35.jpg" alt="compare-product"></a>
                                        </div>
                                        <span>Sản phẩm 3</span>
                                        <h4><a href="product.php">Tên sản phẩm 3</a></h4>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="product-title">Miêu tả</td>
                                <td class="product-description">
                                    <p>Miêu tả sản phẩm 1</p>
                                </td>
                                <td class="product-description">
                                    <p>Miêu tả sản phẩm 2</p>
                                </td>
                                <td class="product-description">
                                    <p>Miêu tả sản phẩm 3</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="product-title">Giá tiền</td>
                                <td class="product-description">235.000 VNĐ</td>
                                <td class="product-description">275.000 VNĐ</td>
                                <td class="product-description">190.000 VNĐ</td>
                            </tr>
                            <tr>
                                <td class="product-title">Màu sắc</td>
                                <td class="product-description">Đen</td>
                                <td class="product-description">Vàng</td>
                                <td class="product-description">Trắng</td>
                            </tr>
                            <tr>
                                <td class="product-title">Nhà sản xuất</td>
                                <td class="product-description">NSX Sản phẩm 1</td>
                                <td class="product-description">NSX Sản phẩm 2</td>
                                <td class="product-description">NSX Sản phẩm 3</td>
                            </tr>
                            <tr>
                                <td class="product-title">Thêm vào giỏ hàng</td>
                                <td class="product-description">
                                    <a class="compare-cart text-uppercase" href="cart.php">Thêm vào giỏ hàng</a>
                                </td>
                                <td class="product-description">
                                    <a class="compare-cart text-uppercase" href="cart.php">Thêm vào giỏ hàng</a>
                                </td>
                                <td class="product-description">
                                    <a class="compare-cart text-uppercase" href="cart.php">Thêm vào giỏ hàng</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="product-title">Xóa</td>
                                <td class="product-description"><i class="fa fa-trash-o"></i></td>
                                <td class="product-description"><i class="fa fa-trash-o"></i></td>
                                <td class="product-description"><i class="fa fa-trash-o"></i></td>
                            </tr>
                            <tr>
                                <td class="product-title">Đánh giá</td>
                                <td class="product-description">
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i> <!-- Sao được tô màu vàng -->
                                        <i class="fa fa-star-o"></i> <!-- Sao không được tô màu vàng -->
                                    </div>
                                </td>
                                <td class="product-description">
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </td>
                                <td class="product-description">
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Compare Page End -->
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