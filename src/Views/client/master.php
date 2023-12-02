<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Giao diện web</title>
    <link rel="stylesheet" href="/css/style2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="npm i bootstrap-icons">

</head>

<body>
    <div class="boxcenter">

        <header>
            <?php require_once 'client/header.php' ?>
        </header>

        <!-- END HEADER -->
        <main class="catalog  mb ">

            <div class="boxleft">
                <div class="banner">
                    <img id="banner" src="/img/anh6.jpg" alt="" style="height: 200px; margin-top: 10px;">
                </div>

                <div class="items">
                    <?php require_once 'client/sanpham.php' ?>
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

                    <?php require_once 'client/boxright.php' ?>
                     
                    </div>
                </div>
            </div>
        </main>
        <footer class="box_footer row mb demo">
            <div id="footer">
            <?php require_once 'client/footer.php' ?>
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