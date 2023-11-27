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
                                    <h5>Cập nhật</h5>
                                </div>
                                <div class="card-block">
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="name" value="<?= $chitiethoadon['name'] ?>">

                                        <input type="hidden" name="id_hd" value="<?= $chitiethoadon['id_hd'] ?>">

                                        <input type="hidden" name="id_sp" value="<?= $chitiethoadon['id_sp'] ?>">

                                        <label for="soluongmua">Số lượng mua</label>
                                        <input type="text" name="soluongmua" id="soluongmua" class="form-control" value="<?= $chitiethoadon['soluongmua'] ?>">

                                        <label for="dongia">Đơn Giá</label>
                                        <input type="text" name="dongia" id="dongia" class="form-control" value="<?= $chitiethoadon['dongia'] ?>">
                                        
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