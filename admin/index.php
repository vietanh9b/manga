<?php
include_once "../models/pdo.php";
include_once "../models/theloai.php";
$all_tl=loadall_theloai();
include_once "views/header.php";
if(isset($_GET['act'])){
    $act=$_GET['act'];
    switch ($act){
        case "them_tl":
            if(isset($_POST['submit'])){
                $id_tl=$_POST['id_tl'];
                $ten_tl=$_POST['ten_tl'];
                insert_tl($id_tl,$ten_tl);
            }
            include_once "theloai/them_tl.php";
            break;
        case "sua_tl_get":
            include_once "theloai/sua_tl.php";
            break;
        case "sua_tl":
            $ten_tl_old=load_ten_tl($id);
            if(isset($_POST['submit'])){
                $ten_tl=$_POST['ten_tl'];
                sua_tl($id,$ten_tl);
            }
            include_once "theloai/sua_tl.php";
            break;
        case "xoa_tl":
            if(isset($_GET['id'])){
                xoa_tl($_GET['id']);
            }
            include_once "theloai/theloai.php";
            break;
    }
}else{
    include_once "theloai/theloai.php";
}
include_once "views/footer.php";
?>