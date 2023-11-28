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
                <table width="100%" cellspacing="10" style="color: #f2f2f2">

                <tr>
                    <th>Ảnh truyện</th>
                    <th>Tên truyện</th>
                    <th>Xóa</th>
                </tr>
                <?php
                foreach ($loadall_yeuthich as $list){
//                                        echo "<pre>";
//                    print_r($list);
//                    echo "</pre>";
                    echo '
                            <tr>
                            <td><img style="display: inline-block" src="assets/img/trending/'.$list['img'].'" alt="" width="190px"></td>
                            <td><span style="color: #f2f2f2">'.$list['ten_truyen'].'</span></td>
                            <td>
                            <a href="index.php?act=xoa_yeuthich&id='.$list['id_yeuthich'].'">Xóa</a>                       
                            </td>
                            </tr>
                    ';
                }
                ?>
                </table>
<!--                <div class="page-chapter" style="width: 200px; margin-bottom: 20px">-->
<!--            </div>-->

        </div>
        </div>
    </div>
</section>
<!-- Anime Section End -->