@extends('layouts.app')
<section class="container mx-auto pageWidth max-w-pageWidth">
@include('sections.top-bar')
</section>
<section class="container mx-auto pageWidth max-w-pageWidth p-4">
    <div class="flex flex-row ">
        <div class="flex-auto w-1/2 mr-4 mb-4 md:w-full">
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
            $testimonialImageCheckout = get_sub_field("testimonial_image_checkout"); 
            echo "<div class='flex mb-5 max-w-contentwidth fill-primary'>" ?> <div class="h-5 mt-1.5 mr-2"></div> <?php echo $testimonialNameCheckout . "</div>";
            echo "<div class='flex mb-5 max-w-contentwidth fill-primary'>" ?> <div class="h-5 mt-1.5 mr-2"></div> <?php echo $testimonialTextCheckout . "</div>";
            echo "<div class='flex mb-5 max-w-contentwidth fill-primary'>" ?> <div class="h-5 mt-1.5 mr-2"></div> <?php echo $testimonialHeadlineCheckout . "</div>";
            <path d="M8.99935 13.3918L14.1494 16.5001L12.7827 10.6417L17.3327 6.70008L11.341 6.19175L8.99935 0.666748L6.65768 6.19175L0.666016 6.70008L5.21602 10.6417L3.84935 16.5001L8.99935 13.3918Z"></path>

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
    <div>
        FAQ
    </div>
</section>
