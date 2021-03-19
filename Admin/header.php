<?php
    require('../ModelChung/DBConfig.php');
    $db = new Database();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Trang tổng quan</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.php">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="active has-sub">
                            <a class="js-arrow" href="index.php">
                                <i class="fas fa-tachometer-alt"></i>Trang tổng quan
                            </a>
                        </li>

                        <li class="has-sub">
                            <a class="js-arrow" href="<?php echo $db->MergeURL('viewpage=list-user'); ?>">
                                <i class="fas fa-group"></i>Quản lý người dùng</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="ListShop.php">
                                <i class="fas fa-shopping-cart"></i>Quản lý các cửa hàng</a>
                        </li>

                        <li class="has-sub">
                            <a class="js-arrow" href="ListVoucher.php">
                                <i class="fas fa-gift"></i>Quản lý khuyến mãi</a>
                        </li>

                        <li class="has-sub">
                            <a class="js-arrow" href="ListBanner.php">
                                <i class="fas fa-picture-o"></i>Quản lý banner</a>
                        </li>

                        <li class="has-sub">
                            <a class="js-arrow" href="ListReport.php">
                                <i class="fas fa-flag"></i>Quản lý báo cáo</a>
                        </li>

                        <li class="has-sub">
                            <a class="js-arrow" href="ListPartner.php">
                                <i class="fas fa-briefcase"></i>Quản lý các đối tác</a>
                        </li>

                        <li class="has-sub">
                            <a class="js-arrow" href="ListPayment.php">
                                <i class="fas fa-credit-card"></i>Quản lý các phương thức thanh toán</a>
                        </li>

                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-code"></i>Thành phần giao diện</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="chart.php">
                                        <i class="fas fa-chart-bar"></i>Charts</a>
                                </li>
                                <li>
                                    <a href="table.php">
                                        <i class="fas fa-table"></i>Tables</a>
                                </li>
                                <li>
                                    <a href="form.php">
                                        <i class="far fa-check-square"></i>Forms</a>
                                </li>
                                <li>
                                    <a href="calendar.php">
                                        <i class="fas fa-calendar-alt"></i>Calendar</a>
                                </li>
                                <li>
                                    <a href="map.php">
                                        <i class="fas fa-map-marker-alt"></i>Maps</a>
                                </li>
                                <li class="has-sub">
                                    <a class="js-arrow" href="#">
                                        <i class="fas fa-copy"></i>Pages</a>
                                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                        <li>
                                            <a href="login.php">Login</a>
                                        </li>
                                        <li>
                                            <a href="register.php">Register</a>
                                        </li>
                                        <li>
                                            <a href="forget-pass.php">Forget Password</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-sub">
                                    <a class="js-arrow" href="#">
                                        <i class="fas fa-desktop"></i>UI Elements</a>
                                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                        <li>
                                            <a href="button.php">Button</a>
                                        </li>
                                        <li>
                                            <a href="badge.php">Badges</a>
                                        </li>
                                        <li>
                                            <a href="tab.php">Tabs</a>
                                        </li>
                                        <li>
                                            <a href="card.php">Cards</a>
                                        </li>
                                        <li>
                                            <a href="alert.php">Alerts</a>
                                        </li>
                                        <li>
                                            <a href="progress-bar.php">Progress Bars</a>
                                        </li>
                                        <li>
                                            <a href="modal.php">Modals</a>
                                        </li>
                                        <li>
                                            <a href="switch.php">Switchs</a>
                                        </li>
                                        <li>
                                            <a href="grid.php">Grids</a>
                                        </li>
                                        <li>
                                            <a href="fontawesome.php">Fontawesome Icon</a>
                                        </li>
                                        <li>
                                            <a href="typo.php">Typography</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                       
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active">
                            <a class="js-arrow" href="index.php">
                                <i class="fas fa-tachometer-alt"></i>Trang tổng quan</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="<?php echo $db->MergeURL('viewpage=list-user'); ?>">
                                <i class="fas fa-group"></i>Quản lý người dùng</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="ListShop.php">
                                <i class="fas fa-shopping-cart"></i>Quản lý các cửa hàng</a>
                        </li>

                        <li class="has-sub">
                            <a class="js-arrow" href="ListVoucher.php">
                                <i class="fas fa-gift"></i>Quản lý khuyến mãi</a>
                        </li>

                        <li class="has-sub">
                            <a class="js-arrow" href="ListBanner.php">
                                <i class="fas fa-picture-o"></i>Quản lý banner</a>
                        </li>

                        <li class="has-sub">
                            <a class="js-arrow" href="ListReport.php">
                                <i class="fas fa-flag"></i>Quản lý báo cáo</a>
                        </li>

                        <li class="has-sub">
                            <a class="js-arrow" href="ListPartner.php">
                                <i class="fas fa-briefcase"></i>Quản lý các đối tác</a>
                        </li>

                        <li class="has-sub">
                            <a class="js-arrow" href="ListPayment.php">
                                <i class="fas fa-credit-card"></i>Quản lý các phương thức thanh toán</a>
                        </li>

                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-code"></i>Thành phần giao diện</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="chart.php">
                                        <i class="fas fa-chart-bar"></i>Charts</a>
                                </li>
                                <li>
                                    <a href="table.php">
                                        <i class="fas fa-table"></i>Tables</a>
                                </li>
                                <li>
                                    <a href="form.php">
                                        <i class="far fa-check-square"></i>Forms</a>
                                </li>
                                <li>
                                    <a href="calendar.php">
                                        <i class="fas fa-calendar-alt"></i>Calendar</a>
                                </li>
                                <li>
                                    <a href="map.php">
                                        <i class="fas fa-map-marker-alt"></i>Maps</a>
                                </li>
                                <li class="has-sub">
                                    <a class="js-arrow" href="#">
                                        <i class="fas fa-copy"></i>Pages</a>
                                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                                        <li>
                                            <a href="login.php">Login</a>
                                        </li>
                                        <li>
                                            <a href="register.php">Register</a>
                                        </li>
                                        <li>
                                            <a href="forget-pass.php">Forget Password</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-sub">
                                    <a class="js-arrow" href="#">
                                        <i class="fas fa-desktop"></i>UI Elements</a>
                                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                                        <li>
                                            <a href="button.php">Button</a>
                                        </li>
                                        <li>
                                            <a href="badge.php">Badges</a>
                                        </li>
                                        <li>
                                            <a href="tab.php">Tabs</a>
                                        </li>
                                        <li>
                                            <a href="card.php">Cards</a>
                                        </li>
                                        <li>
                                            <a href="alert.php">Alerts</a>
                                        </li>
                                        <li>
                                            <a href="progress-bar.php">Progress Bars</a>
                                        </li>
                                        <li>
                                            <a href="modal.php">Modals</a>
                                        </li>
                                        <li>
                                            <a href="switch.php">Switchs</a>
                                        </li>
                                        <li>
                                            <a href="grid.php">Grids</a>
                                        </li>
                                        <li>
                                            <a href="fontawesome.php">Fontawesome Icon</a>
                                        </li>
                                        <li>
                                            <a href="typo.php">Typography</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

         <!-- PAGE CONTAINER-->
 <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <!-- <input class="au-input au-input--xl" type="text" name="search" placeholder="Tìm kiếm..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button> -->
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    
                                    
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">1</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>Bạn có 3 thông báo mới!</p>
                                            </div>
                                            
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Tài khoản vanba đã báo cáo!</p>
                                                    <span class="date">12/3/2021 06:50</span>
                                                </div>
                                            </div>
                                        
                                            <div class="notifi__footer">
                                                <a href="#">Tất cả thông báo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">Admin</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">Admin</a>
                                                    </h5>
                                                    <span class="email">admin@example.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <!-- <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div> -->
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Cài đặt</a>
                                                </div>
                                                <!-- <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                </div> -->
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="#">
                                                    <i class="zmdi zmdi-power"></i>Đăng xuất</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->