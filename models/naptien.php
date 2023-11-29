<?php
    function nap_tien($id_user,$tien){
        $query="INSERT INTO `naptien` (`id`, `id_user`, `so_tien`) VALUES (NULL, '$id_user', '$tien');";;
        pdo_execute($query);
    }

//    function loadall(){
//        $sql="select * from theloai order by id desc";
//        $listtheloai=pdo_query($sql);
//        return  $listtheloai;
//    }

    function mua_truyen(){

    }
?>