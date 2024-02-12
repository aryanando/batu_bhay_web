<!-- blog -->
<section class="blog">
    <div class="container mx-auto">
        <h2 class="blog__title h2 mb-[50px] text-center xl:text-left">
            Kabar Terbaru
        </h2>
        <!-- blog posts -->
        <div class="flex flex-col xl:flex-row gap-y-6 xl:gap-y-0 items-center xl:justify-between mb-[50px]">
            @foreach ($post as $postData)
                {{-- @dd($postData) --}}
                <!-- post 1 -->
                <div class="blog__post max-w-[420px] shadow-custom2 rounded-[10px] overflow-hidden cursor-pointer group">
                    <!-- img -->
                    <div class="relative overflow-hidden">
                        <img class="group-hover:scale-110 transition-all duration-500" src="/blog_images/{{$postData->image_medium}}"
                            alt="" />
                        <!-- badge -->
                        {{-- <div
                            class="bg-accent-tertiary absolute bottom-0 left-0 text-white text-base tracking-[2.24px] font-medium uppercase py-[6px] px-[18px]">
                            Medical
                        </div> --}}
                    </div>
                    <!-- text -->
                    <div class="px-5 py-6">
                        <!-- date -->
                        <div class="mb-4">{{$postData->created_at}}</div>
                        <!-- title -->
                        <h4 class="h4 mb-[10px]">
                            {{Str::limit($postData->title, 30)}}
                        </h4>
                        <!-- description -->
                        <p class="font-light">
                            <p class="line-clamp-3">{{ Illuminate\Support\Str::limit(str_replace(['&ndash;', '<p>', '</p>'], '', $post->post_body), 150) }}</p>

                            <a href="/id/blog/{{$postData->slug}}" class="italic underline text-[#4c5354]">Read more</a>
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- end blog -->
