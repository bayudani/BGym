<!DOCTYPE html>
<html>

<head>
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- Site Properties -->
    <title>BroGym</title>
    <!-- font awesom -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- bs icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


    <link rel="stylesheet" href="./asset/bootstrap/bootstrap.min.css">
    <!-- fomantic -->
    <link rel="stylesheet" type="text/css" href="./asset/fomantic/dist/components/reset.css">
    <link rel="stylesheet" type="text/css" href="./asset/fomantic/dist/components/container.css">
    <link rel="stylesheet" type="text/css" href="./asset/fomantic/dist/components/grid.css">
    <link rel="stylesheet" type="text/css" href="./asset/fomantic/dist/components/header.css">
    <link rel="stylesheet" type="text/css" href="./asset/fomantic/dist/components/image.css">
    <link rel="stylesheet" type="text/css" href="./asset/fomantic/dist/components/menu.css">

    <link rel="stylesheet" type="text/css" href="./asset/fomantic/dist/components/divider.css">
    <link rel="stylesheet" type="text/css" href="./asset/fomantic/dist/components/dropdown.css">
    <link rel="stylesheet" type="text/css" href="./asset/fomantic/dist/components/segment.css">
    <link rel="stylesheet" type="text/css" href="./asset/fomantic/dist/components/button.css">
    <link rel="stylesheet" type="text/css" href="./asset/fomantic/dist/components/list.css">
    <link rel="stylesheet" type="text/css" href="./asset/fomantic/dist/components/icon.css">
    <link rel="stylesheet" type="text/css" href="./asset/fomantic/dist/components/sidebar.css">
    <link rel="stylesheet" type="text/css" href="./asset/fomantic/dist/components/transition.css">
    <link rel="stylesheet" type="text/css" href="./asset/fomantic/dist/components/modal.css">
    <link rel="stylesheet" type="text/css" href="./asset/fomantic/dist/components/accordion.css">
    <link rel="stylesheet" type="text/css" href="./asset/fomantic/dist/components/accordion.css">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anybody:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- css external -->
    <link rel="stylesheet" href="./asset/style.css">
    <!-- swipper js -->
    <!-- <link rel="stylesheet" href="../asset/swiper/swiper-bundle.min.css" /> -->
    <link rel="stylesheet" type="text/css" href="./asset/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" type="text/css" href="./asset/toastr/toastr.min.css">

    <!-- swet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- <link rel="stylesheet" href="sweetalert2.min.css"> -->
    <script src="./asset/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="./asset/fomantic/dist/components/visibility.js"></script>
    <script src="./asset/fomantic/dist/components/sidebar.js"></script>
    <script src="./asset/fomantic/dist/components/transition.js"></script>
    <script src="./asset/fomantic/dist/components/modal.js"></script>
    <script src="./asset/fomantic/dist/components/accordion.js"></script>
    <!-- swipper js -->
    <!-- <script src="/asset/swiper/swiper-bundle.min.js"></script> -->
    <script src="./asset/swiper/swiper-bundle.min.js"></script>
    <script src="./asset/script.js"></script>
    <script src="./asset/toastr/toastr.min.js"></script>


</head>

<body>

    <!-- Following Menu -->
    <div class="ui large top fixed hidden menu">
        <div class="ui container">
            <a href="index.php" class="active item">Home</a>
            <a href="index.php?action=products" class="item">Produk</a>
            <a href="index.php?action=membership" class="item">Membership</a>
            <a href="index.php?action=artikel" class="item">Artikel</a>
            <div class="right menu">
                <!-- auth logii -->
                 <?php if (isset($_SESSION['login_status']) && $_SESSION['login_status']):?>
                <div class="item">
                    <a href="index.php?action=profile" class="ui primary button">profile</a>
                    <span>Hello, <?php echo htmlspecialchars($_SESSION['user']['username']); ?></span>
                </div>
                <div class="item">
                    <a href="index.php?action=logout" class="ui primary button">logout</a>
                </div>
                <?php else: ?>


                <div class="item">
                    <a href="index.php?action=login" class="ui primary button">Login</a>
                </div>
                <div class="item">
                    <a href="index.php?action=register" class="ui primary button">Sign Up</a>
                </div>
                <?php endif; ?>
            </div>
        </div>

    </div>

    <!-- Sidebar Menu -->
    <div class="ui vertical inverted sidebar menu">
        <a href="index.php" class="active item">Home</a>
        <a href="index.php?action=products" class="item">Produk</a>
        <a href="index.php?action=membership" class="item">Membership</a>
        <a href="index.php?action=artikel" class="item">Artikel</a>

        <!-- auth login -->
         <?php if (isset($_SESSION['login_status']) && $_SESSION['login_status']):?>
        <a href="index.php?action=profile" class="item">Profile</a>
        <a href="index.php?action=logout" class="item">logout</a>
        <?php else: ?>
        


        <a href="index.php?action=login" class="item">Login</a>
        <a href="index.php?action=register" class="item">Signup</a>
        <?php endif;?>
    </div>





</body>

</html>