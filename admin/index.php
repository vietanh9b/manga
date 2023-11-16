<?php
include_once "../models/pdo.php";
include_once "../models/theloai.php";
include_once "../models/truyen.php";
include_once "../models/chapter.php";
include_once "../models/image_truyen.php";
include_once "../models/trangthai.php";
include_once "views/header.php";
// include_once "views/sidebar.php";
$all_tl=loadall_theloai();
$all_truyen=load_tat_ca_truyen1();
if(isset($_GET['act'])){
    $act=$_GET['act'];
    switch ($act){
        case "the_loai":
            include_once "theloai/theloai.php";
            break;
        case "them_tl":
            if(isset($_POST['submit'])){
                $id_tl=$_POST['id_tl'];
                $ten_tl=$_POST['ten_tl'];
                insert_tl($id_tl,$ten_tl);
            }
            include_once "theloai/them_tl.php";
            break;
        case "sua_tl":
            if(isset($_GET['id'])){
                $ten_tl_old=load_ten_tl($_GET['id']);
                if(isset($_POST['submit'])){
                    $ten_tl=$_POST['ten_tl'];
                    sua_tl($ten_tl_old['id'],$ten_tl);
                }
            }
            include_once "theloai/sua_tl.php";
            break;
        case "xoa_tl":
            if(isset($_GET['id'])){
                xoa_tl($_GET['id']);
            }
            include_once "theloai/theloai.php";
            break;

        case "chapter":
//            echo "<pre>";
//            print_r($all_truyen);
//            echo "</pre>";
            include "chapter/ql_chapter.php";
            break;
        case "add_chapter":
            if(isset($_GET['id_truyen'])&&isset($_GET['chuong_moi_nhat'])){
                $id_truyen=$_GET['id_truyen'];
                $chuong_moi_nhat=$_GET['chuong_moi_nhat']+1;
                add_chapter($id_truyen,$chuong_moi_nhat);
//                $previous = "javascript:history.go(-1)";
//                echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>";
            }
            include "chapter/ql_chapter.php";
            break;
        case "delete_chapter":
            if(isset($_GET['id'])){
                $id=$_GET['id'];
                delete_chapter($id);
            }
            include "chapter/ql_chapter.php";
            break;
        case "edit_chapter":
            if(isset($_GET['id'])){
                $id=$_GET['id'];
                update_chapter($id);
            }
            include_once "chapter/sua_chapter.php";
            break;
        case "chapter_image":
            if (isset($_GET['id'])){
                $load_all_img_truyen=load_all_img_truyen($_GET['id']);
                $new_image=new_image($_GET['id']);
            }
            if(isset($_POST['submit'])){
                $image=$_POST['image']['name'];
                $target_dir = "../assets/img/img_manga/";
                $target_file = $target_dir . basename($_FILES["image"]["name"]);
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                    echo "Ảnh ". htmlspecialchars( basename( $_FILES["image"]["name"])). " đã được upload.";
                } else {
                    echo "Upload ảnh thất bại.";
                }
            }
            include_once "chapter/image_chapter.php";
            break;
            case "them_sp":
                $loadall_theloai = loadall_theloai();
                $loadall_trangthai = loadall_trangthai();
                if (isset($_GET['type'])&& $_GET['type'] == 0) {
                    if (isset($_POST['del-btn'])) {
                        $check = delete_sp($_POST['del-btn']);
                        if ($check) {
                            echo '<script>alert("Xóa thành công")</script>';
                            if (isset($_POST['ma_tl']) && $_POST['ma_tl'] > 0) {
                                load_truyen_cungloai($_POST['ma_tl']);
                            }
                            load_tat_ca_truyen();
                        }
                    }
                    if (isset($_POST['cate-btn']) && $_POST['ma_tl'] > 0) {
                        $load_truyen_cungloai = load_truyen_cungloai($_POST['ma_tl']);
                    } else {
                        $load_tat_ca_truyen = load_tat_ca_truyen();
                    }
                    include_once "truyen/list_truyen.php";
                } else if (isset($_GET['type'])&&$_GET['type'] == 1) {
                    if (isset($_POST['add-btn'])) {
                        $check = insert_sanpham($_POST['ten_truyen'], $_POST['ten_khac'], $_POST['img'], $_POST['mota'], $_POST['tac_gia'], $_POST['ngay'], $_POST['ma_tl'], $_POST['id_trang_thai']);
                        if ($check) {
                            echo '<script>alert("Thêm thành công")</script>';
                        }
                    }
                    include_once "truyen/add_truyen.php";
                } else if (isset($_GET['type'])&&$_GET['type'] == 2) {
                    if (isset($_POST['save-btn'])) {
                        $check = update_sanpham($_POST['ten_truyen'], $_POST['ten_khac'], $_POST['img'], $_POST['mota'], $_POST['tac_gia'], $_POST['ngay'], $_POST['ma_tl'], $_POST['id_trang_thai'], $_GET['product']);
                        if ($check) {
                            echo '<script>alert("Sửa thành công")</script>';
                            loadone_tryen($_GET['product']);
                        }
                    }
                    $loadone_tryen = loadone_tryen($_GET['product']);
                    include_once "truyen/sua_truyen.php";
                }
                else {
                    if (isset($_POST['del-btn'])) {
                        $check = delete_sp($_POST['del-btn']);
                        if ($check) {
                            echo '<script>alert("Xóa thành công")</script>';
                            if (isset($_POST['ma_tl']) && $_POST['ma_tl'] > 0) {
                                load_truyen_cungloai($_POST['ma_tl']);
                            }
                            load_tat_ca_truyen();
                        }
                    }
                    if (isset($_POST['cate-btn']) && $_POST['ma_tl'] > 0) {
                        $load_truyen_cungloai = load_truyen_cungloai($_POST['ma_tl']);
                    } else {
                        $load_tat_ca_truyen = load_tat_ca_truyen();
                    }
                    include_once "truyen/list_truyen.php";
                }
                // echo "kkk";
                // include_once "truyen/list_truyen.php";
                break;
    }
}else{
    include_once "views/home.php";
}
include_once "views/footer.php";
?>