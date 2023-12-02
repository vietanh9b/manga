<?php
//số tiền hiện có
    function so_tien_hien_tai($id_user){
        $sql="SELECT `so_tien` FROM `taikhoan` WHERE taikhoan.id='$id_user';";
        $query = pdo_query_one($sql);
        return $query;
    }
//nạp tiền tài khoản
    function nap_tien($id_user,$tien){
        echo "test nap tien";
        $sum_tien=so_tien_hien_tai($id_user)['so_tien']+$tien;
        $query="UPDATE `taikhoan` SET `so_tien` = '$sum_tien' WHERE `taikhoan`.`id` = '$id_user';";
        pdo_execute($query);
    }
//số tiền còn lại sau khi mua truyện
    function mua_truyen($id_user,$tien){
    //        $sum_tien_available=so_tien_hien_tai($id_user)['so_tien']-$tien;
        $query="UPDATE `taikhoan` SET `so_tien` = '$tien' WHERE `taikhoan`.`id` = '$id_user';";
        pdo_execute($query);
    }
?>