<!DOCTYPE html>
<html>
<?php
include './config/koneksi.php'
?>

<head>
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css.css">
    <!-- Site Properties -->
    <title>Brogym</title>


    <link rel="stylesheet" href="./asset/swiper/swiper-bundle.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>


    <?php
    include 'layout/header.php'
    ?>


    <div class=" pusher ">
        <div class="ui vertical masthead center aligned segment custom1">
            <div class="ui container">
                <div class="ui large secondary inverted pointing menu">
                    <a class="toc item">
                        <i class="sidebar icon"></i>
                    </a>
                    <a href="index.php" class="active item">Home</a>
                    <a href="index.php?action=produk" class="item">Produk</a>
                    <a href="index.php?action=produk" class="item">Membership</a>
                    <a href="index.php?action=produk" class="item">Artikel</a>
                    <div class="right item">
                        <?php if(isset($_SESSION['login_status'])&& $_SESSION['login_status']):?>
                        <a href="index.php?action=profile" class="ui inverted button">Profile</a>
                        <a href="index.php?action=logout" class="ui inverted button">Logout</a>

                        <?php else:?>
                        <a href="index.php?action=login" class="ui inverted button">Log in</a>
                        <a href="index.php?action=register" class="ui inverted button">Sign Up</a>
                        <?php endif;?>
                    </div>
                </div>
            </div>
            <div class="ui inverted container">
                <h1 class=" ui inverted header font1">
                    Welcome to BroGym
                </h1>
                <h2 class="text-secondary ">Bangun Badan Impianmu di <span class="span">BroGym</span></h2>
                <div class="ui huge btn btn-danger button mt-3">Join Membership<i class="right arrow icon"></i></div>
            </div>
        </div>
        <!-- card -->
        <div class="custom2 ui three column stackable grid  mx-5">
            <div class="column">
                <div class="ui  segment card-custom">
                    <a href="https://google.com" class="ui fluid image text-dark anchor">
                        <!-- <i class="fa-light fa-dumbbell icon"></i> -->
                        <img class="image_custom" src="./asset/img/6.png" alt="gambar">

                        <h5 class="mt-2">Alat yang lenkap</h5>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officiis iure soluta unde ad, accusantium quibusdam explicabo inventore atque excepturi.</p>
                    </a>
                </div>
            </div>

            <div class="column">
                <div class="ui  segment card-custom ">
                    <a href="https://google.com" class="ui fluid image text-dark anchor">
                        <!-- <i class="bi bi-people icon"></i> -->
                        <img class="image_custom" src="./asset/img/8.png" alt="gambar">

                        <h5 class="mt-2">Komunitas yang solid</h5>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officiis iure soluta unde ad, accusantium quibusdam explicabo inventore atque excepturi.</p>
                    </a>
                </div>
            </div>


            <div class="column">
                <div class="ui segment card-custom">
                    <a href="https://google.com" class="ui fluid image text-dark anchor">
                        <!-- <i class="fa-light fa-dumbbell icon"></i> -->
                        <img class="image_custom" src="./asset/img/3.png" alt="gambar">
                        <h5 class="mt-2">Tempat yang nyaman</h5>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officiis iure soluta unde ad, accusantium quibusdam explicabo inventore atque excepturi.</p>
                    </a>
                </div>
            </div>
        </div>

        <!-- swiper -->
        <div class="ui vertical stripe segment bg-white custom3">
            <div class="ui middle aligned stackable grid container ">
                <div class="row">
                    <div class="eight wide column">
                        <h3 class="ui header font2">Perjalanan FIT yang terjangkau dimulai sekarang!</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro eius velit id optio inventore minus odio quo doloribus amet, nemo, fugiat ipsa sequi assumenda, dignissimos voluptate quia? Eius, possimus voluptatem.</p>

                    </div>
                    <div class="six wide right floated column p-4">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="https://assets.unileversolutions.com/v1/64566700.jpg" class="ui big bordered rounded  image ">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://assets.unileversolutions.com/v1/64566700.jpg" class="ui big bordered rounded  image ">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://assets.unileversolutions.com/v1/64566700.jpg" class="ui big bordered rounded  image ">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://assets.unileversolutions.com/v1/64566700.jpg" class="ui big bordered rounded  image ">
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="center aligned column">
                        <a class="ui huge button">Check Them Out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="ui vertical stripe quote segment mt-3 mb-3 text-white">
        <h4 class="head_program">Pilih program latihan anda</h4>
        <div class=" ui three column stackable grid custom  mx-5">
            <div class="column program">
                <div class="custom5">
                    <div class="ui  segment program">
                        <a href="https://google.com" class="ui fluid image text-light anchor">
                            <h4 class="text-bold">FULL BODY</h4>
                        </a>
                    </div>
                    <p>Selengkapnya</p>
                </div>
            </div>
            <div class="column program">
                <div class="custom5">
                    <div class="ui  segment program">
                        <a href="https://google.com" class="ui fluid image text-light anchor">
                            <h4 class="text-bold">FULL BODY</h4>
                        </a>
                    </div>
                    <p>Selengkapnya</p>
                </div>
            </div>
            <div class="column program">
                <div class="custom5">
                    <div class="ui  segment program">
                        <a href="https://google.com" class="ui fluid image text-light anchor">
                            <h4 class="text-bold">FULL BODY</h4>
                        </a>
                    </div>
                    <p>Selengkapnya</p>
                </div>
            </div>

        </div>
    </div>

    <div class="ui vertical stripe segment bg-light ">
        <div class="ui text container">
            <h3 class="ui header">Breaking The Grid, Grabs Your Attention</h3>
            <p>Instead of focusing on content creation and hard work, we have learned how to master the art of doing nothing by providing massive amounts of whitespace and generic content that can seem massive, monolithic and worth your attention.</p>
            <a class="ui large button">Read More</a>
            <h4 class="ui horizontal header divider">
                <a href="#">Case Studies</a>
            </h4>
            <h3 class="ui header">Did We Tell You About Our Bananas?</h3>
            <p>Yes I know you probably disregarded the earlier boasts as non-sequitur filler content, but its really true. It took years of gene splicing and combinatory DNA research, but our bananas can really dance.</p>
            <a class="ui large button">I'm Still Quite Interested</a>
        </div>
    </div>

    <!-- membership -->
    <div class="ui vertical stripe quote segment mt-3 mb-3 text-white">
        <h4 class="head_program">Pilih program latihan anda</h4>
        <div class=" ui three column stackable grid custom  mx-5">
            <?php foreach($produk as $produks): ?>
            <div class="column program">
                <div class="custom5">
                    <div class="ui  segment program">
                        <a href="index.php?action=transaksi&id_produk=<?php echo $produks['id_produk']; ?>" class="ui fluid image text-light anchor">
                            <h4 class="text-bold"><?php echo $produks['nama'];?></h4>
                        </a>
                    </div>
                    <p>Selengkapnya</p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- faq -->
    <div class="ui segment">
        <div class="ui two column very relaxed grid">
            <div class="column">
                <h5>Faq</h5>
                <p>Frequently Asked Questions</p>
                <p></p>
                <p></p>
                <p></p>
            </div>
            <div class="column">
                <div class="ui accordion">
                    <div class="active title">
                        <i class="dropdown icon"></i>
                        What is a dog?
                    </div>
                    <div class="active content">
                        <p>A dog is a type of domesticated animal. Known for its loyalty and faithfulness, it can be found as a welcome guest in many households across the world.</p>
                    </div>
                    <div class="title">
                        <i class="dropdown icon"></i>
                        What kinds of dogs are there?
                    </div>
                    <div class="content">
                        <p>There are many breeds of dogs. Each breed varies in size and temperament. Owners often select a breed of dog that they find to be compatible with their own lifestyle and desires from a companion.</p>
                    </div>
                    <div class="title">
                        <i class="dropdown icon"></i>
                        How do you acquire a dog?
                    </div>
                    <div class="content">
                        <p>Three common ways for a prospective owner to acquire a dog is from pet shops, private owners, or shelters.</p>
                        <p>A pet shop may be the most convenient way to buy a dog. Buying a dog from a private owner allows you to assess the pedigree and upbringing of your dog before choosing to take it home. Lastly, finding your dog from a shelter, helps give a good home to a dog who may not find one so readily.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="ui vertical divider">

        </div>
    </div>

    </div>



    <?php
    include 'layout/footer.php';
    ?>

    <!-- Swiper JS -->
    <script src="/asset/swiper/swiper-bundle.min.js"></script>

   
   

    
<?php if (@$_SESSION['berhasil']) { ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'berhasil',
                text: '<?php echo $_SESSION['berhasil']?>',
            })
        </script>
    <?php unset($_SESSION['berhasil']);
    } ?>

</body>

</html>