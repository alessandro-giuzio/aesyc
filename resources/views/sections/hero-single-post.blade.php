<section id="hero">
    <div class="flex flex-col md:flex-row justify-center py-24 px-4 lg:px-[120px]  bg-bg2">
        {{-- image container --}}
        <div class="hidden md:block img-box relative">
            @if (has_post_thumbnail())
                <img src="{{ the_post_thumbnail_url() }}" alt="" class="w-full h-full object-cover">
            @endif
        </div>
        <div class="flex flex-col items-start py-0 pr-0 pl-0 gap-4 z-[51]">
            <div class="flex flex-col items-start gap-4">
                <div class="flex flex-col items-start">
                   <p class="text-base text-txSec font-normal leading-4">CONSETETUR AMET</p>
                   {{-- post title --}}
                     <h1 class="text-4xl text-txPri font-bold leading-[64px]">{{ the_title() }}</h1>
                     {{-- the excerpt --}}
                     <div class="max-w-xl">
                        {{ the_excerpt() }}
                    </div>
                    </div>
                {{-- avatar --}}
                <div class="flex gap-4">
                  <div class="flex items-center gap-4">
                    <img src="@asset('../images/avatar.svg')" alt="" >
                    {{-- display  the author --}}
                    <p class="byline author vcard">
                        <span>{{ __('By', 'sage') }}</span>
                            <?php
                            $author_id = get_post_field( 'post_author', get_the_ID() );
                            $author_name = get_the_author_meta( 'display_name',
                            $author_id );
                            $author_url = get_author_posts_url( $author_id );
                            ?>
                            <a href="<?php echo $author_url; ?>" rel="author" class="fn">
                            <?php
                            echo $author_name;
                            ?>
                            </a>
                    </p>
                  </div>
                </div>
            </div>
        </div>
    </div>
</section>