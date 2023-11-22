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

    $all_tl=loadall_theloai();
    $truyen_home=load_truyen_home();
    include_once "views/header.php";
    if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch ($act){
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
                }
                include_once "views/manga-details.php";
                break;
            case "manga_chapter":
                if(isset($_GET['id_chuong'])){
                    $id_chuong=$_GET['id_chuong'];
                    $image=load_all_img_truyen($id_chuong);
//                    echo "<pre>";
//                    print_r($image);
//                    echo "</pre>";
                }

                include_once "views/manga_chapter.php";
                break;
            case "gioithieu":
                include_once "views/blog-details.php";
                break;

            case "blog":
                include_once "views/blog.php";
                break;
                case 'register':
                    if (isset($_POST['dang_ky'])) {
                        $name = trim($_POST['name']);
                        $email = trim($_POST['email']);
                        $password = trim($_POST['pass']);
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
                            $query=insert_taikhoan($name, $email,  $password);
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
                                include "views/home.php";
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
                    echo $_SESSION['iduser'];
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
                    echo
                    "<script>
                    alert('$err');
</script>";
                }
                include "views/home.php";
                break;
            case "xoa_yeuthich":
                if(isset($_GET['id'])){
                    $id=$_GET['id'];
                    xoa_yeuthich($id);
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