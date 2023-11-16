<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item">Quản lý nội bộ</li>
            <li class="breadcrumb-item"><a href="#">Tạo mới</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Tạo mới danh sách nội bộ</h3>
                <div class="tile-body">
                    <div class="row element-button">
                        <div class="col-sm-2">
                            <a class="btn btn-add btn-sm" data-toggle="modal" data-target="#exampleModalCenter"><b><i
                                            class="fas fa-folder-plus"></i> Tạo tình trạng mới</b></a>
                        </div>

                    </div>
                    <form class="row">
                        <div class="form-group col-md-4">
                            <label class="control-label">Họ và tên</label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label">Ngày sinh</label>
                            <input class="form-control" type="date">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleSelect1" class="control-label">Chức vụ</label>
                            <select class="form-control" id="exampleSelect1">
                                <option>-- Chọn chức vụ --</option>
                                <option>Bán hàng</option>
                                <option>Tư vấn</option>
                                <option>Dịch vụ</option>
                                <option>Thu Ngân</option>
                                <option>Quản kho</option>
                                <option>Bảo trì</option>
                                <option>Kiểm hàng</option>
                                <option>Bảo vệ</option>
                                <option>Tạp vụ</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label">Nhập lý do</label>
                            <textarea class="form-control" rows="4"></textarea>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleSelect1" class="control-label">Tình trạng</label>
                            <select class="form-control" id="exampleSelect1">
                                <option>-- Chọn tình trạng --</option>
                                <option>Sa thải</option>
                                <option>Khóa tài khoản</option>
                            </select>
                        </div>

                        <div class="tile-footer">
                        </div>
                </div>
                <button class="btn btn-save" type="button" style="background: antiquewhite;">Lưu lại</button>
                <a class="btn btn-cancel" href="/doc/table-data-banned.html" style="background: antiquewhite;">Hủy bỏ</a>
            </div>
</main>