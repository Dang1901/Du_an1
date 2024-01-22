
<div class="row">
    <div class="col-md-8 grid-margin stretch-card">
        <div class="card">
            <!-- <div class="card-body"> -->
                <h4 class="card-title">Table with contextual classes</h4>
                    <p class="card-description"> Add class <code>.table-{color}</code></p>
                        <table class="table table-bordered table-responsive">
                        <thead>
                            <tr>
                                <th>ID Phim</th>
                                <th>Tên Phim</th>
                                <th>Đạo Diễn</th>
                                <th>Diễn Viên</th>
                                <th>Thể loại</th>
                                <th>Quốc Gia</th>
                                <th>Thời Lượng</th>
                                <th>Ảnh</th>
                                <th>Nội Dung</th>
                                <th>Trailer</th>
                                <th>Thao Tác</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php 
                            foreach ($dsphim as $dsphim) {
                                extract($dsphim);
                                $suasdphim = "index_ad.php?actsuadsphim&id=".$id_phim;
                                $xoasdphim = "index_ad.php?actxoadsphim&id=".$id_phim;
                                echo '
                                        <tr>
                                            <td>'.$id_phim.'</td>
                                            <td>'.$tenphim.'</td>
                                            <td>'.$daodien.'</td>
                                            <td>'.$dienvien.'</td>
                                            <td>'.$theloai.'</td>
                                            <td>'.$quocgia.'</td>
                                            <td>'.$thoiluong.'</td>
                                            <td>'.$img.'</td>
                                            <td>'.$noidung.'</td>
                                            <td>'.$trailer.'</td>
                                            <td>
                                               
                                            </td>       
                                        </tr>
                                   ';
                            }
                        ?>
                         </tbody>
                    </table>
            <!-- </div> -->
        </div>
    </div>
</div>
