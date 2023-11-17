    <!-- Signup Section Begin -->
    <section class="signup spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login__form">
                        <h3>Quên mật khẩu</h3>
                        <form action="index.php?act=quenmk" method="POST">
                        <div class="input__item">
                                <input type="text" id="email" name="email" required placeholder="Nhập email">
                                <span class="icon_email"></span>
                            </div>
                            <button type="submit" name="submit" class="site-btn">Gửi</button>
                        </form>
                        <?php if (isset($sendMailMess) && $sendMailMess != '') {
                        echo $sendMailMess;
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Signup Section End -->