<!doctype html>
<html lang="en">
<head>
    <title>Covid &mdash; Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="fonts/flaticon-covid/font/flaticon.css">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">

</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


<div id="overlayer"></div>
<div class="loader">
    <div class="spinner-border text-primary" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>


<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar light js-sticky-header site-navbar-target" role="banner">

        <div class="container">
            <div class="row align-items-center">

                <div class="col-6 col-xl-2">
                    <div class="mb-0 site-logo"><a href="index.php" class="mb-0">Covid<span class="text-primary">.</span> </a></div>
                </div>

                <div class="col-12 col-md-10 d-none d-xl-block">
                    <nav class="site-navigation position-relative text-right" role="navigation">

                        <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                            <li class="<?php echo $menu1 ?? '';?>"><a href="index.php" class="nav-link">Anasayfa</a></li>
                            <li class="has-children <?php echo $menu2 ?? '' ?>">
                                <a href="prevention.php" class="nav-link">Korunma</a>
                                <ul class="dropdown">
                                    <li><a href="#" class="nav-link">Evde Kal</a></li>
                                    <li><a href="#" class="nav-link">Sosyal Mesafenizi Koruyun</a></li>
                                    <li><a href="#" class="nav-link">Maskenizi Takın</a></li>
                                    <li><a href="#" class="nav-link">Ellerinizi Yıkayın</a></li>
<!--                                    <li class="has-children">-->
<!--                                        <a href="#">More Links</a>-->
<!--                                        <ul class="dropdown">-->
<!--                                            <li><a href="#">Menu One</a></li>-->
<!--                                            <li><a href="#">Menu Two</a></li>-->
<!--                                            <li><a href="#">Menu Three</a></li>-->
<!--                                        </ul>-->
<!--                                    </li>-->
                                </ul>
                            </li>
                            <li class="<?php echo $menu3 ?? '' ?>"><a href="symptoms.php" class="nav-link">Semptomlar</a></li>
                            <li class="<?php echo $menu4 ?? '' ?>"><a href="about.php" class="nav-link">Hakkında</a></li>


                            <li class="<?php echo $menu5 ?? '' ?>"><a href="blog.php" class="nav-link">Blog</a></li>
                            <li class="<?php echo $menu6 ?? '' ?>"><a href="contact.php" class="nav-link">İletişim</a></li>
                        </ul>
                    </nav>
                </div>


                <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3 text-black"></span></a></div>

            </div>
        </div>

    </header>

