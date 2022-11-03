@extends('layouts.app')
<section class="container mx-auto pageWidth max-w-pageWidth">
@include('sections.top-bar')
</section>
<section class="container mx-auto pageWidth max-w-pageWidth p-4" >
    <div class="flex flex-row flex-wrap">
        <div class="flex-auto w-full mr-4 mb-4 sm:w-1/2 md:w-1/2 ">
            <div class="flex-auto relative lg:shadow rounded p-8">
                <h1 class="!text-3xl">{{$productNameCheckout}}</h1>
                <img class="mb-4 mt-4" src="{{$productImageCheckout}}"></img>
                <div>{!! $whatYouGetCheckout !!}</div>
            </div>
            <div class="flex-auto relative lg:shadow rounded p-4 mt-4">
                <?php $form_shortcode = "[wfacp_mini_cart]"; echo do_shortcode($form_shortcode)?>
            </div>
            <div>
            <?php if(have_rows('testimonial_checkout')): ?>
<?php
        while(have_rows('testimonial_checkout')): the_row();
            $testimonialNameCheckout=get_sub_field('testimonial_name_checkout');
            $testimonialTextCheckout = get_sub_field("testimonial_text_checkout"); 
            $testimonialHeadlineCheckout = get_sub_field("testimonial_headline_checkout"); 
            $testimonialImageCheckout = get_sub_field("testimonial_image_checkout")['url']; ?>
        <div class="flex-auto relative lg:shadow rounded p-6 mt-4 flex">
            <div class="flex flex-row">
                <div class="flex flex-col">
                    <img class="w-20" src="{{$testimonialImageCheckout}}"></img>
                    <div class='flex mb-5 fill-primary font-bold justify-center text-black'>{{$testimonialNameCheckout}}
                    </div>
                </div>
                <div class="text-2xl font-bold ml-6">{{$testimonialHeadlineCheckout}}</div>
            </div>
            <div>{{$testimonialTextCheckout}}</div>

        </div>
        


            
<?php
        endwhile;
?>
<?php endif; ?>
            </div>
        </div>
        <div class="flex-auto w-1/2 relative md:w-full">
            @php(the_content())
            <div id="div_block-135-1620">CONTENT DIV</div>

        </div>
        
    </div>
    <div class="w-3/5 m-auto mt-10">
        @include('partials.faq')
    </div>
</section>
