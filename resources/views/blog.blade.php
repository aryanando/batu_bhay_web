<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RS Bhayangkara Batu - Website Resmi</title>
    @vite('resources/css/app.css')
    <!-- css -->
    <link rel="stylesheet" href="dist/output.css" />
    <!-- icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.min.css" />
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    <!-- swiper css -->
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
    <link rel="icon" href="https://batubhayangkara.com/wp-content/uploads/2022/06/cropped-logo-hasta-192x192.png"
        sizes="192x192">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

</head>

<body>
    <x-header />

    <x-blog.hero />

    <x-blog.content />

    <x-blog />

    <x-footer />

    <!-- temp div -->
    <!-- <div class="h-[4000px]"></div> -->

    <!-- SCRIPTS -->
    <!-- swiper -->
    <script src="js/swiper-bundle.min.js"></script>
    <!-- scroll reveal -->
    <script src="js/scrollreveal.min.js"></script>
    <!-- main -->
    <script src="js/main.js"></script>
</body>

</html>
