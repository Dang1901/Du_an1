<?php
   // ADMIN
   function add_sp($name,$id_loai,$img,$giasp,$soluong,$mota){
       $sql = "insert into sanpham(name,id_loai,img,giasp,soluong,mota) values
       ('$name','$id_loai','$img','$giasp','$soluong','$mota')";
       pdo_execute($sql);
   }

   function list_sp($key_word,$id_loai){
    $sql = "select * from sanpham where 1";
    if($key_word!=""){
        $sql.=" and tenloai like '%".$key_word."%'";
    }
    if($id_loai>0){
        $sql.=" and id_loai like '%".$id_loai."%'";
    }  
    $sql.=" order by id desc";
    $list_sp=pdo_query($sql);
    return $list_sp;
   }

   function edit_sp($id){
    $sql = "select * from sanpham where id=".$id;
    $sp = pdo_query_one($sql);
    return $sp;
   }

   function update_sp($id,$name,$id_loai,$img,$giasp,$soluong,$mota){
    if($img!="")
        $sql = "update sanpham set name='$name',id_loai='$id_loai',img='$img',giasp='$giasp',soluong='$soluong',mota='$mota' where id=".$id;
    else
        $sql = "update sanpham set name='$name',id_loai='$id_loai',giasp='$giasp',soluong='$soluong',mota='$mota' where id=".$id;
    pdo_execute($sql);
   }

   function delete_sp($id){
    $sql = "delete from sanpham where id=".$id;
    pdo_execute($sql);
   }

   // CILENT

   function list_sp_cilent(){
    $sql = "select * from sanpham where 1 order by id desc limit 0,9";
    $list_sp=pdo_query($sql);
    return $list_sp;
   }

   function load_dm_sp($id_loai){
    $sql = "select * from loai where id=".$id_loai;
    $dm = pdo_query_one($sql);
    extract($dm);
    return $tenloai;
   }


?>