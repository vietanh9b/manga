<?php
    function load_all_img_truyen($id_chapter){
        $sql="SELECT * FROM `image_truyen` WHERE id_chuong=$id_chapter ORDER by `img_so` ASC;";
        $listtruyen=pdo_query($sql);
        return $listtruyen;
    }

    function new_image($id_chapter){
        $sql="SELECT * FROM image_truyen WHERE id_chuong = $id_chapter ORDER BY `img_so` DESC LIMIT 1;";
        $id=pdo_query($sql);
        return $id;
    }

    function insert_img_chapter($image,$id_chapter,$img_so){
        $sql="INSERT INTO `image_truyen` (`id`, `image`, `id_chuong`, `img_so`) VALUES (NULL, '".$image."', '".$id_chapter."', '".$img_so."');";
        $id=pdo_execute($sql);
        return $id;
    }

function delete_image($id_image){
    $sql="DELETE FROM `image_truyen` WHERE `id`= '".$id_image."';";
    $id=pdo_execute($sql);
    return $id;
}
?>