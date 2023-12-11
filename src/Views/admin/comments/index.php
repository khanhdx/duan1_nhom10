<!-- comments/index.php -->
<div class="pcoded-content">

    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-home bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Danh sách Bình luận</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="/admin/dashboard"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Bình luận</a> </li>
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
                                    <h5>Danh sách Bình luận</h5>
                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="commentTable" class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <th>STT</th>
                                                    <th>Comment Text</th>
                                                    <th>User ID</th>
                                                    <th>Product ID</th>
                                                    <th>Date Comment</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php foreach ($comments as $comment) : ?>
                                                    <tr>
                                                        <td><?= $comment['id'] ?></td>
                                                        <td><?= $comment['comment_text'] ?></td>
                                                        <td><?= $comment['user_id'] ?></td>
                                                        <td><?= $comment['product_id'] ?></td>
                                                        <td><?= $comment['date_comment'] ?></td>
                                                        <td>
                                                            <form action="/admin/comments/delete?id=<?= $comment['id'] ?>" method="post">
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