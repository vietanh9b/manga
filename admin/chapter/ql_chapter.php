
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
              <div class="accordion" id="accordionExample">

                <?php
                    foreach ($all_truyen as $truyen){
                        $load_tat_ca_chuong=load_tat_ca_chuong($truyen['id']);
                        $new_chapter=new_chapter($truyen['id']);

//                                echo "<pre>";
//                                print_r($new_chapter);
//                                echo "</pre>";
                        ?>
                  <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      <?= $truyen['ten_truyen'];?>
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
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
                    </div>
                  </div>
                </div>
                       <?php
                    }
                ?>

<!--                <div class="accordion-item">-->
<!--                  <h2 class="accordion-header" id="headingTwo">-->
<!--                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">-->
<!--                      Tiếng Anh 1.1-->
<!--                    </button>-->
<!--                  </h2>-->
<!--                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">-->
<!--                    <div class="accordion-body">-->
<!--                      <table class="table table-hover table-bordered" id="sampleTable">-->
<!--                        <thead>-->
<!--                          <tr>-->
<!--                            <th width="10"><input type="checkbox" id="all"></th>-->
<!--                            <th>Câu hỏi</th>-->
<!--                            <th>Ngày hoàn thành</th>-->
<!--                            <th>Số sao</th>-->
<!--                            <th>Xem chi tiết</th>-->
<!--                          </tr>-->
<!--                        </thead>-->
<!--                        <tbody>-->
<!--                          <tr>-->
<!--                            <td width="10"><input type="checkbox" name="check1" value="1"></td>-->
<!--                            <td>GV giới thiệu đầy đủ đề cương chi tiết môn học?</td>-->
<!--                            <td>10/09/2023</td>-->
<!--                            <td>5 <i class="fa-solid fa-star"></i></td>-->
<!--                            <td>-->
<!--                              <button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp"-->
<!--                              data-toggle="modal" data-target="#ModalUP"><i class="fas fa-edit"></i>-->
<!--                            </button>-->
<!--                            </td>-->
<!---->
<!--                            </button>-->
<!--                            </tr>-->
<!--                          <tr>-->
<!--                            <td width="10"><input type="checkbox" name="check1" value="1"></td>-->
<!--                            <td>GV phổ biến mục tiêu, chuẩn đầu ra, nội dung và yêu cầu của môn học?</td>-->
<!--                            <td>10/09/2023</td>-->
<!--                            <td>5 <i class="fa-solid fa-star"></i></td>-->
<!--                            <td>-->
<!--                              <button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp"-->
<!--                              data-toggle="modal" data-target="#ModalUP"><i class="fas fa-edit"></i>-->
<!--                            </button>-->
<!--                          </tr>-->
<!--                          <tr>-->
<!--                            <td width="10"><input type="checkbox" name="check1" value="1"></td>-->
<!--                            <td>GV tổ chức lớp học, hướng dẫn sinh viên học tập hiệu quả?</td>-->
<!--                            <td>10/09/2023</td>-->
<!--                            <td>5 <i class="fa-solid fa-star"></i></td>-->
<!--                            <td>-->
<!--                              <button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp"-->
<!--                              data-toggle="modal" data-target="#ModalUP"><i class="fas fa-edit"></i>-->
<!--                            </button>-->
<!--                          </tr>-->
<!--                        </tbody>-->
<!--                      </table>-->
<!--                    </div>-->
<!--                  </div>-->
<!--                </div>-->
<!--                <div class="accordion-item">-->
<!--                  <h2 class="accordion-header" id="headingThree">-->
<!--                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">-->
<!--                      Tin học cơ sở-->
<!--                    </button>-->
<!--                  </h2>-->
<!--                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">-->
<!--                    <div class="accordion-body">-->
<!--                      <table class="table table-hover table-bordered" id="sampleTable">-->
<!--                        <thead>-->
<!--                          <tr>-->
<!--                            <th width="10"><input type="checkbox" id="all"></th>-->
<!--                            <th>Câu hỏi</th>-->
<!--                            <th>Ngày hoàn thành</th>-->
<!--                            <th>Số sao</th>-->
<!--                            <th>Xem chi tiết</th>-->
<!--                          </tr>-->
<!--                        </thead>-->
<!--                        <tbody>-->
<!--                          <tr>-->
<!--                            <td width="10"><input type="checkbox" name="check1" value="1"></td>-->
<!--                            <td>GV giới thiệu đầy đủ đề cương chi tiết môn học?</td>-->
<!--                            <td>10/09/2023</td>-->
<!--                            <td>5 <i class="fa-solid fa-star"></i></td>-->
<!--                            <td>-->
<!--                              <button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp"-->
<!--                              data-toggle="modal" data-target="#ModalUP"><i class="fas fa-edit"></i>-->
<!--                            </button>-->
<!--                            </td>-->
<!---->
<!--                            </button>-->
<!--                            </tr>-->
<!--                          <tr>-->
<!--                            <td width="10"><input type="checkbox" name="check1" value="1"></td>-->
<!--                            <td>GV phổ biến mục tiêu, chuẩn đầu ra, nội dung và yêu cầu của môn học?</td>-->
<!--                            <td>10/09/2023</td>-->
<!--                            <td>5 <i class="fa-solid fa-star"></i></td>-->
<!--                            <td>-->
<!--                              <button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp"-->
<!--                              data-toggle="modal" data-target="#ModalUP"><i class="fas fa-edit"></i>-->
<!--                            </button>-->
<!--                          </tr>-->
<!--                          <tr>-->
<!--                            <td width="10"><input type="checkbox" name="check1" value="1"></td>-->
<!--                            <td>GV tổ chức lớp học, hướng dẫn sinh viên học tập hiệu quả?</td>-->
<!--                            <td>10/09/2023</td>-->
<!--                            <td>5 <i class="fa-solid fa-star"></i></td>-->
<!--                            <td>-->
<!--                              <button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp"-->
<!--                              data-toggle="modal" data-target="#ModalUP"><i class="fas fa-edit"></i>-->
<!--                            </button>-->
<!--                          </tr>-->
<!--                        </tbody>-->
<!--                      </table>-->
<!--                    </div>-->
<!--                  </div>-->
<!--                </div>-->
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
<!--    <div class="modal fade" id="ModalUP" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static"-->
<!--    data-keyboard="false">-->
<!--    <div class="modal-dialog modal-dialog-centered" role="document">-->
<!--      <div class="modal-content">-->
<!--        <div class="modal-body">-->
<!--          <div class="row">-->
<!--            <div class="form-group  col-md-12">-->
<!--              <span class="thong-tin-thanh-toan">-->
<!--                <h5>Chi tiết đánh giá</h5>-->
<!--              </span>-->
<!--            </div>-->
<!--          </div>-->
<!--          <div class="row">-->
<!--            <div class="form-group col-md-10">-->
<!--              <label class="control-label">Nhận xét từ sinh viên</label>-->
<!--              <input class="form-control" type="text" required value="Cô có khả năng làm cho mọi thứ dễ hiểu" disabled>-->
<!--            </div>-->
<!--            <div class="form-group col-md-2">-->
<!--              <label class="control-label">Số sao</label>-->
<!--              <!-- <input class="form-control" type="text" required value="Võ Trường"> -->-->
<!--              <div class="form-control">-->
<!--              5 <i class="fa-solid fa-star"></i>-->
<!--              </div>-->
<!--            </div>-->
<!--            <div class="form-group col-md-10">-->
<!--              <input class="form-control" type="text" required value="Cô đó rất quan tâm học sinh" disabled>-->
<!--            </div>-->
<!--            <div class="form-group col-md-2">-->
<!--              <div class="form-control">-->
<!--              4 <i class="fa-solid fa-star"></i>-->
<!--              </div>-->
<!--            </div>-->
<!--          </div>-->
<!---->
<!--          <button class="btn btn-save" type="button">Lưu lại</button>-->
<!--          <a class="btn btn-cancel" data-dismiss="modal" href="#">Hủy bỏ</a>-->
<!--          <BR>-->
<!--        </div>-->
<!--        <div class="modal-footer">-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->