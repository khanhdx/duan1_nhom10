<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 15px;
            text-align: center;
        }

        nav {
            background-color: #444;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        section {
            padding: 20px;
        }

        .product-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .product {
            width: 300px;
            margin: 20px;
            padding: 10px;
            border: 1px solid #ddd;
            background-color: #fff;
            border-radius: 5px;
            transition: box-shadow 0.3s ease-in-out;
        }

        .product:hover {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>

    <header>
        <h1>Web Bán Hàng</h1>
    </header>

    <nav>
        <a href="#">Trang chủ</a>
        <a href="#">Sản phẩm</a>
        <a href="#">Liên hệ</a>
        <a href="#">Giỏ hàng</a>
    </nav>

    <section>
        <h2>Sản phẩm mới nhất</h2>
        <div class="product-container">
            <div class="product">
                <img src="/img/iphone/ip 14 promax vang.jpg" alt="Product 1">
                <h3>ip 14 promax vang</h3>
                <p>iPhone 14 Pro 128GB Chính hãng (VN/A) hiện đã có mặt tại Di Động Việt - Đại lý uỷ quyền chính thức của Apple tại Việt Nam.
                     Với thiết kế thời thượng và các tính năng hiện đại, chiếc smartphone này sẽ mang đến cho bạn trải nghiệm đầy cảm xúc với khả năng sáng tạo bứt phá với bộ 3 camera gồm: 48MP và 2 camera 12MP, kết hợp với hiệu năng mạnh mẽ từ chipset Apple A16 Bionic 6 nhân. Bên cạnh đó, với dung lượng pin lớn cho phép người dùng trải nghiệm dài lâu.
                     Đặt ngay để có trải nghiệm mua sắm Hơn cả Chính Hãng.</p>
                <p>Giá: $1200.00</p>
                <button>Mua ngay</button>
            </div>

            <div class="product">
                <img src="" alt="Product 2">
                <h3>Tên Sản Phẩm 2</h3>
                <p>Mô tả ngắn về sản phẩm.</p>
                <p>Giá: $1100.00</p>
                <button>Mua ngay</button>
            </div>

            <!-- Thêm các sản phẩm khác tương tự -->
        </div>
    </section>

    <footer>
        <p>&copy; 2023 Web Bán Hàng nhom 10. All rights reserved.</p>
    </footer>

</body>
</html>