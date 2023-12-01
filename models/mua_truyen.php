<?php

    function mua_truyen($id_user,$tien){
        echo "test nap tien";
        $sum_tien_available=so_tien_hien_tai($id_user)['so_tien']-$tien;
        $query="UPDATE `taikhoan` SET `so_tien` = '$sum_tien_available' WHERE `taikhoan`.`id` = '$id_user';";
        pdo_execute($query);
    }
?>