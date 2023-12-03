
  <main class="app-content">
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb side">
        <li class="breadcrumb-item active"><a href="#"><b>Danh sách người dùng</b></a></li>
      </ul>
      <div id="clock"></div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <div class="tile-body">

            <div class="row element-button">
              <div class="col-sm-2">

                <a class="btn btn-add btn-sm" href="index.php?act=add_users" title="Thêm"><i class="fas fa-plus"></i>
                  Thêm người dùng mới</a>
              </div>
              <div class="col-sm-2">
                <a class="btn btn-delete btn-sm nhap-tu-file" type="button" title="Nhập" onclick="myFunction(this)"><i
                    class="fas fa-file-upload"></i> Tải từ file</a>
              </div>

              <div class="col-sm-2">
                <a class="btn btn-delete btn-sm print-file" type="button" title="In" onclick="myApp.printTable()"><i
                    class="fas fa-print"></i> In dữ liệu</a>
              </div>
              <div class="col-sm-2">
                <a class="btn btn-delete btn-sm print-file js-textareacopybtn" type="button" title="Sao chép"><i
                    class="fas fa-copy"></i> Sao chép</a>
              </div>

              <div class="col-sm-2">
                <a class="btn btn-excel btn-sm" href="" title="In"><i class="fas fa-file-excel"></i> Xuất Excel</a>
              </div>
              <div class="col-sm-2">
                <a class="btn btn-delete btn-sm pdf-file" type="button" title="In" onclick="myFunction(this)"><i
                    class="fas fa-file-pdf"></i> Xuất PDF</a>
              </div>
              <div class="col-sm-2">
                <a class="btn btn-delete btn-sm" type="button" title="Xóa" onclick="myFunction(this)"><i
                    class="fas fa-trash-alt"></i> Xóa tất cả </a>
              </div>
            </div>
            <table class="table table-hover table-bordered js-copytextarea" cellpadding="0" cellspacing="0" border="0"
              id="sampleTable">
              <thead>
                <tr>
                  <th width="10"><input type="checkbox" id="all_user"></th>
                  <th width="100">ID người dùng</th>
                  <th width="500">Tên người dùng</th>
                  <th width="200">Email</th>
                    <th width="100">Số tiền</th>
                    <th width="100">Mật khẩu</th>
                    <th width="100">Chức năng</th>
                </tr>
              </thead>
              <tbody>
              <?php
                foreach ($load_all_tk as $tk){
                    echo '
                    <tr>
                  <td width="10"><input type="checkbox" name="check2" value="2"></td>
                  <td>'.$tk['id'].'</td>
                  <td>'.$tk['user_name'].'</td>
                  <td>'.$tk['email'].'</td>
                  <td>'.$tk['so_tien'].' đ</td>
                  <td>'.$tk['pass_word'].'</td>
                  <td>
                  <a href="index.php?act=xoatk&id='.$tk['id'].'">
                  <button class="btn btn-primary btn-sm trash" type="button" title="Xóa"
                      onclick="myFunction(this)"><i class="fas fa-trash-alt"></i>
                    </button>
</a>
             
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
