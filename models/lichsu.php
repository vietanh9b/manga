<?php
    function insert_lichsu($id_user,$id_chuong,$id_truyen){
        $query="SELECT chuong_truyen.id_truyen FROM chuong_truyen 
        join lichsu on lichsu.id_chuong=chuong_truyen.id WHERE lichsu.id_user='$id_user';";
        $query=pdo_query($query);
        echo "<pre>";
        print_r($query);
        echo "</pre>";
        foreach ($query as $value){
            if($value['id_truyen']==$id_truyen){
                return "";
            }
        }
            echo "kkk";
            $sql="INSERT INTO `lichsu` (`id`, `id_user`, `id_chuong`) VALUES (NULL, '$id_user', '$id_chuong');";
            $sql=pdo_execute($sql);
            return  $sql;
    }
    function load_lichsu($id_user){
            $sql="SELECT truyen.* FROM truyen JOIN chuong_truyen on chuong_truyen.id_truyen=truyen.id 
            JOIN lichsu ON lichsu.id_chuong = chuong_truyen.id WHERE lichsu.id_user='$id_user';";
            $sql=pdo_query($sql);
            return  $sql;
    }
?>