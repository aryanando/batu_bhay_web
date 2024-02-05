{{-- Used on the index page (so shows a small summary --}}
{{-- See the guide on binshops.com for how to copy these files to your /resources/views/ directory --}}

{{-- <div class='text-center blog-image'>
    <?= //$post->image_tag('medium', true, '') ?>
</div>
<div class="blog-inner-item">
    <h3 class=''><a href='{{ $post->url($locale, $routeWithoutLocale) }}'>{{ $post->title }}</a></h3>
    <h5 class=''>{{ $post->subtitle }}</h5>

    @if (config('binshopsblog.show_full_text_at_list'))
        <p>{!! $post->post_body_output() !!}</p>
    @else
        <p>{!! mb_strimwidth($post->post_body_output(), 0, 400, '...') !!}</p>
    @endif

    <div class="post-details-bottom">
        <span class="light-text">Authored by: </span> {{ $post->post->author->name }} <span class="light-text">Posted at:
        </span> {{ date('d M Y ', strtotime($post->post->posted_at)) }}
    </div>
    <div class='text-center'>
        <a href="{{ $post->url($locale, $routeWithoutLocale) }}" class="btn btn-primary">View Post</a>
    </div>
</div> --}}

<!-- post 1 -->
<div
class=" max-w-[420px] shadow-custom2 rounded-[10px] overflow-hidden cursor-pointer group">
{{-- @dd($post) --}}
<!-- img -->
<div class="relative overflow-hidden">
    <?=$post->image_tag("medium", false, 'group-hover:scale-110 transition-all duration-500'); ?>
    <!-- badge -->
    <div
        class="bg-accent-tertiary absolute bottom-0 left-0 text-white text-base tracking-[2.24px] font-medium uppercase py-[6px] px-[18px]">
        Medical
    </div>
</div>
<!-- text -->
<div class="px-5 py-6">
    <!-- date -->
    <div class="mb-4">{{ date('d M Y ', strtotime($post->post->posted_at)) }}</div>
    <!-- title -->
    <h4 class="h4 mb-[10px]">
        {{ $post->title }}
    </h4>
    <!-- description -->
    <p class="font-light">
        {{-- {{ Illuminate\Support\Str::limit($post->post_body, 150) }} --}}
        <p>{!! mb_strimwidth($post->post_body_output(), 0, 200, '...') !!}</p>

        <a href="{{$post->url($locale, $routeWithoutLocale)}}" class="italic underline text-[#4c5354]">Read more</a>
    </p>
</div>
</div>
