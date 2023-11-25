<div class="pcoded-content">

    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-home bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Hóa Đơn</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="/admin/dashboard"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Hóa Đơn</a> </li>
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
                                    <h5>Thêm Mới</h5>
                                </div>
                                <div class="card-block">
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" id="name" class="form-control">

                                        <label for="id">Hóa đơn</label>
                                        <select name="id" id="id" class="form-control">
                                            <?php foreach ($hoadon as $hoadons) : ?>
                                                <option value="<?= $hoadons['id'] ?>"><?= $hoadons['name'] ?></option>
                                            <?php endforeach; ?>
                                        </select>

                                        <label for="id_kh">Hóa đơn</label>
                                        <select name="id_kh" id="id_kh" class="form-control">
                                            <?php foreach ($hoadon as $hoadons) : ?>
                                                <option value="<?= $hoadons['id'] ?>"><?= $hoadons['name'] ?></option>
                                            <?php endforeach; ?>
                                        </select>

                                        <label for="price">Price</label>
                                        <input type="number" name="price" id="price" class="form-control">

                                        <label for="price_sale">Price sale</label>
                                        <input type="number" name="price_sale" id="price_sale" class="form-control">

                                        <label for="is_active">Active</label>
                                        <select name="is_active" id="is_active" class="form-control">
                                            <option value="0">No</option>
                                            <option value="1" selected>Yes</option>
                                        </select>

                                        <label for="description">Description</label>
                                        <textarea name="description" id="description" class="form-control"></textarea>

                                        <button type="submit" name="btn-submit" class="btn btn-info mt-3">Submit</button>
                                        <a href="/admin/products" class="btn btn-primary mt-3">Quay lại d/s</a>
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