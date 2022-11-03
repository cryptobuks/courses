{{--
  Template Name: Custom Template
  Template Post Type: offer 
--}}
@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
  <section class="pb-section"> SEKCIJA</section>
    @includeFirst(['partials.content-single-' . get_post_type(), 'partials.content-single'])
  @endwhile
@endsection
