<?php
    include_once "models/pdo.php";
    include_once "models/theloai.php";
    include_once "models/truyen.php";
    include_once "models/chapter.php";
    include_once "models/trangthai.php";
    include_once "models/image_truyen.php";

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
//                    echo $old_chapter[0]['id'];
//                    echo "<pre>";
//                    print_r($old_chapter);
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
        }
    }else{
        include_once "views/home.php";
    }
    include_once "views/footer.php";
?>