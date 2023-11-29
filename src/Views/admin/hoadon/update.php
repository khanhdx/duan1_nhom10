<div class="pcoded-content">

    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-home bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Hóa đơn</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="/admin/dashboard"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Hóa đơn</a> </li>
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
                                    <h5>Cập nhật</h5>
                                </div>
                                <div class="card-block">
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <label for="name">name</label>
                                        <input type="name" name="name" id="name" class="form-control">

                                        <label for="id_kh">Khách hàng</label>
                                        <select name="id_kh" id="id_kh" class="form-control">
                                            <option value="" selected>...</option>
                                            <?php foreach ($users as $user) : ?>
                                                <option value="<?= $user['id'] ?>"><?= $user['name'] ?></option>

                                            <?php endforeach; ?>

                                        </select>

                                        <label for="tinhtrang">Tình Trạng</label>
                                        <select name="tinhtrang" id="tinhtrang" class="form-control">
                                            <option value="" selected>...</option>
                                            <?php foreach ($tinhtrangs as $tinhtrang) : ?>
                                                <option value="<?= $tinhtrang['id'] ?>"><?= $tinhtrang['tinhtrang'] ?></option>

                                            <?php endforeach; ?>

                                        </select>

                                        <label for="ngay_lap">Ngày lập</label>
                                        <input type="date" name="ngay_lap" id="ngay_lap" class="form-control"><?= $hoadons['ngay_lap'] ?></input>

                                        <label for="tonggia">Tổng giá</label>
                                        <input type="text" name="tonggia" id="tonggia" class="form-control" value="<?= $hoadons['tonggia'] ?>">

                                        <label for="noinhan">Nơi nhận</label>
                                        <input type="text" name="noinhan" id="noinhan" class="form-control" value="<?= $hoadons['noinhan'] ?>">

                                        <label for="nvgh">Nhân viên giao hàng</label>
                                        <select name="nvgh" id="nvgh" class="form-control">
                                            <option value="" selected>...</option>
                                            <?php foreach ($nvghs as $nvgh) : ?>
                                                <option value="<?= $nvgh['id'] ?>"><?= $nvgh['name'] ?></option>

                                            <?php endforeach; ?>

                                        </select>

                                        <label for="ghichu">Ghi chú</label>
                                        <input type="text" name="ghichu" id="ghichu" class="form-control" value="<?= $hoadons['ghichu'] ?>">

                                        <button type="submit" name="btn-submit" class="btn btn-info mt-3">Submit</button>
                                        <a href="/admin/hoadon" class="btn btn-primary mt-3">Quay lại d/s</a>
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