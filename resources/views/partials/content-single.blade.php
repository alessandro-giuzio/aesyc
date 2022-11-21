<article @php(post_class())>
  <header>
    <h1 class="entry-title uppercase text-red-500">
      {!! $title !!}
    </h1>

    @include('partials.entry-meta')
  </header>

  <div class="entry-content">
    @php(the_content())
  </div>

  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
    <p class="text-white">footer article</p>
  </footer>
  @include('components.3CardsSection',['heading'=>'Entdecke unseren Blog'])
  {{-- @php(comments_template()) --}}
</article>
