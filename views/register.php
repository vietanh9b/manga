    <!-- Normal Breadcrumb Begin -->
    <section class="normal-breadcrumb set-bg" data-setbg="./asset/img/normal-breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="normal__breadcrumb__text">
                        <h2>Đăng ký</h2>
                        <p>Welcome to the official Anime blog.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Normal Breadcrumb End -->

    <!-- Signup Section Begin -->
    <section class="signup spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login__form">
                        <h3>Đăng ký</h3>
                        <form action="index.php?act=register" method="POST"  enctype="multipart/form-data">
                        <div class="input__item">
                                <input type="text" name="name" placeholder="<?php echo isset($err_name) ? $err_name : "" ?>">
                                <span class="icon_profile"></span>
                            </div>
                            <div class="input__item">
                                <input type="text" name="email" placeholder="<?php echo isset($err_email) ? $err_email : "" ?>">
                                <span class="icon_mail"></span>
                            </div>
                            <div class="input__item">
                                <input type="text" name="pass" placeholder="<?php echo isset($err_pass) ? $err_pass : "" ?>">
                                <span class="icon_lock"></span>
                            </div>
                            <div class="input_item">
                                <input type="file" name="images" accept="image/*">
                            </div>
                            <button type="submit" name="dang_ky" class="site-btn">Đăng ký ngay</button>
                        </form>
                        <span style="color:red;" class=""><?php echo isset($thongbao) ? $thongbao : "" ?></span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login__register">
                        <h3>Đã có tài khoản?</h3>
                        <a href="index.php?act=login" class="primary-btn">Đăng nhập</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Signup Section End -->
