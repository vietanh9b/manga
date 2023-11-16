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
          <h3 class="tile-title">Thêm truyện mới</h3>
          <div class="tile-body">
            <div class="row element-button">
              <div class="col-sm-2">
                <a class="btn btn-add btn-sm" href="index?act=them_sp&type=0"><i
                    class="fas fa-folder-plus"></i>Quản lý list truyện</a>
              </div>
            </div>
            <form class="row" action="" method="post">
              <div class="form-group col-md-3">
                <label class="control-label">Tên truyện </label>
                <input class="form-control" type="text" name="ten_truyen" placeholder="" required>
              </div>
              <div class="form-group col-md-3">
                <label class="control-label">Tên khác</label>
                <input class="form-control" type="text" name="ten_khac" required>
              </div>


              <div class="form-group  col-md-3">
                <label class="control-label">Tác giả</label>
                <input class="form-control" type="text" name="tac_gia" required>
              </div>
              <div class="form-group col-md-3 ">
                <label for="exampleSelect1" class="control-label">Ngày xuất bản</label>
                <input class="form-control" type="date" name="ngay" required>
              </div>
              <div class="form-group col-md-3">
                <label for="exampleSelect1" class="control-label">Thể loại</label>
                <select class="form-control" id="exampleSelect1" name="ma_tl" required>
                  <?php
                  $i=1;
                  foreach ($loadall_theloai as $key) {
                    if($i==1){
                      echo'<option value="'.$key['id'].'" selected>'.$key['ten_tl'].'</option>';
                    }else{
                      echo'<option value="'.$key['id'].'">'.$key['ten_tl'].'</option>';
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
                  $j=1;
                  foreach ($loadall_trangthai as $key) {
                    if($j==1){
                      echo'<option value="'.$key['id'].'" selected>'.$key['trangthai'].'</option>';
                    }else{
                      echo'<option value="'.$key['id'].'">'.$key['trangthai'].'</option>';
                    }
                    $i++;
                  }
                  ?>
                </select>
              </div>
              <div class="form-group col-md-12">
                <label class="control-label">Ảnh sản phẩm</label>
                <div id="myfileupload">
                  <input type="file" id="uploadfile" name="img" onchange="readURL(this);" required/>
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
                <textarea class="form-control" name="mota" id="mota" required></textarea>
                <script>CKEDITOR.replace('mota');</script>
              </div>

          </div>
          <button class="btn btn-save" name="add-btn" type="submit">Lưu lại</button>
          <a class="btn btn-cancel" href="table-data-product.html">Hủy bỏ</a>
        </form>
        </div>
  </main>