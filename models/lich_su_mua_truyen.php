<?php

function insert_truyen_da_mua($id_user,$id_truyen,$gia){
    $query="INSERT INTO `truyen_da_mua` (`id`, `id_user`, `id_truyen`,`gia`) VALUES (NULL, '$id_user', '$id_truyen','$gia');";
    pdo_execute($query);
}

function truyen_da_mua($id_user){
    $query="SELECT truyen.* FROM truyen JOIN truyen_da_mua on truyen_da_mua.id_truyen=truyen.id 
    WHERE truyen_da_mua.id_user='$id_user';";
    $listtruyen=pdo_query($query);
    return $listtruyen;
}

function lich_su_mua_truyen($id_user,$id_truyen){
    $sql="select * from truyen_da_mua where id_user='$id_user' and id_truyen=$id_truyen;";
    $listtruyen=pdo_query($sql);
    return $listtruyen;
}
function so_luong_nguoi_mua(){
    $sql="SELECT truyen.ten_truyen, truyen_da_mua.id_truyen, truyen_da_mua.gia,COUNT(DISTINCT truyen_da_mua.id_user) AS so_luong_nguoi_mua 
FROM truyen_da_mua JOIN truyen ON truyen.id = truyen_da_mua.id_truyen GROUP BY truyen_da_mua.id_truyen, truyen.ten_truyen;";
    $listtruyen=pdo_query($sql);
    return $listtruyen;
}

function tai_khoan_mua_truyen($id_truyen){
    $sql="SELECT taikhoan.* FROM taikhoan JOIN truyen_da_mua on taikhoan.id=truyen_da_mua.id_user 
    where truyen_da_mua.id_truyen='$id_truyen';";
    $listtruyen=pdo_query($sql);
    return $listtruyen;
}
?>