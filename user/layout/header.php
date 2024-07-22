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


    <link rel="stylesheet" href="../../asset/bootstrap/bootstrap.min.css">
    <!-- fomantic -->
    <link rel="stylesheet" type="text/css" href="../../asset/fomantic/dist/components/reset.css">
    <link rel="stylesheet" type="text/css" href="../../asset/fomantic/dist/components/container.css">
    <link rel="stylesheet" type="text/css" href="../../asset/fomantic/dist/components/grid.css">
    <link rel="stylesheet" type="text/css" href="../../asset/fomantic/dist/components/header.css">
    <link rel="stylesheet" type="text/css" href="../../asset/fomantic/dist/components/image.css">
    <link rel="stylesheet" type="text/css" href="../../asset/fomantic/dist/components/menu.css">

    <link rel="stylesheet" type="text/css" href="../../asset/fomantic/dist/components/divider.css">
    <link rel="stylesheet" type="text/css" href="../../asset/fomantic/dist/components/dropdown.css">
    <link rel="stylesheet" type="text/css" href="../../asset/fomantic/dist/components/segment.css">
    <link rel="stylesheet" type="text/css" href="../../asset/fomantic/dist/components/button.css">
    <link rel="stylesheet" type="text/css" href="../../asset/fomantic/dist/components/list.css">
    <link rel="stylesheet" type="text/css" href="../../asset/fomantic/dist/components/icon.css">
    <link rel="stylesheet" type="text/css" href="../../asset/fomantic/dist/components/sidebar.css">
    <link rel="stylesheet" type="text/css" href="../../asset/fomantic/dist/components/transition.css">
    <link rel="stylesheet" type="text/css" href="../../asset/fomantic/dist/components/modal.css">
    <link rel="stylesheet" type="text/css" href="../../asset/fomantic/dist/components/accordion.css">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anybody:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- css external -->
    <link rel="stylesheet" href="../../asset/style.css">
    <!-- swipper js -->
    <!-- <link rel="stylesheet" href="../asset/swiper/swiper-bundle.min.css" /> -->
    <link rel="stylesheet" type="text/css" href="../../asset/swiper/swiper-bundle.min.css">

    <script src="../../asset/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="../../asset/fomantic/dist/components/visibility.js"></script>
    <script src="../../asset/fomantic/dist/components/sidebar.js"></script>
    <script src="../../asset/fomantic/dist/components/transition.js"></script>
    <script src="../../asset/fomantic/dist/components/modal.js"></script>
    <script src="../../asset/fomantic/dist/components/accordion.js"></script>
    <!-- swipper js -->
    <!-- <script src="../asset/swiper/swiper-bundle.min.js"></script> -->
    <script src="../../asset/swiper/swiper-bundle.min.js"></script>
    <script src="../../asset/script.js"></script>
    

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
                    <button class="ui button" id="showModalButton" data-bs-toggle="modal" data-bs-target="#exampleModal">Log in</button>

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
        <a class="item" id="showModalButton" data-bs-toggle="modal" data-bs-target="#exampleModal">Login</a>
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
                        <a class="ui inverted button" id="showModalButton" data-bs-toggle="modal" data-bs-target="#exampleModal">Log in</a>
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

        <!-- modal -->
        <!-- Modal Login -->
        <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content text-bg-dark">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Login</h1>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label for="username" class="col-form-label">Username:</label>
                                <input type="text" class="form-control text-bg-dark" id="username" name="username">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="col-form-label">Password</label>
                                <input class="form-control text-bg-dark" type="password" id="password" name="password"></input>
                            </div>
                            <button type="button" class="btn btn-primary form-control">Login</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <a href="register">Belum memiliki akun?</a>
                    </div>
                </div>
            </div>
        </div>



        <!-- footer -->
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