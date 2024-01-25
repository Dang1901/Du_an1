<?php
   function add_dm($tenloai){
    $sql = "insert into loai(tenloai) values('$tenloai')";
    pdo_execute($sql);
   }

   function list_dm(){
    $sql = "select * from loai order by tenloai";
    $list_dm=pdo_query($sql);
    return $list_dm;
   }

   function edit_dm($id){
    $sql = "select *from loai where id=".$id;
    $dm = pdo_query_one($sql);
    return $dm;
   }

   function update_dm($id,$tenloai){
    $sql = "update loai set tenloai='$tenloai' where id=".$id;
    pdo_execute($sql);
   }

   function delete_dm($id){
    $sql = "delete from loai where id=".$id;
    pdo_execute($sql);
   }
?>