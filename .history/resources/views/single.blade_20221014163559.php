@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
  <div id="content" class="content">
            <p> izpiši content</p>
</div>
    @includeFirst(['partials.content-single-' . get_post_type(), 'partials.content-single'])
  @endwhile
@endsection
