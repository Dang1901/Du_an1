<?php
   if(is_array($sp)){
     extract($sp);
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <h1>Cập nhật sản phẩm:<?=$name?></h1>

      <form class="forms-sample" action="index.php?page=update_sp" method="post" enctype="multipart/form-data">
       
      
 
       <div class="form-group row">
                         <label for="name" class="col-sm-3 col-form-label">Sản phẩm</label>
                         <div class="col-sm-9">
                           <input type="text" class="form-control" name="name" value="<?=$name?>">
                         </div>
                       </div>

                       <div class="form-group row">
                         <label for="categories" class="col-sm-3 col-form-label">Hãng</label>
                         <div class="col-sm-9">
                           <select name="id_loai" id="">
                            <?php foreach ($list_dm as $dm) {
                                  extract($dm);
                                  if($id_loai == $id)
                                 
                                  echo '<option value="'.$id.'" selected>
                                   '.$tenloai.'
                                   </option>';
                                   else
                                   echo '<option value="'.$id.'">'.$tenloai.'</option>';
                                }?>
                             
                             
                            
                           
                           </select>
                         </div>
                       </div>

                       <div class="form-group row">
                         <label for="img" class="col-sm-3 col-form-label">Ảnh</label>
                         <div class="col-sm-9">
                           <input type="file" class="form-control" name="img" >
                           <img src="upload/<?=$sp['img']?>" height="100px" width="150px" alt="">
                         </div>
                       </div>

                       <div class="form-group row">
                         <label for="giasp" class="col-sm-3 col-form-label">Giá</label>
                         <div class="col-sm-9">
                           <input type="number" class="form-control" name="giasp" value="<?=$giasp?>">
                         </div>
                       </div>

                       

                       <div class="form-group row">
                         <label for="soluong" class="col-sm-3 col-form-label">Số lượng</label>
                         <div class="col-sm-9">
                           <input type="number" class="form-control" name="soluong" value="<?=$soluong?>">
                         </div>
                       </div>

                       <div class="form-group row">
                         <label for="mota" class="col-sm-3 col-form-label">Mô tả</label>
                         <div class="col-sm-9">
                           <textarea name="mota"  cols="30" rows="10"><?=$mota?></textarea>
                         </div>
                       </div>


                       
                        <input type="hidden" name="id" value="<?= $id?>">
                        <input type="submit" class="btn btn-gradient-primary me-2" name="update" value="Cập nhật">
                       <input type="reset" class="btn btn-light" value="Hủy">
                       <a href="index.php?page=list_sp" class="btn btn-info">Danh sách</a>
 
                       <?php
                          if(isset($thongbao) &&($thongbao!=""))
                             echo $thongbao;
                          
                       ?>
                     </form>
</body>
</html>