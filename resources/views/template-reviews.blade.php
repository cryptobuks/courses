{{--
  Template Name: Reviews
--}}

@extends('layouts.app')
@include('sections.top-bar-sales-white')

<section class="container">
    <div class="flex justify-center py-16">
      <h1><?php the_title(); ?></h1>
    </div>
</section>

@include('sections.testimonial-section')

