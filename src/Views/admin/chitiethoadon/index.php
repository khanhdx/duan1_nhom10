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
                                    <h5>chitiethoadon</h5>

                                    <a href="/admin/hoadon" class="btn btn-info btn-sm">Quay lại</a>
                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <th>STT</th>
                                                    <th>Hóa đơn</th>
                                                    <th>Sản phẩm</th>
                                                    <th>Số lượng mua</th>
                                                    <th>Đơn giá</th>
                                                </tr>
                                            </thead>

                                            <tbody>

                                                <?php foreach ($chitiethoadons as $chitiethoadon) : ?>
                                                    <tr>
                                                        <td><?= $chitiethoadon['id'] ?></td>
                                                        <td><?= $chitiethoadon['id_hd'] ?></td>
                                                        <td><?= $arraysanphamsIdName[$chitiethoadon['id_sp']] ?></td>
                                                        <td><?= $chitiethoadon['soluongmua'] ?></td>
                                                        <td><?= $chitiethoadon['dongia'] ?></td>


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