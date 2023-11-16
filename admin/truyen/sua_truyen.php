<main class="app-content">
        <div class="app-title">
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item">Danh sách sản phẩm</li>
                <li class="breadcrumb-item"><a href="#">Thêm sản phẩm</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <h3 class="tile-title">Sửa truyện <?php if (isset($loadone_tryen)) {
                                                            echo $loadone_tryen['ten_truyen'];
                                                        } ?></h3>
                    <div class="tile-body">
                        <div class="row element-button">
                            <div class="col-sm-2">
                                <a class="btn btn-add btn-sm" href="index?act=them_sp&type=0"><i a class="fas fa-folder-plus"></i>Quản lý list truyện</a>
                            </div>
                            <div class="col-sm-2">
                                <a class="btn btn-add btn-sm" href="index?act=them_sp&type=1"><i a class="fas fa-folder-plus"></i>Thêm truyện mới</a>
                            </div>
                        </div>
                        <?php
                        echo '
            <form class="row" action="" method="post">
              <div class="form-group col-md-3">
                <label class="control-label">Tên truyện </label>
                <input class="form-control" type="text" name="ten_truyen" value="' . $loadone_tryen['ten_truyen'] . '" placeholder="" required>
              </div>
              <div class="form-group col-md-3">
                <label class="control-label">Tên khác</label>
                <input class="form-control" type="text" name="ten_khac" value="' . $loadone_tryen['ten_khac'] . '" required>
              </div>


              <div class="form-group  col-md-3">
                <label class="control-label">Tác giả</label>
                <input class="form-control" type="text" name="tac_gia" value="' . $loadone_tryen['tacgia'] . '" required>
              </div>
              <div class="form-group col-md-3 ">
                <label for="exampleSelect1" class="control-label">Ngày xuất bản</label>
                <input class="form-control" type="date" name="ngay" value="' . $loadone_tryen['ngay'] . '" required>
              </div>
              <div class="form-group col-md-3">
                <label for="exampleSelect1" class="control-label">Thể loại</label>
                <select class="form-control" id="exampleSelect1" name="ma_tl" required>';
                        ?>
                        <?php
                        foreach ($loadall_theloai as $key) {
                            if ($loadone_tryen['ma_tl'] == $key['id']) {
                                echo '<option value="' . $key['id'] . '" selected>' . $key['ten_tl'] . '</option>';
                            } else {
                                echo '<option value="' . $key['id'] . '">' . $key['ten_tl'] . '</option>';
                            }
                            $i++;
                        }
                        ?>
                        </select>
                    </div>
                    <div class="form-group col-md-3 ">
                        <label for="exampleSelect1" class="control-label">Trạng thái</label>
                        <select class="form-control" id="exampleSelect1" name="id_trang_thai" required>
                            <?php
                            foreach ($loadall_trangthai as $key) {
                                if ($loadone_tryen['id_trang_thai'] == $key['id']) {
                                    echo '<option value="' . $key['id'] . '" selected>' . $key['trangthai'] . '</option>';
                                } else {
                                    echo '<option value="' . $key['id'] . '">' . $key['trangthai'] . '</option>';
                                }
                                $i++;
                            }
                            ?>
                            <?php
                            echo '
                </select>
              </div>
              <div class="form-group col-md-12">
                <label class="control-label">Ảnh sản phẩm</label>
                <div id="myfileupload">
                  <input type="file" id="uploadfile" name="img" onchange="readURL(this);" />
                </div>
                <div id="thumbbox">
                  <img height="450" width="400" alt="Thumb image" id="thumbimage" style="display: none" />
                  <a class="removeimg" href="javascript:"></a>
                </div>
                <div id="boxchoice">
                  <a href="javascript:" class="Choicefile"><i class="fas fa-cloud-upload-alt"></i> Chọn ảnh</a>
                  <p style="clear:both"></p>
                </div>
              </div>
              <div class="form-group col-md-12">
                <label class="control-label">Mô tả sản phẩm</label>
                <textarea class="form-control" name="mota" id="mota"  required>' . $loadone_tryen['mota'] . '</textarea>
                <script>CKEDITOR.replace("mota");</script>
              </div>
              <button class="btn btn-save" name="save-btn" type="submit">Lưu lại</button>
              </form>         
          ';
                            ?>
                    </div>
                </div>
    </main>