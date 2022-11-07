@extends('layouts.app')
<section class="container mx-auto pageWidth max-w-pageWidth">
@include('sections.top-bar')
</section>

<section class="max-w-pageWidth m-auto">
    <div class="flex flex-wrap">
        <div class="w-full md:!w-1/2 p-2">
            <div class="lg:shadow rounded p-4 md:p-8">
                <h1 class="!text-3xl">{{$productNameCheckout}}</h1>
                <img class="mb-4 mt-4" src="{{$productImageCheckout}}"></img>
                <div>{!! $whatYouGetCheckout !!}</div>
            </div>
            <div class=" relative lg:shadow rounded p-4 mt-4">
                <?php $form_shortcode = "[wfacp_mini_cart]"; echo do_shortcode($form_shortcode)?>
            </div>
            @include('sections.testimonial-section')

        <div class="md:!w-1/2 w-full p-2 ">
            <div id="checkout-timer" class="bg-black text-white p-4 mb-10">Your order is reserver for: @include('partials.countdown-checkout')
            </div>
            @php(the_content())
            <div>
                
            </div>
        </div>
    </div>

<div class=" w-full md:w-3/5 m-auto mt-20 mb-20 p-4">
    @include('partials.faq')
</div>
</section>

  

