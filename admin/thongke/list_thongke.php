
<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item active"><a href="#"><b>Thống kê</b></a></li>
        </ul>
        <div id="clock"></div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">

                    <div class="row element-button">

                    </div>
                    <div class="row">
                        <div class="col-6 p-0">
                            <table class="table table-hover table-bordered js-copytextarea" cellpadding="0" cellspacing="0" border="0"
                                   id="sampleTable">
                                <thead>
                                <tr>
                                    <th width="10"><input type="checkbox" id="all_cmt"></th>
                                    <th>Số lượng tài khoản đang lưu hành</th>
                                    <th>Tổng số tiền của khách</th>
                                    <th>Trung bình tiền của khách</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($list_thongke as $thongke) {
                                    echo '
                    <tr>
                  <td width="10"><input type="checkbox" name="check2" value="2"></td>
                  <td>'.$thongke['so_luong_tai_khoan'].'</td>
                  <td>'.$thongke['tong_tien_luu_hanh'].' đ</td>
                  <td>'.round($thongke['trung_binh_tien_luu_hanh'] * 100) / 100 .' đ</td>
             
                </tr>
                    ';
                                }
                                $tong_tien_luu_hanh=$thongke['tong_tien_luu_hanh'];
                                ?>

                                </tbody>
                            </table>
                        </div>
                        <div class="col-6 p-0">
                            <table class="table table-hover table-bordered js-copytextarea" cellpadding="0" cellspacing="0" border="0"
                                   id="sampleTable">
                                <thead>
                                <tr>
                                    <th>Số lượng tài khoản đã mua truyện</th>
                                    <th>Tổng số tiền của khách đã mua</th>
                                    <th>Trung bình khách đã mua</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($list_thongke_truyen_da_mua as $thongke) {
                                    echo '
                                    <tr>
                                  <td>'.$thongke['so_luong_tai_khoan_da_mua'].'</td>
                                  <td>'.$thongke['tong_tien_da_mua'].' đ</td>
                                  <td>'.round($thongke['trung_binh_tien_da_mua'] * 100) / 100 .' đ</td>
                                </tr>
                                    ';
                                }
                                $tong_tien_da_mua=$thongke['tong_tien_da_mua'];
                                ?>

                                </tbody>
                            </table>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>



    <div class="row2">
        <div class="row2 font_title">
            <h1>Biểu đồ</h1>
        </div>
        <head>
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
                google.charts.load('current', {'packages':['corechart']});
                google.charts.setOnLoadCallback(drawChart);

                function drawChart() {

                    var data = google.visualization.arrayToDataTable([
                        ['Task', 'Hours per Day'],
                        ['Tiền của khách hiện có',<?= $tong_tien_luu_hanh?>],
                        ['Khách đã mua',      <?= $tong_tien_da_mua?>],
                    ]);

                    var options = {
                        title: 'Biểu đồ'
                    };

                    var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                    chart.draw(data, options);
                }
            </script>
        </head>
        <body>
        <div id="piechart" style="width: 900px; height: 500px;"></div>
        </body>
    </div>





</main>
