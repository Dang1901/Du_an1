<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1>Danh sách sản phẩm</h1>

      <form action="index.php?page=list_sp" method="post">
        <input type="text" name="key_word" >

        <select name="id_loai" id="">
            <option value="0">Tất cả</option>
                            <?php foreach ($list_dm as $dm) {
                                  extract($dm);
                                 
                                  echo '<option value="'.$id.'">
                                   '.$tenloai.'
                                   </option>';
                                }?>
                             
            </select>
             <input type="submit" name="list_ok" class="btn btn-info" value="Đi">              
      </form>
        
       <table class="table">
          <thead>
              <tr>
              <th>ID</th>
              <th>Sản phẩm</th>
              
              <th>Ảnh</th>
              <th>Số lượng</th>
              <th>Giá</tr>
              <th>Mô tả</th>
              <th>Chức năng</th>
              </tr>
             
          </thead>

           <tbody>
              <?php foreach ($list_sp as $sp) { ?>

              <?php 
               extract($sp);
               $edit_sp="index.php?page=edit_sp&id=".$id;
               $delete_sp="index.php?page=delete_sp&id=".$id;
              
                 ?>
              
            <tr>
                <td><?= $sp["id"]?></td>
                <td><?= $sp["name"]?></td>
                
                <td>
                      <img src="upload/<?=$sp['img']?>" height="100px" width="150px" alt="">
                    
                </td>
                <td><?= $sp["soluong"]?></td>
                <td><?= $sp["giasp"]?></td>
                <td><?= $sp["mota"]?></td>
                <td>
                    <a href="<?= $edit_sp?>"><input type="button" class="btn btn-warning" value="Sửa"></a>
                    <a href="<?= $delete_sp?>"><input type="button" class="btn btn-danger" value="Xóa"></a>
                </td>
            </tr>
             
             <?php } ?> 
               
           </tbody>
       </table>

       <a href="index.php?page=add_sp" class="btn btn-primary">Thêm sản phẩm</a>
</body>
</html>