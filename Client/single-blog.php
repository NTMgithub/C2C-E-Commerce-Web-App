<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Blog cá nhân | Web C2C</title>
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
                        <li><a href="index.php">Trang chủ</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <li class="active"><a href="single-blog.php">Blog Cá Nhân</a></li>
                    </ul>
                </div>
            </div>
            <!-- Container End -->
        </div>
        <!-- Breadcrumb End -->
        <!-- Single Blog Page Start Here -->
        <div class="single-blog ptb-100  ptb-sm-60">
            <div class="container">
                <div class="row">
                    <!-- Single Blog Sidebar Start -->
                    <div class="col-lg-3 order-2 order-lg-1">
                        <aside>
                            <div class="single-sidebar latest-pro mb-30">
                                <h3 class="sidebar-title">Bài viết mới nhất</h3>
                                <ul class="sidbar-style">
                                    <li><a href="shop.php">Sản phẩm 1</a></li>
                                    <li><a href="shop.php">Sản phẩm 2</a></li>
                                    <li><a href="shop.php">Sản phẩm 3</a></li>
                                    <li><a href="shop.php">Sản phẩm 4</a></li>
                                </ul>
                            </div>
                            <div class="col-img mb-30">
                                <a href="shop.php"><img src="img/banner/banner-sidebar.jpg" alt="slider-banner"></a>
                            </div>
                            <div class="single-sidebar mb-30">
                                 <h3 class="sidebar-title">Bài viết khác</h3>
                                 <ul class="sidbar-style">
                                     <li><a href="login.php">Đăng nhập</a></li>
                                     <li><a href="#">Mục sản phẩm <abbr title="Really Simple Syndication">RSS</abbr></a></li>
                                     <li><a href="#">Đánh giá <abbr title="Really Simple Syndication">RSS</abbr></a></li>
                                     <li><a href="#">Khác</a></li>
                                 </ul>
                            </div>
                            <div class="tags">
                                 <h3 class="sidebar-title">Thẻ  </h3>
                                 <div class="sidbar-style">
                                    <ul class="tag-list">
                                        <li><a href="#">Quảng cáo</a></li>
                                        <li><a href="#">Thương hiệu</a></li>
                                        <li><a href="#">Thiết kế</a></li>
                                        <li><a href="#">Mới nhất</a></li>
                                        <li><a href="#">Nam</a></li>
                                        <li><a href="#">Nữ</a></li>
                                    </ul>
                                 </div>
                            </div>
                        </aside>
                    </div>
                    <!-- Single Blog Sidebar End -->
                    <!-- Single Blog Sidebar Description Start -->
                    <div class="col-lg-9 order-1 order-lg-2">
                        <div class="single-sidebar-desc mb-all-40">
                            <div class="sidebar-img">
                                <img src="img/blog/10.jpg" alt="single-blog-img">
                            </div>
                            <div class="sidebar-post-content">
                                <h3 class="sidebar-lg-title">Tiêu đề bài đăng</h3>
                                <ul class="post-meta d-sm-inline-flex">
                                    <li><span>Được đăng bởi </span>Customo</li>
                                    <li><span> April 27TH, 2018</span></li>
                                </ul>
                            </div>
                            <div class="sidebar-desc mb-50">
                                <p>Nội dung bài đăng</p>
                                <blockquote class="mtb-30"> <p>Phần ghi chú</p>
                            </div>
                            <!-- Contact Email Area Start -->
                            <div class="blog-detail-contact">
                                <h3 class="mb-15 leave-reply">Để lại một bình luận</h3>
                                <div class="submit-review">
                                    <form>
                                        <div class="form-group">
                                            <label for="usr">Tên của bạn:</label>
                                            <input type="text" class="form-control" id="usr">
                                        </div>
                                        <div class="form-group">
                                            <label for="usr">Địa chỉ email:</label>
                                            <input type="email" class="form-control" id="email">
                                        </div>
                                        <div class="form-group">
                                            <label for="web-address">Link Website:</label>
                                            <input type="text" class="form-control" id="web-address">
                                        </div>
                                        <div class="form-group">
                                            <label for="sub">Chủ đề:</label>
                                            <input type="text" class="form-control" id="sub">
                                        </div>
                                        <div class="form-group">
                                            <label for="comment">Nội dung:</label>
                                            <textarea class="form-control" rows="5" id="comment"></textarea>
                                        </div>
                                        <div class="sbumit-reveiew">
                                            <input value="Bình luận " class="return-customer-btn" type="submit">
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- Contact Email Area End -->
                        </div>
                    </div>
                    <!-- Single Blog Sidebar Description End -->
                </div>
            </div>
            <!-- Container End -->
        </div>
        <!-- Single Blog Page End Here -->
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