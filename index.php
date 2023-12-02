<?php
session_start();
    include_once "models/pdo.php";
    include_once "models/theloai.php";
    include_once "models/truyen.php";
    include_once "models/chapter.php";
    include_once "models/trangthai.php";
    include_once "models/image_truyen.php";
    include_once "models/taikhoan.php";
    include_once "models/yeuthich.php";
    include_once "models/lichsu.php";
    include_once "models/lich_su_mua_truyen.php";
    include_once "models/binhluan.php";
//    include_once "vnpay_php/config.php";

    $all_tl=loadall_theloai();
    $truyen_home=load_truyen_home();
    include_once "views/header.php";
    if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch ($act){
//            case "naptien":
//                include_once "vnpay_php/index.php";
//                break;
            case "manga_detail":
                if(isset($_GET['id'])){
                    $id=$_GET['id'];
                    $loadone_tryen=loadone_tryen($id);
                    $trangthai=trangthai($loadone_tryen['id_trang_thai']);
                    $theloai =load_ten_tl($loadone_tryen['ma_tl']);
                    $old_chapter=old_chapter($id);
                    $new_chapter=new_chapter($id);
                    $load_chapter_number=load_chapter_number($id);
//                    echo $old_chapter[0]['id'];
//                    echo "<pre>";
//                    print_r($load_chapter_number);
//                    echo "</pre>";
                    $load_comment=load_comment_comic($id);
                    if (isset($_POST['comment'])) {
                        if (isset($_SESSION['username'])) {
                            $flag_cmt = true;
                            $date = date('Y/m/d', time());
                            $id_user = $_SESSION['iduser'];
                            
                            if (strlen($_POST['text']) == 0) {
                                $flag_cmt = false;
                                $err = 'Bạn chưa viết comment';
                                echo "<script>alert('$err')</script>";
                            }
                            if ($flag_cmt == true) {
                                insert_comment_comic( $_POST['text'], $date, $id_user, $id);
                                echo '
                                <script>
                                window.location.href="index.php?act=manga_detail&id='.$id.'";
                                </script>
                                ';
                            }
                        } else {
                            $err_cmt = 'Bạn hãy đăng nhập để comment';
                            echo "<script>alert('$err_cmt')</script>";
                            // header("location: " . $_SERVER['HTTP_REFERER']);
                        }
                    }
                }
                include_once "views/manga-details.php";
                break;
            case "manga_chapter":
                if(isset($_GET['id_chuong'])){
                    $id_chuong=$_GET['id_chuong'];
                    $loadone_chuong=loadone_chuong($id_chuong);
                    $id_truyen=$_GET['id_truyen'];
                    if($loadone_chuong['gia']>0){
                        if(!isset($_SESSION['iduser'])){
                            echo '<script>
                        var result=confirm("Bạn phải đăng nhập để đọc truyện này!");
                        if(result){
                            window.location.href = "index.php?act=login";
                        }else{
                            alert("Bạn phải đăng nhập để đọc truyện");
                            window.location.href=\'index.php\';
                        }
                        </script>';
                        }else{
                            $lich_su_mua_truyen=lich_su_mua_truyen($_SESSION['iduser'],$id_truyen);
                            if($lich_su_mua_truyen)     {
                                $image=load_all_img_truyen($id_chuong);
                            }else{
                                echo '<script>
                                var result=confirm("Mua truyện!");
                                if(result){
                                    window.location.href = "vnpay_php/index.php";
                                }else{
                                    alert("Bạn phải mua truyện này mới có thể đọc");
                                   window.location.href=\'index.php\';
                                }
                                </script>';
                            }
                        }
                    }else{
                        $image=load_all_img_truyen($id_chuong);
                        if(isset($_SESSION['iduser'])){
                            echo $id_truyen;
                            insert_lichsu($_SESSION['iduser'],$id_truyen);
                        }
                    }
                    $load_comment_chapter=load_comment_chapter($id);
                    if (isset($_POST['comment_chap'])) {
                        if (isset($_SESSION['username'])) {
                            $flag_cmt = true;
                            $date = date('Y/m/d', time());
                            $id_user = $_SESSION['iduser'];
                            
                            if (strlen($_POST['text']) == 0) {
                                $flag_cmt = false;
                                $err_cmt = 'Bạn chưa viết comment';
                                echo "<script>alert('$err_cmt')</script>";
                            }
                            if ($flag_cmt == true) {
                                insert_comment_chapter( $_POST['text'], $date, $id_user, $id_chuong, $id);
                                echo '
                                <script>
                                window.location.href="index.php?act=manga_detail&id='.$id_chuong.'";
                                </script>
                                ';
                            }
                        } else {
                            $err_cmt = 'Bạn hãy đăng nhập để comment';
                            echo "<script>alert('$err_cmt')</script>";
                        }
                    }
                }
                include_once "views/manga_chapter.php";
                break;
            case "gioithieu":
                include_once "views/blog-details.php";
                break;
            case "list_lichsu":
                if(isset($_SESSION['iduser'])){
                    if(isset($err)){
                        $err="";
                    }
                    echo $_SESSION['iduser'];
                    $load_lichsu=load_lichsu($_SESSION['iduser']);
//                    echo "<pre>";
//                    print_r($load_lichsu);
//                    echo "</pre>";
                    include_once "views/list_lichsu.php";
                }
                else{
                    $err="Phải đăng nhập tài khoản mới xem được lịch sử";
                    echo
                    "<script>
                    alert('$err');
                    </script>";
                    echo "
                    <script>
                    window.location.href='index.php';
                </script>
                    ";
                }
                break;
                case 'register':
                    if (isset($_POST['dang_ky'])) {
                        $name = trim($_POST['name']);
                        $email = trim($_POST['email']);
                        $password = trim($_POST['pass']);
                        $dir="assets/uploads/";
                        $up_name=basename($_FILES['images']['name']);
                        $upFile=$dir.$up_name;
                        move_uploaded_file($_FILES['images']['tmp_name'],$upFile);
                        $images=$upFile;
                        $flag_register = true;
                        if ($name == "") {
                            $flag_register = false;
                            $err_name = "Name không được để trống";
                        }
                        if ($email == "") {
                            $flag_register = false;
                            $err_email = "Email không được để trống";
                        }
                        if ($password == "") {
                            $flag_register = false;
                            $err_pass = "Mật khẩu không được để trống";
                        }
                        if ($flag_register) {
                            $query=insert_taikhoan($name, $email, $password, $images);
                            $thongbao = "Đăng ký tài khoản thành công";
                        } else {
                            $thongbao = "Đăng ký tài khoản thất bại";
                        }
                    }
                    include "views/register.php";
                    break;
                    //đăng nhập
                case 'login':
                    if(isset($_POST['login'])){
                        echo "login";
                        $username=$_POST['username'];
                        $pass=$_POST['pass'];
                        $query=find_taikhoan($username,$pass);
                            if($query &&$query['role']==0){
                                $_SESSION['username']=$query['user_name'];
                                $_SESSION['iduser']=$query['id'];
                                echo "
                                <script>
                                window.location.href='index.php';
                                </script>
                                ";
                            }else{
                                $err="Đăng nhập thất bại";
                                include "views/login.php";
                            }
                    }else{
                        include "views/login.php";
                    }
                    break;
                case "dangxuat":
                    session_destroy();
                    echo "
                    <script>
                    window.location.href='index.php';
</script>
                    ";
                    include "views/home.php";
                    break;
                case "doipass":
                    if(isset($_POST['submit'])){
                        $pass=$_POST['pass'];
                        $new_pass=$_POST['new_pass'];
                        $renew_pass=$_POST['renew_pass'];
                        $find_mk=find_matkhau($pass);
                        if($find_mk){
                            if($new_pass==$renew_pass){
                                $result="Đổi mật khẩu thành công";
                                doi_matkhau($new_pass);
                            }else{
                                $err="Nhập lại mật khẩu chưa đúng";
                            }
                        }elseif(empty($pass)){
                            $err="Chưa nhập mật khẩu";
                        }
                        else{
                            $err="Nhập chưa đúng mật khẩu";
                        }
                    }
                    include "views/change-pass.php";
                    break;
                case "quenmk":
                    if(isset($_POST['submit'])){
                        $email = $_POST['email'];
                        $sendMailMess = sendMail($email);
                    }
                    include "views/quenmk.php";
                    break;

            case "list_yeuthich":
                if(isset($_SESSION['iduser'])){
                    $loadall_yeuthich=loadall_yeuthich($_SESSION['iduser']);
//                    echo "<pre>";
//                    print_r($loadall_yeuthich);
//                    echo "</pre>";
                    include_once "views/list_yeuthich.php";
                }
                break;
            case "them_yeuthich":
//                echo $_SESSION['iduser'];
                if(isset($_GET['id_truyen'])&&isset($_SESSION['iduser'])){
                    insert_yeuthich($_SESSION['iduser'],$_GET['id_truyen']);
                }else{
                    $err="Bạn phải đăng nhập mới tim được";
                    echo "<script>
                        alert($err)
</script>";
                }
                include "views/home.php";
                break;
            case "xoa_yeuthich":
                if(isset($_GET['id'])){
                    $id=$_GET['id'];
                    if(isset($_GET['confirm'])&& $_GET['confirm']){
                        xoa_yeuthich($id);
                        echo '<script>window.location.href = "index.php?act=list_yeuthich";</script>';
                    }else{
                        echo '<script>
                        var result=confirm("Bạn có muốn xóa không");
                        if(result){
                            window.location.href = "index.php?act=xoa_yeuthich&id='.$id.'&confirm=true";
                        }else{
                            window.location.href = "index.php?act=list_yeuthich";
                        }
                        </script>';
                    }
                }
                break;
            case "list_theloai":
                if(isset($_GET['id'])){
                    $id=$_GET['id'];
                    $list_theloai=list_theloai($id);
                    include_once "views/list_theloai.php";
                }
                break;
        }
    }else{
        include "views/home.php";
    }
    include_once "views/footer.php";
?>