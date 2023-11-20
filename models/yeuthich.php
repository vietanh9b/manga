<?php
function insert_yeuthich($id_user,$id_truyen){
    $query="INSERT INTO `yeuthich` (`id`, `id_user`, `id_truyen`) VALUES (NULL, '".$id_user."', '".$id_truyen."');";
    pdo_execute($query);
}

function loadall_yeuthich($id_user){
    $sql="select truyen.img, truyen.ten_truyen,yeuthich.id as id_yeuthich  from truyen join yeuthich on truyen.id=yeuthich.id_truyen 
            join taikhoan ON yeuthich.id_user=taikhoan.id where taikhoan.id=".$id_user.";";
    $listtheloai=pdo_query($sql);
    return  $listtheloai;
}

function xoa_yeuthich($id){
    $query="DELETE FROM yeuthich WHERE `yeuthich`.`id` = ".$id.";";
    pdo_execute($query);
}

function sua_yeuthich($idtl,$new_name){
    $query = "UPDATE `theloai` SET `ten_tl` = '" . $new_name . "' WHERE `theloai`.`id` = '" . $idtl . "';";
    pdo_execute($query);
}

?>