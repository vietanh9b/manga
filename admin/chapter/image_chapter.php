<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item">Ảnh của chapter</li>
            <li class="breadcrumb-item"><a href="#">Tạo mới</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Quản lý ảnh của chapter</h3>
                <div class="tile-body">
                    <div class="row element-button">
                        <div class="col-sm-2">
                            <a class="btn btn-add btn-sm" data-toggle="modal" data-target="#exampleModalCenter"><b><i class="fas fa-folder-plus"></i> Tạo tình trạng mới</b></a>
                        </div>
                    </div>
                    <form class="row" method="post" enctype="multipart/form-data" action="">
                        <div class="form-group col-md-12">
                            <label class="control-label">Chọn tệp</label>
                            <input class="form-control" type="file" name="image">
                        </div>
                        <br>
                        <?php
                        foreach($load_all_img_truyen as $img_truyen){
                            ?>
                            <div class="container_img col-md-2">
                                <p >Ảnh <?= $img_truyen['img_so'];?></p>
                                <img src="../assets/img/img_manga/<?= $img_truyen['image'];?>" alt="img truyện"
                                     style="
                                  width: 120px;
                                    margin-bottom: 20px;">
                            </div>

<!--                                echo "<pre>";-->
<!--                                print_r($truyen);-->
<!--                                echo "</pre>";-->
                        <?php
                        }
                        ?>

                        </form>
                </div>
                <button class="btn btn-save" type="submit" name="submit" style="background: antiquewhite;">Lưu lại</button>
                <a class="btn btn-cancel" href="/doc/table-data-banned.html" style="background: antiquewhite;">Hủy bỏ</a>
            </div>
            </div>
    </div>
</main>