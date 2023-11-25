<div class="pcoded-content">

    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-home bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>chitiethoadon</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="/admin/dashboard"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">chitiethoadon</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Thêm mới</h5>
                                </div>
                                <div class="card-block">
                                    <form action="" method="post">
                                        <label for="id_hd">hoadon</label>
                                        <select name="id_hd" id="id_hd" class="form-control">
                                            <?php foreach ($hoadon as $hoadon) : ?>
                                                <option value="<?= $hoadon['id'] ?>"><?= $hoadon['id'] ?></option>
                                            <?php endforeach; ?>
                                        </select>

                                        <label for="id_sp">sanpham</label>
                                        <select name="id_sp" id="id_sp" class="form-control">
                                            <?php foreach ($products as $product) : ?>
                                                <option value="<?= $product['id'] ?>"><?= $product['id'] ?></option>
                                            <?php endforeach; ?>
                                        </select>

                                        <label for="name">name</label>
                                        <input type="text" name="name" class="form-control">

                                        <label for="name">Số lượng mua</label>
                                        <input type="text" name="soluongmua" class="form-control">

                                        <label for="name">Đơn giá</label>
                                        <input type="text" name="dongia" class="form-control">

                                        <button type="submit" name="btn-submit" class="btn btn-info mt-3">Submit</button>
                                        <a href="/admin/chitiethoadon" class="btn btn-primary mt-3">Quay lại d/s</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>