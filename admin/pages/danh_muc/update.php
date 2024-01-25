<?php
   if(is_array($dm)){
     extract($dm);
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


      <h1>Cập nhật hãng</h1>
       
      <form class="forms-sample" action="index.php?page=update_dm" method="post">
       
      <div class="form-group row">
                        <label for="maloai" class="col-sm-3 col-form-label">Mã</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="maloai" disabled>
                        </div>
                      </div>

      <div class="form-group row">
                        <label for="categories" class="col-sm-3 col-form-label">Hãng</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="tenloai" value="<?= $tenloai ?>">
                        </div>
                      </div>
                      
                      <input type="hidden" name="id" value="<?=$id?>">
                      <input type="submit" class="btn btn-gradient-primary me-2" name="update" value="Cập nhật">
                      <input type="reset" class="btn btn-light" value="Hủy">
                      <a href="index.php?page=list_dm" class="btn btn-info">Danh sách</a>

                      <?php
                         if(isset($thongbao) && ($thongbao!=""))
                            echo $thongbao;
                         
                      ?>
                    </form>
</body>
</html>