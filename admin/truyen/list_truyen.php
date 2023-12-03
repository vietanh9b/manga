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
          <h3 class="tile-title">List truyện</h3>
          <div class="tile-body">
            <div class="row element-button">
              <div class="col-sm-2">
                <a class="btn btn-add btn-sm" href="index.php?act=them_sp&type=1"><i
                    class="fas fa-folder-plus"></i> Thêm truyện mới</a>
              </div>
            </div>
            <form class="row" action="" method="post">
              <div class="form-group col-md-3">
                <label for="exampleSelect1" class="control-label">Thể loại</label>
                <select class="form-control" id="exampleSelect1" name="ma_tl" required>
                  <?php
                  $i=1;
                  foreach ($loadall_theloai as $key) {
                    if(isset($_POST["ma_tl"]) && $_POST["ma_tl"]>0){
                        if($_POST["ma_tl"]===$key['id']){
                            echo'<option value="'.$key['id'].'" selected>'.$key['ten_tl'].'</option>';
                            echo'<option value="0">Tất cả</option>';
                          }else{
                            echo'<option value="'.$key['id'].'">'.$key['ten_tl'].'</option>';
                          }
                    }else{
                        if($i==1){
                            echo'<option value="0" selected>Tất cả</option>
                            <option value="'.$key['id'].'">'.$key['ten_tl'].'</option>';
                          }else{
                            echo'<option value="'.$key['id'].'">'.$key['ten_tl'].'</option>';
                          }
                    }
                    $i++;
                  }
                  ?>
                </select>
              </div>
          </div>
          <button class="btn btn-save" name="cate-btn" type="submit">Tìm</button>
        </form>
        </div>
<form action="" method="post">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Tên truyện</th>
      <th scope="col">Tên khác</th>
      <th scope="col">IMG</th>
      <th scope="col">Lượt xem</th>
      <th scope="col">Thể loại</th>
      <th scope="col">Trạng thái</th>
      <th scope="col">Sửa</th>
      <th scope="col">Xóa</th>
    </tr>
  </thead>
  <tbody>
    <form action="" method="post">
    <?php
    if(isset($load_truyen_cungloai)){
        foreach ($load_truyen_cungloai as $key) {
            echo '<tr>
            <th scope="row">'.$key['id_truyen'].'</th>
            <td>'.$key['ten_truyen'].'</td>
            <td>'.$key['ten_khac'].'</td>
            <td>'.$key['img'].'</td>
            <td>'.$key['ten_tl'].'</td>
            <td>'.$key['trangthai'].'</td>
            <td><button type="button" value="'.$key['id_truyen'].'" name="fix-btn" class="btn btn-primary"><a href="index.php?act=them_sp&type=2&product='.$key['id_truyen'].'" style="color: white;">Sửa</a></button></td>
            <td><button type="submit" value="'.$key['id_truyen'].'" name="del-btn" class="btn btn-danger">Xóa</button></td>
          </tr>';
        }   
    }else{
        foreach ($load_tat_ca_truyen as $key) {
            echo '<tr>
            <th scope="row">'.$key['id_truyen'].'</th>
            <td>'.$key['ten_truyen'].'</td>
            <td>'.$key['ten_khac'].'</td>
            <td>'.$key['img'].'</td>
            <td>'.$key['ten_tl'].'</td>
            <td>'.$key['trangthai'].'</td>
            <td><button type="button" value="'.$key['id_truyen'].'" name="fix-btn" class="btn btn-primary"><a href="index.php?act=them_sp&type=2&product='.$key['id_truyen'].'">Sửa</a></button></td>
            <td><button type="submit" value="'.$key['id_truyen'].'" name="del-btn" class="btn btn-danger">Xóa</button></td>
          </tr>';
        }  
    }
    ?>
    </form>
  </tbody>
</table>
</form>
  </main>