{{--
  Template Name: Author
--}}

@extends('layouts.app')
@include('sections.top-bar-sales-white')

<section class="h-64 w-full relative flex items-end justify-center">
    <?php global $post?>
    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
    <div class="w-full h-full bg-no-repeat bg-cover" style="background-image: url('<?php echo $image[0]; ?>')"></div>
    <div class="meta-description absolute container flex flex-col text-white">
      <h1 class="text-white font-bold mb-10"><?php the_title(); ?></h1>
      <?php the_content(); ?>
    </div>
</section>

@include('sections.author-content')

<section class="flex w-full h-auto md:h-[60vh] items-start flex-col md:flex-row">
  <div class="w-full md:w-1/2 flex justify-end items-center h-[45vh] relative">
    <img class="h-[35vh] md:h-full md:mr-16 m-auto z-10" src="{{$authorEbookImage}}"></img>
    <div class="absolute bg-lightOrange w-full h-[40vh] z-o"></div>
  </div>
  <div class="w-full md:w-1/2 xl:w-1/3 h-full p-4 md:p-0 md:pl-10">
    {!! $authorEbookContent !!}
    <img class="w-44 mb-4" src="{{$authorSignature}}"></img>
    <?php $form_shortcode = $formShortcodeHome; echo do_shortcode($form_shortcode)?>
  </div>

</section>

@include('sections.footer')