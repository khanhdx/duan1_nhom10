<section class="ftco-section mt-5">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-10 mb-5 text-center">
                <ul class="product-category d-flex justify-content-center nav">
                    <li><a href='index.php?act=all' class='nav-link btn btn-primary'>All</a></li>

                    
                    <?php
                        if(!empty($list_dm)){
                            foreach($list_dm as $temp){
                                echo "
                                    <li><a href='index.php?act=spdm&id={$temp['id_dm']}' class='nav-link'>{$temp['ten_dm']}</a></li>
                                ";
                            }
                        }
                    ?>

                </ul>
            </div>
        </div>


        <div class="row">

            <?php
                if(!empty($all_sp)){
                    foreach($all_sp as $temp){
                        echo "
                            <div class='col-lg-4 col-md-6 col-sm-6'>
                                <div class='product__item'>
                                    <div class='product__item__pic set-bg' data-setbg='./public/image/anhsanpham/{$temp['anh_sp']}'>
                                        <ul class='product__item__pic__hover'>
                                            <li><a href='index.php?act=spct&id={$temp['id_sp']}'><i class='fa fa-shopping-cart'></i></a></li>
                                        </ul>
                                    </div>
                                    <div class='product__item__text'>
                                        <h6><a href='index.php?act=spct&id={$temp['id_sp']}'>{$temp['ten_sp']}</a></h6>
                                        <h5>". number_format($temp["gia_sp"],0,",",".") ." VND</h5>
                                    </div>
                                </div>
                            </div>
                        ";
                    }
                }
            ?>

        </div>
    </div>
</section>