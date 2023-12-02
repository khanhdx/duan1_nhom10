<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Danh sách banner</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">QLBN</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">

          <div class="card">
            <div class="card-body">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th></th>
                    <th>Ảnh</th>
                    <th>Mô tả</th>
                    <th>Trạng thái</th>
                    <th>Hành động</th>
                  </tr>
                </thead>
                <tbody>
                  
                  <?php
                    if(!empty($list)){
                      foreach($list as $temp){

                        if($temp["trangthai_banner"] == 1){
                          $trangthai_banner = "Hoạt động";
                          $hanhdong = "Tắt";
                        }

                        if($temp["trangthai_banner"] == 2){
                          $trangthai_banner = "Ngưng hoạt động";
                          $hanhdong = "Bật";
                        }

                        echo "
                          <tr>
                            <td style='width:5%; text-align: center;'>
                              <input type='checkbox' value='{$temp['id_banner']}' class='check-box'>
                            </td>
                            <td style='width:30%'><img src='../../../public/image/anhsanpham/{$temp['anh_banner']}' class='img-fluid'></td>
                            <td>{$temp['mota_banner']}</td>
                            <td>{$trangthai_banner}</td>
                            <td>";

                            if($_SESSION["admin"]["id_cv"] == 1){
                              echo "
                                <div class='btn-group custom-btns' role='group' aria-label='Basic example'>
                                  <a type='button' href='index.php?act=bn&type=edit&id={$temp['id_banner']}' class='btn btn-success mr-2'>Sửa</a>
                                  <button type='button' onclick='message(`bn`,{$temp['id_banner']})' class='btn btn-danger mr-2'>Xóa</button>
                                  <a href='index.php?act=bn&type=turn&id={$temp['id_banner']}' class='btn btn-secondary mr-2'>{$hanhdong}</a>
                                </div>
                              ";
                            }
                              
                            echo "</td>
                          </tr>
                        ";
                      }
                    }
                  ?>

                </tbody>
              </table>
            </div>
          </div>
          
          <?php
            if($_SESSION["admin"]["id_cv"] == 1){
              echo "
                <div class='btn-group' role='group' aria-label='Manage Items'>
                  <button type='button' class='btn btn-primary mr-2' id='chonTatCa' onclick='chonTatCa()'>Chọn Tất Cả</button>
                  <button type='button' class='btn btn-warning mr-2' id='boChonTatCa' onclick='boTatCa()'>Bỏ Chọn Tất Cả</button>
                  <button type='button' class='btn btn-danger mr-2' onclick='xoaDaChon(`bn`)'>Xóa Các Mục Đã Chọn</button>
                </div>
              ";
            }
          ?>

        </div>
      </div>
    </div>
  </section>
</div>

