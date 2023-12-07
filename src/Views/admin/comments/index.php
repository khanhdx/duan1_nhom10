<div class="pcoded-content">

    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-message-square bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Comments</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class="breadcrumb breadcrumb-title">
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
                                    <h5>Comment Management</h5>
                                    <a href="/admin/comments/create" class="btn btn-info btn-sm">Add New Comment</a>
                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="commentTable" class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Content</th>
                                                    <th>User</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($comments as $comment) : ?>
                                                    <tr>
                                                        <td><?= $comment['id'] ?></td>
                                                        <td><?= $comment['content'] ?></td>
                                                        <td><?= $comment['user'] ?></td>
                                                        <td>
                                                            <a href="/admin/comments/edit?id=<?= $comment['id'] ?>" class="btn btn-primary btn-sm">Edit</a>
                                                            <form action="/admin/comments/delete?id=<?= $comment['id'] ?>" method="post" style="display:inline;">
                                                                <button type="submit" onclick="return confirm('Are you sure you want to delete this comment?');" class="btn btn-danger btn-sm">Delete</button>
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
