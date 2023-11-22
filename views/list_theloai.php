<!-- Hero Section Begin -->
<section class="hero">
    <div class="container">
        <div class="hero__slider owl-carousel">
            <div class="hero__items set-bg" data-setbg="assets/img/hero/hero-1.jpg">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hero__text">
                            <div class="label">Adventure</div>
                            <h2>Fate / Stay Night: Unlimited Blade Works</h2>
                            <p>After 30 days of travel across the world...</p>
                            <a href="#"><span>Watch Now</span> <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__items set-bg" data-setbg="assets/img/hero/hero-1.jpg">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hero__text">
                            <div class="label">Adventure</div>
                            <h2>Fate / Stay Night: Unlimited Blade Works</h2>
                            <p>After 30 days of travel across the world...</p>
                            <a href="#"><span>Watch Now</span> <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__items set-bg" data-setbg="assets/img/hero/hero-1.jpg">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hero__text">
                            <div class="label">Adventure</div>
                            <h2>Fate / Stay Night: Unlimited Blade Works</h2>
                            <p>After 30 days of travel across the world...</p>
                            <a href="#"><span>Watch Now</span> <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Product Section Begin -->
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="trending__product">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <div class="section-title">
                                <h4>Trending Now</h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="btn__all">
                                <a href="#" class="primary-btn">View All <span class="arrow_right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php
                        foreach ($list_theloai as $truyen){
                            extract($truyen);
                                                echo "<pre>";
                                                echo $id;
//                    print_r($truyen['id']);
                    echo "</pre>";
                            echo '
                            <div class="col-lg-4 col-md-6 col-sm-6">
                            <a href="index.php?act=manga_detail&id='.$id.'">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="assets/img/trending/'.$img.'">
                                        <div class="heart" style="
                                        font-size: 13px;
                                        display: inline-block;
                                        position: absolute;
                                        text-align: right;
                                        right: 10px;
                                        top: 10px;
                                        ">
                                        <a href="index.php?act=them_yeuthich&id_truyen='.$id.'"><i 
                                        style="font-size: 20px"
                                        class="fa-solid fa-heart"></i></a>
                                        </div>
                                        <div class="ep">18 / 18</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                        </ul>
                                        <h5><a href="index.php?act=manga_detail&id='.$id.'">'.$ten_truyen.'</a></h5>
                                    </div>
                                </div>
                            </a>
                            </div>
                            ';
                        }
                        ?>
                    </div>
                </div>
            </div>
            <?php
            include_once "views/box_right.php";
            ?>
        </div>
    </div>
</section>
<!-- Product Section End -->
