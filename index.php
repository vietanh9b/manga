<?php
    include_once "models/pdo.php";
    include_once "models/theloai.php";
    include_once "models/truyen.php";
    $all_tl=loadall_theloai();
    $truyen_home=load_truyen_home();
    include_once "views/header.php";
    if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch ($act){
            case "manga_detail":
                include_once "views/manga-details.php";
                break;
            case "gioithieu":
                include_once "views/blog-details.php";
                break;
            case "manga_chapter":
                include_once "views/manga_chapter.php";
                break;
        }
    }else{
        include_once "views/home.php";
    }
    include_once "views/footer.php";
?>