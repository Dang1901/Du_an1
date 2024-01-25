<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h1>Danh sách hãng</h1>
        
        <table class="table">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Hãng</th>
                          
                          <th>Chức năng</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($list_dm as $dm) { ?>

                         <?= 
                         extract($dm);
                         $edit_dm="index.php?page=edit_dm&id=".$id;
                         $delete_dm="index.php?page=delete_dm&id=".$id;
                         ?>
                         
                          <tr>
                          <td><?= $dm["id"]?></td>
                          <td><?= $dm["tenloai"]?></td>
                          
                          <td><a href="<?=$edit_dm?>"><input type="button" class="btn btn-warning" value="Sửa"></a></td>
                          <td><a href="<?=$delete_dm?>"><input type="button" class="btn btn-danger" value="Xóa"></a></td>
                          
                        </tr>
                        <?php } ?>
                       
                      </tbody>
                    </table>
            
           <a href="index.php?page=add_dm" class="btn btn-primary">Thêm hãng</a>         
</body>
</html>