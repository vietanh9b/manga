<?php
function hide_comment($id){
    $sql = "UPDATE binhluan SET trangthai ='1' WHERE id = $id";
    return pdo_query($sql);
}
function show_comment($id){
    $sql = "UPDATE `binhluan` SET `trangthai` = '0' WHERE `binhluan`.`id` = $id";
    return pdo_query($sql);
}

function load_all_comment(){
    $sql="SELECT *, taikhoan.user_name as u_name, truyen.ten_truyen FROM binhluan JOIN taikhoan ON binhluan.id_user=taikhoan.id JOIN truyen ON binhluan.id_truyen=truyen.id WHERE 1";
    $load_all_cmt=pdo_query($sql);
    return $load_all_cmt;
}
function load_comment_comic($id){
    $sql= "SELECT *, taikhoan.user_name as u_name, truyen.ten_truyen FROM binhluan JOIN taikhoan ON binhluan.id_user=taikhoan.id JOIN truyen ON binhluan.id_truyen=truyen.id WHERE trangthai='0' and id_truyen='$id'";
    return pdo_query($sql);
}
function load_comment_chapter($id){
    $sql="SELECT *, taikhoan.user_name as u_name, chuong_truyen.id FROM binhluan JOIN taikhoan ON binhluan.id_user=taikhoan.id JOIN chuong_truyen ON binhluan.id_chuong=chuong_truyen.id where id_chuong='$id'";
    return pdo_query($sql);
}

//bình luận trong truyện
function insert_comment_comic($detail,$date,$id_user,$id_comic){
    $sql= "INSERT INTO `binhluan` (`id`, `noidung`, `ngay_bl`, `id_user`, `id_chuong`, `id_truyen`,`trangthai`) VALUES (NULL, '$detail', '$date', '$id_user', NULL, '$id_comic','0');";
    pdo_execute($sql);

}
//bình luận trong chương
function insert_comment_chapter($detail,$date,$id_user,$id_chapter,$id_comic){
    $sql= "INSERT INTO `binhluan` (`id`, `noidung`, `ngay_bl`, `id_user`, `id_chuong`, `id_truyen`,`trangthai`) VALUES (NULL, '$detail', '$date', '$id_user', '$id_chapter', '$id_comic','0');";
    pdo_execute($sql);

}
function delete_comment($id){
    $sql= "DELETE FROM binhluan WHERE id=" .$id;
    pdo_execute($sql);
}
?>