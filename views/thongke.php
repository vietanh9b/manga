<section class="blog spad">
    <div class="container">
        <div class="row">
            <head>
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <script type="text/javascript">
                    google.charts.load('current', {'packages':['corechart']});
                    google.charts.setOnLoadCallback(drawChart);

                    function drawChart() {
                        var data = google.visualization.arrayToDataTable([
                            ['Tháng', 'Tiền đã nạp', 'Tiền đã tiêu'],
                            <?php
                            foreach ($thongke_user as $value):
                            extract($value);
                            ?>
                            ['<?= $thang;?>',<?= $tien_nap;?>,<?= $tien_tieu;?>],
                            <?php endforeach;?>
                        ]);

                        var options = {
                            title: 'Thống kê của tôi',
                            hAxis: {title: 'Tháng',  titleTextStyle: {color: '#333'}},
                            vAxis: {minValue: 0}
                        };

                        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
                        chart.draw(data, options);
                    }
                </script>
            </head>
            <body>
            <div id="chart_div" style="width: 100%; height: 500px;"></div>
            </body>
        </div>
    </div>
</section>