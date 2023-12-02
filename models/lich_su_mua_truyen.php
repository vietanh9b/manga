<?php

function truyen_da_mua($id_user,$id_truyen){
    $query="INSERT INTO `truyen_da_mua` (`id`, `id_user`, `id_truyen`) VALUES (NULL, '$id_user', '$id_truyen');";
    pdo_execute($query);
}

function lich_su_mua_truyen($id_user,$id_truyen){
    $sql="select * from truyen_da_mua where id_user='$id_user' and id_truyen=$id_truyen;";
    $listtruyen=pdo_query($sql);
    return $listtruyen;
}
?>