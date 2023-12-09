<!-- Navbar Start -->
<div class="container-fluid mb-5">
    <div class="row border-top px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
            <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                <h6 class="m-0">Danh mục</h6>
                <i class="fa fa-angle-down text-dark"></i>
            </a>
            <nav class="collapse show navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0" id="navbar-vertical">
                <div class="navbar-nav w-100 overflow-hidden" style="height: 410px">
                    <a href="" class="nav-item nav-link">Apple</a>
                    <a href="" class="nav-item nav-link">Samsung</a>
                    <a href="" class="nav-item nav-link">Xiaomi</a>
                    <a href="" class="nav-item nav-link">Vivo</a>
                    <a href="" class="nav-item nav-link">Oppo</a>
                    <a href="" class="nav-item nav-link">Huawei</a>
                    <a href="" class="nav-item nav-link">Realme</a>
                    <a href="" class="nav-item nav-link">Motorola</a>
                    <a href="" class="nav-item nav-link">Lenovo</a>
                </div>
            </nav>
        </div>
        <div class="col-lg-9">
            <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                <a href="" class="text-decoration-none d-block d-lg-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="/" class="nav-item nav-link active">Trang chủ</a>
                        <a href="/client/sanpham" class="nav-item nav-link">Cửa hàng</a>
                        <a href="/client/ChiTietsp" class="nav-item nav-link">Chi tiết sản phẩm</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Trang</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="/client/GioHang" class="dropdown-item">Giỏ hàng</a>
                                <a href="" class="dropdown-item">Thanh toán</a>
                            </div>
                        </div>
                        <a href="" class="nav-item nav-link">Liên hệ</a>
                    </div>
                    <div class="navbar-nav ml-auto py-0">
                        <div class="nav-item dropdown">
                            <?php if(isset($_SESSION['user'])): ?>
                                <!-- Nếu đã đăng nhập, hiển thị tên người dùng và nút đăng xuất -->
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['user']['name']; ?></a>
                                <div class="dropdown-menu">
                                    <a href="/auth/logout" class="dropdown-item">Đăng xuất</a>
                                </div>
                            <?php else: ?>
                                <!-- Nếu chưa đăng nhập, hiển thị nút đăng nhập -->
                                <a href="../auth/login" class="nav-link">Đăng nhập</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </nav>
            <div id="header-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" style="height: 410px;">
                        <img class="img-fluid" src="../img/ip12 xanh den.jpg" alt="Hình ảnh">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h4 class="text-light text-uppercase font-weight-medium mb-3">Giảm 10% cho Đơn hàng đầu tiên của bạn</h4>
                                <h3 class="display-4 text-white font-weight-semi-bold mb-4">Điện thoại di động</h3>
                                <a href="" class="btn btn-light py-2 px-3">Mua ngay</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" style="height: 410px;">
                        <img class="img-fluid" src="../img/ip13.jpg" alt="Hình ảnh">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h4 class="text-light text-uppercase font-weight-medium mb-3">Giảm 10% cho Đơn hàng đầu tiên của bạn</h4>
                                <h3 class="display-4 text-white font-weight-semi-bold mb-4">Giá hợp lý</h3>
                                <a href="" class="btn btn-light py-2 px-3">Mua ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                    <div class="btn btn-dark" style="width: 45px; height: 45px;">
                        <span class="carousel-control-prev-icon mb-n2"></span>
                    </div>
                </a>
                <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                    <div class="btn btn-dark" style="width: 45px; height: 45px;">
                        <span class="carousel-control-next-icon mb-n2"></span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Navbar End -->
