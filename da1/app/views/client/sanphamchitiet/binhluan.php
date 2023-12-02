<?php
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["addbl"]) && !empty($_POST["addbl"])){
        add_bl($_GET["id"],$_SESSION["khachhang"]??$_SESSION["admin"]["id_nd"],$_POST["nd_bl"]);
        header("Location: index.php?act=spct&id=" . $_GET["id"]);
    }
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div class="container mt-5 mb-5">
  <div class="row">
    <div class="col-md-12">
      <!-- Comment Section -->
      <div class="card">
        <div class="card-header">
          <b>Bình luận</b>
        </div>

        <div class="card-body">
          <ul id="comment-list" class="list-unstyled">
            

            <?php
              if(!empty($list_bl)){
                foreach($list_bl as $temp){
                  echo "
                    <li>
                      <img src='./public/image/anhnguoidung/{$temp['anh_nd']}' style='width:5%'>
                      <span>
                        <b>{$temp['ten_nd']}</b>
                        <span class='col-6 ml-auto'>". date('d/m/Y', strtotime($temp['ngay_bl'])) ."</span>
                        <p class='mt-2'>{$temp['noidung_bl']}</p>
                        <hr>
                      </span>
                    </li>
                  ";
                }
              }
            ?>

          </ul>
        </div>
      </div>


      <?php
        if(!empty($_SESSION["admin"]) || !empty($_SESSION["khachhang"])){
          echo "
            <form id='comment-form' method='POST' action='index.php?act=spct&id={$_GET['id']}' class='mt-3'>
              <div class='form-group'>
                <label for='comment'>Comment:</label>
                <textarea class='form-control' id='comment' name='nd_bl' rows='4' required></textarea>
              </div>
              
            <button type='submit' name='addbl' value='addbl' class='btn btn-primary'>Bình luận</button>
            </form>
  
          ";
        }else{
          echo "<div class='error'>Đăng nhập để bình luận</div>";
        }
      ?>
    </div>
  </div>
</div>
</body>
</html>