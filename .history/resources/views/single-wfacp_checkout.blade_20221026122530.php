@extends('layouts.app')
<section class="container mx-auto pageWidth max-w-pageWidth">
@include('sections.top-bar')
</section>

<section class="max-w-pageWidth m-auto">
    <div class="flex">
        <div class="">
            <div class="lg:shadow rounded p-8">
                <h1 class="!text-3xl">{{$productNameCheckout}}</h1>
                <img class="mb-4 mt-4" src="{{$productImageCheckout}}"></img>
                <div>{!! $whatYouGetCheckout !!}</div>
            </div>
            <div class=" relative lg:shadow rounded p-4 mt-4">
                <?php $form_shortcode = "[wfacp_mini_cart]"; echo do_shortcode($form_shortcode)?>
            </div>
            <div>
            <?php 
                if(have_rows('testimonial_checkout')): 
                    while(have_rows('testimonial_checkout')): the_row();
                        $testimonialNameCheckout=get_sub_field('testimonial_name_checkout');
                        $testimonialTextCheckout = get_sub_field("testimonial_text_checkout"); 
                        $testimonialHeadlineCheckout = get_sub_field("testimonial_headline_checkout"); 
                        $testimonialImageCheckout = get_sub_field("testimonial_image_checkout")['url']; ?>
                        <div class="block relative lg:shadow rounded p-6 mt-4 ">
                            <div class="flex flex-row align-middle">
                                <div class="flex flex-col">
                                    <img class="w-20" src="{{$testimonialImageCheckout}}"></img>
                                    <div class='flex mb-5 fill-primary font-bold justify-center text-black'>{{$testimonialNameCheckout}}</div>
                                </div>
                                <div class="text-2xl font-bold ml-6">{{$testimonialHeadlineCheckout}}</div>
                            </div>
                        <div>{{$testimonialTextCheckout}}</div>
                        </div>
            </div>
                    <?php
                    endwhile;
                endif; ?>
        <div class="!md:w-1/2">
        @php(the_content())
        </div>
    </div>

<div class="w-3/5 m-auto mt-10">
    @include('partials.faq')
</div>
</section>

  

