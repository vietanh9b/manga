<?php
function trangthai($id_trangthai_truyen){
    $sql="SELECT * FROM `trangthai` WHERE id= $id_trangthai_truyen";
    $listtruyen=pdo_query($sql);
    return $listtruyen;
}
function loadall_trangthai(){
    $sql="select * from trangthai order by id ASC";
    $listtrangthai=pdo_query($sql);
    return $listtrangthai;
}
?>