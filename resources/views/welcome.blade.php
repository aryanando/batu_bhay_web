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
    <!-- header -->
    <header class="py-8 lg:pt-6 lg:pb-14">
        <div class="container mx-auto lg:relative flex flex-col lg:flex-row lg:justify-between gap-y-4 lg:gap-y-0">
            <!-- logo -->
            <div class="flex justify-center lg:justify-normal">
                <a href="#">
                    <img src="./assets/img/header/logo-2.png" alt="" class=" h-16" />
                </a>
            </div>

            <div class="flex flex-col gap-y-4 lg:flex-row lg:gap-x-10 lg:gap-y-0 pl-5">
                <!-- location -->
                <div class="flex justify-center items-center gap-x-2 lg:justify-normal lg:max-w-80">
                    <i class="ri-map-pin-2-fill text-xl text-accent "></i>
                    <div class="text-secondary text-center xl:text-left">Ngaglik, Jl Kartini no 1, Kec. Batu, Kota Batu, Jawa Timur 65311</div>
                </div>
                <!-- phone -->
                <div class="flex justify-center items-center gap-x-2 lg:justify-normal">
                    <i class="ri-phone-fill text-2xl text-accent"></i>
                    <div class="text-secondary">(0341) 591067</div>
                </div>
                <!-- btn -->
                <button class="btn btn-sm btn-outline w-[240px] lg:w-auto mx-auto lg:mx-0">
                    Book now
                </button>
                <!-- mobile nav -->
                <nav
                    class="mnav bg-white fixed w-[300px] top-0 h-screen -left-[300px] shadow-2xl lg:hidden transition-all duration-300 z-20">
                    <!-- nav trigger btn -->
                    <div
                        class="mnav__close-btn bg-primary w-8 h-8 relative -right-full top-8 flex justify-center items-center rounded-tr-lg rounded-br-lg cursor-pointer transition-all">
                        <i class="mnav__close-btn-icon ri-arrow-right-s-line text-2xl text-white"></i>
                    </div>

                    <!-- logo, list, form -->
                    <div class="px-12 flex flex-col gap-y-12 h-full">
                        <!-- logo -->
                        <a href="#">
                            <img src="assets/img/header/logo.svg" alt="" />
                        </a>
                        <!-- list -->
                        <ul class="flex flex-col gap-y-5">
                            <li>
                                <a href="#"
                                    class="text-secondary hover:text-accent transition-all duration-300">Beranda</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="text-secondary hover:text-accent transition-all duration-300">Profil</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="text-secondary hover:text-accent transition-all duration-300">Dokter</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="text-secondary hover:text-accent transition-all duration-300">Department</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="text-secondary hover:text-accent transition-all duration-300">Pelayanan</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="text-secondary hover:text-accent transition-all duration-300">Blog</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="text-secondary hover:text-accent transition-all duration-300">Contact</a>
                            </li>
                        </ul>
                        <!-- form -->
                        <form class="relative flex gap-x-[10px]">
                            <label for="mnav-search-input">
                                <i class="ri-search-line text-2xl text-accent"></i>
                            </label>
                            <input type="text" id="mnav-search-input" placeholder="Search..."
                                class="outline-none w-[160px] border-b-2 focus:border-b-2 focus:border-accent placeholder:italic" />
                        </form>
                    </div>
                </nav>
                <!-- desktop nav -->

                <nav
                    class="bg-white absolute w-full left-0 -bottom-[86px] shadow-custom1 h-16 rounded-[10px] hidden lg:flex lg:items-center lg:justify-between lg:px-[50px]">
                    <!-- list -->
                    <ul class="flex gap-x-4">
                        <li>
                            <a href="#"
                                class="border-r pr-4 text-secondary hover:text-accent transition-all duration-300">Beranda</a>
                        </li>
                        <li>
                            <a href="#"
                                class="border-r pr-4 text-secondary hover:text-accent transition-all duration-300">Profil</a>
                        </li>
                        <li>
                            <a href="#"
                                class="border-r pr-4 text-secondary hover:text-accent transition-all duration-300">Dokter</a>
                        </li>
                        <li>
                            <a href="#"
                                class="border-r pr-4 text-secondary hover:text-accent transition-all duration-300">Department</a>
                        </li>
                        <li>
                            <a href="#"
                                class="border-r pr-4 text-secondary hover:text-accent transition-all duration-300">Pelayanan</a>
                        </li>
                        <li>
                            <a href="#"
                                class="border-r pr-4 text-secondary hover:text-accent transition-all duration-300">Blog</a>
                        </li>
                        <li>
                            <a href="#"
                                class="text-secondary hover:text-accent transition-all duration-300">Contact</a>
                        </li>
                    </ul>
                    <!-- form -->
                    <form class="relative flex gap-x-[10px]">
                        <label for="search-input" class="flex justify-center items-center group">
                            <i class="ri-search-line text-2xl text-accent"></i>
                        </label>
                        <input type="text" id="search-input" placeholder="Search..."
                            class="outline-none w-[100px] focus:w-[180px] focus:border-b-2 focus:border-accent placeholder:italic placeholder:text-base transition-all duration-150" />
                    </form>
                </nav>
            </div>
        </div>
    </header>

    <!-- hero -->
    <section class="hero bg-grey py-12 xl:pt-12 xl:pb-0 overflow-hidden">
        <div class="container mx-auto h-full">
            <!-- text & img -->
            <div class="flex flex-col xl:flex-row items-center justify-between h-full">
                <!-- text -->
                <div class="hero__text xl:w-[48%] text-center xl:text-left">
                    <!-- badge -->
                    <div
                        class="flex items-center bg-white py-[10px] px-[20px] w-max gap-x-2 mb-[26px] rounded-full mx-auto xl:mx-0">
                        <!-- badge icon -->
                        <i class="ri-heart-pulse-line text-2xl text-accent"></i>
                        <div class="uppercase text-base font-medium text-[#9ab4b7] tracking-[2.24px]">
                            RS Bhayangkara Batu
                        </div>
                    </div>
                    <!-- title -->
                    <h1 class="h1 mb-6">Layanan Kesehatan</h1>
                    <!-- desc -->
                    <p class="mb-[42px] md:max-w-xl">
                        Bekerja Sepenuh Hati
                    </p>
                    <!-- btn -->
                    <button class="btn btn-lg btn-accent mx-auto xl:mx-0">
                        Daftar Online (BPJS)
                    </button>
                </div>
                <!-- image -->
                <div class="hero__img hidden xl:flex max-w-[814px] self-end min-h-full">
                    <img src="assets/img/hero/hero-image.png" alt="" />
                </div>
            </div>
        </div>
    </section>
    <!-- end hero -->

    <!-- stats -->
    <section class="stats section">
        <div class="container mx-auto">
            <!-- wrapper -->
            <div class="flex flex-col xl:flex-row gap-y-6 justify-between">
                <!-- item -->
                <div class="stats__item flex-1 xl:border-r flex flex-col items-center">
                    <div class="text-4xl xl:text-[64px] font-semibold text-accent-tertiary xl:mb-2">
                        +300
                    </div>
                    <div>Pasien Rawat Jalan / hari</div>
                </div>
                <!-- item -->
                <div class="stats__item flex-1 xl:border-r flex flex-col items-center">
                    <div class="text-4xl xl:text-[64px] font-semibold text-accent-tertiary xl:mb-2">
                        16
                    </div>
                    <div>Total Poli</div>
                </div>
                <!-- item -->
                <div class="stats__item flex-1 xl:border-r flex flex-col items-center">
                    <div class="text-4xl xl:text-[64px] font-semibold text-accent-tertiary xl:mb-2">
                        +40
                    </div>
                    <div>Dokter Profesional</div>
                </div>
                <!-- item -->
                <div class="stats__item flex-1 flex flex-col items-center">
                    <div class="text-4xl xl:text-[64px] font-semibold text-accent-tertiary xl:mb-2">
                        +15
                    </div>
                    <div>Tahun Pengalaman</div>
                </div>
            </div>
        </div>
    </section>
    <!-- end stats -->

    <!-- services -->
    <section class="services">
        <!-- bg -->
        <div
            class="bg-services bg-cover bg-no-repeat max-w-[1466px] mx-4 xl:mx-auto rounded-[20px] xl:pt-[70px] px-6 xl:px-0 relative h-[368px] flex items-center xl:items-start -z-10">
            <div class="container mx-auto">
                <!-- text -->
                <div class="services__top flex items-center flex-col xl:flex-row xl:mb-[60px]">
                    <h2 class="h2 text-white flex-1 mb-4 xl:mb-0 text-center xl:text-left">
                        Pelayanan Kami
                    </h2>
                    <p class="text-white flex-1 text-center xl:text-left max-w-2xl xl:max-w-none">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Repudiandae similique eveniet nobis reprehenderit est explicabo
                        sunt sapiente dolore, maxime.
                    </p>
                </div>
            </div>
        </div>
        <!-- grid container -->
        <div class="container mx-auto mt-8 xl:-mt-[144px]">
            <!-- grid -->
            <div class="grid xl:grid-cols-4 gap-5 px-8 xl:px-0">
                <!-- grid item -->
                <div
                    class="services__item bg-white p-[30px] rounded-[10px] shadow-custom2 min-h-[288px] flex flex-col items-center text-center">
                    <!-- grid item icon -->
                    <div class="mb-[15px]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" class=" fill-blue-300"
                            viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path
                                d="M142.4 21.9c5.6 16.8-3.5 34.9-20.2 40.5L96 71.1V192c0 53 43 96 96 96s96-43 96-96V71.1l-26.1-8.7c-16.8-5.6-25.8-23.7-20.2-40.5s23.7-25.8 40.5-20.2l26.1 8.7C334.4 19.1 352 43.5 352 71.1V192c0 77.2-54.6 141.6-127.3 156.7C231 404.6 278.4 448 336 448c61.9 0 112-50.1 112-112V265.3c-28.3-12.3-48-40.5-48-73.3c0-44.2 35.8-80 80-80s80 35.8 80 80c0 32.8-19.7 61-48 73.3V336c0 97.2-78.8 176-176 176c-92.9 0-168.9-71.9-175.5-163.1C87.2 334.2 32 269.6 32 192V71.1c0-27.5 17.6-52 43.8-60.7l26.1-8.7c16.8-5.6 34.9 3.5 40.5 20.2zM480 224a32 32 0 1 0 0-64 32 32 0 1 0 0 64z" />
                        </svg>
                    </div>
                    <!-- grid item title -->
                    <h3 class="h3 mb-[10px]">Rawat Jalan</h3>
                    <!-- grid item description -->
                    <p class="font-light leading-normal max-w-[300px]">
                        16 Poli dengan peralatan lengkap
                    </p>
                </div>
                <!-- grid item -->
                <div
                    class="services__item bg-white p-[30px] rounded-[10px] shadow-custom2 min-h-[288px] flex flex-col items-center text-center">
                    <!-- grid item icon -->
                    <div class="mb-[15px]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" class=" fill-blue-300"
                            viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path
                                d="M32 32c17.7 0 32 14.3 32 32V320H288V160c0-17.7 14.3-32 32-32H544c53 0 96 43 96 96V448c0 17.7-14.3 32-32 32s-32-14.3-32-32V416H352 320 64v32c0 17.7-14.3 32-32 32s-32-14.3-32-32V64C0 46.3 14.3 32 32 32zm144 96a80 80 0 1 1 0 160 80 80 0 1 1 0-160z" />
                        </svg>
                    </div>
                    <!-- grid item title -->
                    <h3 class="h3 mb-[10px]">Rawat Inap</h3>
                    <!-- grid item description -->
                    <p class="font-light leading-normal max-w-[300px]">
                        Ruang Rawat Inap dengan Fasilitas yang Nyaman dan Memadai
                    </p>
                </div>
                <!-- grid item -->
                <div
                    class="services__item bg-white p-[30px] rounded-[10px] shadow-custom2 min-h-[288px] flex flex-col items-center text-center">
                    <!-- grid item icon -->
                    <div class="mb-[15px]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" class=" fill-blue-300"
                            viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path
                                d="M160 32c0-17.7 14.3-32 32-32h32c17.7 0 32 14.3 32 32c17.7 0 32 14.3 32 32V288c0 17.7-14.3 32-32 32c0 17.7-14.3 32-32 32H192c-17.7 0-32-14.3-32-32c-17.7 0-32-14.3-32-32V64c0-17.7 14.3-32 32-32zM32 448H320c70.7 0 128-57.3 128-128s-57.3-128-128-128V128c106 0 192 86 192 192c0 49.2-18.5 94-48.9 128H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H320 32c-17.7 0-32-14.3-32-32s14.3-32 32-32zm80-64H304c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16z" />
                        </svg>
                    </div>
                    <!-- grid item title -->
                    <h3 class="h3 mb-[10px]">Alat Penunjang</h3>
                    <!-- grid item description -->
                    <p class="font-light leading-normal max-w-[300px]">
                        Alat Penunjang Baru dan Akurat
                    </p>
                </div>
                <!-- grid item -->
                <div
                    class="services__item bg-white p-[30px] rounded-[10px] shadow-custom2 min-h-[288px] flex flex-col items-center text-center">
                    <!-- grid item icon -->
                    <div class="mb-[15px]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" class=" fill-blue-300"
                            viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path
                                d="M0 48C0 21.5 21.5 0 48 0H368c26.5 0 48 21.5 48 48V96h50.7c17 0 33.3 6.7 45.3 18.7L589.3 192c12 12 18.7 28.3 18.7 45.3V256v32 64c17.7 0 32 14.3 32 32s-14.3 32-32 32H576c0 53-43 96-96 96s-96-43-96-96H256c0 53-43 96-96 96s-96-43-96-96H48c-26.5 0-48-21.5-48-48V48zM416 256H544V237.3L466.7 160H416v96zM160 464a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm368-48a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zM176 80v48l-48 0c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h48v48c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V192h48c8.8 0 16-7.2 16-16V144c0-8.8-7.2-16-16-16H240V80c0-8.8-7.2-16-16-16H192c-8.8 0-16 7.2-16 16z" />
                        </svg>
                    </div>
                    <!-- grid item title -->
                    <h3 class="h3 mb-[10px]">Instalasi Gawat Darurat</h3>
                    <!-- grid item description -->
                    <p class="font-light leading-normal max-w-[300px]">
                        Tenaga Medis yang Sigap dan Kompeten.
                    </p>

                </div>
            </div>
        </div>
    </section>
    <!-- end services -->

    <!-- Poli -->
    <section class="poli mt-10">
        <!-- bg -->
        <div
            class=" bg-slate-400 bg-cover bg-no-repeat max-w-[1466px] mx-4 xl:mx-auto rounded-[20px] xl:pt-[70px] px-6 xl:px-0 relative h-[368px] flex items-center xl:items-start -z-10">
            <div class="container mx-auto">
                <!-- text -->
                <div class="services__top flex items-center flex-col xl:flex-row xl:mb-[60px]">
                    <h2 class="h2 text-white flex-1 mb-4 xl:mb-0 text-center xl:text-left">
                        Poliklinik Kami
                    </h2>
                    <p class="text-white flex-1 text-center xl:text-left max-w-2xl xl:max-w-none">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Repudiandae similique eveniet nobis reprehenderit est explicabo
                        sunt sapiente dolore, maxime.
                    </p>
                </div>
            </div>
        </div>
        <!-- grid container -->
        <div class="container mx-auto mt-8 xl:-mt-[144px]">
            <!-- grid -->
            <div class="grid xl:grid-cols-4 gap-5 px-8 xl:px-0">
                <!-- grid item -->
                <div
                    class="services__item bg-white p-[30px] rounded-[10px] shadow-custom2 min-h-[288px] flex flex-col items-center text-center">
                    <!-- grid item icon -->
                    <div class="mb-[15px]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="75px" height="75px" class=" fill-slate-500" viewBox="0 0 48 48">
                            <g fill="none" stroke="#64748b" stroke-width="4"><path stroke-linecap="round" stroke-linejoin="round" d="M14.54 20.019c-1.688-2.075-3.272-2.521-4.754-1.337c-2.223 1.776-2.861 7.968-1.073 13.427c1.789 5.459 5.267 12.893 12.289 12.893c7.021 0 8.682-7.48 11.546-12.002c2.865-4.522 4.38-8.885 1.573-14.318"/><path stroke-linecap="round" d="M11 18.037A643.145 643.145 0 0 0 7 12c-1.446-2.145 2.251-4.918 4-3.032c1.166 1.258 2.715 3.11 4.647 5.557"/><path stroke-linecap="round" stroke-linejoin="round" d="M15.024 25.64c-.485-6.064-.09-10.012 1.182-11.845c1.91-2.75 5.457-3.792 8.798-3.792c1.988 0 3.805.847 5.448 2.541"/><path d="M41 12.613c.586 2.036-.37 3.897-3.316 4.318c-2.945.421-5.153 1.902-6.745 3.148c-1.593 1.246-4.44 5.026-5.003 6.923c-.562 1.898-3.776.153-4.639-.605c-.863-.757-1.712-2.416 0-4.151c1.712-1.735 1.341-2.081 1.341-3.84c0-1.76 9.362-7.58 14.635-8.112c1.172-.068 3.142.282 3.727 2.319Z" clip-rule="evenodd"/><path stroke-linecap="round" d="M23.008 4v5.263m-2.701 1.455c-3.018-3.793-5.451-5.91-7.3-6.35m3.997 2.661l.99-4.067m17.619 7.756c-.322 1.104-.322 2.14 0 3.106c.322.967 1.013 2.002 2.071 3.107"/></g>
                        </svg>
                    </div>
                    <!-- grid item title -->
                    <h3 class="h3 mb-[10px]">Klinik Dalam</h3>
                    <!-- grid item description -->
                    <p class="font-light leading-normal max-w-[300px]">
                        Membantu menandengan berbagai keluhan yang berkaitan dengan sistem organ bagian dalam dan keluhan penyakit seperti ginjal, hati, pencernaan, jantung dan lain sebagainya.
                    </p>
                </div>
                <!-- grid item -->
                <div
                    class="services__item bg-white p-[30px] rounded-[10px] shadow-custom2 min-h-[288px] flex flex-col items-center text-center">
                    <!-- grid item icon -->
                    <div class="mb-[15px]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" class=" fill-slate-500" viewBox="0 0 48 48">
                            <path d="M12.548 30.753c-10.864-4.582-6.577-20.049.965-22.604c3.129-1.06 6.58 2.457 6.559 4.64c-.01.944-.497 1.865-1.005 2.824c-.666 1.26-1.368 2.585-1.07 4.118c.525 2.7 1.113 7.256-.402 9.418c-1.515 2.163-3.038 2.451-5.047 1.604M34.347 8.149c7.542 2.555 11.83 18.022.965 22.604c-2.009.848-3.532.559-5.047-1.604c-1.515-2.162-.927-6.718-.402-9.418c.298-1.533-.404-2.859-1.07-4.118c-.508-.959-.995-1.88-1.004-2.824c-.022-2.183 3.43-5.7 6.558-4.64M28.618 22.78l.07.997h.012l.003-.001a1.286 1.286 0 0 0-.168.036a1.552 1.552 0 0 0-.473.226c-.29.206-.716.664-.716 1.82v14.466h-2V25.858c0-1.766.71-2.847 1.555-3.45a3.554 3.554 0 0 1 1.46-.603a2.47 2.47 0 0 1 .16-.02l.016-.002h.011c0-.001.002-.001.07.997m-9.376 0c-.068.997-.069.997-.07.997h-.012l-.003-.001l.024.003a1.553 1.553 0 0 1 .617.258c.29.207.716.665.716 1.821v14.466h2V25.858c0-1.766-.71-2.847-1.556-3.45a3.552 3.552 0 0 0-1.46-.603a2.472 2.472 0 0 0-.16-.02l-.015-.002h-.011c0-.001-.001-.001-.07.997"/>
                        </svg>
                    </div>
                    <!-- grid item title -->
                    <h3 class="h3 mb-[10px]">Klinik Urologi</h3>
                    <!-- grid item description -->
                    <p class="font-light leading-normal max-w-[300px]">
                        Membantu menangani masalah kesehatan pada sistem saluran kemih, termasuk ginjal, kandung kemih, kelenjar adrenal, dan saluran kemih.
                    </p>
                </div>
                <!-- grid item -->
                <div
                    class="services__item bg-white p-[30px] rounded-[10px] shadow-custom2 min-h-[288px] flex flex-col items-center text-center">
                    <!-- grid item icon -->
                    <div class="mb-[15px]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" class=" fill-slate-500" viewBox="0 0 24 24">
                            <path d="M12 22q-1.125 0-1.963-.238t-1.887-.887l-2.725-1.75q-.725-.45-1.075-1.162T4 16.475q0-1.725 1.2-2.6T7.8 13q.725 0 1.413.238t1.237.712q.125.125.263.2t.287.15v-1.8q-1.275-.075-2.375-.3t-1.9-.6q-.8-.375-1.263-.888T5 9.526q0-.5.35-.937t.975-.813q-.15-.225-.238-.488T6 6.726q0-.525.413-1.012T7.55 4.85q-.05-.125-.05-.225V4.4q0-.65.688-1.137T10 2.5v1.525q-.35.125-.587.238T9.05 4.5q.125.125.563.288T11 5.025V2h2v3.025q.95-.075 1.388-.238t.562-.287q-.125-.1-.35-.213t-.575-.237V2.5q1.125.275 1.8.775T16.5 4.4l-.05.45q.725.375 1.138.85T18 6.725q0 .3-.087.563t-.238.487q.625.375.975.813t.35.937q0 .675-.462 1.188t-1.263.887q-.8.375-1.9.6T13 12.5v1.8q.15-.075.288-.15t.262-.2q.55-.475 1.238-.712T16.2 13q1.4 0 2.6.888T20 16.5q0 .775-.35 1.488t-1.075 1.162l-2.725 1.725q-1.05.65-1.888.888T12 22m-1-11V9.5q-.975-.05-1.838-.225T7.65 8.8q-.575.25-.837.463t-.313.312q.05.275 1.088.788T11 11m-2.75 6.5q.3 0 .525-.225T9 16.75q0-.3-.225-.525T8.25 16q-.3 0-.525.225t-.225.525q0 .3.225.525t.525.225M11 8V6.525q-.675-.05-1.275-.187T8.675 6q-.575.225-.85.438T7.5 6.75q.025.35.9.738T11 8m2 3q2.375-.125 3.413-.638t1.087-.787q-.05-.1-.3-.312t-.825-.463q-.65.3-1.513.475T13 9.5zm0-3q1.725-.125 2.6-.513t.9-.737q-.05-.075-.288-.288T15.35 6q-.45.225-1.05.35t-1.3.175zm2.75 9.5q.3 0 .525-.225t.225-.525q0-.3-.225-.525T15.75 16q-.3 0-.525.225T15 16.75q0 .3.225.525t.525.225"/>
                        </svg>
                    </div>
                    <!-- grid item title -->
                    <h3 class="h3 mb-[10px]">Klinik Ortopedi</h3>
                    <!-- grid item description -->
                    <p class="font-light leading-normal max-w-[300px]">
                        Membantu menangani cedera dan penyakit pada sistem muskoloskeletal tubuh, mencakup tulang, sendi, tendon, otot, ligamen, dan saraf
                    </p>
                </div>
                <!-- grid item -->
                <div
                    class="services__item bg-white p-[30px] rounded-[10px] shadow-custom2 min-h-[288px] flex flex-col items-center text-center">
                    <!-- grid item icon -->
                    <div class="mb-[15px]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" class=" fill-slate-500"  viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path d="M186.1 52.1C169.3 39.1 148.7 32 127.5 32C74.7 32 32 74.7 32 127.5v6.2c0 15.8 3.7 31.3 10.7 45.5l23.5 47.1c4.5 8.9 7.6 18.4 9.4 28.2l36.7 205.8c2 11.2 11.6 19.4 22.9 19.8s21.4-7.4 24-18.4l28.9-121.3C192.2 323.7 207 312 224 312s31.8 11.7 35.8 28.3l28.9 121.3c2.6 11.1 12.7 18.8 24 18.4s20.9-8.6 22.9-19.8l36.7-205.8c1.8-9.8 4.9-19.3 9.4-28.2l23.5-47.1c7.1-14.1 10.7-29.7 10.7-45.5v-2.1c0-55-44.6-99.6-99.6-99.6c-24.1 0-47.4 8.8-65.6 24.6l-3.2 2.8 19.5 15.2c7 5.4 8.2 15.5 2.8 22.5s-15.5 8.2-22.5 2.8l-24.4-19-37-28.8z"/>
                        </svg>
                    </div>
                    <!-- grid item title -->
                    <h3 class="h3 mb-[10px]">Klinik Gigi Umum</h3>
                    <!-- grid item description -->
                    <p class="font-light leading-normal max-w-[300px]">
                        Membantu perawatan gigi untuk segala usia. Melakukan pemeriksaan menyeluruh terhadap mulut (termasuk gigi, gusi, dan struktur lainnya), pembersihan profesional, serta diskusi tentang kesehatan gigi secara umum.
                    </p>

                </div>
                <!-- grid item -->
                <div
                    class="services__item bg-white p-[30px] rounded-[10px] shadow-custom2 min-h-[288px] flex flex-col items-center text-center">
                    <!-- grid item icon -->
                    <div class="mb-[15px]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="75px" height="75px" class=" fill-slate-500" viewBox="0 0 64 64">
                            <path d="M3.184 4.304a.407.407 0 0 1 .162-.555l2.97-1.618a.406.406 0 0 1 .554.164l1.191 2.173c4.503-1.35 9.492.57 11.835 4.861l-5.755 3.142a3.599 3.599 0 0 1-6.321 3.447l-5.757 3.138C-.282 14.767.795 9.533 4.373 6.478L3.184 4.303zm40.547 39.142H63.1v20.022H43.731zm-2.22 10.007H25.868a4.947 4.947 0 0 1-4.946-4.942a4.944 4.944 0 0 1 4.946-4.941h15.643zM7.784 57.462c0-1.105.895-2.002 2.001-2.002H41.51v8.006H7.784v-6.005zm12.03-9.975a5.972 5.972 0 0 1-5.975 5.966a5.971 5.971 0 0 1-5.976-5.966c0-3.293 2.675-5.963 5.976-5.963c3.299 0 5.975 2.67 5.975 5.963m32.66-16.707l-3.361-9.569c-.652-1.804-1.904-3.212-5.438-3.212H28.159c-3.533 0-4.787 1.408-5.436 3.212l-3.36 9.569c-.251.618-.381 2.007.986 2.937l7.901 5.206a2.507 2.507 0 0 0 3.469-.707a2.503 2.503 0 0 0-.713-3.468l-6.271-4.133l1.765-4.869h2.443l-1.431 3.95l4.761 3.138a4.757 4.757 0 0 1 2.057 3.039a4.762 4.762 0 0 1-.692 3.608a4.815 4.815 0 0 1-1.016 1.098h6.592a4.91 4.91 0 0 1-1.017-1.098a4.772 4.772 0 0 1-.694-3.608a4.77 4.77 0 0 1 2.058-3.039l4.764-3.138l-1.437-3.95h2.445l1.769 4.869l-6.274 4.133c-1.153.76-1.475 2.317-.712 3.468s2.317 1.469 3.47.707l7.9-5.206c1.368-.931 1.239-2.319.989-2.937zM37.461 8.634a2.361 2.361 0 0 1-2.144 1.373a2.367 2.367 0 0 1-2.149-1.373H28.84c-.07.38-.111.769-.111 1.17a6.608 6.608 0 0 0 6.611 6.603a6.607 6.607 0 0 0 6.612-6.603c0-.402-.043-.79-.11-1.17zm-4.439-1.559a2.368 2.368 0 0 1 2.295-1.788c1.106 0 2.039.764 2.291 1.788h3.75a6.61 6.61 0 0 0-6.017-3.876a6.612 6.612 0 0 0-6.017 3.876z"/>
                        </svg>
                    </div>
                    <!-- grid item title -->
                    <h3 class="h3 mb-[10px]">Klinik Bedah</h3>
                    <!-- grid item description -->
                    <p class="font-light leading-normal max-w-[300px]">
                        Membantu mengobati penyakit, cedera, atau kondisi gawat darurat pada tubuh melalui metode bedah (operatif) dan obat-obatan. Melakukan diagnosis sesuai keahlian dan ilmu yang dimiliki untuk menentukan perlu atau tidaknya prosedur bedah dilakukan.
                    </p>

                </div>
                <!-- grid item -->
                <div
                    class="services__item bg-white p-[30px] rounded-[10px] shadow-custom2 min-h-[288px] flex flex-col items-center text-center">
                    <!-- grid item icon -->
                    <div class="mb-[15px]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="75px" height="75px" class=" fill-slate-500" viewBox="0 0 256 256">
                            <path d="M248 124a56.11 56.11 0 0 0-32-50.61V72a48 48 0 0 0-88-26.49A48 48 0 0 0 40 72v1.39a56 56 0 0 0 0 101.2V176a48 48 0 0 0 88 26.49A48 48 0 0 0 216 176v-1.41A56.09 56.09 0 0 0 248 124M88 208a32 32 0 0 1-31.81-28.56A55.87 55.87 0 0 0 64 180h8a8 8 0 0 0 0-16h-8a40 40 0 0 1-13.33-77.73A8 8 0 0 0 56 78.73V72a32 32 0 0 1 64 0v68.26A47.8 47.8 0 0 0 88 128a8 8 0 0 0 0 16a32 32 0 0 1 0 64m104-44h-8a8 8 0 0 0 0 16h8a55.87 55.87 0 0 0 7.81-.56A32 32 0 1 1 168 144a8 8 0 0 0 0-16a47.8 47.8 0 0 0-32 12.26V72a32 32 0 0 1 64 0v6.73a8 8 0 0 0 5.33 7.54A40 40 0 0 1 192 164m16-52a8 8 0 0 1-8 8h-4a36 36 0 0 1-36-36v-4a8 8 0 0 1 16 0v4a20 20 0 0 0 20 20h4a8 8 0 0 1 8 8m-148 8h-4a8 8 0 0 1 0-16h4a20 20 0 0 0 20-20v-4a8 8 0 0 1 16 0v4a36 36 0 0 1-36 36"/>
                        </svg>
                    </div>
                    <!-- grid item title -->
                    <h3 class="h3 mb-[10px]">Klinik Bedah Syaraf</h3>
                    <!-- grid item description -->
                    <p class="font-light leading-normal max-w-[300px]">
                        Membantu menangani gangguan sistem saraf, mulai dari mendiagnosis, memberikan pengobatan, hingga melakukan operasi pada otak dan saraf. Area sistem saraf yang dapat ditangani adalah saraf pusat (otak dan saraf tulang belakang), serta saraf tepi yang berada di seluruh bagian tubuh.
                    </p>

                </div>
                <!-- grid item -->
                <div
                    class="services__item bg-white p-[30px] rounded-[10px] shadow-custom2 min-h-[288px] flex flex-col items-center text-center">
                    <!-- grid item icon -->
                    <div class="mb-[15px]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="75px" height="75px" class=" fill-slate-500" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/>
                        </svg>
                    </div>
                    <!-- grid item title -->
                    <h3 class="h3 mb-[10px]">Klinik Mata</h3>
                    <!-- grid item description -->
                    <p class="font-light leading-normal max-w-[300px]">
                        Membantu melakukan pemeriksaan, perawatan, serta diagnosis yang berhubungan dengan penyakit mata dan gangguan penglihatan. Memiliki kompetensi untuk melakukan operasi mata.
                    </p>

                </div>
                <!-- grid item -->
                <div
                    class="services__item bg-white p-[30px] rounded-[10px] shadow-custom2 min-h-[288px] flex flex-col items-center text-center">
                    <!-- grid item icon -->
                    <div class="mb-[15px]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="75px" height="75px" class=" fill-slate-500"  viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path d="M256 192H.1C2.7 117.9 41.3 52.9 99 14.1c13.3-8.9 30.8-4.3 39.9 8.8L256 192zm128-32c0-35.3 28.7-64 64-64h32c17.7 0 32 14.3 32 32s-14.3 32-32 32l-32 0v64c0 25.2-5.8 50.2-17 73.5s-27.8 44.5-48.6 62.3s-45.5 32-72.7 41.6S253.4 416 224 416s-58.5-5-85.7-14.6s-51.9-23.8-72.7-41.6s-37.3-39-48.6-62.3S0 249.2 0 224l224 0 160 0V160zM80 416a48 48 0 1 1 0 96 48 48 0 1 1 0-96zm240 48a48 48 0 1 1 96 0 48 48 0 1 1 -96 0z"/>
                        </svg>
                    </div>
                    <!-- grid item title -->
                    <h3 class="h3 mb-[10px]">Klinik Obgyn</h3>
                    <!-- grid item description -->
                    <p class="font-light leading-normal max-w-[300px]">
                        Membantu para ibu dalam melakukan pemeriksaan kesehatan sistem reproduksi maupun kandungan, karena pemeriksaan organ reproduksi secara teratur sangat penting untuk menjaga kesehatan sistem reproduksi.
                    </p>

                </div>
                <!-- grid item -->
                <div
                    class="services__item bg-white p-[30px] rounded-[10px] shadow-custom2 min-h-[288px] flex flex-col items-center text-center">
                    <!-- grid item icon -->
                    <div class="mb-[15px]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="75px" height="75px" class=" fill-slate-500" viewBox="0 0 256 256">
                            <path d="M220 104a12 12 0 0 1-24 0a68 68 0 0 0-136 0c0 25 7.58 32.3 16.35 40.76S96 163.71 96 188a32 32 0 0 0 32 32c9 0 16.19-3.7 22.75-11.64a12 12 0 0 1 18.5 15.28C158.09 237.15 144.21 244 128 244a56.06 56.06 0 0 1-56-56c0-14.09-4.63-18.56-12.31-26C49.13 151.86 36 139.19 36 104a92 92 0 0 1 184 0m-40.13 53.61a12 12 0 0 0-16.4 4.38a4 4 0 0 1-7.47-2c0-7.61 3.65-12.86 9.6-20.8C172 130.65 180 120 180 104a52 52 0 0 0-104 0a12 12 0 0 0 24 0a28 28 0 0 1 56 0c0 7.61-3.65 12.86-9.6 20.8C140 133.35 132 144 132 160a28 28 0 0 0 52.25 14a12 12 0 0 0-4.38-16.39"/>
                        </svg>
                    </div>
                    <!-- grid item title -->
                    <h3 class="h3 mb-[10px]">Klinik THT</h3>
                    <!-- grid item description -->
                    <p class="font-light leading-normal max-w-[300px]">
                        Membantu menangani berbagai masalah kesehatan yang berhubungan dengan telinga, hidung, dan tenggorokan. Bertanggung jawab menangani penyakit-penyakit tertentu yang terjadi di area leher dan kepala.
                    </p>

                </div>
                <!-- grid item -->
                <div
                    class="services__item bg-white p-[30px] rounded-[10px] shadow-custom2 min-h-[288px] flex flex-col items-center text-center">
                    <!-- grid item icon -->
                    <div class="mb-[15px]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="75px" height="75px" class=" fill-slate-500" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path d="M480 416h96c35.3 0 64-28.7 64-64V160c0-35.3-28.7-64-64-64H480V416zM448 96H192V416H448V96zM64 96C28.7 96 0 124.7 0 160V352c0 35.3 28.7 64 64 64h96V96H64zM248 208a24 24 0 1 1 48 0 24 24 0 1 1 -48 0zm120-24a24 24 0 1 1 0 48 24 24 0 1 1 0-48zM248 304a24 24 0 1 1 48 0 24 24 0 1 1 -48 0zm120-24a24 24 0 1 1 0 48 24 24 0 1 1 0-48z"/>
                        </svg>
                    </div>
                    <!-- grid item title -->
                    <h3 class="h3 mb-[10px]">Klinik Kulit</h3>
                    <!-- grid item description -->
                    <p class="font-light leading-normal max-w-[300px]">
                        Membantu menangani berbagai keluhan dan masalah kesehatan yang terkait kulit dan kelamin, baik pada orang dewasa, anak-anak, orang lanjut usia, maupun ibu hamil.
                    </p>

                </div>
                <!-- grid item -->
                <div
                    class="services__item bg-white p-[30px] rounded-[10px] shadow-custom2 min-h-[288px] flex flex-col items-center text-center">
                    <!-- grid item icon -->
                    <div class="mb-[15px]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="75px" height="75px" class=" fill-slate-500" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path d="M152 88a72 72 0 1 1 144 0A72 72 0 1 1 152 88zM39.7 144.5c13-17.9 38-21.8 55.9-8.8L131.8 162c26.8 19.5 59.1 30 92.2 30s65.4-10.5 92.2-30l36.2-26.4c17.9-13 42.9-9 55.9 8.8s9 42.9-8.8 55.9l-36.2 26.4c-13.6 9.9-28.1 18.2-43.3 25V288H128V251.7c-15.2-6.7-29.7-15.1-43.3-25L48.5 200.3c-17.9-13-21.8-38-8.8-55.9zm89.8 184.8l60.6 53-26 37.2 24.3 24.3c15.6 15.6 15.6 40.9 0 56.6s-40.9 15.6-56.6 0l-48-48C70 438.6 68.1 417 79.2 401.1l50.2-71.8zm128.5 53l60.6-53 50.2 71.8c11.1 15.9 9.2 37.5-4.5 51.2l-48 48c-15.6 15.6-40.9 15.6-56.6 0s-15.6-40.9 0-56.6L284 419.4l-26-37.2z"/>
                        </svg>
                    </div>
                    <!-- grid item title -->
                    <h3 class="h3 mb-[10px]">Klinik Anak</h3>
                    <!-- grid item description -->
                    <p class="font-light leading-normal max-w-[300px]">
                        Membantu mendiagnosis dan mengobati penyakit pada bayi, anak-anak dan remaja, serta memonitor tumbuh kembang anak dan merencanakan intervensi untuk mendukung tumbuh kembang dan memelihara kesehatan anak.
                    </p>

                </div>
                <!-- grid item -->
                <div
                    class="services__item bg-white p-[30px] rounded-[10px] shadow-custom2 min-h-[288px] flex flex-col items-center text-center">
                    <!-- grid item icon -->
                    <div class="mb-[15px]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="75px" height="75px" class=" fill-slate-500" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path d="M296 136V88h48v48H296zM288 32c-26.5 0-48 21.5-48 48v4H121.6C111.2 62.7 89.3 48 64 48C28.7 48 0 76.7 0 112s28.7 64 64 64c25.3 0 47.2-14.7 57.6-36h66.9c-58.9 39.6-98.9 105-104 180H80c-26.5 0-48 21.5-48 48v64c0 26.5 21.5 48 48 48h64c26.5 0 48-21.5 48-48V368c0-26.5-21.5-48-48-48h-3.3c5.9-67 48.5-123.4 107.5-149.1c8.6 12.7 23.2 21.1 39.8 21.1h64c16.6 0 31.1-8.4 39.8-21.1c59 25.7 101.6 82.1 107.5 149.1H496c-26.5 0-48 21.5-48 48v64c0 26.5 21.5 48 48 48h64c26.5 0 48-21.5 48-48V368c0-26.5-21.5-48-48-48h-4.5c-5-75-45.1-140.4-104-180h66.9c10.4 21.3 32.3 36 57.6 36c35.3 0 64-28.7 64-64s-28.7-64-64-64c-25.3 0-47.2 14.7-57.6 36H400V80c0-26.5-21.5-48-48-48H288zM88 376h48v48H88V376zm416 48V376h48v48H504z"/>
                        </svg>
                    </div>
                    <!-- grid item title -->
                    <h3 class="h3 mb-[10px]">Klinik Syaraf</h3>
                    <!-- grid item description -->
                    <p class="font-light leading-normal max-w-[300px]">
                        Membantu pemeriksaan anatomi, fungsi dan gangguan yang memengaruhi sistem saraf. Melakukan perawatan dan mengelola gangguan pada otak dan sumsum tulang belakang.
                    </p>

                </div>
                <div
                    class="services__item bg-white p-[30px] rounded-[10px] shadow-custom2 min-h-[288px] flex flex-col items-center text-center">
                    <!-- grid item icon -->
                    <div class="mb-[15px]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" class=" fill-slate-500" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path d="M320 0c17.7 0 32 14.3 32 32V164.1c0 16.4 8.4 31.7 22.2 40.5l9.8 6.2V165.3C384 127 415 96 453.3 96c21.7 0 42.8 10.2 55.8 28.8c15.4 22.1 44.3 65.4 71 116.9c26.5 50.9 52.4 112.5 59.6 170.3c.2 1.3 .2 2.6 .2 4v7c0 49.1-39.8 89-89 89c-7.3 0-14.5-.9-21.6-2.7l-72.7-18.2C414 480.5 384 442.1 384 398V325l90.5 57.6c7.5 4.7 17.3 2.5 22.1-4.9s2.5-17.3-4.9-22.1L384 287.1v-.4l-44.1-28.1c-7.3-4.6-13.9-10.1-19.9-16.1c-5.9 6-12.6 11.5-19.9 16.1L256 286.7 161.2 347l-13.5 8.6c0 0 0 0-.1 0c-7.4 4.8-9.6 14.6-4.8 22.1c4.7 7.5 14.6 9.7 22.1 4.9l91.1-58V398c0 44.1-30 82.5-72.7 93.1l-72.7 18.2c-7.1 1.8-14.3 2.7-21.6 2.7c-49.1 0-89-39.8-89-89v-7c0-1.3 .1-2.7 .2-4c7.2-57.9 33.1-119.4 59.6-170.3c26.8-51.5 55.6-94.8 71-116.9c13-18.6 34-28.8 55.8-28.8C225 96 256 127 256 165.3v45.5l9.8-6.2c13.8-8.8 22.2-24.1 22.2-40.5V32c0-17.7 14.3-32 32-32z"/>
                        </svg>
                    </div>
                    <!-- grid item title -->
                    <h3 class="h3 mb-[10px]">Klinik Paru</h3>
                    <!-- grid item description -->
                    <p class="font-light leading-normal max-w-[300px]">
                        Layanan kesehatan untuk masalah pernapasan, seperti asma, bronkitis, pneumonia, emfisema, dan penyakit paru obstruktif kronis (PPOK).
                    </p>

                </div>
            </div>
        </div>
    </section>
    <!-- end Poli -->

    <!-- testimonials -->
    <section class="testimonial bg-testimonials bg-cover bg-right bg-no-repeat py-12 xl:min-h-[595px] xl:py-0">
        <div class="testimonial__constainer container mx-auto">
            <div class="flex flex-col items-center gap-x-14 xl:flex-row">
                <!-- img -->
                <div class="hidden xl:flex">
                    <img src="assets/img/testimonials/image-head-new.png" alt="" />
                </div>
                <!-- slider -->
                <div class="max-w-[98%] xl:max-w-[710px]">
                    <!-- slider main container -->
                    <div class="swiper h-[400px]">
                        <!-- additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- slide 1 -->
                            <div class="swiper-slide">
                                <div class="h-full flex flex-col justify-center items-start">
                                    <div class="max-w-[680px] mx-auto text-center xl:text-left">
                                        <!-- message -->
                                        <p
                                            class="font-light relative text-[22px] text-[#4c5354] leading-[190%] text-center xl:text-left before:bg-quoteLeft before:bg-contain before:bg-bottom before:inline-block before:top-0 before:w-10 before:h-10 before:bg-no-repeat after:bg-quoteRight after:bg-contain after:bg-bottom after:inline-block after:top-0 after:w-10 after:h-10 after:bg-no-repeat mb-7">
                                            <span class="mx-2">Lorem ipsum dolor sit amet consectetur, adipisicing
                                                elit. Doloribus dolores facere, totam minima error
                                                quisquam numquam sint libero expedita doloremque eaque
                                                harum.</span>
                                        </p>
                                        <!-- name -->
                                        <div class="text-[26px] text-[#4c5354] font-semibold">
                                            James Rodrigo
                                        </div>
                                        <!-- job -->
                                        <div class="text-[#9ab4b7] font-medium uppercase tracking-[2.24px]">
                                            Customer
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- slide 2 -->
                            <div class="swiper-slide">
                                <div class="h-full flex flex-col justify-center items-start">
                                    <div class="max-w-[680px] mx-auto text-center xl:text-left">
                                        <!-- message -->
                                        <p
                                            class="font-light relative text-[22px] text-[#4c5354] leading-[190%] text-center xl:text-left before:bg-quoteLeft before:bg-contain before:bg-bottom before:inline-block before:top-0 before:w-10 before:h-10 before:bg-no-repeat after:bg-quoteRight after:bg-contain after:bg-bottom after:inline-block after:top-0 after:w-10 after:h-10 after:bg-no-repeat mb-7">
                                            <span class="mx-2">Lorem ipsum dolor sit amet consectetur, adipisicing
                                                elit. Doloribus dolores facere, totam minima error
                                                quisquam numquam sint libero expedita doloremque eaque
                                                harum.</span>
                                        </p>
                                        <!-- name -->
                                        <div class="text-[26px] text-[#4c5354] font-semibold">
                                            James Rodrigo
                                        </div>
                                        <!-- job -->
                                        <div class="text-[#9ab4b7] font-medium uppercase tracking-[2.24px]">
                                            Customer
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- swiper pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end testimonials -->

    <!-- team -->
    <section class="team section">
        <div class="container mx-auto">
            <!-- title -->
            <h2 class="team__title h2 mb-[50px] text-center xl:text-left">
                Our Team
            </h2>
            <!-- slider -->
            <div class="team__slider swiper min-h-[400px]">
                <!-- additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- slide 1 -->
                    <div class="swiper-slide">
                        <div class="flex flex-col md:flex-row gap-9">
                            <!-- item -->
                            <div class="flex-1 flex flex-col xl:flex-row">
                                <div class="flex flex-col xl:flex-row items-center gap-[30px]">
                                    <!-- img -->
                                    <div class="flex-1">
                                        <img src="assets/img/team/doctor-1.png" alt="" />
                                    </div>
                                    <!-- info -->
                                    <div class="flex-1 flex flex-col">
                                        <!-- name -->
                                        <h4 class="h4 mb-[10px]">Dr. Leslie Taylor</h4>
                                        <!-- job -->
                                        <div class="font-medium uppercase tracking-[2.24px] text-[#9ab4b7] mb-[20px]">
                                            Pediatrician
                                        </div>
                                        <!-- desc -->
                                        <p class="font-light mb-[26px] max-w-[320px]">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Inventore possimus eum atque.
                                        </p>
                                        <!-- socials -->
                                        <div class="flex items-center text-[30px] gap-x-5 text-accent-tertiary">
                                            <a href="#" class="cursor-pointer hover:text-accent transition-all">
                                                <i class="ri-youtube-fill"></i>
                                            </a>
                                            <a href="#" class="cursor-pointer hover:text-accent transition-all">
                                                <i class="ri-facebook-circle-fill"></i>
                                            </a>
                                            <a href="#" class="cursor-pointer hover:text-accent transition-all">
                                                <i class="ri-instagram-fill"></i>
                                            </a>
                                            <a href="#" class="cursor-pointer hover:text-accent transition-all">
                                                <i class="ri-pinterest-fill"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- item -->
                            <div class="flex-1 flex flex-col xl:flex-row">
                                <div class="flex flex-col xl:flex-row items-center gap-[30px]">
                                    <!-- img -->
                                    <div class="flex-1">
                                        <img src="assets/img/team/doctor-2.png" alt="" />
                                    </div>
                                    <!-- info -->
                                    <div class="flex-1 flex flex-col">
                                        <!-- name -->
                                        <h4 class="h4 mb-[10px]">Dr. Zachary Brown</h4>
                                        <!-- job -->
                                        <div class="font-medium uppercase tracking-[2.24px] text-[#9ab4b7] mb-[20px]">
                                            Cardiologist
                                        </div>
                                        <!-- desc -->
                                        <p class="font-light mb-[26px] max-w-[320px]">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Inventore possimus eum atque.
                                        </p>
                                        <!-- socials -->
                                        <div class="flex items-center text-[30px] gap-x-5 text-accent-tertiary">
                                            <a href="#" class="cursor-pointer hover:text-accent transition-all">
                                                <i class="ri-youtube-fill"></i>
                                            </a>
                                            <a href="#" class="cursor-pointer hover:text-accent transition-all">
                                                <i class="ri-facebook-circle-fill"></i>
                                            </a>
                                            <a href="#" class="cursor-pointer hover:text-accent transition-all">
                                                <i class="ri-instagram-fill"></i>
                                            </a>
                                            <a href="#" class="cursor-pointer hover:text-accent transition-all">
                                                <i class="ri-pinterest-fill"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- slide 2 -->
                    <div class="swiper-slide">
                        <div class="flex flex-col md:flex-row gap-9">
                            <!-- item -->
                            <div class="flex-1 flex flex-col xl:flex-row">
                                <div class="flex flex-col xl:flex-row items-center gap-[30px]">
                                    <!-- img -->
                                    <div class="flex-1">
                                        <img src="assets/img/team/doctor-1.png" alt="" />
                                    </div>
                                    <!-- info -->
                                    <div class="flex-1 flex flex-col">
                                        <!-- name -->
                                        <h4 class="h4 mb-[10px]">Dr. Leslie Taylor</h4>
                                        <!-- job -->
                                        <div class="font-medium uppercase tracking-[2.24px] text-[#9ab4b7] mb-[20px]">
                                            Pediatrician
                                        </div>
                                        <!-- desc -->
                                        <p class="font-light mb-[26px] max-w-[320px]">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Inventore possimus eum atque.
                                        </p>
                                        <!-- socials -->
                                        <div class="flex items-center text-[30px] gap-x-5 text-accent-tertiary">
                                            <a href="#" class="cursor-pointer hover:text-accent transition-all">
                                                <i class="ri-youtube-fill"></i>
                                            </a>
                                            <a href="#" class="cursor-pointer hover:text-accent transition-all">
                                                <i class="ri-facebook-circle-fill"></i>
                                            </a>
                                            <a href="#" class="cursor-pointer hover:text-accent transition-all">
                                                <i class="ri-instagram-fill"></i>
                                            </a>
                                            <a href="#" class="cursor-pointer hover:text-accent transition-all">
                                                <i class="ri-pinterest-fill"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- item -->
                            <div class="flex-1 flex flex-col xl:flex-row">
                                <div class="flex flex-col xl:flex-row items-center gap-[30px]">
                                    <!-- img -->
                                    <div class="flex-1">
                                        <img src="assets/img/team/doctor-2.png" alt="" />
                                    </div>
                                    <!-- info -->
                                    <div class="flex-1 flex flex-col">
                                        <!-- name -->
                                        <h4 class="h4 mb-[10px]">Dr. Zachary Brown</h4>
                                        <!-- job -->
                                        <div class="font-medium uppercase tracking-[2.24px] text-[#9ab4b7] mb-[20px]">
                                            Cardiologist
                                        </div>
                                        <!-- desc -->
                                        <p class="font-light mb-[26px] max-w-[320px]">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Inventore possimus eum atque.
                                        </p>
                                        <!-- socials -->
                                        <div class="flex items-center text-[30px] gap-x-5 text-accent-tertiary">
                                            <a href="#" class="cursor-pointer hover:text-accent transition-all">
                                                <i class="ri-youtube-fill"></i>
                                            </a>
                                            <a href="#" class="cursor-pointer hover:text-accent transition-all">
                                                <i class="ri-facebook-circle-fill"></i>
                                            </a>
                                            <a href="#" class="cursor-pointer hover:text-accent transition-all">
                                                <i class="ri-instagram-fill"></i>
                                            </a>
                                            <a href="#" class="cursor-pointer hover:text-accent transition-all">
                                                <i class="ri-pinterest-fill"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- swiper pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <!-- end team -->

    <!-- faq -->
    <section class="faq">
        <div class="container mx-auto">
            <h2 class="faq__title h2 text-center mb-[50px]">We've got answers</h2>
            <!-- item wrapper -->
            <div class="max-w-5xl mx-auto">
                <!-- item -->
                <div class="faq__item px-[30px] pt-7 pb-4 border-b cursor-pointer select-none">
                    <!-- title & icon -->
                    <div class="flex items-center justify-between mb-[10px]">
                        <!-- title -->
                        <h4 class="h4">Why to believe in Insove medical healthcare ?</h4>
                        <!-- icon -->
                        <div class="faq__btn text-accent">
                            <i class="ri-add-fill text-2xl"></i>
                        </div>
                    </div>
                    <!-- answer text -->
                    <div class="faq__answer h-0 overflow-hidden">
                        <p class="font-light">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic,
                            ipsam est cumque repellendus omnis, quam magnam sequi autem nam
                            aliquam pariatur illo dignissimos magni! Cumque nihil quia animi
                            obcaecati autem!
                        </p>
                    </div>
                </div>
                <!-- item -->
                <div class="faq__item px-[30px] pt-7 pb-4 border-b cursor-pointer select-none">
                    <!-- title & icon -->
                    <div class="flex items-center justify-between mb-[10px]">
                        <!-- title -->
                        <h4 class="h4">Will we get healthcare updates after surgery ?</h4>
                        <!-- icon -->
                        <div class="faq__btn text-accent">
                            <i class="ri-add-fill text-2xl"></i>
                        </div>
                    </div>
                    <!-- answer text -->
                    <div class="faq__answer h-0 overflow-hidden">
                        <p class="font-light">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic,
                            ipsam est cumque repellendus omnis, quam magnam sequi autem nam
                            aliquam pariatur illo dignissimos magni! Cumque nihil quia animi
                            obcaecati autem!
                        </p>
                    </div>
                </div>
                <!-- item -->
                <div class="faq__item px-[30px] pt-7 pb-4 border-b cursor-pointer select-none">
                    <!-- title & icon -->
                    <div class="flex items-center justify-between mb-[10px]">
                        <!-- title -->
                        <h4 class="h4">
                            What preparations are necessary before undergoing surgery ?
                        </h4>
                        <!-- icon -->
                        <div class="faq__btn text-accent">
                            <i class="ri-add-fill text-2xl"></i>
                        </div>
                    </div>
                    <!-- answer text -->
                    <div class="faq__answer h-0 overflow-hidden">
                        <p class="font-light">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic,
                            ipsam est cumque repellendus omnis, quam magnam sequi autem nam
                            aliquam pariatur illo dignissimos magni! Cumque nihil quia animi
                            obcaecati autem!
                        </p>
                    </div>
                </div>
                <!-- item -->
                <div class="faq__item px-[30px] pt-7 pb-4 border-b cursor-pointer select-none">
                    <!-- title & icon -->
                    <div class="flex items-center justify-between mb-[10px]">
                        <!-- title -->
                        <h4 class="h4">
                            How long will it take to recover after the surgery ?
                        </h4>
                        <!-- icon -->
                        <div class="faq__btn text-accent">
                            <i class="ri-add-fill text-2xl"></i>
                        </div>
                    </div>
                    <!-- answer text -->
                    <div class="faq__answer h-0 overflow-hidden">
                        <p class="font-light">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic,
                            ipsam est cumque repellendus omnis, quam magnam sequi autem nam
                            aliquam pariatur illo dignissimos magni! Cumque nihil quia animi
                            obcaecati autem!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end faq -->

    <!-- departments -->
    <section class="departments section">
        <div
            class="departments__bg bg-departments bg-cover xl:bg-auto bg-center bg-no-repeat max-w-[1466px] mx-4 xl:mx-auto rounded-[20px] px-6 xl:px-0 py-12 xl:pt-[80px] xl:pb-[90px] relative min-h-[588px] flex items-center">
            <div class="departments__container container mx-auto">
                <div class="flex flex-col xl:flex-row gap-x-5">
                    <div
                        class="xl:w-[310px] flex flex-col gap-y-[30px] xl:gap-y-[40px] font-medium uppercase text-center xl:text-left text-base text-[#9ab4b7] xl:pt-3 xl:text-[17px] mb-[50px] xl:mb-0">
                        <div class="cursor-pointer hover:text-accent transition-all">
                            Laboratory Analysis
                        </div>
                        <div class="cursor-pointer hover:text-accent transition-all">
                            Cardiology Clinic
                        </div>
                        <div class="cursor-pointer hover:text-accent transition-all">
                            Gynecology Clinic
                        </div>
                        <div class="cursor-pointer hover:text-accent transition-all">
                            Pathology Clinic
                        </div>
                        <div class="cursor-pointer hover:text-accent transition-all">
                            Pediatrics Clinic
                        </div>
                        <div class="cursor-pointer hover:text-accent transition-all">
                            Neurology Clinic
                        </div>
                    </div>
                    <div class="xl:w-[640px]">
                        <!-- title -->
                        <h2 class="h2 mb-[20px] text-center xl:text-left">
                            Cardiology Clinic
                        </h2>
                        <!-- description -->
                        <p class="mb-[30px] font-light text-center xl:text-left">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde
                            molestiae libero ipsa atque accusamus temporibus odio corrupti
                            pariatur sed enim deserunt tempore repellendus provident.
                            <br /><br />
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad qui
                            voluptates reprehenderit maxime veniam quam neque distinctio
                            asperiores quaerat inventore.
                        </p>
                        <div
                            class="flex flex-col xl:flex-row items-center xl:justify-between max-w-[555px] mb-[50px] mx-auto xl:mx-0">
                            <div class="text-accent xl:border-r border-[#dcdcdc] xl:pr-6">
                                Neurocritical Care
                            </div>
                            <div class="text-accent xl:border-r border-[#dcdcdc] xl:pr-6">
                                Neuro Oncology
                            </div>
                            <div class="text-accent">Geriatric Neurology</div>
                        </div>
                        <button class="btn btn-lg btn-accent mx-auto xl:mx-0">
                            Learn more
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end departments -->

    <!-- blog -->
    <section class="blog">
        <div class="container mx-auto">
            <h2 class="blog__title h2 mb-[50px] text-center xl:text-left">
                Our Recents Posts
            </h2>
            <!-- blog posts -->
            <div class="flex flex-col xl:flex-row gap-y-6 xl:gap-y-0 items-center xl:justify-between mb-[50px]">
                <!-- post 1 -->
                <div
                    class="blog__post max-w-[420px] shadow-custom2 rounded-[10px] overflow-hidden cursor-pointer group">
                    <!-- img -->
                    <div class="relative overflow-hidden">
                        <img class="group-hover:scale-110 transition-all duration-500" src="assets/img/blog/img-1.png"
                            alt="" />
                        <!-- badge -->
                        <div
                            class="bg-accent-tertiary absolute bottom-0 left-0 text-white text-base tracking-[2.24px] font-medium uppercase py-[6px] px-[18px]">
                            Medical
                        </div>
                    </div>
                    <!-- text -->
                    <div class="px-5 py-6">
                        <!-- date -->
                        <div class="mb-4">Jan 2, 2023</div>
                        <!-- title -->
                        <h4 class="h4 mb-[10px]">
                            10 foods to avoid for your heart health
                        </h4>
                        <!-- description -->
                        <p class="font-light">
                            It's normal to feel anxiety, worry and grief any time you're
                            diagnosed with a condition that's certainly true...

                            <a href="" class="italic underline text-[#4c5354]">Read more</a>
                        </p>
                    </div>
                </div>
                <!-- post 2 -->
                <div
                    class="blog__post max-w-[420px] shadow-custom2 rounded-[10px] overflow-hidden cursor-pointer group">
                    <!-- img -->
                    <div class="relative overflow-hidden">
                        <img class="group-hover:scale-110 transition-all duration-500" src="assets/img/blog/img-2.png"
                            alt="" />
                        <!-- badge -->
                        <div
                            class="bg-accent-tertiary absolute bottom-0 left-0 text-white text-base tracking-[2.24px] font-medium uppercase py-[6px] px-[18px]">
                            Medical
                        </div>
                    </div>
                    <!-- text -->
                    <div class="px-5 py-6">
                        <!-- date -->
                        <div class="mb-4">Jan 2, 2023</div>
                        <!-- title -->
                        <h4 class="h4 mb-[10px]">
                            10 foods to avoid for your heart health
                        </h4>
                        <!-- description -->
                        <p class="font-light">
                            It's normal to feel anxiety, worry and grief any time you're
                            diagnosed with a condition that's certainly true...

                            <a href="" class="italic underline text-[#4c5354]">Read more</a>
                        </p>
                    </div>
                </div>
                <!-- post 3 -->
                <div
                    class="blog__post max-w-[420px] shadow-custom2 rounded-[10px] overflow-hidden cursor-pointer group">
                    <!-- img -->
                    <div class="relative overflow-hidden">
                        <img class="group-hover:scale-110 transition-all duration-500" src="assets/img/blog/img-3.png"
                            alt="" />
                        <!-- badge -->
                        <div
                            class="bg-accent-tertiary absolute bottom-0 left-0 text-white text-base tracking-[2.24px] font-medium uppercase py-[6px] px-[18px]">
                            Medical
                        </div>
                    </div>
                    <!-- text -->
                    <div class="px-5 py-6">
                        <!-- date -->
                        <div class="mb-4">Jan 2, 2023</div>
                        <!-- title -->
                        <h4 class="h4 mb-[10px]">
                            10 foods to avoid for your heart health
                        </h4>
                        <!-- description -->
                        <p class="font-light">
                            It's normal to feel anxiety, worry and grief any time you're
                            diagnosed with a condition that's certainly true...

                            <a href="" class="italic underline text-[#4c5354]">Read more</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end blog -->

    <!-- brands -->
    <section class="brands section">
        <div class="container mx-auto">
            <div class="flex flex-col xl:flex-row gap-y-12 xl:gap-y-0 justify-between items-center">
                <img class="brands__logo" src="assets/img/brands/brand-1.svg" alt="" />
                <img class="brands__logo" src="assets/img/brands/brand-2.svg" alt="" />
                <img class="brands__logo" src="assets/img/brands/brand-3.svg" alt="" />
                <img class="brands__logo" src="assets/img/brands/brand-4.svg" alt="" />
                <img class="brands__logo" src="assets/img/brands/brand-5.svg" alt="" />
            </div>
        </div>
    </section>
    <!-- end brands -->

    <!-- newsletter -->
    <section class="newsletter bg-accent md:h-[444px] py-12 flex items-center relative overflow-hidden">
        <!-- pattern -->
        <div class="absolute left-0 bottom-0">
            <img src="assets/img/newsletter/pattern.svg" alt="" />
        </div>
        <!-- container -->
        <div class="newsletter__container container mx-auto">
            <!-- wrapper -->
            <div class="flex flex-col lg:flex-row lg:items-center lg:gap-x-[58px]">
                <!-- text -->
                <div class="flex-1 z-10 text-center md:text-left">
                    <div class="text-base uppercase text-white tracking-[2.24px] font-medium">
                        Our newsletter
                    </div>
                    <h1 class="h1 mb-4 text-white">Subscribe to get more updates</h1>
                </div>
                <!-- form -->
                <form class="flex-1">
                    <div class="flex flex-col md:flex-row relative gap-y-4">
                        <input type="text" placeholder="Your email address"
                            class="rounded-full w-full h-[66px] bg-transparent border-2 border-white outline-none pl-[30px] placeholder:text-white focus:text-white" />
                        <button class="btn btn-lg btn-white md:absolute right-0">
                            Subscribe
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- end newsletter -->

    <!-- pelaporan komplain -->
    <section class="appointment section">
        <div class="container mx-auto">
            <!-- title -->
            <h2 class="appointment__title h2 mb-5 xl:mb-[50px] text-center xl:text-left">
                Laporkan Keluhan Anda
                <span class="text-accent-tertiary">(0341) 591067</span>
            </h2>
            <!-- form -->
            <form class="appointment__form flex flex-col gap-y-5">
                <!-- select wrapper -->
                <div class="flex flex-col xl:flex-row gap-5">
                    <!-- select 1 -->
                    <div class="select relative flex items-center">
                        <!-- icon -->
                        <div class="absolute right-4">
                            <i class="ri-arrow-down-s-line text-[26px] text-primary"></i>
                        </div>
                        <!-- select -->
                        <select class="appearance-none outline-none h-full w-full bg-transparent px-4">
                            <option value="1">Select department</option>
                            <option value="2">Department 1</option>
                            <option value="3">Department 2</option>
                            <option value="4">Department 3</option>
                        </select>
                    </div>
                    <!-- select 2 -->
                    <div class="select relative flex items-center">
                        <!-- icon -->
                        <div class="absolute right-4">
                            <i class="ri-arrow-down-s-line text-[26px] text-primary"></i>
                        </div>
                        <!-- select -->
                        <select class="appearance-none outline-none h-full w-full bg-transparent px-4">
                            <option value="1">Select doctor</option>
                            <option value="2">Dr. Jane Doe</option>
                            <option value="2">Dr. Jhon Doe</option>
                            <option value="2">Dr. Bob Smith</option>
                        </select>
                    </div>
                </div>
                <!-- input wrapper -->
                <div class="flex flex-col xl:flex-row gap-5">
                    <input type="text" class="input" placeholder="Full Name" />
                    <input type="text" class="input" placeholder="Phone Number" />
                </div>
                <!-- input wrapper -->
                <div class="flex flex-col xl:flex-row gap-5">
                    <input class="input" type="date" />
                    <input class="input" type="time" />
                </div>
                <!-- btn -->
                <button class="btn btn-lg btn-accent self-start" type="submit">
                    Book an appointment
                </button>
            </form>
        </div>
    </section>
    <!-- end pelaporan komplain  -->

    <!-- footer -->
    <footer class="footer pt-12 xl:pt-[150px]">
        <div class="container mx-auto pb-12 xl:pb-[100px]">
            <div class="flex flex-col xl:flex-row gap-x-5 gap-y-10">
                <!-- footer contact section -->
                <div class="footer__item flex-1">
                    <!-- logo -->
                    <a href="">
                        <img class="mb-[30px]" src="assets/img/header/logo.svg" alt="" />
                    </a>
                    <!-- description -->
                    <p class="mb-[20px]">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem,
                        quas?
                    </p>
                    <!-- location, email & phone -->
                    <div class="flex flex-col gap-y-3 mb-10">
                        <div class="flex items-center gap-x-[6px]">
                            <i class="ri-map-pin-fill text-[24px] text-accent"></i>
                            <div>123 Arling, Miola, NY</div>
                        </div>
                        <div class="flex items-center gap-x-[6px]">
                            <i class="ri-mail-fill text-[24px] text-accent"></i>
                            <div>insove@email.com</div>
                        </div>
                        <div class="flex items-center gap-x-[6px]">
                            <i class="ri-phone-fill text-[24px] text-accent"></i>
                            <div>(+123) 456 78910</div>
                        </div>
                    </div>
                    <!-- socials -->
                    <div class="flex gap-[14px] text-[30px]">
                        <div
                            class="p-[10px] rounded-[10px] shadow-custom2 text-accent-tertiary hover:text-accent cursor-pointer transition-all">
                            <i class="ri-facebook-circle-fill"></i>
                        </div>
                        <div
                            class="p-[10px] rounded-[10px] shadow-custom2 text-accent-tertiary hover:text-accent cursor-pointer transition-all">
                            <i class="ri-instagram-line"></i>
                        </div>
                        <div
                            class="p-[10px] rounded-[10px] shadow-custom2 text-accent-tertiary hover:text-accent cursor-pointer transition-all">
                            <i class="ri-twitter-fill"></i>
                        </div>
                        <div
                            class="p-[10px] rounded-[10px] shadow-custom2 text-accent-tertiary hover:text-accent cursor-pointer transition-all">
                            <i class="ri-linkedin-box-fill"></i>
                        </div>
                    </div>
                </div>
                <!-- footer quick links section -->
                <div class="footer__item flex-1">
                    <h4 class="h4 mb-5">Quick Links</h4>
                    <div class="flex gap-x-5">
                        <!-- list 1 -->
                        <ul class="flex-1 flex flex-col gap-y-5">
                            <li>
                                <a href="#" class="hover:text-accent transition-all">Home</a>
                            </li>
                            <li>
                                <a href="#" class="hover:text-accent transition-all">Doctors</a>
                            </li>
                            <li>
                                <a href="#" class="hover:text-accent transition-all">Department</a>
                            </li>
                            <li>
                                <a href="#" class="hover:text-accent transition-all">Services</a>
                            </li>
                            <li>
                                <a href="#" class="hover:text-accent transition-all">Blog</a>
                            </li>
                        </ul>
                        <!-- list 2 -->
                        <ul class="flex-1 flex flex-col gap-y-5">
                            <li>
                                <a href="#" class="hover:text-accent transition-all">Our Pricing</a>
                            </li>
                            <li>
                                <a href="#" class="hover:text-accent transition-all">Contact</a>
                            </li>
                            <li>
                                <a href="#" class="hover:text-accent transition-all">Careers</a>
                            </li>
                            <li>
                                <a href="#" class="hover:text-accent transition-all">Faqs</a>
                            </li>
                            <li>
                                <a href="#" class="hover:text-accent transition-all">Privacy Policy</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- footer opening hours section -->
                <div class="footer__item flex-1">
                    <h4 class="h4 mb-5">Opening Hours</h4>
                    <!-- list -->
                    <div class="flex flex-col gap-5">
                        <!-- item -->
                        <div class="flex-1">
                            <div class="flex justify-between items-center border-b pb-[10px]">
                                <div>Monday - Thursday</div>
                                <div class="text-accent font-medium">8:00 Am - 6:00 Pm</div>
                            </div>
                        </div>
                        <!-- item -->
                        <div class="flex-1">
                            <div class="flex justify-between items-center border-b pb-[10px]">
                                <div>Friday - Saturday</div>
                                <div class="text-accent font-medium">10:00 Am - 4:00 Pm</div>
                            </div>
                        </div>
                        <!-- item -->
                        <div class="flex-1">
                            <div class="flex justify-between items-center border-b pb-[10px]">
                                <div>Sunday</div>
                                <div class="text-accent font-medium">Emergency Only</div>
                            </div>
                        </div>
                        <!-- item -->
                        <div class="flex-1">
                            <div class="flex justify-between items-center border-b pb-[10px]">
                                <div>Personal</div>
                                <div class="text-accent font-medium">7:00 Am - 9:00 Pm</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- copyright -->
        <div class="py-[30px] border-t">
            <div class="container mx-auto text-center">
                <div class="font-light text-base">
                    &copy; 2023 Insove - All rights reserved.
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->

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
