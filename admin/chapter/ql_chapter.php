
    <main class="app-content">
      <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item active"><a href="#"><b>Quản lý chapter</b></a></li>
        </ul>
        <div id="clock"></div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="row element-button">

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

                <?php
                    foreach ($all_truyen as $truyen){
                        $load_tat_ca_chuong=load_tat_ca_chuong($truyen['id']);
                        $new_chapter=new_chapter($truyen['id']);
//                                echo "<pre>";
//                                print_r($new_chapter);
//                                echo "</pre>";
                        ?>
                  <h2 class="accordion-header mt-4 mb-4" id="headingOne">
                      <?= $truyen['ten_truyen'];?>
                  </h2>
                    <div class="row">
                      <div class="col-sm-2">
                          <a class="btn btn-add btn-sm" href="index.php?act=add_chapter&id_truyen=<?= $truyen['id'];?>&chuong_moi_nhat=<?= $new_chapter[0]['chuong_so'];?>" title="Thêm"><i class="fas fa-plus"></i>
                              Tạo mới</a>
                      </div>
                      </div>
                      <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                          <tr>
                            <th width="10"><input type="checkbox" id="all"></th>
                            <th>Chương</th>
                            <th>Ngày</th>
                            <th>Lượt xem</th>
                            <th>Chức năng</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                            foreach ($load_tat_ca_chuong as $chapter){
                                ?>
                                <tr>
                                    <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                    <td>
                                        <a href="index.php?act=chapter_image&id=<?= $chapter['id'];?>">
                                            Chương <?= $chapter['chuong_so'];?>
                                        </a>
                                    </td>
                                    <td><?= $chapter['ngay'];?></td>
                                    <td><?= $chapter['luot_xem'];?></td>
                                    <td>
                                        <button class="btn btn-primary btn-sm edit" type="button" title="Xóa" id="show-emp"
                                                data-toggle="modal" data-target="#ModalUP">
                                            <a href="index.php?act=delete_chapter&id=<?= $chapter['id'];?>">
                                                <i style="color: #f2f2f2" class="fas fa-trash-alt"></i>
                                            </a>
                                        </button>
                                        <button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp"
                                                data-toggle="modal" data-target="#ModalUP">
                                            <a href="index.php?act=edit_chapter&id=<?= $chapter['id'];?>">
                                                <i style="color: #f2f2f2" class="fas fa-edit"></i>
                                            </a>
                                        </button>
                                    </td>
                                    </button>
                                </tr>
                                <?php
                            }
                        ?>
                        </tbody>
                      </table>

                       <?php
                    }
                ?>

            </div>
          </div>
        </div>
      </div>
    </main>