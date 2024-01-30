<div class="row mb">
    <div class="boxtrai mr ">
        <div class="row mb">
        <?php
            extract($onesp);
        ?>  
            <div class="boxtitle"><?=$name?></div>
            <div class="row boxcontent">
                <?php
                    $img = $img_path.$img;
                    echo '<div class = "row mb spct">
                                <img src="'.$img.'">
                            </div>';
                    echo  'Giá:'.$giasp.'đ<br>'; 
                    echo $mota;
                    echo '
                       <form action="index.php?page=addtocart" method="post">
                     <input class="txt themgiohang" type="submit" name="addtocart" value="Thêm giỏ hàng" style="">
                      </form>
                      '
                    
                ?>
            </div>
        </div>
        
       
    </div>

    <div class="boxphai">
        <?php include "boxright.php";?>
    </div>
</div>

