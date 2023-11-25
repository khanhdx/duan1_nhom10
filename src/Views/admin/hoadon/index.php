<div class="pcoded-content">

    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-home bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Category</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="/admin/dashboard"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Category</a> </li>
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
                                    <h5>Danh sách Category</h5>

                                    <a href="/admin/hoadon/create" class="btn btn-info btn-sm">Tạo mới</a>
                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Hóa đơn</th>
                                                    <th>Khách hàng</th>
                                                    <th>Tình trạng</th>
                                                    <th>Ngày lập</th>
                                                    <th>Tổng giá</th>
                                                    <th>Nơi nhận</th>
                                                    <th>Nhân viên giao hàng</th>
                                                    <th>Ghi chú</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php foreach ($hoadon as $hoadon) : ?>
                                                    <tr>
                                                        <td><?= $hoadon['id'] ?></td>
                                                        <td><?= $hoadon['id_kh'] ?></td>
                                                        <td><?= $hoadon['tinhtrang'] ?></td>
                                                        <td><?= $hoadon['ngay_lap'] ?></td>
                                                        <td><?= $hoadon['tonggia'] ?></td>
                                                        <td><?= $hoadon['noinhan'] ?></td>
                                                        <td><?= $hoadon['nvgh'] ?></td>
                                                        <td><?= $hoadon['ghichu'] ?></td>
                                                        <td>
                                                            <a href="/admin/hoadon/update?id=<?= $hoadon['id'] ?>" class="btn btn-primary btn-sm">Cập nhật</a>

                                                            <form action="/admin/hoadon/delete?id=<?= $hoadon['id'] ?>" method="post">
                                                                <button type="submit" onclick="return confirm('Bạn có chắc chắn xóa?');" class="btn btn-danger btn-sm">Xóa</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>