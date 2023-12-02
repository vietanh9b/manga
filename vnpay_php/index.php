<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Tạo mới đơn hàng</title>
        <!-- Bootstrap core CSS -->
        <link href="/vnpay_php/assets/bootstrap.min.css" rel="stylesheet"/>
        <!-- Custom styles for                                                                                                                                                           this template -->
        <link href="/vnpay_php/assets/jumbotron-narrow.css" rel="stylesheet">  
        <script src="/vnpay_php/assets/jquery-1.11.3.min.js"></script>
    </head>

    <body>
        <?php require_once("./config.php"); ?>
        <div class="container">
            <div class="header clearfix">
                <h3 class="text-muted">Nạp xu tài khoản</h3>
            </div>
<!--            <h3>Nạp xu tài khoản</h3>-->
            <div class="table-responsive">
                <form action="vnpay_create_payment.php" id="create_form" method="post">

                    <div class="form-group">
                        <label for="language">Nạp xu tài khoản </label>
                        <select name="order_type" id="order_type" class="form-control">
                            <option value="billpayment">Nạp xu tài khoản</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="order_id">Mã hóa đơn</label>
                        <input class="form-control" id="order_id" name="order_id" type="text" value="<?php echo date("YmdHis") ?>"/>
                    </div>
                    <div class="form-group">
                        <label for="amount">Số tiền</label>
                        <input class="form-control" id="amount"
                               name="amount" type="number" value="10000"/>
                    </div>
                    <div class="form-group" style="display: none">
                        <label for="order_desc">Nội dung thanh toán</label>
                        <textarea class="form-control" cols="20" id="order_desc" name="order_desc" rows="2">Noi dung thanh toan</textarea>
                    </div>
                    <div class="form-group">
                        <label for="bank_code">Ngân hàng</label>
                        <select name="bank_code" id="bank_code" class="form-control">
<!--                            <option value="">Không chọn</option>-->
                            <option value="NCB"> Ngan hang NCB</option>
<!--                            <option value="AGRIBANK"> Ngan hang Agribank</option>-->
<!--                            <option value="SCB"> Ngan hang SCB</option>-->
<!--                            <option value="SACOMBANK">Ngan hang SacomBank</option>-->
<!--                            <option value="EXIMBANK"> Ngan hang EximBank</option>-->
<!--                            <option value="MSBANK"> Ngan hang MSBANK</option>-->
<!--                            <option value="NAMABANK"> Ngan hang NamABank</option>-->
<!--                            <option value="VNMART"> Vi dien tu VnMart</option>-->
<!--                            <option value="VIETINBANK">Ngan hang Vietinbank</option>-->
<!--                            <option value="VIETCOMBANK"> Ngan hang VCB</option>-->
<!--                            <option value="HDBANK">Ngan hang HDBank</option>-->
<!--                            <option value="DONGABANK"> Ngan hang Dong A</option>-->
<!--                            <option value="TPBANK"> Ngân hàng TPBank</option>-->
<!--                            <option value="OJB"> Ngân hàng OceanBank</option>-->
<!--                            <option value="BIDV"> Ngân hàng BIDV</option>-->
<!--                            <option value="TECHCOMBANK"> Ngân hàng Techcombank</option>-->
<!--                            <option value="VPBANK"> Ngan hang VPBank</option>-->
<!--                            <option value="MBBANK"> Ngan hang MBBank</option>-->
<!--                            <option value="ACB"> Ngan hang ACB</option>-->
<!--                            <option value="OCB"> Ngan hang OCB</option>-->
<!--                            <option value="IVB"> Ngan hang IVB</option>-->
<!--                            <option value="VISA"> Thanh toan qua VISA/MASTER</option>-->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="language">Ngôn ngữ</label>
                        <select name="language" id="language" class="form-control">
                            <option value="vn">Tiếng Việt</option>
                            <option value="en">English</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary" id="btnPopup">Thanh toán Post</button>
                    <button type="submit" name="redirect" id="redirect" class="btn btn-primary">Thanh toán Redirect</button>

                </form>
            </div>
            <p>
            </p>
            <footer class="footer">
                <p>&copy; VNPAY <?php echo date('Y')?></p>
            </footer>
        </div>  
         

    </body>
</html>

<!-- index.php -> vnpay_creat_payment -> -->