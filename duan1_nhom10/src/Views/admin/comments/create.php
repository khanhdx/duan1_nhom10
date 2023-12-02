<div class="pcoded-content">
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-home bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Comment</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class="breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="/admin/dashboard"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Comment</a></li>
                        <li class="breadcrumb-item"><a href="#!">Create</a></li>
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
                                    <h5>Tạo mới Comment</h5>
                                    <a href="/admin/comments" class="btn btn-secondary btn-sm">Danh sách Comment</a>
                                </div>
                                <div class="card-block">
                                    <form method="post" action="/admin/comments/create">
                                        <div class="form-group">
                                            <label for="product_id">Sản phẩm:</label>
                                            <select name="product_id" id="product_id" class="form-control">
                                                <?php foreach ($products as $product) : ?>
                                                    <option value="<?= $product['id'] ?>"><?= $product['name'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="user_name">Tên người dùng:</label>
                                            <input type="text" name="user_name" id="user_name" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="content">Nội dung:</label>
                                            <textarea name="content" id="content" class="form-control" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="content">Date:</label>
                                            <textarea name="date" id="date_comment" class="form-control" type="date" pattern="\d{2}-\d{2}-\d{4}" placeholder="DD-MM-YYYY" required></textarea>
                                        </div>
                                        <!-- Thêm các trường bình luận khác nếu cầ -->
                                        <button type="submit" name="btn-submit-comment" class="btn btn-primary">Tạo mới</button>
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
