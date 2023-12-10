<div class="container-fluid pt-5">
    <div class="row px-xl-5">
        <div class="col-lg-8 table-responsive mb-5">
            <table class="table table-bordered text-center mb-0">
                <thead class="bg-secondary text-dark">
                    <tr>
                        <th>IMG</th>
                        <th>Products</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Remote</th>
                    </tr>
                </thead>
                <tbody class="align-middle">

                <tbody>
                    <?php 
                    use Ductong\BaseMvc\Models\Product; 
                    $products = (new Product())->all();
                    ?>
                    
                    <?php foreach ($_SESSION['client/GioHang'] as $idSP => $value) : ?>
                        <tr>
                            <td><img style="width: 70px;" src="<?php foreach ($products as $product)
                            {
                                if($idSP==$product['id']){
                                    echo $product['img'];
                                
                                }
                            }
                            ?>" alt=""></td>
                            <td><?php foreach ($products as $product)
                            {
                                if($idSP==$product['id']){
                                    echo $product['name'];
                                
                                }
                            }
                            ?></td>
                            <td>$<?= $value['tonggia'] ?></td>
                            <td>
                                <a href="/decrementQuantity?id=<?= $idSP ?>" class="btn btn-sm btn-primary btn-plus">-</a>
                                <button type="button" class="btn btn-sm btn-primary btn-plus"><?= $value['soluongmua'] ?></button>
                                <a href="/incrementQuantity?id=<?= $idSP ?>" class="btn btn-sm btn-primary btn-plus">+</a>
                            </td>
                            <td>
                                <a href="/removeFromCart?id=<?= $idSP ?>" class="text-danger">Xóa</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>


                    <!-- <tr>
                            <td class="align-middle"><img src="../img/iphone15-pro-max-titan-xanh.webp" alt="" style="width: 50px;"> iPhone 15 Pro Max 256GB titan xanh | Chính hãng VN/A</td>
                            <td class="align-middle">$123</td>
                            <td class="align-middle">
                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-minus" >
                                        <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control form-control-sm bg-secondary text-center" value="1">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-plus">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle">$123</td>
                            <td class="align-middle"><button class="btn btn-sm btn-primary"><i class="fa fa-times"></i></button></td>
                        </tr> -->
                </tbody>
            </table>
        </div>
        <div class="col-lg-4">
            <form class="mb-5" action="">
                <div class="input-group">
                    <input type="text" class="form-control p-4" placeholder="Coupon Code">
                    <div class="input-group-append">
                        <button class="btn btn-primary">Apply Coupon</button>
                    </div>
                </div>
            </form>
            <div class="card border-secondary mb-5">
                <div class="card-header bg-secondary border-0">
                    <h4 class="font-weight-semi-bold m-0">Cart Summary</h4>
                </div>

                <div class="col-md-4">
                    <ul>
                        <li>Tổng giá: <br>
                            <?php
                            $sum = 0;
                            foreach ($_SESSION['client/GioHang'] as $item) {
                                $sum += $item['tonggia'] * $item['soluongmua'];
                            }

                            echo number_format($sum) . "<sup>$</sup>";
                            ?>
                        </li>
                    </ul>
                    <form action="/createOrder" method="POST">
                        <?php foreach ($_SESSION['client/GioHang'] as $idSP => $value) : ?>
                            <input type="text" name="id_sp" value="<?= $idSP ?>" hidden>
                        <?php endforeach; ?>

                        <label for="name">Name</label>
                        <input type="text" required name="name" class="form-control">

                        <label for="ghichu">Ghi chú</label>
                        <input type="text" required name="ghichu" class="form-control">

                        <label for="noinhan">Address</label>
                        <input type="text" required name="noinhan" class="form-control">

                        <button type="submit" class="btn btn-primary mt-3">Đặt hàng</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>