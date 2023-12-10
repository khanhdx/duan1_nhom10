<div class="container-fluid pt-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">Just Arrived</span></h2>
    </div>

    <div class="row px-xl-5 pb-3">
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="card product-item border-0 mb-4">
                <?php foreach ($products as $product) : ?>
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                        <img class="img-fluid w-100" src="<?= $product['img'] ?>" alt="">
                    </div>
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <h6 class="text-truncate mb-3"><?= $product['name'] ?></h6>
                        <div class="d-flex justify-content-center">
                            <h6><?= $product['tonggia'] ?></h6>
                            <h6 class="text-muted ml-2"><del><?= $product['price'] ?></< /del>
                            </h6>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between bg-light border">
                        <a href="/client/ChiTietsp?id=<?= $product['id'] ?>" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>

                        <form action="/addToCart" method="POST">
                            <input type="hidden" name="tonggia" value="<?= $product['tonggia'] ?>">
                            <input type="hidden" name="soluongmua" value="1">
                            <input type="hidden" name="id" value="<?= $product['id'] ?>">
                            <button type="submit" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</button>
                        </form>
                    </div>

                <?php endforeach; ?>
            </div>
        </div>


        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="card product-item border-0 mb-4">
                <?php foreach ($products as $product) : ?>
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                        <img class="img-fluid w-100" src="<?= $product['img'] ?>" alt="">
                    </div>
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <h6 class="text-truncate mb-3"><?= $product['name'] ?></h6>
                        <div class="d-flex justify-content-center">
                            <h6><?= $product['tonggia'] ?></h6>
                            <h6 class="text-muted ml-2"><del><?= $product['price'] ?></< /del>
                            </h6>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between bg-light border">
                        <a href="/client/ChiTietsp?id=<?= $product['id'] ?>" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>

                        <form action="/addToCart" method="POST">
                            <input type="hidden" name="tonggia" value="<?= $product['tonggia'] ?>">
                            <input type="hidden" name="soluongmua" value="1">
                            <input type="hidden" name="id" value="<?= $product['id'] ?>">
                            <button type="submit" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</button>
                        </form>
                    </div>

                <?php endforeach; ?>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="card product-item border-0 mb-4">
                <?php foreach ($products as $product) : ?>
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                        <img class="img-fluid w-100" src="<?= $product['img'] ?>" alt="">
                    </div>
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <h6 class="text-truncate mb-3"><?= $product['name'] ?></h6>
                        <div class="d-flex justify-content-center">
                            <h6><?= $product['tonggia'] ?></h6>
                            <h6 class="text-muted ml-2"><del><?= $product['price'] ?></< /del>
                            </h6>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between bg-light border">
                        <a href="/client/ChiTietsp?id=<?= $product['id'] ?>" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>

                        <form action="/addToCart" method="POST">
                            <input type="hidden" name="tonggia" value="<?= $product['tonggia'] ?>">
                            <input type="hidden" name="soluongmua" value="1">
                            <input type="hidden" name="id" value="<?= $product['id'] ?>">
                            <button type="submit" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</button>
                        </form>
                    </div>

                <?php endforeach; ?>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="card product-item border-0 mb-4">
                <?php foreach ($products as $product) : ?>
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                        <img class="img-fluid w-100" src="<?= $product['img'] ?>" alt="">
                    </div>
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <h6 class="text-truncate mb-3"><?= $product['name'] ?></h6>
                        <div class="d-flex justify-content-center">
                            <h6><?= $product['tonggia'] ?></h6>
                            <h6 class="text-muted ml-2"><del><?= $product['price'] ?></< /del>
                            </h6>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between bg-light border">
                        <a href="/client/ChiTietsp?id=<?= $product['id'] ?>" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>

                        <form action="/addToCart" method="POST">
                            <input type="hidden" name="tonggia" value="<?= $product['tonggia'] ?>">
                            <input type="hidden" name="soluongmua" value="1">
                            <input type="hidden" name="id" value="<?= $product['id'] ?>">
                            <button type="submit" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</button>
                        </form>
                    </div>

                <?php endforeach; ?>
            </div>
        </div>
        <!-- <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="card product-item border-0 mb-4">
                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    <img class="img-fluid w-100" src="../img/iphone15-pro-max-1tb-titan-den.webp" alt="">
                </div>
                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                    <h6 class="text-truncate mb-3">iPhone 15 Pro Max 1TB | Chính hãng VN/A</h6>
                    <div class="d-flex justify-content-center">
                        <h6>$123.00</h6>
                        <h6 class="text-muted ml-2"><del>$123.00</del></h6>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between bg-light border">
                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="card product-item border-0 mb-4">
                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    <img class="img-fluid w-100" src="../img/iphone15-pro-max-1tb-titan-den.webp" alt="">
                </div>
                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                    <h6 class="text-truncate mb-3">iPhone 15 Pro Max 1TB | Chính hãng VN/A</h6>
                    <div class="d-flex justify-content-center">
                        <h6>$123.00</h6>
                        <h6 class="text-muted ml-2"><del>$123.00</del></h6>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between bg-light border">
                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="card product-item border-0 mb-4">
                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    <img class="img-fluid w-100" src="../img/iphone15-pro-max-1tb-titan-den.webp" alt="">
                </div>
                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                    <h6 class="text-truncate mb-3">iPhone 15 Pro Max 1TB | Chính hãng VN/A</h6>
                    <div class="d-flex justify-content-center">
                        <h6>$123.00</h6>
                        <h6 class="text-muted ml-2"><del>$123.00</del></h6>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between bg-light border">
                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="card product-item border-0 mb-4">
                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    <img class="img-fluid w-100" src="../img/iphone15-pro-max-1tb-titan-den.webp" alt="">
                </div>
                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                    <h6 class="text-truncate mb-3">iPhone 15 Pro Max 1TB | Chính hãng VN/A</h6>
                    <div class="d-flex justify-content-center">
                        <h6>$123.00</h6>
                        <h6 class="text-muted ml-2"><del>$123.00</del></h6>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between bg-light border">
                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                </div>
            </div>
        </div> -->
    </div>
</div>