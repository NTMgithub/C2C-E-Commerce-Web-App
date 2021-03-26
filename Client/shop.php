<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Cửa hàng | Web C2C</title>
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
                        <li class="active"><a href="product.php">Cửa Hàng</a></li>
                    </ul>
                </div>
            </div>
            <!-- Container End -->
        </div>
        <!-- Breadcrumb End -->
        <!-- Shop Page Start -->
        <div class="main-shop-page pt-100 pb-100 ptb-sm-60">
            <div class="container">
                <!-- Row End -->
                <div class="row">
                    <!-- Sidebar Shopping Option Start -->
                    <div class="col-lg-3 order-2 order-lg-1">
                        <div class="sidebar">
                            <!-- Sidebar Electronics Categorie Start -->
                            <div class="electronics mb-40">
                                <h3 class="sidebar-title">Danh mục</h3>
                                <div id="shop-cate-toggle" class="category-menu sidebar-menu sidbar-style">
                                    <ul>
                                        <li class="has-sub"><a href="#">Danh mục 1</a>
                                            <ul class="category-sub">
                                                <li><a href="shop.php">Sản phẩm 1</a></li>
                                                <li><a href="shop.php">Sản phẩm 2</a></li>
                                                <li><a href="shop.php">Sản phẩm 3</a></li>
                                                <li><a href="shop.php">Sản phẩm 4</a></li>
                                            </ul>
                                            <!-- category submenu end-->
                                        </li>
                                        <li class="has-sub"><a href="#">Danh mục 2</a>
                                            <ul class="category-sub">
                                                <li><a href="shop.php">Sản phẩm 1</a></li>
                                                <li><a href="shop.php">Sản phẩm 2</a></li>
                                                <li><a href="shop.php">Sản phẩm 3</a></li>
                                                <li><a href="shop.php">Sản phẩm 4</a></li>
                                            </ul>
                                            <!-- category submenu end-->
                                        </li>
                                        <li class="has-sub"><a href="#">Danh mục 3</a>
                                            <ul class="category-sub">
                                                <li><a href="shop.php">Sản phẩm 1</a></li>
                                                <li><a href="shop.php">Sản phẩm 2</a></li>
                                                <li><a href="shop.php">Sản phẩm 3</a></li>
                                                <li><a href="shop.php">Sản phẩm 4</a></li>
                                            </ul>
                                            <!-- category submenu end-->
                                        </li>
                                        <li class="has-sub"><a href="#">Danh mục 4</a>
                                            <ul class="category-sub">
                                                <li><a href="shop.php">Sản phẩm 1</a></li>
                                                <li><a href="shop.php">Sản phẩm 2</a></li>
                                                <li><a href="shop.php">Sản phẩm 3</a></li>
                                                <li><a href="shop.php">Sản phẩm 4</a></li>
                                            </ul>
                                            <!-- category submenu end-->
                                        </li>
                                    </ul>
                                </div>
                                <!-- category-menu-end -->
                            </div>
                            <!-- Sidebar Electronics Categorie End -->
                            <!-- Price Filter Options Start -->
                            <div class="search-filter mb-40">
                                <h3 class="sidebar-title">lọc theo giá</h3>
                                <form action="#" class="sidbar-style">
                                    <div id="slider-range"></div>
                                    <input type="text" id="amount" class="amount-range" readonly>
                                </form>
                            </div>
                            <!-- Price Filter Options End -->
                            <!-- Sidebar Categorie Start -->
                            <div class="sidebar-categorie mb-40">
                                <h3 class="sidebar-title">Thể Loại</h3>
                                <ul class="sidbar-style">
                                    <li class="form-check">
                                        <input class="form-check-input" value="#" id="camera" type="checkbox">
                                        <label class="form-check-label" for="camera">Loại 1 (8)</label>
                                    </li>
                                    <li class="form-check">
                                        <input class="form-check-input" value="#" id="GamePad" type="checkbox">
                                        <label class="form-check-label" for="GamePad">Loại 2 (8)</label>
                                    </li>
                                    <li class="form-check">
                                        <input class="form-check-input" value="#" id="Digital" type="checkbox">
                                        <label class="form-check-label" for="Digital">Loại 3 (8)</label>
                                    </li>
                                    <li class="form-check">
                                        <input class="form-check-input" value="#" id="Virtual" type="checkbox">
                                        <label class="form-check-label" for="Virtual"> Loại 4 (8) </label>
                                    </li>
                                </ul>
                            </div>
                            <!-- Sidebar Categorie Start -->
                            <!-- Product Size Start -->
                            <div class="size mb-40">
                                <h3 class="sidebar-title">Kích thước</h3>
                                <ul class="size-list sidbar-style">
                                    <li class="form-check">
                                        <input class="form-check-input" value="" id="small" type="checkbox">
                                        <label class="form-check-label" for="small">S (6)</label>
                                    </li>
                                    <li class="form-check">
                                        <input class="form-check-input" value="" id="medium" type="checkbox">
                                        <label class="form-check-label" for="medium">M (9)</label>
                                    </li>
                                    <li class="form-check">
                                        <input class="form-check-input" value="" id="large" type="checkbox">
                                        <label class="form-check-label" for="large">L (8)</label>
                                    </li>
                                </ul>
                            </div>
                            <!-- Product Size End -->
                            <!-- Product Color Start -->
                            <div class="color mb-40">
                                <h3 class="sidebar-title">Màu sắc</h3>
                                <ul class="color-option sidbar-style">
                                    <li>
                                        <span class="white"></span>
                                        <a href="#">Trắng (4)</a>
                                    </li>
                                    <li>
                                        <span class="orange"></span>
                                        <a href="#">Cam (2)</a>
                                    </li>
                                    <li>
                                        <span class="blue"></span>
                                        <a href="#">Xanh (6)</a>
                                    </li>
                                    <li>
                                        <span class="yellow"></span>
                                        <a href="#">Vàng (8)</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Product Color End -->
                            <!-- Product Top Start -->
                            <div class="top-new mb-40">
                                <h3 class="sidebar-title">Sản phẩm mới</h3>
                                <div class="side-product-active owl-carousel">
                                    <!-- Side Item Start -->
                                    <div class="side-pro-item">
                                        <!-- Single Product Start -->
                                        <div class="single-product single-product-sidebar">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.php">
                                                    <img class="primary-img" src="img/products/20.jpg" alt="single-product">
                                                    <img class="secondary-img" src="img/products/19.jpg" alt="single-product">
                                                </a>
                                                <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <h4><a href="product.php">Sản Phẩm</a></h4>
                                                <p><span class="price">130.000 VNĐ</span><del class="prev-price">180.000 VNĐ</del></p>
                                            </div>
                                            <!-- Product Content End -->
                                        </div>
                                        <!-- Single Product End -->  
                                        <!-- Single Product Start -->
                                        <div class="single-product single-product-sidebar">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.php">
                                                    <img class="primary-img" src="img/products/20.jpg" alt="single-product">
                                                    <img class="secondary-img" src="img/products/19.jpg" alt="single-product">
                                                </a>
                                                <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <h4><a href="product.php">Sản Phẩm</a></h4>
                                                <p><span class="price">130.000 VNĐ</span><del class="prev-price">180.000 VNĐ</del></p>
                                            </div>
                                            <!-- Product Content End -->
                                        </div>
                                        <!-- Single Product End --> 
                                        <!-- Single Product Start -->
                                        <div class="single-product single-product-sidebar">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.php">
                                                    <img class="primary-img" src="img/products/20.jpg" alt="single-product">
                                                    <img class="secondary-img" src="img/products/19.jpg" alt="single-product">
                                                </a>
                                                <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <h4><a href="product.php">Sản Phẩm</a></h4>
                                                <p><span class="price">130.000 VNĐ</span><del class="prev-price">180.000 VNĐ</del></p>
                                            </div>
                                            <!-- Product Content End -->
                                        </div>
                                        <!-- Single Product End --> 
                                        <!-- Single Product Start -->
                                        <div class="single-product single-product-sidebar">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.php">
                                                    <img class="primary-img" src="img/products/20.jpg" alt="single-product">
                                                    <img class="secondary-img" src="img/products/19.jpg" alt="single-product">
                                                </a>
                                                <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <h4><a href="product.php">Sản Phẩm</a></h4>
                                                <p><span class="price">130.000 VNĐ</span><del class="prev-price">180.000 VNĐ</del></p>
                                            </div>
                                            <!-- Product Content End -->
                                        </div>
                                        <!-- Single Product End -->                                        
                                    </div>
                                    <!-- Side Item End -->
                                    <!-- Side Item Start -->
                                    <div class="side-pro-item">
                                        <!-- Single Product Start -->
                                        <div class="single-product single-product-sidebar">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.php">
                                                    <img class="primary-img" src="img/products/20.jpg" alt="single-product">
                                                    <img class="secondary-img" src="img/products/19.jpg" alt="single-product">
                                                </a>
                                                <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <h4><a href="product.php">Sản Phẩm</a></h4>
                                                <p><span class="price">130.000 VNĐ</span><del class="prev-price">180.000 VNĐ</del></p>
                                            </div>
                                            <!-- Product Content End -->
                                        </div>
                                        <!-- Single Product End -->  
                                        <!-- Single Product Start -->
                                        <div class="single-product single-product-sidebar">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.php">
                                                    <img class="primary-img" src="img/products/20.jpg" alt="single-product">
                                                    <img class="secondary-img" src="img/products/19.jpg" alt="single-product">
                                                </a>
                                                <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <h4><a href="product.php">Sản Phẩm</a></h4>
                                                <p><span class="price">130.000 VNĐ</span><del class="prev-price">180.000 VNĐ</del></p>
                                            </div>
                                            <!-- Product Content End -->
                                        </div>
                                        <!-- Single Product End --> 
                                        <!-- Single Product Start -->
                                        <div class="single-product single-product-sidebar">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.php">
                                                    <img class="primary-img" src="img/products/20.jpg" alt="single-product">
                                                    <img class="secondary-img" src="img/products/19.jpg" alt="single-product">
                                                </a>
                                                <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <h4><a href="product.php">Sản Phẩm</a></h4>
                                                <p><span class="price">130.000 VNĐ</span><del class="prev-price">180.000 VNĐ</del></p>
                                            </div>
                                            <!-- Product Content End -->
                                        </div>
                                        <!-- Single Product End --> 
                                        <!-- Single Product Start -->
                                        <div class="single-product single-product-sidebar">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.php">
                                                    <img class="primary-img" src="img/products/20.jpg" alt="single-product">
                                                    <img class="secondary-img" src="img/products/19.jpg" alt="single-product">
                                                </a>
                                                <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <h4><a href="product.php">Sản Phẩm</a></h4>
                                                <p><span class="price">130.000 VNĐ</span><del class="prev-price">180.000 VNĐ</del></p>
                                            </div>
                                            <!-- Product Content End -->
                                        </div>
                                        <!-- Single Product End -->                                        
                                    </div>
                                    <!-- Side Item End -->
                                    <!-- Side Item Start -->
                                    <div class="side-pro-item">
                                        <!-- Single Product Start -->
                                        <div class="single-product single-product-sidebar">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.php">
                                                    <img class="primary-img" src="img/products/20.jpg" alt="single-product">
                                                    <img class="secondary-img" src="img/products/19.jpg" alt="single-product">
                                                </a>
                                                <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <h4><a href="product.php">Sản Phẩm</a></h4>
                                                <p><span class="price">130.000 VNĐ</span><del class="prev-price">180.000 VNĐ</del></p>
                                            </div>
                                            <!-- Product Content End -->
                                        </div>
                                        <!-- Single Product End -->  
                                        <!-- Single Product Start -->
                                        <div class="single-product single-product-sidebar">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.php">
                                                    <img class="primary-img" src="img/products/20.jpg" alt="single-product">
                                                    <img class="secondary-img" src="img/products/19.jpg" alt="single-product">
                                                </a>
                                                <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <h4><a href="product.php">Sản Phẩm</a></h4>
                                                <p><span class="price">130.000 VNĐ</span><del class="prev-price">180.000 VNĐ</del></p>
                                            </div>
                                            <!-- Product Content End -->
                                        </div>
                                        <!-- Single Product End --> 
                                        <!-- Single Product Start -->
                                        <div class="single-product single-product-sidebar">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.php">
                                                    <img class="primary-img" src="img/products/20.jpg" alt="single-product">
                                                    <img class="secondary-img" src="img/products/19.jpg" alt="single-product">
                                                </a>
                                                <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <h4><a href="product.php">Sản Phẩm</a></h4>
                                                <p><span class="price">130.000 VNĐ</span><del class="prev-price">180.000 VNĐ</del></p>
                                            </div>
                                            <!-- Product Content End -->
                                        </div>
                                        <!-- Single Product End --> 
                                        <!-- Single Product Start -->
                                        <div class="single-product single-product-sidebar">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.php">
                                                    <img class="primary-img" src="img/products/20.jpg" alt="single-product">
                                                    <img class="secondary-img" src="img/products/19.jpg" alt="single-product">
                                                </a>
                                                <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <h4><a href="product.php">Sản Phẩm</a></h4>
                                                <p><span class="price">130.000 VNĐ</span><del class="prev-price">180.000 VNĐ</del></p>
                                            </div>
                                            <!-- Product Content End -->
                                        </div>
                                        <!-- Single Product End -->                                        
                                    </div>
                                    <!-- Side Item End -->
                                </div>
                            </div>
                            <!-- Product Top End -->                            
                            <!-- Single Banner Start -->
                            <div class="col-img">
                                <a href="shop.php"><img src="img/banner/banner-sidebar.jpg" alt="slider-banner"></a>
                            </div>
                            <!-- Single Banner End -->
                        </div>
                    </div>
                    <!-- Sidebar Shopping Option End -->
                    <!-- Product Categorie List Start -->
                    <div class="col-lg-9 order-1 order-lg-2">
                        <!-- Grid & List View Start -->
                        <div class="grid-list-top border-default universal-padding d-md-flex justify-content-md-between align-items-center mb-30">
                            <div class="grid-list-view  mb-sm-15">
                                <ul class="nav tabs-area d-flex align-items-center">
                                    <li><a class="active" data-toggle="tab" href="#grid-view"><i class="fa fa-th"></i></a></li>
                                    <li><a data-toggle="tab" href="#list-view"><i class="fa fa-list-ul"></i></a></li>
                                </ul>
                            </div>
                            <!-- Toolbar Short Area Start -->
                            <div class="main-toolbar-sorter clearfix">
                                <div class="toolbar-sorter d-flex align-items-center">
                                    <label>Sắp xếp:</label>
                                    <select class="sorter wide">
                                        <option value="Position">Gần giống</option>
                                        <option value="Product Name">Tên sản phẩm A -> Z</option>
                                        <option value="Product Name">Tên sản phẩm Z -> A</option>
                                        <option value="Price">Giá tiền từ thắp đến cao</option>
                                        <option value="Price" selected>Giá tiền từ cao đến thắp</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Toolbar Short Area End -->
                            <!-- Toolbar Short Area Start -->
                            <div class="main-toolbar-sorter clearfix">
                                <div class="toolbar-sorter d-flex align-items-center">
                                    <label>Hiển thị:</label>
                                    <select class="sorter wide">
                                        <option value="12">12</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="75">75</option>
                                        <option value="100">100</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Toolbar Short Area End -->
                        </div>
                        <!-- Grid & List View End -->
                        <div class="main-categorie mb-all-40">
                            <!-- Grid & List Main Area End -->
                            <div class="tab-content fix">
                                <div id="grid-view" class="tab-pane fade show active">
                                    <div class="row">
                                        <!-- Single Product Start -->
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-6">
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
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">320.000 VNĐ</span><del class="prev-price">400.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm vào giỏ hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="sticker-new">MỚI</span>
                                                <!-- Product Content End -->
                                            </div>
                                        </div>
                                        <!-- Single Product End -->
                                        <!-- Single Product Start -->
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-6">
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
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">320.000 VNĐ</span><del class="prev-price">400.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm vào giỏ hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="sticker-new">MỚI</span>
                                                <!-- Product Content End -->
                                            </div>
                                        </div>
                                        <!-- Single Product End -->
                                        <!-- Single Product Start -->
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-6">
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
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">320.000 VNĐ</span><del class="prev-price">400.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm vào giỏ hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="sticker-new">MỚI</span>
                                                <!-- Product Content End -->
                                            </div>
                                        </div>
                                        <!-- Single Product End -->
                                        <!-- Single Product Start -->
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-6">
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
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">320.000 VNĐ</span><del class="prev-price">400.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm vào giỏ hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="sticker-new">MỚI</span>
                                                <!-- Product Content End -->
                                            </div>
                                        </div>
                                        <!-- Single Product End -->
                                        <!-- Single Product Start -->
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-6">
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
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">320.000 VNĐ</span><del class="prev-price">400.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm vào giỏ hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="sticker-new">MỚI</span>
                                                <!-- Product Content End -->
                                            </div>
                                        </div>
                                        <!-- Single Product End -->
                                        <!-- Single Product Start -->
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-6">
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
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">320.000 VNĐ</span><del class="prev-price">400.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm vào giỏ hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="sticker-new">MỚI</span>
                                                <!-- Product Content End -->
                                            </div>
                                        </div>
                                        <!-- Single Product End -->
                                        <!-- Single Product Start -->
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-6">
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
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">320.000 VNĐ</span><del class="prev-price">400.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm vào giỏ hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="sticker-new">MỚI</span>
                                                <!-- Product Content End -->
                                            </div>
                                        </div>
                                        <!-- Single Product End -->
                                        <!-- Single Product Start -->
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-6">
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
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">320.000 VNĐ</span><del class="prev-price">400.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm vào giỏ hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="sticker-new">MỚI</span>
                                                <!-- Product Content End -->
                                            </div>
                                        </div>
                                        <!-- Single Product End -->
                                        <!-- Single Product Start -->
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-6">
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
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">320.000 VNĐ</span><del class="prev-price">400.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm vào giỏ hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="sticker-new">MỚI</span>
                                                <!-- Product Content End -->
                                            </div>
                                        </div>
                                        <!-- Single Product End -->
                                        <!-- Single Product Start -->
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-6">
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
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">320.000 VNĐ</span><del class="prev-price">400.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm vào giỏ hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="sticker-new">MỚI</span>
                                                <!-- Product Content End -->
                                            </div>
                                        </div>
                                        <!-- Single Product End -->
                                        <!-- Single Product Start -->
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-6">
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
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">320.000 VNĐ</span><del class="prev-price">400.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm vào giỏ hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="sticker-new">MỚI</span>
                                                <!-- Product Content End -->
                                            </div>
                                        </div>
                                        <!-- Single Product End -->
                                        <!-- Single Product Start -->
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-6">
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
                                                        <h4><a href="product.php">Sản Phẩm</a></h4>
                                                        <p><span class="price">320.000 VNĐ</span><del class="prev-price">400.000 VNĐ</del></p>
                                                        <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Thêm vào giỏ hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>So sánh</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="sticker-new">MỚI</span>
                                                <!-- Product Content End -->
                                            </div>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                    <!-- Row End -->
                                </div>
                                <!-- #grid view End -->
                                <div id="list-view" class="tab-pane fade">
                                    <!-- Single Product Start -->
                                    <div class="single-product"> 
                                        <div class="row">        
                                            <!-- Product Image Start -->
                                            <div class="col-lg-4 col-md-5 col-sm-12">
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/23.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/24.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                     <span class="sticker-new">MỚI</span>
                                                </div>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="col-lg-8 col-md-7 col-sm-12">
                                                <div class="pro-content hot-product2">
                                                    <h4><a href="product.php">Sản Phẩm</a></h4>
                                                    <p><span class="price">15.000 VNĐ</span></p>
                                                    <p>Mô tả sản phẩm</p>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="" data-original-title="Add to Cart"> + Thêm vào giỏ hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="" data-original-title="Compare"><i class="lnr lnr-sync"></i> <span>So sánh</span></a>
                                                            <a href="wishlist.php" title="" data-original-title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Product Content End -->
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                    <!-- Single Product Start -->
                                    <div class="single-product"> 
                                        <div class="row">        
                                            <!-- Product Image Start -->
                                            <div class="col-lg-4 col-md-5 col-sm-12">
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/30.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/31.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="col-lg-8 col-md-7 col-sm-12">
                                                <div class="pro-content hot-product2">
                                                    <h4><a href="product.php">Sản Phẩm</a></h4>
                                                    <p><span class="price">199.000 VNĐ</span><del class="prev-price">205.000 VNĐ</del></p>
                                                    <p>Mô tả sản phẩm</p>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="" data-original-title="Add to Cart"> + Thêm vào giỏ hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="" data-original-title="Compare"><i class="lnr lnr-sync"></i> <span>So sánh</span></a>
                                                            <a href="wishlist.php" title="" data-original-title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Product Content End -->
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                    <!-- Single Product Start -->
                                    <div class="single-product"> 
                                        <div class="row">        
                                            <!-- Product Image Start -->
                                            <div class="col-lg-4 col-md-5 col-sm-12">
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/30.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/31.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="col-lg-8 col-md-7 col-sm-12">
                                                <div class="pro-content hot-product2">
                                                    <h4><a href="product.php">Sản Phẩm</a></h4>
                                                    <p><span class="price">199.000 VNĐ</span><del class="prev-price">205.000 VNĐ</del></p>
                                                    <p>Mô tả sản phẩm</p>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="" data-original-title="Add to Cart"> + Thêm vào giỏ hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="" data-original-title="Compare"><i class="lnr lnr-sync"></i> <span>So sánh</span></a>
                                                            <a href="wishlist.php" title="" data-original-title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Product Content End -->
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                    <!-- Single Product Start -->
                                    <div class="single-product"> 
                                        <div class="row">        
                                            <!-- Product Image Start -->
                                            <div class="col-lg-4 col-md-5 col-sm-12">
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/30.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/31.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="col-lg-8 col-md-7 col-sm-12">
                                                <div class="pro-content hot-product2">
                                                    <h4><a href="product.php">Sản Phẩm</a></h4>
                                                    <p><span class="price">199.000 VNĐ</span><del class="prev-price">205.000 VNĐ</del></p>
                                                    <p>Mô tả sản phẩm</p>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="" data-original-title="Add to Cart"> + Thêm vào giỏ hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="" data-original-title="Compare"><i class="lnr lnr-sync"></i> <span>So sánh</span></a>
                                                            <a href="wishlist.php" title="" data-original-title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Product Content End -->
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                    <!-- Single Product Start -->
                                    <div class="single-product"> 
                                        <div class="row">        
                                            <!-- Product Image Start -->
                                            <div class="col-lg-4 col-md-5 col-sm-12">
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img/products/30.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/products/31.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="col-lg-8 col-md-7 col-sm-12">
                                                <div class="pro-content hot-product2">
                                                    <h4><a href="product.php">Sản Phẩm</a></h4>
                                                    <p><span class="price">199.000 VNĐ</span><del class="prev-price">205.000 VNĐ</del></p>
                                                    <p>Mô tả sản phẩm</p>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="" data-original-title="Add to Cart"> + Thêm vào giỏ hàng</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="" data-original-title="Compare"><i class="lnr lnr-sync"></i> <span>So sánh</span></a>
                                                            <a href="wishlist.php" title="" data-original-title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu thích</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Product Content End -->
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <!-- #list view End -->
                                <div class="pro-pagination">
                                    <ul class="blog-pagination">
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                    </ul>                                    
                                    <div class="product-pagination">
                                        <span class="grid-item-list">Tổng: 5 trang</span>
                                    </div>
                                </div>
                                <!-- Product Pagination Info -->
                            </div>
                            <!-- Grid & List Main Area End -->
                        </div>
                    </div>
                    <!-- product Categorie List End -->
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Shop Page End -->
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