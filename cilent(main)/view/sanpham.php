<div class="row mb">
    <div class="boxtrai mr ">
        <div class="row mb">
            <div class="boxtitle"> <strong><?=$ten_dm?></strong></div>
            <div class="row boxcontent">
                <?php
                    $i = 0;
                    foreach ($ds_sp as $sp) {
                        extract($sp);
                        $linksp = "index.php?page=sanphamct&idsp=".$id;
                      $img = $img_path.$img;  
                        if (($i == 2) || ($i == 5) || ($i == 8) || ($i == 12)) {
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
                        <form action="index.php?act=addtocart" method="post">
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
            </div>
        </div>   
    </div>

    <div class="boxphai">
        <?php include "boxright.php";?>
    </div>
</div>
