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

    function thongke_user($id_user){
        $sql="SELECT 
                MONTH(ngay) AS thang,
                SUM(CASE WHEN trangthai = 1 THEN so_tien ELSE 0 END) AS tien_tieu,
                SUM(CASE WHEN trangthai = 0 THEN so_tien ELSE 0 END) AS tien_nap
            FROM lich_su_tien
            WHERE trangthai IN (0, 1) and id_user='$id_user'
            GROUP BY MONTH(ngay);";
        $list=pdo_query($sql);
        return $list;
    }

    function insert_lich_su_tien($id_user,$trangthai,$so_tien){
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $ngay=date('Y/m/d');
        $query="INSERT INTO `lich_su_tien` (`id`, `id_user`, `trangthai`, `so_tien`, `ngay`) 
        VALUES (NULL, '$id_user', '$trangthai', '$so_tien', '$ngay');";
        pdo_execute($query);
    }

?>