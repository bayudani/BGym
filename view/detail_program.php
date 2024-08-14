<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BayGym</title>
    <link rel="stylesheet" href="/Bgym/asset/output.css">
    <link rel="stylesheet" href="asset/output.css">
    <!-- <script src="/BGym/asset/script.js"></script> -->


</head>

<body>
    <!-- component -->
    <div class="max-w-screen-xl mx-auto">
        
<?php
include 'layout/header.php'
?>
        <main class="mt-96	mb-56">

            <div class="mb-4 md:mb-0 w-full max-w-screen-md mx-auto relative -mt-80" style="height: 24em;">
                <div class="absolute left-0 bottom-0 w-full h-full z-10" style="background-image: linear-gradient(180deg,transparent,rgba(0,0,0,.7));"></div>
                <img src="/Bgym/asset/image/<?php echo $program['foto']; ?>" class="absolute left-0 top-0 w-full h-full z-0 object-cover" alt="program" />
                <div class="p-4 absolute bottom-0 left-0 z-20">
                    <a href="#" class="px-4 py-1 bg-black text-gray-200 inline-flex items-center justify-center mb-2">Program</a>
                    <h2 class="text-4xl font-semibold text-gray-100 leading-tight">
                    <?php echo htmlspecialchars($program['nama']); ?>
                    </h2>
                    <div class="flex mt-3">
                        <img src="https://randomuser.me/api/portraits/men/97.jpg" class="h-10 w-10 rounded-full mr-2 object-cover" />
                        <div>
                            <p class="font-semibold text-gray-200 text-sm"> Mike Sullivan </p>
                            <p class="font-semibold text-gray-400 text-xs"> 14 Aug </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="px-4 lg:px-0 mt-12 text-gray-700 max-w-screen-md mx-auto text-lg leading-relaxed">
                <div class="border-l-4 border-gray-500 pl-4 mb-6 italic rounded">
                    Sportsman do offending supported extremity breakfast by listening. Decisively advantages nor
                    expression
                    unpleasing she led met. Estate was tended ten boy nearer seemed. As so seeing latter he should thirty whence.
                    Steepest speaking up attended it as. Made neat an on be gave show snug tore.
                </div>
                <p><?php echo $program['isi'];?></p>


            </div>
        </main>
        <!-- main ends here -->

        <!-- footer -->
        </div>

        <?php
        include 'layout/footer.php'
        ?>
        <script src="/Bgym/node_modules/flowbite/dist/flowbite.min.js"></script>

</body>

</html>