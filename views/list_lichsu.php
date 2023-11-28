<!-- Normal Breadcrumb Begin -->
<section class="normal-breadcrumb set-bg" data-setbg="assets/img/normal-breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="normal__breadcrumb__text">
                    <h2>Lịch sử đọc truyện</h2>
                    <p>Chào mừng bạn đến với website</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Normal Breadcrumb End -->

<!-- Blog Section Begin -->
<section class="blog spad">
    <div class="container">
        <div class="row">
            <?php
            foreach ($load_lichsu as $truyen){
//                    echo "<pre>";
//                    print_r($truyen);
//                    echo "</pre>";
                echo '
                            <div class="col-lg-3 col-md-6 col-sm-6">
      
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="assets/img/trending/'.$truyen['img'].'">
                                        <div class="heart" style="
                                        font-size: 13px;
                                        display: inline-block;
                                        position: absolute;
                                        text-align: right;
                                        right: 10px;
                                        top: 10px;
                                        ">
                                        <a href="index.php?act=them_yeuthich&id_truyen='.$truyen['id'].'"><i 
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
                                        <h5><a href="index.php?act=manga_detail&id='.$truyen['id'].'">'.$truyen['ten_truyen'].'</a></h5>
                                    </div>
                                </div>
                  
                            </div>
                            ';
            }
            ?>
        </div>
    </div>
</section>
<!-- Blog Section End -->