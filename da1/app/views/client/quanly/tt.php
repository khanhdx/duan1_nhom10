<!-- =============================BANNER CON PHAN THANH TOAN=================== -->
<section class="breadcrumb-section set-bg" data-setbg="./public/assets/dist/img/breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Thanh toán</h2>
                    <div class="breadcrumb__option">
                        <a href="./index.html">Home</a>
                        <span>Checkout</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- ====================================THANH TOAN============================= -->

<section class="checkout spad">
    <div class="container">
        <div class="checkout__form">
            <h4>Chi tiết thanh toán</h4>
            <form action="index.php?act=ql&type=add" method="POST">
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <div class="checkout__input">
                            <p>Địa chỉ<span> *</span></p>
                            <input type="text" name='diachi_dh' required value="<?= $list['diachi_nd']??"" ?>">
                        </div>  
                        <div class="checkout__input">
                            <p>Số điện thoại<span>*</span></p>
                            <input type="text" name='sdt_dh' required value="<?= $list['sdt_nd']??"" ?>" class="checkout__input__add">
                        </div>
                        <div class="checkout__input">
                            <p>Ghi chú<span>*</span></p>
                            <textarea name="ghichu_dh" id="" cols="90" rows="10"></textarea>
                        </div>
                    </div>





                    <!-- ======================HOA DON CUA TOI================== -->
                    <div class="col-lg-4 col-md-6">
                        <div class="checkout__order">
                            <h4>Hóa đơn của bạn</h4>
                            <div class="checkout__order__products">Sản phẩm <span> <span>Giá tiền</span></div>
                            <ul>
                                <?php
                                    $tongtien = 0;
                                    foreach($list_gh_bt as $key => $temp){
                                        echo "<li>". $temp['ten_sp'] ." <b> " .$temp['size_bt'] ."</b> <span>". number_format($temp['gia_sp'],0,",",".") ."</span></li>";
                                        echo "<small>SL: ". $_SESSION["cart"][$key]["soluong"]  ."</small>";
                                        
                                        $tongtien += $_SESSION["cart"][$key]["soluong"] * $temp["gia_sp"];
                                    }
                                ?>
                            </ul>
                            <div class="checkout__order__total">Tổng tiền<span>
                                    <input type="hidden" value="<?= $tongtien ?>" name="giagoc_dh">
                                    <?= number_format($tongtien,0,",",".") ?>
                            </span></div>
                            <div class="checkout__order__subtotal">Khuyến mãi <span><?= $phantram_km??"" ?> %</span></div>
                            <input type="hidden" value="<?= $phantram_km ?>" name="phantram_km">
                            <?php
                                    $tongtien = $tongtien - ($tongtien * ($phantram_km/100));
                            ?>
                            <div class="checkout__order__total">Tổng tiền phải trả<span>
                                    <input type="hidden" value="<?= $tongtien ?>" name="giakm_dh">
                                    <?= number_format($tongtien,0,",",".") ?>
                            </span></div>
                            <div class="checkout__input__checkbox">
                                <label for="payment">
                                    Thanh toán online
                                    <input type="checkbox" id="payment" disabled>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="checkout__input__checkbox">
                                <label for="paypal">
                                    Thanh toán khi nhận hàng
                                    <input type="checkbox" id="paypal" checked disabled>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <button type="submit" name="add" value="add" class="site-btn">Thanh toán</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>