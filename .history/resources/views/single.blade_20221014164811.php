@extends('layouts.app')
<section class="pb-section"> SEKCIJA</section>

@section('content')
  @while(have_posts()) @php(the_post())
  <section class="pb-section"> SEKCIJA</section>
    @includeFirst(['partials.content-single-' . get_post_type(), 'partials.content-single'])
  @endwhile
@endsection
