{{--
  Template Name: Custom Template
  Template Post Type: offer 
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
  <section class="pb-section"> SEKCIJA</section>

    @include('partials.page-header')
    @include('partials.content-page')
  @endwhile
@endsection
