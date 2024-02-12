<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RS Bhayangkara Batu - Website Resmi</title>
    @vite('resources/css/app.css')
    <!-- css -->
    <link rel="stylesheet" href="/dist/output.css" />
    <!-- icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.min.css" />
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    <!-- swiper css -->
    <link rel="stylesheet" href="/css/swiper-bundle.min.css" />
    <link rel="icon" href="https://batubhayangkara.com/wp-content/uploads/2022/06/cropped-logo-hasta-192x192.png"
        sizes="192x192">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

</head>

<body>
    <x-header />

    <section class="">
        <div class="container mx-auto">
            <h3 class=" h3 mb-[20px] text-center xl:text-left mt-10">
                Kabar Berita Dari Kami
            </h3>
            <div class="my-5 {{
                Request::is('id/blog/category/buletin') ||
                Request::is('id/blog/category/buletin/dewasa') ||
                Request::is('id/blog/category/buletin/bayi') ||
                Request::is('id/blog/category/buletin/anak-anak') ||
                Request::is('id/blog/category/buletin/remaja') ||
                Request::is('id/blog/category/buletin/lansia')
                ? 'active' : 'hidden'
            }}">
                <a href="/id/blog/category/buletin/" type="button"
                    class="py-2.5 px-5 me-2 mb-2 text-sm font-medium focus:outline-none {{Request::is('id/blog/category/buletin') ? 'bg-gray-600 text-blue-500' : 'bg-white text-gray-900'}} rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Semua</a>
                <a href="/id/blog/category/buletin/dewasa" type="button"
                    class="py-2.5 px-5 me-2 mb-2 text-sm font-medium focus:outline-none {{Request::is('id/blog/category/buletin/dewasa') ? 'bg-gray-600 text-blue-500' : 'bg-white text-gray-900'}} rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Dewasa</a>
                <a href="/id/blog/category/buletin/bayi" type="button"
                    class="py-2.5 px-5 me-2 mb-2 text-sm font-medium focus:outline-none {{Request::is('id/blog/category/buletin/bayi') ? 'bg-gray-600 text-blue-500' : 'bg-white text-gray-900'}} rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Bayi
                    dan Balita</a>
                <a href="/id/blog/category/buletin/anak-anak" type="button"
                    class="py-2.5 px-5 me-2 mb-2 text-sm font-medium focus:outline-none {{Request::is('id/blog/category/buletin/anak-anak') ? 'bg-gray-600 text-blue-500' : 'bg-white text-gray-900'}} rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Anak-anak</a>
                <a href="/id/blog/category/buletin/remaja" type="button"
                    class="py-2.5 px-5 me-2 mb-2 text-sm font-medium focus:outline-none {{Request::is('id/blog/category/buletin/remaja') ? 'bg-gray-600 text-blue-500' : 'bg-white text-gray-900'}} rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Remaja</a>
                <a href="/id/blog/category/buletin/lansia" type="button"
                    class="py-2.5 px-5 me-2 mb-2 text-sm font-medium focus:outline-none {{Request::is('id/blog/category/buletin/lansia') ? 'bg-gray-600 text-blue-500' : 'bg-white text-gray-900'}} rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Lansia</a>
            </div>


            <!-- blog posts -->
            <div class="mx-auto">
                <div
                    class="grid gap-2 justify-center grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-y-6 items-center mb-[50px]">
                    @forelse($posts as $post)
                        @include('binshopsblog::partials.index_loop')
                    @empty
                        <div class="col-md-12">
                            <div class='alert alert-danger'>No posts!</div>
                        </div>
                    @endforelse
                </div>

            </div>
        </div>
    </section>
    <!-- end blog -->

    <x-noscrollreveal.footer />

    <!-- temp div -->
    <!-- <div class="h-[4000px]"></div> -->

    <!-- SCRIPTS -->
    <!-- swiper -->
    <script src="/js/swiper-bundle.min.js"></script>
    <!-- scroll reveal -->
    <script src="/js/scrollreveal.min.js"></script>
    <!-- main -->
    <script src="/js/main.js"></script>
</body>

</html>
