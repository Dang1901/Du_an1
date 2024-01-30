<?php 
     include "../admin/model/db.php";
     include "../admin/model/san_pham.php";
     include "../admin/model/danh_muc.php"; 

     $sp_cilent = list_sp_cilent();
     $dm_cilent = list_dm();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link href="assets/images/favicon.ico" type="img/x-icon" rel="shortcut icon"> -->
    <script src="https://kit.fontawesome.com/8c204d0fdf.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/iconfont.min.css">
    <link rel="stylesheet" href="assets/css/plugins.css">
    <link rel="stylesheet" href="assets/css/helper.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <title>Trang chủ</title>
</head>

<body>
    <!--Header section start-->
    <div id="main-wrapper">
        <header class="header header-transparent header-sticky">

        <!-- header top start-->
           <?php include "view/layout/header.php"; ?>

            <!-- header top end-->
            <div class="header-bottom menu-right">
                <div class="container">
                    <div class="row align-items-center">

                        <!--Logo start-->
                        <div class="col-lg-3 col-md-3 col-6 order-lg-1 order-md-1 order-1">
                            <div class="logo">
                                <a href="index.php?page=home"><img src="assets/images/logo.png" alt="logo TG shop"></a>
                            </div>
                        </div>
                        <!--Logo end-->

                        <!--Menu start-->
                        <?php include "view/layout/menu.php"?>
                        <!--Menu end-->

                        <!--Search Cart Start-->
                        <div class="col-lg-3 col-md-3 col-6 order-lg-3 order-md-3 order-2 d-flex justify-content-end">
                            <div class="header-search">
                                <button class="header-search-toggle"><i class="fa fa-search"></i></button>
                                <div class="header-search-form">
                                    <form action="#">
                                        <input type="text" placeholder="Type and hit enter">
                                        <button><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="header-cart">
                                <a href="cart.html"><i class="fa fa-shopping-cart"></i><span>3</span></a>
                            </div>
                        </div>
                        <!--Search Cart End-->
                    </div>

                    <!--Mobile Menu start-->
                    <div class="row">
                        <div class="col-12 d-flex d-lg-none">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                    <!--Mobile Menu end-->
                </div>
            </div>
        </header>
        <!--Brand section start-->
        <?php include "view/layout/brand.php"; ?>
        <!--Brand section end-->
        <!-- HOME START-->


       <?php
             if (isset($_GET['page'])) {
                $path = $_GET['page'];
                switch ($path) {

                    //MENU
                    case 'home':
                        include "view/pages/home.php";
                        break;
                        
                    case 'shop':
                        include "view/pages/shop.php";    
                        break;

                    case 'blog':
                        include "view/pages/blog.php";
                        break;

                    case 'about':
                        include "view/pages/about.php";
                        break;
                    
                    case 'contact':
                        include "view/pages/contact.php"; 
                        break;

                    //CHI_TIEP_SP
                    case 'sp_chitiet':
                        if(isset($_GET['idsp'])&&($_GET['idsp']>0)){
                            $id = $_GET['idsp'];
                            $one_sp = edit_sp($id);
                            include "view/pages/sp_chitiet.php";
                        }else{
                            include "view/pages/home.php";
                            
                        }
                         break;
                    
                        
                    default:
                        include "index.php";
                        break;
                }
             }
       ?>

        <!-- HOME END-->

         <!--Brand section start-->
         <?php include "view/layout/brand.php"; ?>
        <!--Brand section end-->

            <!--Footer Top start-->

      <?php include "view/layout/footer.php"; ?>

        <!--End footer-->
    </div>

</body>

<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>
</body>

</html>