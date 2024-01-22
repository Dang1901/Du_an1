<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1>Danh sách sản phẩm</h1>
        
       <table class="table">
          <thead>
              <tr>
              <th>ID</th>
              <th>Sản phẩm</th>
              <th>Hãng</th>
              <th>Ảnh</th>
              <th>Số lượng</th>
              <th>Giá</tr>
              <th>Trạng thái</th>
              <th>Chức năng</th>
              </tr>
             
          </thead>

           <tbody>

            <tr>
                <td>1</td>
                <td>Iphone 15 Pro max</td>
                <td>Apple</td>
                <td><img src="" alt=""></td>
                <td>200</td>
                <td>40.500.000đ</td>
                <td>Còn</td>
                <td>
                    <a href="index.php?page=san_pham/update.php" class="btn btn-warning">Sửa</a>
                    <a href="index.php?page=san_pham/delete.php" class="btn btn-danger">Xóa</a>
                </td>
            </tr>
             
               <tr>
                <td>2</td>
                <td>Xiaomi note 10s</td>
                <td>Xiaomi</td>
                <td><img src="" alt=""></td>
                <td>150</td>
                <td>6.450.000đ</td>
                <td>Còn</td>
                <td>
                    <a href="index.php?page=san_pham/update.php" class="btn btn-warning">Sửa</a>
                    <a href="index.php?page=san_pham/delete.php" class="btn btn-danger">Xóa</a>
                </td>
            </tr>
               
           </tbody>
       </table>

       <a href="index.php?page=san_pham/add.php" class="btn btn-primary">Thêm sản phẩm</a>
</body>
</html>