<?php

    function so_tien_hien_tai($id_user){
        $sql="SELECT `so_tien` FROM `taikhoan` WHERE taikhoan.id='$id_user';";
        $query = pdo_query_one($sql);
        return $query;
    }

    function nap_tien($id_user,$tien){
        echo "test nap tien";
        $sum_tien=so_tien_hien_tai($id_user)['so_tien']+$tien;
        $query="UPDATE `taikhoan` SET `so_tien` = '$sum_tien' WHERE `taikhoan`.`id` = '$id_user';";
        pdo_execute($query);
    }
?>