
<div class="container app-content" style="margin-top: 50px;">
    <div class="row">
        <h2>Đăng nhập vào Admin</h2>
        <form action="index.php?act=dangnhap" method="POST">
            <div class="form-group">
                <label for="username">Tên admin:</label>
                <input type="text" id="username" name="username" required placeholder="Username">
            </div>
            <div class="form-group">
                <label for="pass">Mật khẩu:</label>
                <input type="password" id="pass" name="pass" required placeholder="Password">
            </div>
            <button type="submit" name="submit">Đăng nhập</button>
            <?php
            if(isset($_SESSION['err'])){
                echo $_SESSION['err'];
            }
            ?>
        </form>
    </div>
</div>
