<?php
    function insert_lichsu($id_user,$id_truyen){
        $query="SELECT * FROM `lichsu` WHERE `id_user`='$id_user' and `id_truyen`='$id_truyen';";
        $query=pdo_query($query);
        if($query){
            return "";
        } else{
            echo "kkk";
            $sql="INSERT INTO `lichsu` (`id`, `id_user`, `id_truyen`) VALUES (NULL, '$id_user', '$id_truyen');";
            $sql=pdo_execute($sql);
            return  $sql;
        }
    }
    function load_lichsu($id_user){
            $sql="SELECT truyen.*
            FROM truyen
            INNER JOIN lichsu ON lichsu.id_truyen = truyen.id WHERE lichsu.id_user='$id_user';";
            $sql=pdo_query($sql);
            return  $sql;
    }
?>