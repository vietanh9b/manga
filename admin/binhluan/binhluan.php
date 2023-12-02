<main class="app-content">
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb side">
        <li class="breadcrumb-item active"><a href="index.php?act=list_cmt"><b>Danh sách bình luận</b></a></li>
      </ul>
      <div id="clock"></div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <div class="tile-body">

            <div class="row element-button">

            </div>
            <table class="table table-hover table-bordered js-copytextarea" cellpadding="0" cellspacing="0" border="0"
              id="sampleTable">
              <thead>
                <tr>
                  <th width="10"><input type="checkbox" id="all_cmt"></th>
                  <th width="50">ID</th>
                  <th width="300">Nội dung</th>
                  <th width="200">Ngày bình luận</th>
                  <th width="50">Tên người dùng</th>
                  <th width="50">Chương</th>
                  <th width="150">Truyện</th>
                  <th width="100">Trạng thái</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach ($load_all_cmt as $cmt){
                  extract($cmt);
                    echo '
                    <tr>
                  <td width="10"><input type="checkbox" name="check2" value="2"></td>
                  <td>'.$cmt['id'].'</td>
                  <td>'.$cmt['noidung'].'</td>
                  <td>'.$cmt['ngay_bl'].'</td>
                  <td>'.$cmt['u_name'].'</td>
                  <td>'.$cmt['id_chuong'].'</td>
                  <td>'.$cmt['ten_truyen'].'</td>
                  <td>'.$cmt['trangthai'].'</td>
                  <td>
                  <a href="index.php?act=del_cmt&id='.$cmt['id'].'">
                  <button class="btn btn-primary btn-sm trash" type="button" title="Xóa"
                    onclick="myFunction(this)"><i class="fas fa-trash-alt"></i>
                  </button>
                  </a>

                  <a href="index.php?act=hide_cmt&id='.$cmt['id'].'">
                  <button class="btn btn-primary btn-sm" type="button" title="Ẩn"
                    onclick=""><i class="fas fa-eye-slash"></i>
                  </button></a>

                  <a href="index.php?act=show_cmt&id='.$cmt['id'].'">
                  <button class="btn btn-primary btn-sm" type="button" title="Hiện"
                    onclick=""><i class="fas fa-eye"></i>
                  </button></a>
                  </td>
                </tr>
                    ';
                }
              ?>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </main>
