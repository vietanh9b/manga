<?php


function load_tat_ca_chuong($id_truyen){
    $sql="select * from chuong_truyen where id_truyen=$id_truyen;";
    $listtruyen=pdo_query($sql);
    return $listtruyen;
}

function loadone_chuong($id){
    $sql = "select chuong_truyen.*,ten_truyen from chuong_truyen 
    join truyen on chuong_truyen.id_truyen=truyen.id where chuong_truyen.id = '$id'";
    $result = pdo_query_one($sql);
    return $result;
}

function load_chapter_number($id_truyen){
    $sql="select * FROM chuong_truyen WHERE chuong_truyen.id_truyen=$id_truyen;";
    $id=pdo_query($sql);
    return $id;
}

function chapter($id_chapter){
    $sql="SELECT * FROM chuong_truyen WHERE id = $id_chapter;";
    $id=pdo_query($sql);
    return $id;
}

function old_chapter($id_truyen){
    $sql="SELECT * FROM chuong_truyen WHERE id_truyen = $id_truyen ORDER BY `chuong_so` ASC LIMIT 1;";
    $id=pdo_query($sql);
    return $id;
}

function new_chapter($id_truyen){
    $sql="SELECT * FROM chuong_truyen WHERE id_truyen = $id_truyen ORDER BY `chuong_so` DESC LIMIT 1;";
    $id=pdo_query($sql);
    return $id;
}

function add_chapter($id_truyen,$chuong,$gia){
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $date=date('Y/m/d');
    $sql="INSERT INTO `chuong_truyen` (`id`, `chuong_so`, `id_truyen`, `ngay`, `luot_xem`,`gia`) VALUES (NULL, '".$chuong."', '".$id_truyen."', '".$date."', '0','$gia');";
    $id=pdo_execute($sql);
    return $id;
}

function delete_chapter($id_chuong){
    $sql="DELETE FROM `chuong_truyen` WHERE `chuong_truyen`.`id` = $id_chuong;";
    $id=pdo_execute($sql);
    return $id;
}

function update_chapter($id,$chuong_so,$ngay,$luot_xem,$gia){
    $sql="UPDATE `chuong_truyen` SET `id` = '$id', `chuong_so` = '".$chuong_so."', 
            `ngay` = '".$ngay."', `luot_xem` = '".$luot_xem."', `gia` = '$gia' WHERE `chuong_truyen`.`id` = '".$id."';";
    $id=pdo_execute($sql);
    return $id;
}
?>