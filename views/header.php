<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anime | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
          rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="assets/css/plyr.css" type="text/css">
    <link rel="stylesheet" href="assets/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
</head>

<body>

<!-- Page Preloder -->
<!--<div id="preloder">-->
<!--    <div class="loader"></div>-->
<!--</div>-->

<!-- Header Section Begin -->
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div class="header__logo">
                    <a href="./index.php">
                        <img src="assets/img/logo.png" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="header__nav">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="active"><a href="./index.php">Trang chủ</a></li>
                            <li><a href="./categories.html">Thể loại <span class="arrow_carrot-down"></span></a>
                                <ul class="dropdown">
                                    <?php
                                    foreach ($all_tl as $theloai){
                                        extract($theloai);
                                        echo '
                                        <li><a href="./categories.html">'.$ten_tl.'</a></li>
                                        ';
                                    }
                                    ?>
                                </ul>
                            </li>
                            <li><a href="index.php?act=gioithieu">Giới thiệu</a></li>
                            <li><a href="index.php?act=blog">Blog</a></li>
                            <li><a href="#">Liên hệ</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="header__right header__menu" style="display: flex;">
                    <a href="#" class="search-switch"><span class="icon_search"></span></a>
                    <ul>
                        <li><span class="icon_profile"></span>
                            <ul class="dropdown">
                            <?php
                                if (UserLogIn()) {
                                    echo '<li><a>Xin chào, ' . getLogInUserName() . '!</a></li>
                                    <li><a href="index.php?act=dangxuat">Đăng xuất</a></li>
                                    <li><a href="index.php?act=change_password">Đổi mật khẩu</a></li>';
                                } else {
                                    echo '<li><a href="index.php?act=login">Đăng nhập</a></li>
                                    <li><a href="index.php?act=register">Đăng ký</a></li>';
                                }
                                ?>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>
<!-- Header End -->