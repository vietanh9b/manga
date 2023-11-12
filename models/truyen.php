<?php
function load_truyen_home(){
    $sql="select * from truyen where 1 order by id desc limit 0,9";
    $listtruyen=pdo_query($sql);
    return  $listtruyen;
}
function load_truyen_hot(){
//    top 10 lươt xem
    $sql="select * from sanpham where 1 order by luotxem desc limit 0,10";
    $listtruyen=pdo_query($sql);
    return $listtruyen;
}
function load_tat_ca_truyen(){
    $sql="select * from sanpham where 1";
    $listtruyen=pdo_query($sql);
    return $listtruyen;
}

//
function loadone_tryen($id){
    $sql = "select * from sanpham where id = $id";
    $result = pdo_query_one($sql);
    return $result;
}
function load_truyen_cungloai($id, $iddm){
    $sql = "select * from sanpham where iddm = $iddm and id <> $id";
//    <> nghĩa là khác
    $result = pdo_query($sql);
    return $result;
}
function load_sanpham_cungloai_header($iddm){
    $sql = "select * from sanpham where iddm = $iddm";
//    <> nghĩa là khác
    $result = pdo_query($sql);
    return $result;
}
function insert_sanpham($tensp,$giasp, $hinh, $mota, $iddm){
    $sql = "INSERT INTO `sanpham`(`name`, `price`, `img`, `mota`, `iddm`) VALUES ('$tensp', '$giasp', '$hinh', '$mota', '$iddm');";
    pdo_execute($sql);
}
function delete_sp($id){
    $sql = "DELETE FROM sanpham WHERE id=" .$id;
    pdo_execute($sql);
}
function update_sanpham($id,$iddm,$tensp,$giasp,$mota,$hinh){
    if($hinh!=""){
        // $sql="update sanpham set iddm='".$iddm."',name='".$tensp."',price='".$giasp."',mota='".$mota."',img='".$hinh."' where id=".$id;
        $sql=  "UPDATE `sanpham` SET `name` = '{$tensp}', `price` = '{$giasp}', `mota` = '{$mota}',`img` = '{$hinh}', `iddm` = '{$iddm}' WHERE `sanpham`.`id` = $id";
    }else{
        //  $sql="update sanpham set iddm='".$iddm."',name='".$tensp."',price='".$giasp."',mota='".$mota."' where id=".$id;
        $sql=  "UPDATE `sanpham` SET `name` = '{$tensp}', `price` = '{$giasp}', `mota` = '{$mota}', `iddm` = '{$iddm}' WHERE `sanpham`.`id` = $id";
    }
    pdo_execute($sql);
}