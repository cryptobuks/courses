{{--
  Template Name: Checkout template
--}}

@extends('layouts.app')

@section('content')
@include('sections.yellow-box')

  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @include('partials.content-page')
  @endwhile
@endsection
