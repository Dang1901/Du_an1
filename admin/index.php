<?php include "./model/db.php";
      include "./model/danh_muc.php"; 
      include "./model/san_pham.php"; 
      
?>
<!DOCTYPE html>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/purple-bootstrap-admin-template/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/purple-bootstrap-admin-template/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>

      
      <!-- partial:partials/_navbar.html -->
    <?php include "layout/header.php";?>
      <!-- partial -->


      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
      <?php include "layout/sidebar.php";?>
        <!-- partial -->
        
        <div class="main-panel">
               <?php
                  if(isset($_GET["page"])){
                    $path=$_GET["page"];
                    switch ($path) {
                    
                      //Danh mục
                      case 'add_dm':
                        if(isset($_POST["submit"]) && ($_POST["submit"])){
                         $tenloai = $_POST["tenloai"];
                         add_dm($tenloai);
                         $thongbao = "Thêm thành công";
                        }
                         include "pages/danh_muc/add.php";
                        break;

                         case 'list_dm':
                         $list_dm=list_dm();
                         include "pages/danh_muc/list.php";
                         break;
                        
                         case 'edit_dm':
                          if(isset($_GET['id']) && ($_GET['id']>0)){
                            $id = $_GET['id'];
                            $dm = edit_dm($_GET['id']);

                          }
                          
                         include "pages/danh_muc/update.php";
                         break;

                         case 'update_dm':
                          if(isset($_POST["update"]) && ($_POST["update"])){
                            $tenloai = $_POST["tenloai"];
                            $id = $_POST["id"];
                            update_dm($id,$tenloai);
                            $thongbao = "Cập nhật thành công";
                           }
                          
                           $list_dm=list_dm();
                          include "pages/danh_muc/list.php";
                         break;

                         
                         case 'delete_dm':
                          if(isset($_GET['id']) && ($_GET['id']>0)){
                            $id = $_GET['id'];
                            delete_dm($_GET['id']);
                          }
                          $list_dm=list_dm();
                          include "pages/danh_muc/list.php";
                          break;
                         
                         
                      //Sản phẩm
                       case 'add_sp':   
                        if(isset($_POST["submit"]) && ($_POST["submit"])){
                          
                          $name = $_POST["name"];
                          $id_loai = $_POST["id_loai"];
                          $giasp = $_POST["giasp"];
                          $soluong = $_POST["soluong"];
                          $mota = $_POST["mota"];
                          
                          $img = $_FILES["img"]["name"];
                          $target_dir = "upload/";
                          $target_file = $target_dir.basename($_FILES["img"]["name"]);
                          move_uploaded_file($_FILES["img"]["tmp_name"],$target_file);
                          
                          add_sp($name,$id_loai,$img,$giasp,$soluong,$mota);
                        }
                        $list_dm=list_dm();
                        include "pages/san_pham/add.php";
                        break;

                        case 'list_sp':
                          if(isset($_POST["list_ok"]) && ($_POST["list_ok"])){
                            $key_word = $_POST["key_word"];
                            $id_loai = $_POST["id_loai"];
                          }else{
                             $key_word= "";
                             $id_loai= 0;
                          }
                            
                          $list_sp = list_sp($key_word,$id_loai);
                          $list_dm = list_dm();
                          include "pages/san_pham/list.php";
                        break;

                        case 'edit_sp':
                          if(isset($_GET['id']) && ($_GET['id']>0)){
                            $id = $_GET['id'];
                            $sp = edit_sp($_GET['id']);

                          }
                          $list_dm=list_dm();
                         include "pages/san_pham/update.php";
                         break;

                         case 'update_sp':
                          if(isset($_POST["update"]) && ($_POST["update"])){
                            $id=$_POST["id"];
                            $name = $_POST["name"];
                            $id_loai = $_POST["id_loai"];
                            $giasp = $_POST["giasp"];
                            $soluong = $_POST["soluong"];
                            $mota = $_POST["mota"];

                          $img = $_FILES["img"]["name"];
                          $target_dir = "upload/";
                          $target_file = $target_dir.basename($_FILES["img"]["name"]);
                          move_uploaded_file($_FILES["img"]["tmp_name"],$target_file);

                            update_sp($id,$name,$id_loai,$img,$giasp,$soluong,$mota);
                            $thongbao = "Cập nhật thành công";
                           }
                           $list_dm=list_dm();
                           $list_sp = list_sp("",0);
                          include "pages/san_pham/list.php";
                         break;

                        case 'delete_sp':
                          if(isset($_GET['id']) && ($_GET['id']>0)){
                            $id = $_GET['id'];
                            delete_sp($_GET['id']);
                          }
                          $list_sp=list_sp("",0);
                          include "pages/san_pham/list.php";
                          break;

                      default:
                        include "layout/home.php";
                        break;
                    }
                  }else{
                       include "layout/home.php";
                  }
                    
                  
               ?>
        </div>
        
      
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>