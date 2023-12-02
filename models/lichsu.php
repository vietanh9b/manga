<?php
    function insert_lichsu($id_user,$id_chuong,$id_truyen){
        $query="SELECT * FROM `lichsu` WHERE id_user='$id_user' and id_chuong='$id_chuong';";
        $query=pdo_query($query);
        foreach ($query as $value){
            if($value['id_chuong']==$id_chuong){
                return "";
            }
        }
            echo "kkk";
            $sql="INSERT INTO `lichsu` (`id`, `id_user`, `id_chuong`) VALUES (NULL, '$id_user', '$id_chuong');";
            $sql=pdo_execute($sql);
            return  $sql;
    }
//    Lịch sử đọc truyện của từng chap theo từng truyện
//     ví dụ khi mình đọc đến chapter nào thì chapter đó sẽ đen lại
    function lich_su_chapter($id_user){
            $sql="SELECT `id_chuong` FROM `lichsu` WHERE `id_user`='$id_user'";
            $sql=pdo_query($sql);
            return  $sql;
    }
//    tất cả lịch sử trong list lịch sử của user
    function load_lichsu($id_user){
            $sql="SELECT DISTINCT truyen.* FROM truyen JOIN chuong_truyen on chuong_truyen.id_truyen=truyen.id 
            JOIN lichsu ON lichsu.id_chuong = chuong_truyen.id WHERE lichsu.id_user='$id_user';";
            $sql=pdo_query($sql);
            return  $sql;
    }
?>