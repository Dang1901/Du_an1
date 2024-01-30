<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dự Án</title>
    <link rel="stylesheet" href="./css/viewcss/style.css">
    <link rel="stylesheet" href="./css/viewcss/header.css">
    <link rel="stylesheet" href="./css/viewcss/footer.css">
    <link rel="stylesheet" href="./css/viewcss/nav-menu.css">
    <link rel="stylesheet" href="./css/viewcss/boxsp.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    
</head>
<style>

</style>
<body>
    <div class="boxcenter">

        <!------------------------------Header--------------------------------->
        <!-- <div class="row mb header">
            <h1>Siêu Thị Của Nâu</h1>
        </div> -->
  <header>
    <div class="logo">
        <a href="index.php?page=home"><img src="./img/logo.jpg" alt="" style="width: 100px;"></a>
    </div>
    <div class="search-bar">
        <form action="index.php?page=sanpham" method="post">
      <input type="text" name="kyw" class="search-input" placeholder="Tìm kiếm..."/>
      <button type="submit" name="timkiem"><i class="fas fa-search"></i></button> 
            </form> 
    </div>
    <a href=""><div class="cart-icon"><i class="fas fa-shopping-cart"></i></div></a>
  </header>

        <!------------------------------Menu--------------------------------->
        <div class="row mb nav-menu">
            <ul>
                <li><a href="index.php?page=home">Trang chủ</a></li>
                <li><a href="index.php?page=gioithieu">Giới thiệu</a></li>
                <li><a href="index.php?page=lienhe">Liên hệ</a></li>
                <li><a href="index.php?page=gopy">Góp ý</a></li>
                <li><a href="index.php?page=hoidap">Hỏi đáp</a></li>
                
            </ul>
        </div>