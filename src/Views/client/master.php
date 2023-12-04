<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EShopper - Bootstrap Shop Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <?php require_once 'components/head.php' ?>


</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-2 px-xl-5">

            <?php require_once 'components/help.php' ?>

        </div>

        <div class="row align-items-center py-3 px-xl-5">

            <?php require_once 'components/logo.php' ?>

        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->

    <?php require_once 'components/main-menu.php' ?>

    <!-- Navbar End -->


    <!-- Page Header Start -->

    <?php require_once 'components/banner.php' ?>

    <!-- Page Header End -->


    <!-- Shop Start -->
    <?php require_once 'components/dashboard.php' ?>

    <!-- Shop End -->


    <!-- Footer Start -->
    <?php require_once 'components/foot.php' ?>

    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->


</body>

</html>