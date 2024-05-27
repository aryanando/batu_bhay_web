<!doctype html>
<html lang="en">
{{-- @dd($postData) --}}

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RS Bhayangkara Batu - Website Resmi</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
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
    {{-- !!!!!!! Mutu Kontent --}}
    <section>
        <div class="container mx-auto flex flex-wrap py-6">
            <!-- Post Section -->
            <div class="w-full md:w-2/3 flex flex-col items-center px-3">
                <article class="flex flex-col shadow my-4">
                    <div class="bg-white flex flex-col justify-start p-6">
                        <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4">Mutu</a>
                        <p href="#" class="text-sm pb-8">
                            By <a href="#" class="font-semibold hover:text-gray-800">RS Bhayangkara Hasta Brata
                                Batu</a>
                            {{-- , Published on April 25th, 2020 --}}
                        </p>
                        <h1 class="text-2xl font-bold pb-3">Tentang Indikator Mutu</h1>
                        <p class="pb-3">Rumah Sakit Bhayangkara Hasta Brata Batu sebagai salah satu sarana kesehatan
                            yang memberikan pelayanan kepada masyarakat memiliki peran strategis dalam mempercepat
                            peningkatan derajat kesehatan masyarakat dan oleh karena itu Rumah Sakit Bhayangkara Hasta
                            Brata Batu dituntut untuk dapat memberikan pelayanan bermutu sesuai dengan yang ditetapkan
                            dan dapat menjangkau seluruh lapisan masyarakat. </p>

                        <p>Serta sebagai perwujudan dari visi dan misi misi Rumah Sakit Bhayangkara Hasta Brata Batu
                            untuk menjadi rumah sakit unggul dalam pelayanan dan berkarakter, maka diperlukan upaya
                            untuk meningkatkan pelayanan kepada masyarakat pada umumnya. Sehingga dalam rangka
                            peningkatan mutu rumah sakit, Rumah Sakit Bhayangkara Hasta Brata Batu membentuk suatu
                            komite yang bertugas membantu direktur untuk melaporkan indikator mutu di semua unit kerja.
                        </p>

                    </div>
                </article>

                <div class="w-full flex pt-6">
                    <a href="#" class="w-1/2 bg-white shadow hover:shadow-md text-left p-6">
                        <p class="text-lg text-blue-800 font-bold flex items-center"><i
                                class="fas fa-arrow-left pr-1"></i> Previous</p>
                        <p class="pt-2">Lorem Ipsum Dolor Sit Amet Dolor Sit Amet</p>
                    </a>
                    <a href="#" class="w-1/2 bg-white shadow hover:shadow-md text-right p-6">
                        <p class="text-lg text-blue-800 font-bold flex items-center justify-end">Next <i
                                class="fas fa-arrow-right pl-1"></i></p>
                        <p class="pt-2">Lorem Ipsum Dolor Sit Amet Dolor Sit Amet</p>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <x-footer />

    <script src="js/scrollreveal.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
