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
</div>
</section>

<script>
    jQuery(document).ready(function() {
	jQuery(window).resize(function() {
    if (jQuery(window).width() < 768) {
    	jQuery("#div-included").insertBefore("#shortcode-mini-cart");
		
		/* PRESTAVI GOOGLE/APPLE PAY POD MINI CART < 768PX */
	 	jQuery("#wc-stripe-payment-request-wrapper").insertAfter("#shortcode-checkout");
 		jQuery("#wc-stripe-payment-request-button-separator").insertAfter("#wc-stripe-payment-request-wrapper");
	    
		/* PRESTAVI BUMPE NAD MINI CART < 768PX */
	 	jQuery(".wfob_bump_wrapper.woocommerce_checkout_order_review_below_payment_gateway").insertAfter(".wfacp_form_cart");
	 
	 	/* ODSTRANI VSE BUMP WRAPPERJE RAZEN ENEGA - DA SE NE PODVAJAJO */
		jQuery('.wfob_bump_wrapper.woocommerce_checkout_order_review_below_payment_gateway').slice(1).remove();
	}
	
	else if (jQuery(window).width() > 767) {
    	jQuery("#div-included").insertBefore("#div_block-141-1620");
		
		/* PRESTAVI GOOGLE/APPLE PAY POD BUY BUTTON > 767PX */
		jQuery("#wc-stripe-payment-request-wrapper").insertBefore("#wfacp-e-form");
 		jQuery("#wc-stripe-payment-request-button-separator").insertAfter("#wc-stripe-payment-request-wrapper");
		
		/* PRESTAVI BUMPE POD TIMER > 767PX */
		jQuery(".wfob_bump_wrapper.woocommerce_checkout_order_review_below_payment_gateway").insertAfter("#div_block-174-1620");
		
		/* ODSTRANI VSE BUMP WRAPPERJE RAZEN ENEGA - DA SE NE PODVAJAJO */
		jQuery('.wfob_bump_wrapper.woocommerce_checkout_order_review_below_payment_gateway').slice(1).remove();
	}
  });
})
</script>

