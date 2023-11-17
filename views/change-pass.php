    <!-- Login Section Begin -->
    <section class="login spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login__form">
                        <h3>Đổi mật khẩu</h3>
                        <form action="index.php?act=doipass" method="POST">
                            <div class="input__item">
                                <input type="text" id="password" name="pass" required placeholder="Nhập mật khẩu hiện tại">
                                <span class="icon_lock"></span>
                            </div>
                            <div class="input__item">
                                <input type="text" id="password" name="new_pass" required placeholder="Nhập mật khẩu mới">
                                <span class="icon_lock"></span>
                            </div>
                            <div class="input__item">
                                <input type="text" id="password" name="renew_pass" required placeholder="Nhập lại mật khẩu mới">
                                <span class="icon_lock"></span>
                            </div>
                            <button type="submit" name="submit" class="site-btn">Đổi mật khẩu</button>
                        </form>
                        <?php if (isset($err)) {
                            echo "<span style='color: red'>$err</span>";

                        }
                        if(isset($result)){
                            echo "<span style='color: #146c43'>$result</span>";
                        }
                        ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login__register">
                        <h3>Bạn chưa có tài khoản?</h3>
                        <a href="index.php?act=register" class="primary-btn">Đăng ký ngay</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Login Section End -->