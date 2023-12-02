<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="../index.php"><i class="fa fa-home"></i> Home</a>
                    <a href="../categories.html">Categories</a>
                    <a href="#">Romance</a>
                    <span>Fate Stay Night: Unlimited Blade</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Anime Section Begin -->
<section class="anime-details spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="anime__details__episodes">
                    <div class="section-title">
                        <h5>List Name</h5>
                    </div>
                </div>
                <?php
                foreach ($image as $img_truyen){
                    echo '
                    <div class="page-chapter text-center">
                        <img src="assets/img/img_manga/'.$img_truyen['image'].'" alt="">
                    </div>
                    ';
                }
                ?>

                <div class="anime__details__episodes">
                    <div class="section-title">
                        <h5>List Name</h5>
                    </div>
                    <a href="#">Ep 01</a>
                    <a href="#">Ep 02</a>
                    <a href="#">Ep 03</a>
                    <a href="#">Ep 04</a>
                    <a href="#">Ep 05</a>
                    <a href="#">Ep 06</a>
                    <a href="#">Ep 07</a>
                    <a href="#">Ep 08</a>
                    <a href="#">Ep 09</a>
                    <a href="#">Ep 10</a>
                    <a href="#">Ep 11</a>
                    <a href="#">Ep 12</a>
                    <a href="#">Ep 13</a>
                    <a href="#">Ep 14</a>
                    <a href="#">Ep 15</a>
                    <a href="#">Ep 16</a>
                    <a href="#">Ep 17</a>
                    <a href="#">Ep 18</a>
                    <a href="#">Ep 19</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="anime__details__review">
                    <div class="section-title">
                        <h5>Bình luận</h5>
                    </div>
                    <div class="anime__review__item">
                        <?php foreach($load_comment_chapter as $comment){
                        extract($comment);
                        echo '<div class="anime__review__item__pic">
                            <img src="'.$image.'" alt="">
                        </div>
                        <div class="anime__review__item__text">
                            <h6>'.$u_name.' <span> - </span> <span>'.$ngay_bl.'</span><span> -- Chap</span><span>'.$id_chuong.'</span></h6>
                            <p>'.$noidung.'</p>
                        </div>';
                            }
                            ?>
                    </div>
                </div>
                <div class="anime__details__form">
                    <div class="section-title">
                        <h5>Your Comment</h5>
                    </div>
                    <form action="index.php?act=manga_chapter&id=<?php echo $id_chuong['id_chuong']?>" method="POST">
                        <textarea name="text"></textarea>
                        <button name="comment_chap" type="submit"><i class="fa fa-location-arrow"></i> Review</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Anime Section End -->