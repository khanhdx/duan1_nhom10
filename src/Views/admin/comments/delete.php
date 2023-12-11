<!-- views/admin/comments/index.php -->

<div class="pcoded-content">

    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-home bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Comments</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="/admin/dashboard"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Comments</a> </li>
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
                                    <h5>Danh sách Comments</h5>

    <!-- Các phần khác giữ nguyên, chỉ thay đổi phần hiển thị form tạo mới comment -->
    <!-- Các phần khác giữ nguyên, chỉ thay đổi phần xác nhận xóa -->
    <div class="card-block">
        <h2>Confirm Deletion</h2>
        <p>Bạn có chắc chắn muốn xóa bình luận này?</p>
        <form action="/admin/comments/destroy" method="POST">
            <input type="hidden" name="id" value="<?= $comment['id'] ?>">
            <input type="submit" class="btn btn-danger" value="Xóa">
            <a href="/admin/comments" class="btn btn-secondary">Hủy</a>
        </form>
    </div>
</div>