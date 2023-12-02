<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Chi tiết đơn hàng</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">QLĐH</li>
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
                    <th>Sản phẩm</th>
                    <th>Ảnh</th>
                    <th>Size</th>
                    <th>Số lượng</th>
                    <th>Giá</th>
                  </tr>
                </thead>
                <tbody>                
                    
                <?php
                    if(!empty($list)){
                        $i = 1;
                        foreach($list as $temp){
                            echo "
                                <tr>
                                    <td>{$i}</td>
                                    <td>{$temp['ten_sp']}</td>
                                    <td style='width:20%'><img src='../../../public/image/anhsanpham/{$temp['anh_sp']}' class='img-fluid'></td>
                                    <td>{$temp['size_bt']}</td>
                                    <td>{$temp['soluong_dhct']}</td>
                                    <td>". number_format($temp['gia_dhct'],0,",",".") ."</td>
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
    </div>
  </section>
</div>

