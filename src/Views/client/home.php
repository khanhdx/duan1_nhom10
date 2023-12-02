<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title></title>
  <link rel="stylesheet" href="/css/style2.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="npm i bootstrap-icons">
  

</head>

<body>
  <div class="boxcenter">

    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="/img/logo2.jpg" alt=""
              class="image rounded-circle mx-auto d-block"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="index.html">Trang chủ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.html">Danh Mục</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Tuyển Dụng</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Giới thiệu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Bảo Hành</a>
              </li>
              <li><i class="tk bi bi-person-fill"></i></li>
              <li><a href="giohang.html"><i class="gk bi bi-cart-fill"></i></a></li>
              <span id=""></span>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <i class="kiem bi bi-search"></i>
            </form>
          </div>
        </div>
      </nav>

      <div class="row mb menu trai">
        <nav>
          <ul>

            <li class="dropdown">
              <i class="bi bi-phone"></i>
              <a class="dropdownbtn" href="trangsanpham.html">Điện thoại</a>
            </li>

            <li class="dropdown">
              <i class="bi bi-apple"></i>
              <a class="dropdownbtn" href="trangsanpham.html">Apple</a>
            </li>

            <li class="dropdown">
              <i class="bi bi-laptop"></i>
              <a class="dropdownbtn" href="trangsanpham.html">Laptop</a>
            </li>

            <li class="dropdown">
              <i class="bi bi-tv"></i>
              <a class="dropdownbtn" href="trangsanpham.html">Smart TV</a>
            </li>

            <li class="dropdown">
              <i class="bi bi-earbuds"></i>
              <a class="dropdownbtn" href="trangsanpham.html">Tai nghe</a>
            </li>

            <li class="dropdown">
              <i class="bi bi-sim"></i>
              <a class="dropdownbtn" href="trangsanpham.html">Phụ kiện</a>
            </li>
            <li class="dropdown">
              <i class="bi bi-person-fill"></i>
              <a class="dropdownbtn" href="dangnhap.html">Tài Khoản</a>
            </li>
          </ul>
        </nav>

      </div>
    </header>
    <div class="banner">
      <img id="banner" src="/img/anh0.jpg" alt="">

    </div>
    <!-- END HEADER -->
    <main class="catalog  mb ">

      <div class="boxleft">
        <div class="banner">
          <img id="banner" src="/img/anh6.jpg" alt="" style="height: 200px; margin-top: 10px;">
          
    
        </div>


        <div class="items">
          
          <div class="box_items">
            <div class="box_items_img">
              <img src="/img/redmi.jpg" alt="">

            </div>
            <a class="item_name" href="chitietsanpham.html">SamSung J4</a>
            <p class="price">$4000</p>
            <button type="button" class="mh btn btn-outline-danger btn-sm">Mua Hàng</button><a href="giohang.html"><i
                class="gh bi bi-cart"></i>
            </a>
            <form action="giohang.html" method="post">
              <input type="submit" name="addsp" value="gh bi bi-cart">
              <input type="hidden" name="tensp" value="SamSung J4">
              <input type="hidden" name="gia" value="$4000">
              <input type="hidden" name="hinh" value="iphone.png">
            </form>

          </div>
          <div class="box_items">
            <div class="box_items_img">
              <img src="/img/iphone.png" alt="">

            </div>
            <a class="item_name" href="chitietsanpham.html">Iphone X</a>
            <p class="price">$4000</p>
            <button type="button" class="mh btn btn-outline-danger btn-sm">Mua Hàng</button><i
              class="gh bi bi-cart"></i>

          </div>
          <div class="box_items">
            <div class="box_items_img">
              <img src="/img/oppo.png" alt="">

            </div>
            <a class="item_name" href="chitietsanpham.html">SamSung J4</a>
            <p class="price">$4000</p>
            <button type="button" class="mh btn btn-outline-danger btn-sm">Mua Hàng</button><i
              class="gh bi bi-cart"></i>

          </div>
          <div class="box_items">
            <div class="box_items_img">
              <img src="/img/oppo.png" alt="">

            </div>
            <a class="item_name" href="chitietsanpham.html">OPPO</a>
            <p class="price">$4000</p>
            <button type="button" class="mh btn btn-outline-danger btn-sm">Mua Hàng</button><i
              class="gh bi bi-cart"></i>

          </div>
          <div class="box_items">
            <div class="box_items_img">
              <img src="/img/iphone.png" alt="">

            </div>
            <a class="item_name" href="chitietsanpham.html">SamSung J4</a>
            <p class="price">$4000</p>
            <button type="button" class="mh btn btn-outline-danger btn-sm">Mua Hàng</button><i
              class="gh bi bi-cart"></i>

          </div>
          <div class="box_items">
            <div class="box_items_img">
              <img src="/img/iphone.png" alt="">

            </div>
            <a class="item_name" href="chitietsanpham.html">Iphone X</a>
            <p class="price">$4000</p>
            <button type="button" class="mh btn btn-outline-danger btn-sm">Mua Hàng</button><i
              class="gh bi bi-cart"></i>

          </div>
          <div class="box_items">
            <div class="box_items_img">
              <img src="/img/iphone.png" alt="">

            </div>
            <a class="item_name" href="chitietsanpham.html">OPPO</a>
            <p class="price">$4000</p>
            <button type="button" class="mh btn btn-outline-danger btn-sm">Mua Hàng</button><i
              class="gh bi bi-cart"></i>

          </div>
          <div class="box_items">
            <div class="box_items_img">
              <img src="/img/iphone.png" alt="">

            </div>
            <a class="item_name" href="chitietsanpham.html">SamSung J4</a>
            <p class="price">$4000</p>
            <button type="button" class="mh btn btn-outline-danger btn-sm">Mua Hàng</button><i
              class="gh bi bi-cart"></i>

          </div>
          <div class="box_items">
            <div class="box_items_img">
              <img src="/img/iphone.png" alt="">

            </div>
            <a class="item_name" href="chitietsanpham.html">Iphone X</a>
            <p class="price">$4000</p>
            <button type="button" class="mh btn btn-outline-danger btn-sm">Mua Hàng</button><i
              class="gh bi bi-cart"></i>

          </div>



        </div>
      </div>
      <div class="boxright">


        <div class="mb">
          <div class="banner">
            <img id="banner" src="/img/anh1.jpg" alt="" style="height: 200px; margin-top: 10px;">
      
          </div>
          <div class="banner">
            <img id="banner" src="/img/anh2.jpg" alt="" style="height: 200px; margin-top: 5px;">
      
          </div>
          <div class="box_title">DANH MỤC</div>
          <div class="box_content2 product_portfolio">
            <ul>
              <li><a href="trangsanpham.html">Đồng hồ </a></li>
              <li><a href="trangsanpham.html">Laptop</a></li>
              <li><a href="trangsanpham.html">Điện thoại</a></li>
              <li><a href="trangsanpham.html">Ipad</a></li>
              <li><a href="trangsanpham.html">Tivi</a></li>
              <li><a href="trangsanpham.html">Đồng hồ </a></li>
              <li><a href="trangsanpham.html">Laptop</a></li>
              <li><a href="trangsanpham.html">Điện thoại</a></li>
              <li><a href="trangsanpham.html">Ipad</a></li>
              <li><a href="">Tivi</a></li>
              <li><a href="">Đồng hồ </a></li>
              <li><a href="">Laptop</a></li>
              <li><a href="">Điện thoại</a></li>
              <li><a href="">Ipad</a></li>
              <li><a href="">Tivi</a></li>
              <li><a href="">Đồng hồ </a></li>
              <li><a href="">Laptop</a></li>
              <li><a href="">Điện thoại</a></li>
           
            </ul>
          </div>
        </div>


      </div>

    </main>

    <footer class="box_footer row mb demo">
      <div id="footer">
        <div class="footer-left">
          <div class="footer-logo">
            <img src="/img/FPTShop_logo.jpg" alt="" />
          </div>
          <div class="card_1">
            <h3>Cao đẳng FPT Polytechnic</h3>
            <div>
              <i class="fa-sharp fa-solid fa-location-pin"></i>
              <p>
                Trịnh Văn Bô , Nam Từ Liêm , Hà Nội
              </p>
            </div>

            <div>
              <i class="fa-solid fa-phone-flip"></i>
              <p>1900.63.69.36</p>
            </div>

            <div>
              <i class="fa-solid fa-envelope"></i>
              <p>nhom10@fpt.edu.vn</p>
            </div>

            <p>Số ĐKKD: 0106341306. Ngày cấp: 16/03/2017.</p>
            <p>Nơi cấp: Sở kế hoạch và Đầu tư Thành phố Hà Nội.</p>

          </div>
        </div>
        <div class="footer-right">
          <div class="card_2">
            <h3>VỀ CHÚNG TÔI</h3>
            <a href="#">Giới thiệu về TocoToco</a>
            <a href="">Nhượng quyền</a>
            <a href="">Tin tức khuyến mại</a>
            <a href="">Cửa hàng</a>
            <a href="#">Quy định chung</a>
            <a href="#">TT liên hệ &#038; ĐKKD</a>
          </div>
          <div class="card_3">
            <h3>CHÍNH SÁCH</h3>
            <a href="#">Chính sách thành viên</a>
            <a href="#">Hình thức thanh toán</a>
            <a href="#">Vận chuyển giao nhận</a>
            <a href="#">Đổi trả và hoàn tiền</a>
            <a href="#">Bảo vệ thông tin cá nhân</a>
            <a href="#">Bảo trì, bảo hành</a>
          </div>
        </div>
      </div>
      <!-- footer section ends -->
    </footer>
  </div>
  <script>
    var album = [];
    for (var i = 0; i < 5; i++) {
      album[i] = new Image();
      album[i].src = "../img/anh" + i + ".jpg";
    }
    var interval = setInterval(slideshow, 1500);
    index = 0;
    function slideshow() {
      index++;
      if (index > 4) {
        index = 0;
      }
      document.getElementById("banner").src = album[index].src;


    }
    function next() {
      index++;
      if (index > 4) {
        index = 0;
      }
      document.getElementById("banner").src = album[index].src;

    }
    function pre() {
      index--;
      if (index < 0) {
        index = 4;
      }
      document.getElementById("banner").src = album[index].src;

    }

  </script>
</body>


</html>