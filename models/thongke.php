<?php
    function list_thongke(){
        $sql="SELECT 
                COUNT(*) AS so_luong_tai_khoan,
                SUM(so_tien) AS tong_tien_luu_hanh,
                AVG(so_tien) AS trung_binh_tien_luu_hanh
            FROM taikhoan;
            ";
        $list=pdo_query($sql);
        return $list;
    }

    function list_thongke_truyen_da_mua(){
        $sql="SELECT 
                COUNT(*) AS so_luong_tai_khoan_da_mua,
                SUM(gia) AS tong_tien_da_mua,
                AVG(gia) AS trung_binh_tien_da_mua
            FROM truyen_da_mua;
                ";
        $list=pdo_query($sql);
        return $list;
    }

?>