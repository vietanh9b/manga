<?php
    function insert_lichsu($id_user,$id_chapter){
        echo "test";
        $query="SELECT * FROM `lichsu` WHERE `id_user`='$id_user' AND `id_chuong`='$id_chapter';";
        $query=pdo_query($query);
//        echo $query;
        if(!$query){
            echo "kkk";
            $sql="INSERT INTO `lichsu` (`id`, `id_user`, `id_chuong`) VALUES (NULL, '$id_user', '$id_chapter');";
            $sql=pdo_execute($sql);
            return  $sql;
        }
    }
    function load_lichsu($id_user){
            $sql="SELECT *FROM truyen JOIN chuong_truyen on truyen.id=chuong_truyen.id_truyen JOIN lichsu on lichsu.id_chuong=chuong_truyen.id WHERE lichsu.id_user='$id_user';";
            $sql=pdo_query($sql);
            return  $sql;
            "SELECT truyen.id as id_truyen, truyen.ten_truyen as ten_truyen, truyen. FROM truyen JOIN chuong_truyen on truyen.id=chuong_truyen.id_truyen JOIN lichsu on lichsu.id_chuong=chuong_truyen.id WHERE lichsu.id_user=3;";
    }
?>