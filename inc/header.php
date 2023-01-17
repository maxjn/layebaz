<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>

    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="keywords" content="لایه باز , photoshop , psd" />
    <meta name="author" content="Maryam Lotfi" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title>LayeBaz</title>

    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />

    <!-- inject css start -->

    <!--== bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/bootstrap-icons.css" rel="stylesheet" type="text/css" />

    <!--== fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet">

    <!--== magnific-popup -->
    <link href="assets/css/magnific-popup.css" rel="stylesheet" type="text/css" />

    <!--== owl.carousel -->
    <link href="assets/css/owl.carousel.css" rel="stylesheet" type="text/css" />

    <!--== odometer -->
    <link href="assets/css/odometer.css" rel="stylesheet" type="text/css" />

    <!--== spacing -->
    <link href="assets/css/spacing.css" rel="stylesheet" type="text/css" />

    <!--== Alert Style -->
    <link href="assets/css/stylealert.css" rel="stylesheet" type="text/css" />

    <!--== theme.min -->
    <link href="assets/css/theme.min.css" rel="stylesheet" />

    <!-- inject css end -->

</head>

<body>

    <!-- page wrapper start -->

    <div class="page-wrapper">

        <!-- preloader start -->

        <div id="ht-preloader">
            <div class="loader clear-loader">
                <img src="assets/images/loader.gif" alt="">
            </div>
        </div>

        <!-- preloader end -->


        <!--header start-->

        <header class="site-header">
            <div id="header-wrap">
                <div class="container">
                    <div class="row">
                        <!--menu start-->
                        <div class="col">
                            <nav class="navbar navbar-expand-lg p-4 shadow bg-white">
                                <!-- Logo -->
                                <a class="navbar-brand logo" href="index.php">
                                    <img class="img-fluid" src="assets/images/logo.png" alt="">
                                </a>
                                <!-- Logo -->

                                <!-- Toggle -->
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <!-- Toggle -->

                                <!-- Menu  -->
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav mx-auto">
                                        <li class="nav-item ">
                                            <a class="nav-link active" href="index.php ">صفحه اصلی</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="product-shop.php">فروشگاه</a>
                                        </li>
                                        <?php //بررسی وضعیت ورود کاربر
                                        if (
                                            isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true &&
                                            ($_SESSION["user_type"] == 'admin' || $_SESSION["user_type"] == 'seller')
                                        ) { ?>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#"
                                                data-bs-toggle="dropdown">مدیریت </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="manage-product.php">مدیریت
                                                        محصولات</a>
                                                </li>
                                                <?php if ($_SESSION["user_type"] == 'admin') { ?>
                                                <li>
                                                    <a class="dropdown-item" href="manage-user.php">مدیریت
                                                        کاربران</a>
                                                </li>
                                                <?php } ?>
                                            </ul>
                                        </li>
                                        <?php } ?>
                                        <li class="nav-item">
                                            <a class="nav-link" href="about.php">درباره پروژه</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Menu ### -->
                                <!-- Login -->
                                <nav class="nav-profile">

                                    <?php //بررسی وضعیت ورود کاربر
                                    if (isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true) { ?>

                                    <ul class="profile-menu navbar-nav mx-auto">
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle user" data-bs-toggle="dropdown">
                                                <!-- User Info Start -->
                                                <div class="d-flex align-items-center">
                                                    <div class="ms-3">
                                                        <span class="display-name font-w-6 mb-0">
                                                            <?php echo ($_SESSION["name"]) ?></span>
                                                        <span class="display-name font-w-6 mb-0"> - </span>
                                                        <small class="text-muted fst-italic">
                                                            <?php echo ($_SESSION["user_type"]) ?></small>
                                                    </div>
                                                </div>
                                            </a>
                                            <ul class="dropdown-menu">

                                                <li>
                                                    <a href="product-bought.php" class="dropdown-item">محصولات من</a>
                                                </li>
                                                <li> <a class="dropdown-item" href="logout.php">خروج</a>
                                                </li>
                                            </ul>
                                            <!-- User Info End -->
                                        </li>
                                    </ul>
                                    <?php } else {
                                    ?>
                                    <!-- Login btn Start -->
                                    <a class="login-btn btn-link" href="login.php">
                                        <i class="bi bi-person me-2 fs-3 align-middle"></i>ورود
                                    </a>
                                    <!-- Login btn End -->

                                    <?php
                                    }
                                    ?>
                                </nav>
                                <!-- Login ### -->


                            </nav>
                        </div>
                        <!--menu end-->
                    </div>
                </div>
            </div>
        </header>

        <!--header end-->