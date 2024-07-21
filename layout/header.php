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


    <link rel="stylesheet" href="../asset/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="../asset/fomantic/dist/components/reset.css">

    <link rel="stylesheet" type="text/css" href="../asset/fomantic/dist/components/container.css">
    <link rel="stylesheet" type="text/css" href="../asset/fomantic/dist/components/grid.css">
    <link rel="stylesheet" type="text/css" href="../asset/fomantic/dist/components/header.css">
    <link rel="stylesheet" type="text/css" href="../asset/fomantic/dist/components/image.css">
    <link rel="stylesheet" type="text/css" href="../asset/fomantic/dist/components/menu.css">

    <link rel="stylesheet" type="text/css" href="../asset/fomantic/dist/components/divider.css">
    <link rel="stylesheet" type="text/css" href="../asset/fomantic/dist/components/dropdown.css">
    <link rel="stylesheet" type="text/css" href="../asset/fomantic/dist/components/segment.css">
    <link rel="stylesheet" type="text/css" href="../asset/fomantic/dist/components/button.css">
    <link rel="stylesheet" type="text/css" href="../asset/fomantic/dist/components/list.css">
    <link rel="stylesheet" type="text/css" href="../asset/fomantic/dist/components/icon.css">
    <link rel="stylesheet" type="text/css" href="../asset/fomantic/dist/components/sidebar.css">
    <link rel="stylesheet" type="text/css" href="../asset/fomantic/dist/components/transition.css">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anybody:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- css external -->
    <link rel="stylesheet" href="../asset/style.css">
    <!-- swipper js -->
    <link rel="stylesheet" href="../asset/swiper-bundle.min.css" />
    <link rel="stylesheet" href="../asset/bootstrap-bundle.min.js" />
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="../asset/fomantic/dist/components/visibility.js"></script>
    <script src="../asset/fomantic/dist/components/sidebar.js"></script>
    <script src="../asset/fomantic/dist/components/transition.js"></script>
    <!-- swipper js -->
    <script src="../asset/swiper-bundle.min.js"></script>

    <script>
        $(document)
            .ready(function() {

                // fix menu when passed
                $('.masthead')
                    .visibility({
                        once: false,
                        onBottomPassed: function() {
                            $('.fixed.menu').transition('fade in');
                        },
                        onBottomPassedReverse: function() {
                            $('.fixed.menu').transition('fade out');
                        }
                    });

                // create sidebar and attach to menu open
                $('.ui.sidebar')
                    .sidebar('attach events', '.toc.item');

            });

        // swiper
        
        var swiper = new Swiper(".mySwiper", {
            pagination: {
                el: ".swiper-pagination",
                type: "progressbar",

            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });

        
    </script>

</head>

<body>

    <!-- Following Menu -->
    <div class="ui large top fixed hidden menu">
        <div class="ui container">
            <a href="header.php?page=home" class="active item">Home</a>
            <a href="header.php?page=produk" class="item">Produk</a>
            <a href="header.php?page=membership" class="item">Membership</a>
            <a href="header.php?page=artikel" class="item">Artikel</a>
            <div class="right menu">
                <div class="item">
                    <a class="ui button">Log in</a>
                </div>
                <div class="item">
                    <a class="ui primary button">Sign Up</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <div class="ui vertical inverted sidebar menu">
        <a href="header.php?page=home" class="active item">Home</a>
        <a href="header.php?page=produk" class="item">Produk</a>
        <a href="header.php?page=membership" class="item">Membership</a>
        <a href="header.php?page=artikel" class="item">Artikel</a>
        <a class="item">Login</a>
        <a class="item">Signup</a>
    </div>


    <!-- konten -->
    <div class=" pusher ">
        <div class="ui inverted vertical masthead center aligned segment">
            <div class="ui container">
                <div class="ui large secondary inverted pointing menu">
                    <a class="toc item">
                        <i class="sidebar icon"></i>
                    </a>
                    <a href="header.php?page=home" class="active item">Home</a>
                    <a href="header.php?page=produk" class="item">Produk</a>
                    <a href="header.php?page=membership" class="item">Membership</a>
                    <a href="header.php?page=artikel" class="item">Artikel</a>
                    <div class="right item">
                        <a class="ui inverted button">Log in</a>
                        <a class="ui inverted button">Sign Up</a>
                    </div>
                </div>
            </div>

            <?php
            if (isset($_GET['page'])) {
                $page = $_GET['page'];
                switch ($page) {
                    case 'home':
                        include '../home.php';
                        break;
                    case 'membership':
                        include 'membership.php';
                        break;
                    case 'produk':
                        include 'membership.php';
                        break;
                    case 'article':
                        include 'article.php';
                        break;
                    default:
                        echo "<center><h3>Maaf halaman tidak ditemukan!</h3></center>";
                        break;
                }
            } else {
            }
            ?>
        </div>

        <div class="ui inverted vertical footer segment">
            <div class="ui container">
                <div class="ui stackable inverted divided equal height stackable grid">
                    <div class="three wide column">
                        <h4 class="ui inverted header">About</h4>
                        <div class="ui inverted link list">
                            <a href="#" class="item">Sitemap</a>
                            <a href="#" class="item">Contact Us</a>
                            <a href="#" class="item">Religious Ceremonies</a>
                            <a href="#" class="item">Gazebo Plans</a>
                        </div>
                    </div>
                    <div class="three wide column">
                        <h4 class="ui inverted header">Services</h4>
                        <div class="ui inverted link list">
                            <a href="#" class="item">Banana Pre-Order</a>
                            <a href="#" class="item">DNA FAQ</a>
                            <a href="#" class="item">How To Access</a>
                            <a href="#" class="item">Favorite X-Men</a>
                        </div>
                    </div>
                    <div class="seven wide column">
                        <h4 class="ui inverted header">Footer Header</h4>
                        <p>Extra space for a call to action inside the footer that could help re-engage users.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>




</body>

</html>