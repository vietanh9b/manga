
    <main class="app-content">
      <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item">Danh sách đơn hàng</li>
          <li class="breadcrumb-item"><a href="#">Thêm đơn hàng</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Thêm mới chương truyện <?= $loadone_tryen['ten_truyen'];?></h3>
            <div class="tile-body">
              <form class="row" action="index.php?act=add_chapter" method="post">
                <div class="form-group col-md-8 d-none">
                  <label class="control-label">ID truyện</label>
                  <input class="form-control" name="id_truyen" type="text" value="<?= $id_truyen;?>">
                </div>
                <div class="form-group col-md-12">
                  <label class="control-label">Chương</label>
                  <input class="form-control" name="chuong_moi_nhat" type="number" value="<?= $chuong_moi_nhat;?>">
                </div>
                  <div class="form-group col-md-12">
                      <select name="type_chuong" id="type_chuong">
                          <option value="0">Miễn phí</option>
                          <option value="1">Có phí</option>
                      </select>
                  </div>
                  <div class="form-group col-md-12 d-none" id="gia">
                      <label class="control-label">Giá</label>
                      <input class="form-control" name="gia" type="number">
                  </div>
                  <button type="submit" class="btn btn-primary" name="submit">Lưu lại</button>
          </div>
        </div>
        </div>
      </div>
    </main>
    <script>
        // Lấy thẻ select và dòng chữ cần ẩn hiện
        const select = document.getElementById('type_chuong');
        const hiddenText = document.getElementById('gia');

        // Thêm sự kiện 'change' vào select
        select.addEventListener('change', function() {
            // Kiểm tra giá trị của select
            if (select.value === '1') {
                // Nếu giá trị là 1, thêm class d-none vào dòng chữ
                hiddenText.classList.remove('d-none');
            } else {
                // Nếu không, xóa class d-none khỏi dòng chữ
                hiddenText.classList.add('d-none');
                // hiddenText.value='0';
                // hiddenText.remove();
            }
        });
    </script>