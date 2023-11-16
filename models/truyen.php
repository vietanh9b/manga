<?php
function load_truyen_home(){
    $sql="select * from truyen where 1 order by id desc limit 0,9";
    $listtruyen=pdo_query($sql);
    return  $listtruyen;
}
function load_truyen_hot(){
//    top 10 lươt xem
    $sql="select * from truyen where 1 order by luotxem desc limit 0,10";
    $listtruyen=pdo_query($sql);
    return $listtruyen;
}
function load_tat_ca_truyen1(){
    $sql="select * from truyen where 1";
    $listtruyen=pdo_query($sql);
    return $listtruyen;
}

//
function load_tat_ca_truyen(){
    $sql="SELECT truyen.id as id_truyen,truyen.ten_truyen as ten_truyen,truyen.ten_khac as ten_khac,truyen.img as img,truyen.mota as mota,truyen.tacgia as tacgia,truyen.ngay as ngay,truyen.luot_xem as luot_xem, theloai.id as id_theloai,theloai.ten_tl as ten_tl,trangthai.trangthai as trangthai FROM truyen INNER JOIN theloai ON truyen.ma_tl=theloai.id INNER JOIN trangthai ON truyen.id_trang_thai=trangthai.id ";
    $listtruyen=pdo_query($sql);
    return $listtruyen;
}

//
function loadone_tryen($id){
    $sql = "select * from truyen where id = $id";
    $result = pdo_query_one($sql);
    return $result;
}
function load_truyen_cungloai($ma_tl){
    $sql = "SELECT truyen.id as id_truyen,truyen.ten_truyen as ten_truyen,truyen.ten_khac as ten_khac,truyen.img as img,truyen.mota as mota,truyen.tacgia as tacgia,truyen.ngay as ngay,truyen.luot_xem as luot_xem, theloai.id as id_theloai,theloai.ten_tl as ten_tl,trangthai.trangthai as trangthai FROM truyen INNER JOIN theloai ON truyen.ma_tl=theloai.id INNER JOIN trangthai ON truyen.id_trang_thai=trangthai.id where ma_tl = $ma_tl";
    $result = pdo_query($sql);
    return $result;
}
function load_sanpham_cungloai_header($iddm){
    $sql = "select * from sanpham where iddm = $iddm";
//    <> nghĩa là khác
    $result = pdo_query($sql);
    return $result;
}
function insert_sanpham($ten_truyen,$ten_khac, $img, $mota, $tac_gia, $ngay, $ma_tl, $id_trang_thai){
    $newDateFormat = date('Y-m-d', strtotime($ngay));
    $sql = "INSERT INTO `truyen`(`ten_truyen`, `ten_khac`, `img`, `mota`, `tacgia`, `ngay`, `ma_tl`, `id_trang_thai`, `luot_xem`) VALUES ('$ten_truyen','$ten_khac','$img', '$mota', '$tac_gia', '$newDateFormat', $ma_tl, $id_trang_thai, 0);";
    return pdo_execute($sql);
}
function delete_sp($id){
    $sql = "DELETE FROM truyen WHERE id =$id";
    return pdo_execute($sql);
}
function update_sanpham($ten_truyen,$ten_khac, $img, $mota, $tac_gia, $ngay, $ma_tl, $id_trang_thai,$id){
    $newDateFormat = date('Y-m-d', strtotime($ngay));
    if($img!==""){
        $sql=  "UPDATE `truyen` SET `ten_truyen` = '{$ten_truyen}', `ten_khac` = '{$ten_khac}', `img` = '{$img}',`mota` = '{$mota}', `tacgia` = '{$tac_gia}' , `ngay` = '{$newDateFormat}' , `ma_tl` = $ma_tl , `id_trang_thai` = $id_trang_thai WHERE `id` = $id";
    }else{
        $sql=  "UPDATE `truyen` SET `ten_truyen` = '{$ten_truyen}', `ten_khac` = '{$ten_khac}',`mota` = '{$mota}', `tacgia` = '{$tac_gia}' , `ngay` = '{$newDateFormat}' , `ma_tl` = $ma_tl , `id_trang_thai` = $id_trang_thai WHERE `id` = $id";
    }
    return pdo_execute($sql);
}