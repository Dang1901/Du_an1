 <!------------------------------Product--------------------------------->
 <div class="row mb ">
            <div class="boxtrai mr">
                <div class="row">
                    <div class="banner">
                        <!-- Slideshow container -->
                        <div class="slideshow-container">

                        <!-- Full-width images with number and caption text -->
                        <div class="mySlides fade">
                        <img src="./img/banner 5.png" style="width:100%">
                        <!-- <div class="text">Caption Text</div> -->
                        </div>

                        <div class="mySlides fade">
                        <img src="./img/banner 6.png" style="width:100%">
                        <!-- <div class="text">Caption Two</div> -->
                        </div>

                        <div class="mySlides fade">
                        <img src="./img/banner 7.png" style="width:100%">
                        <!-- <div class="text">Caption Three</div> -->
                        </div>

                        <div class="mySlides fade">
                        <img src="./img/banner 8.png" style="width:100%">
                        <!-- <div class="text">Caption Four</div> -->
                        </div>

                        <!-- Next and previous buttons -->
                        <!-- <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a> -->
                        </div>
                        <br>

                        <!-- The dots/circles -->
                        <!-- <div style="text-align:center">
                        <span class="dot" onclick="currentSlide(1)"></span>
                        <span class="dot" onclick="currentSlide(2)"></span>
                        <span class="dot" onclick="currentSlide(3)"></span>
                        <span class="dot" onclick="currentSlide(4)"></span>
                        </div> -->
                    </div> 
                </div>
                <div class="row">
                    <?php 
                         $i = 0;
                         foreach ($sp_cilent as $sp) {
                            extract($sp);
                            $linksp = "index.php?page=sanphamct&idsp=".$id;
                            $img = $img_path.$img;
                            if (($i == 2) || ($i == 5) || ($i == 8) || ($i == 11)) {
                                $mr = "";
                            } else {
                                $mr = "mr";
                            }
                            echo    '<div class="boxsp '.$mr.'">
                                        <div class="el-wrapper">
                                        <div class="box-up">
                                        <img class="img" src="'.$img.'" alt="" style="width: 210px; ">
                                        <div class="img-info">
                                            <div class="info-inner">
                                            <a  class="p-name" href="'.$linksp.'">'.$name.'</a>
                                            </div>
                                        </div>
                                        </div>
                            
                                        <div class="box-down">
                                        <div class="h-bg">
                                            <div class="h-bg-inner"></div>
                                        </div>
                            
                                        <a class="cart" href="#">
                                        <form action="index.php?page=addtocart" method="post">
                                                <input type="hidden" name="id" value="'.$id.'">
                                                <input type="hidden" name="name" value="'.$name.'">
                                                <input type="hidden" name="img" value="'.$img.'">
                                                <input type="hidden" name="price" value="'.$giasp.'đ">
                                                <span class="price">'.$giasp.'đ </span>
                                                <span class="add-to-cart" style="margin-left: 60px;">
                                                <input class="txt themgiohang" type="submit" name="addtocart" value="Thêm giỏ hàng" style="">
                                                </span>
                                            </form>
                                        </a>
                                        </div>
                                    </div>
                                    </div>';

                            $i += 1; 
                         }
                    ?>
                    
 
                    <!-- <div class="boxsp ">
                        <div class="row img">
                            <img src="../img/product_1.jpg" alt="">
                        </div>
                        <p>$30</p>
                        <a href="#">Iphone 12</a>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img">
                            <img src="../img/product_2.jpg" alt="">
                        </div>
                        <p>$30</p>
                        <a href="#">Iphone 12</a>
                    </div>
                    <div class="boxsp">
                        <div class="row img">
                            <img src="../img/product_3.jpg" alt="">
                        </div>
                        <p>$30</p>
                        <a href="#">Iphone 12</a>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img">
                            <img src="../img/product_4.jpg" alt="">
                        </div>
                        <p>$30</p>
                        <a href="#">Iphone 12</a>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img">
                            <img src="../img/product_5.jpg" alt="">
                        </div>
                        <p>$30</p>
                        <a href="#">Iphone 12</a>
                    </div>
                    <div class="boxsp">
                        <div class="row img">
                            <img src="../img/product_1.jpg" alt="">
                        </div>
                        <p>$30</p>
                        <a href="#">Iphone 12</a>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img">
                            <img src="../img/product_2.jpg" alt="">
                        </div>
                        <p>$30</p>
                        <a href="#">Iphone 12</a>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img">
                            <img src="../img/product_3.jpg" alt="">
                        </div>
                        <p>$30</p>
                        <a href="#">Iphone 12</a>
                    </div>
                    <div class="boxsp ">
                        <div class="row img">
                            <img src="../img/product_4.jpg" alt="">
                        </div>
                        <p>$30</p>
                        <a href="#">Iphone 12</a>
                    </div> -->
                    
                </div>

            </div>
            <div class="boxphai">
                <?php
                
                    include "boxright.php";            
                 ?>

            </div>
            
        </div>