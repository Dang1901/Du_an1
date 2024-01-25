<nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="index.php" class="nav-link">
                <div class="nav-profile-image">
                  <img src="assets/images/faces/face1.jpg" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">Yeager</span>
                  <span class="text-secondary text-small">Project Manager 1</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            

            <li class="nav-item">
               <a  href="index.php?page=danh_muc/list.php" class="nav-link">
                <span class="menu-title">Danh mục</span>
                
               </a>
               <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="index.php?page=list_dm"> Danh sách </a></li>
                  <li class="nav-item"> <a class="nav-link" href="index.php?page=add_dm"> Thêm mới </a></li>
                 
                </ul>
            </li>

            <li class="nav-item">
              <a  href="index.php?page=san_pham/list.php" class="nav-link">
               <span class="menu-title">Sản phẩm</span>
              </a>
              <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="index.php?page=list_sp"> Danh sách </a></li>
                  <li class="nav-item"> <a class="nav-link" href="index.php?page=add_sp"> Thêm mới </a></li>
                 
                </ul>
           </li>

           <li class="nav-item">
            <a  href="index.php?page=nguoi_dung/list.php" class="nav-link">
             <span class="menu-title">Người dùng</span>
            </a>
            <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="index.php?page=nguoi_dung/list.php"> Danh sách </a></li>
                  <li class="nav-item"> <a class="nav-link" href="index.php?page=nguoi_dung/add.php"> Thêm mới </a></li>
                 
                </ul>
         </li>

         <li class="nav-item">
          <a  href="index.php?page=gio_hang/list.php" class="nav-link">
           <span class="menu-title">Giỏ hàng</span>
          </a>
          <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="index.php?page=gio_hang/list.php"> Danh sách </a></li>
                  <li class="nav-item"> <a class="nav-link" href="index.php?page=gio_hang/add.php"> Thêm mới </a></li>
                 
                </ul>
       </li>


           
          </ul>
        </nav>