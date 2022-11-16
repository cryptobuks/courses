@extends('layouts.app')
<section class="container mx-auto pageWidth max-w-pageWidth">
@include('sections.top-bar')
</section>
<section class="max-w-pageWidth m-auto">
    <div class="flex flex-wrap">
        <div id="div-included" class="w-full md:!w-1/2 p-2">
            <div class="lg:shadow rounded p-4 md:p-8">
                <h1 class="!text-3xl">{{$productNameCheckout}}</h1>
                <img class="mb-4 mt-4" src="{{$productImageCheckout}}"></img>
                <div>{!! $whatYouGetCheckout !!}</div>
            </div>
            <div id="shortcode-mini-cart" class="relative lg:shadow hidden md:!block rounded p-4 mt-4">
                <?php $form_shortcode = "[wfacp_mini_cart]"; echo do_shortcode($form_shortcode)?>
            </div>
            <div class="mt-4">
                @include('partials.testimonials')
            </div>

        </div>
        <div class="md:!w-1/2 w-full p-2 ">
            <div id="checkout-timer" class="bg-black text-white p-4 mb-10 flex items-center">Your order is reserver for: @include('partials.countdown-checkout')
            </div>
            <div id="shortcode-checkout">
                @php(the_content())
            </div>
        </div>
    </div>

<div class=" w-full md:w-3/5 m-auto mt-20 mb-20 p-4">
    @include('partials.faq')
    <div  id="money-back" class="flex">
        <img class="h-4" src="/wp-content/themes/courses-1/resources/images/money-back.png" ></img>
        <div class="text-black text-sm ml-2 font-bold"> 90-Day Money Back Guarantee</div>
    </div>
</div>
</section>
<script>
$(document).ready(function() {
    $(".wfob_bump_wrapper.woocommerce_checkout_order_review_below_payment_gateway").insertBefore(".wfacp-section.wfacp-hg-by-box.step_0.form_section_single_step_0_embed_forms_2 ");    
    $("#money-back").insertAfter("")   
    $(window).resize(function() {
    if ($(window).width() >768) {
        }   
    });
})
</script>


