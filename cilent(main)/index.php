<?php
    //session_start();
    include "../admin/model/db.php";
    include "../admin/model/san_pham.php";
    include "../admin/model/danh_muc.php";
    include "view/header.php";
    include "global.php";

    $sp_cilent = list_sp_cilent();
     $dm_cilent = list_dm ();
     

    if (isset($_GET['page'])) {
        $path = $_GET['page'];
        switch ($path) {

            //MENU
            case 'gioithieu':
                include "view/gioithieu.php";
                break;
                
          
            case 'sanpham':
                if(isset($_GET['id_loai']) && ($_GET['id_loai']>0)){
                    $id_loai = $_GET['id_loai'];
                    $ds_sp = list_sp("",$id_loai);
                    $ten_dm = load_dm_sp($id_loai);
                    include "view/sanpham.php";
                }
                include "view/home.php";
                break;
     
           case 'sanphamct':
                if(isset($_GET['idsp']) && ($_GET['idsp']>0)){
                    $id = $_GET['idsp'];
                    $onesp = edit_sp($id);
                    
                    include "view/sanphamct.php";
                }else{
                    include "view/home.php";
                    
                }
                 break;

                 case 'lienhe':
                    include "view/lienhe.php";
                     break;
                case 'gopy':
                    include "view/gopy.php";
                    break;
                 case 'hoidap':
                    include "view/hoidap.php";
                    break; 
            
                
            default:
                include "view/home.php";
                break;
        }
     }

   
    
    

?>