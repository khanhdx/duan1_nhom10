<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Biểu mẫu Đăng ký</title>
    <link rel="stylesheet" href="/css/dky.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>

<body>

    <div class="boxcenter">

        <header>
            <div class="trangchu">
                <div class="logo">
                    <img src="/img/logo2.jpg" alt="">
                </div>
                <ul class="menu2">
                    <li><a href="index.html">Trang chủ</a></li>
                    <li><a href="">Danh Mục</a></li>
                    <li><a href="">Tuyển Dụng</a></li>
                    <li><a href="">Giới thiệu</a></li>
                    <li><a href="">Bảo Hành</a></li>

                </ul>
                <form class="login" action="">
                    <button><a href="dangky.html">Đăng Ký</a></button>
                    <button><a href="dangnhap.html">Đăng Nhập<a></button>

                </form>


            </div>

            <div class="row mb menu">
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

                    </ul>
                </nav>


            </div>
        </header>
        <div class="banner">
            <img id="banner" src="/img/anh0.jpg" alt="">

        </div>
    </div>

    <div class="signup-form">
        <form action="#" method="post">
            <h2>Đăng ký</h2>
            <div class="input-group">
                <label for="name">Họ và tên:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="input-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="password">Mật khẩu:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="input-group">
                <a href="#"><button type="submit">Đăng ký</button></a>
                <p><button type="reset">Nhập lại</button></p>

            </div>
        </form>
    </div>
    <script>
        var album = [];
        for (var i = 0; i < 5; i++) {
            album[i] = new Image();
            album[i].src = "../img/anh" + i + ".jpg";
        }
        var interval = setInterval(slideshow, 2000);
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