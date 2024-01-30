

    <div class="row mb">
        <div class="boxtitle">Tai Khoan</div>
        <div class="boxcontent formtaikhoan">
            <?php
                if (isset($_SESSION['user'])) {
                    extract($_SESSION['user']);
            ?>
            
            <div class="row mb10">
                Xin chào </br>
                <?=$user?>
            </div>

            <div class="row mb10">
                
                <button class="btn-hover color-1"><a href="index.php?page=edit_tk">Cập nhật tài khoản</a></button>

            <?php if ($role == 1) {?>        
                <button class="btn-hover color-1"><a href="../admin/index.php">Đăng nhập Admin</a></button>
            <?php } ?>        

                <button class="btn-hover color-1"><a href="index.php?page=logout">Đăng xuất</a></button>
            </div>

            <?php
                }else{
            ?>

            <form action="index.php?page=dangnhap" method="post">
                <div class="row mb10">
                    Tên đăng nhập <br>
                    <input type="text" name="user">
                </div>
                <div class="row mb10">
                    Mật khẩu <br>
                    <input type="password" name="pass">
                </div>

                <div class="row mb10">
                    <input type="checkbox" name="">Ghi nhớ tài khoản ?
                </div>
                <div class="row mb10">
                    <input type="submit" value="Đăng nhập" name="dangnhap"> 
                </div>
            </form>

            <li class="li"><a  class="a"href="index.php?page=quenmk">Quên mật khẩu</a></li>
            <li class="li"><a class="a" href="index.php?page=dangky">Đăng ký thành viên</a></li>

            <?php }?>

        </div>
    </div>
    <div class="row mb">
        <div class="boxtitle">Danh Muc</div>
        <div class="boxcontent2 menudoc">
            <ul>
                <?php 
                    foreach ($dm_cilent as $dm) {
                        extract($dm);
                        $linkdm = "index.php?page=sanpham&id_loai=" .$id;
                    
                        echo '<li>
                                    <a class="a" href="'.$linkdm.'">'.$tenloai.'</a>
                                </li>'; 
                                                        
                    }
                ?>
                <!-- <li><a href="#">Điện thoại</a></li> 
                <li><a href="#">Laptop</a></li>
                <li><a href="#">Ipad</a></li>
                <li><a href="#">Đồng hồ</a></li>
                <li><a href="#">Điện thoại</a></li>
                <li><a href="#">Laptop</a></li>
                <li><a href="#">Ipad</a></li>   
                <li><a href="#">Đồng hồ</a></li> -->
            </ul>
        </div>
        <div class="boxfooter searchbox">
            <form action="index.php?page=sanpham" method="post">
                <input type="text" name="kyw">
                <button type="submit" name="timkiem">Tìm kiếm</button>
            </form>   
        </div>
    </div>
    <div class="row mb">
        <div class="boxtitle">Top 10 Yeu Thich</div>
        <div class="row boxcontent">
           
            <!-- <div class="row mb10 top10">
                <img src="../img/product_2.jpg" alt="">
                <a href="#">Iphone ne pro</a>
            </div>
            <div class="row mb10 top10">
                <img src="../img/product_2.jpg" alt="">
                <a href="#">Iphone ne pro</a>
            </div>
            <div class="row mb10 top10">
                <img src="../img/product_2.jpg" alt="">
                <a href="#">Iphone ne pro</a>
            </div>
            <div class="row mb10 top10">
                <img src="../img/product_2.jpg" alt="">
                <a href="#">Iphone ne pro</a>
            </div> -->

        </div>
    </div>

