<?php
function lich_su_mua_truyen($id_user,$id_truyen){
    $sql="select * from lich_su_mua_truyen where id_user='$id_user' and id_truyen=$id_truyen;";
    $listtruyen=pdo_query($sql);
    return $listtruyen;
}
?>