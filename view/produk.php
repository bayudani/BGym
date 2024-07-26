<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="ui vertical stripe quote segment mt-3 mb-3 text-white">
        <h4 class="head_program"> Berlangganan sekarang</h4>
        <div class=" ui three column stackable grid custom  mx-5">
        <?php
                    // $no = 1;
                    while($produk = mysqli_fetch_array($produks)){?>
            <div class="column program">
                <div class="custom5">
                    <div class="ui  segment program">
                        <a href="https://google.com" class="ui fluid image text-light anchor">
                            <h4 class="text-bold"><?php echo $produk['nama'] ?></h4>
                            <p><?php echo $produk['masa berlaku']?></p>
                        </a>
                    </div>
                    <p>Selengkapnya</p>
                </div>
            </div>
            <?php }?>

         
        

        </div>
    </div>
</body>
</html>