@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
  @if()
  <section class="pb-section"> SEKCIJA</section>
    @includeFirst(['partials.content-single-' . get_post_type(), 'partials.content-single'])
  @endwhile
@endsection
