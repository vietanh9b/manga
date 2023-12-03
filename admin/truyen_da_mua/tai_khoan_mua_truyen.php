
<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item active"><a href="#"><b>Danh sách người dùng mua truyện <?= $ten_truyen;?></b></a></li>
        </ul>
        <div id="clock"></div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">

                    <table class="table table-hover table-bordered js-copytextarea" cellpadding="0" cellspacing="0" border="0"
                           id="sampleTable">
                        <thead>
                        <tr>
                            <th width="10"><input type="checkbox" id="all_user"></th>
                            <th width="100">ID người dùng</th>
                            <th width="500">Tên người dùng</th>
                            <th width="200">Email</th>
                            <th width="100">Giá truyện</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($tai_khoan_mua_truyen as $tk){
                            echo '
                    <tr>
                  <td width="10"><input type="checkbox" name="check2" value="2"></td>
                  <td>'.$tk['id'].'</td>
                  <td>'.$tk['user_name'].'</td>
                  <td>'.$tk['email'].'</td>
                  <td>'.$gia.' đ</td>
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
