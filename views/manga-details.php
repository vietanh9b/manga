<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="../index.php"><i class="fa fa-home"></i> Home</a>
                    <a href="../catanime__details__btnegories.html">Categories</a>
                    <span>Romance</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Anime Section Begin -->
<section class="anime-details spad">
    <div class="container">
        <div class="anime__details__content">
            <div class="row">
                <div class="col-lg-3">
                    <div class="anime__details__pic set-bg" data-setbg="assets/img/trending/<?php echo $loadone_tryen['img']?>">
                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="anime__details__text">
                        <div class="anime__details__title">
                            <h3><?php echo $loadone_tryen['ten_truyen']?></h3>
                            <span><?php echo $loadone_tryen['tacgia']?></span>
                        </div>
                        <div class="anime__details__rating">
                            <div class="rating">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star-half-o"></i></a>
                            </div>
                            <span>1.029 Votes</span>
                        </div>
                        <p><?php echo $loadone_tryen['mota']?></p>
                        <div class="anime__details__widget">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <ul>
                                        <li><span>Kiểu:</span> Manga</li>
                                        <li><span>Studios:</span> Lerche</li>
                                        <li><span>Ngày ra mắt:</span><?php echo $loadone_tryen['ngay']?></li>
                                        <li><span>Trạng thái:</span><?php echo $trangthai[0]['trangthai']?></li>
                                        <li><span>Thể loại:</span> <?php echo $theloai['ten_tl']?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="anime__details__btn">
                            <a href="#" class="follow-btn"><i class="fa fa-heart-o"></i> Follow</a>

                            <a href="index.php?act=manga_chapter&id_chuong=<?= $old_chapter[0]['id'];?>&id_truyen=<?= $old_chapter[0]['id_truyen'];?>" class="watch-btn"><span>Đọc từ đầu</span></a>
                            <a href="index.php?act=manga_chapter&id_chuong=<?= $new_chapter[0]['id'];?>&id_truyen=<?= $new_chapter[0]['id_truyen'];?>" class="watch-btn"><span>Đọc mới nhất</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="anime__details__episodes">
            <div class="section-title">
                <h5>List Name</h5>
            </div>
            <?php
            foreach ($load_chapter_number as $load_chapter_number){
                    if($load_chapter_number['gia']>0){
                        echo "
                            <a href='index.php?act=manga_chapter&id_chuong=".$load_chapter_number['id']."&id_truyen=".$load_chapter_number['id_truyen']."'>Chapter ".$load_chapter_number['chuong_so']." <i class=\"ml-2 fa-solid fa-lock\"></i></a>
                        ";
                    }else{
                        echo "
                        <a href='index.php?act=manga_chapter&id_chuong=".$load_chapter_number['id']."&id_truyen=".$load_chapter_number['id_truyen']."'>Chapter ".$load_chapter_number['chuong_so']."</a>
                    ";
                    }
            }
            ?>

        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="anime__details__review">
                    <div class="section-title">
                        <h5>Bình luận</h5>
                    </div>
                    <div class="anime__review__item">
                        <?php foreach($load_comment as $comment){
                        extract($comment);
                        echo '<div class="anime__review__item__pic">
                            <img src="'.$image.'" alt="">
                        </div>
                        <div class="anime__review__item__text">
                            <h6>'.$u_name.' - <span>'.$ngay_bl.'</span></h6>
                            <p>'.$noidung.'</p>
                        </div>';
                        }?>
                    </div>
                </div>
                <div class="anime__details__form">
                    <div class="section-title">
                        <h5>Your Comment</h5>
                    </div>
                    <form action="index.php?act=manga_detail&id=<?php echo $loadone_tryen['id']?>" method="POST">
                        <textarea name="text"></textarea>
                        <button name="comment" type="submit"><i class="fa fa-location-arrow"></i> Review</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Anime Section End -->