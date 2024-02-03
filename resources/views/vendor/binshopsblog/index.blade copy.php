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

    <div class='col-sm-12 binshopsblog_container'>
        @if (\Auth::check() && \Auth::user()->canManageBinshopsBlogPosts())
            <div class="text-center">
                <p class='mb-1'>You are logged in as a blog admin user.
                    <br>
                    <a href='{{ route('binshopsblog.admin.index') }}' class='btn border  btn-outline-primary btn-sm '>
                        <i class="fa fa-cogs" aria-hidden="true"></i>
                        Go To Blog Admin Panel</a>
                </p>
            </div>
        @endif

        <div class="row">
            <div class="col-md-9">

                @if ($category_chain)
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                @forelse($category_chain as $cat)
                                    / <a href="{{ $cat->categoryTranslations[0]->url($locale) }}">
                                        <span class="cat1">{{ $cat->categoryTranslations[0]['category_name'] }}</span>
                                    </a>
                                @empty
                                @endforelse
                            </div>
                        </div>
                    </div>
                @endif

                @if (isset($binshopsblog_category) && $binshopsblog_category)
                    <h2 class='text-center'> {{ $binshopsblog_category->category_name }}</h2>

                    @if ($binshopsblog_category->category_description)
                        <p class='text-center'>{{ $binshopsblog_category->category_description }}</p>
                    @endif

                @endif

                <div class="container">
                    <div class="row">
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
            <div class="col-md-3">
                <h6>Blog Categories</h6>
                <ul class="binshops-cat-hierarchy">
                    @if ($categories)
                        @include('binshopsblog::partials._category_partial', [
                            'category_tree' => $categories,
                            'name_chain' => ($nameChain = ''),
                            'routeWithoutLocale' => $routeWithoutLocale,
                        ])
                    @else
                        <span>No Categories</span>
                    @endif
                </ul>
            </div>
        </div>

        @if (config('binshopsblog.search.search_enabled'))
            @include('binshopsblog::sitewide.search_form')
        @endif
        <div class="row">
            <div class="col-md-12 text-center">
                @foreach ($lang_list as $lang)
                    <a href="{{ route('binshopsblog.index', $lang->locale) }}">
                        <span>{{ $lang->name }}</span>
                    </a>
                @endforeach
            </div>
        </div>
    </div>

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
