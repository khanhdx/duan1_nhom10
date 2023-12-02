<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Danh sách danh mục</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">QLDM</li>
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
                    <th>Stt</th>
                    <th>Tên</th>
                    <th>Ảnh</th>
                    <th>Trạng thái</th>
                    <th>Hành động</th>
                  </tr>
                </thead>
                <tbody>
                  
                  <?php
                    if(!empty($list)){
                      $i = 1;
                      foreach($list as $temp){

                        if($temp["trangthai_dm"] == 1){
                          $trangthai_dm = "Kinh doanh";
                        }else{
                          $trangthai_dm = "Ngừng kinh doanh";
                        }

                        echo "
                          <tr>
                            <td style='width:5%; text-align: center;'>${i}</td>
                            <td>{$temp['ten_dm']}</td>
                            <td style='width:20%'><img src='../../../public/image/anhsanpham/{$temp['anh_dm']}' class='img-fluid'></td>
                            <td>{$trangthai_dm}</td>
                            <td style='width:25%'>";

                        if($_SESSION["admin"]["id_cv"] == 1){
                          echo "
                            <div class='btn-group custom-btns' role='group' aria-label='Basic example'>
                              <a type='button' href='index.php?act=dm&type=edit&id={$temp['id_dm']}' class='btn btn-success mr-2'>Sửa</a>
                              <button type='button' onclick='message(`dm`,{$temp['id_dm']})' class='btn btn-danger mr-2'>Xóa</button>
                            </div>
                          ";
                        }
                              
                        echo "</td>
                          </tr>
                        ";
                        $i++;
                      }
                    }
                  ?>

                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>
  </section>
</div>

