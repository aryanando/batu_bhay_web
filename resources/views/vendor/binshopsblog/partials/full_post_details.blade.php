@if (\Auth::check() && \Auth::user()->canManageBinshopsBlogPosts())
    <a href="{{ $post->edit_url() }}" class="btn btn-outline-secondary btn-sm pull-right float-right">Edit
        Post</a>
@endif

{{-- <h1 class='blog_title'>{{$post->title}}</h1> --}}
{{-- <h5 class='blog_subtitle'>{{$post->subtitle}}</h5> --}}


{{-- <? //=$post->image_tag("medium", false, 'd-block mx-auto'); ?> --}}

{{-- <p class="blog_body_content"> --}}
{{-- Hallloooo !!! --}}
{{-- {!! $post->post_body_output() !!} --}}

{{-- @if (config('binshopsblog.use_custom_view_files') && $post->use_view_file) --}}
{{--                                // use a custom blade file for the output of those blog post --}}
{{--   @include("binshopsblog::partials.use_view_file") --}}
{{-- @else --}}
{{--   {!! $post->post_body !!}        // unsafe, echoing the plain html/js --}}
{{--   {{ $post->post_body }}          // for safe escaping --}}
{{-- @endif --}}
{{-- </p> --}}

{{-- <hr/> --}}

<section>
    <div class="container mx-auto flex flex-wrap py-6">
        <!-- Post Section -->
        <div class="w-full md:w-2/3 flex flex-col items-center px-3">
            <article class="flex flex-col shadow my-4">
                <div class="bg-white flex flex-col justify-start p-6 space-y-8">
                    <h1 class='blog_title h1'>{{ $post->title }}</h1>
                    <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4">{{ $post->subtitle }}</a>
                    <p href="#" class="text-sm pb-8">
                        By {{ $post->post->author->name }}, Published on {{ $post->post->posted_at->diffForHumans() }}
                    </p>
                    {!! $post->post_body_output() !!}
                </div>
            </article>

            <div class="w-full flex pt-6">
                <a href="#" class="w-1/2 bg-white shadow hover:shadow-md text-left p-6">
                    <p class="text-lg text-blue-800 font-bold flex items-center"><i class="fas fa-arrow-left pr-1"></i>
                        Previous</p>
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

@includeWhen($post->author, 'binshopsblog::partials.author', ['post' => $post])
@includeWhen($categories, 'binshopsblog::partials.categories', ['categories' => $categories])

{{-- @dd($post->post->author) --}}
