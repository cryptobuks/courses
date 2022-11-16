@extends('layouts.app')
<section class="container mx-auto pageWidth max-w-pageWidth">
@include('sections.top-bar')
</section>
<section class="max-w-pageWidth m-auto">
    <div class="flex flex-wrap">
        <div id="div-included" class="w-full md:!w-1/2 p-2">
            <div class="lg:shadow rounded p-4 md:p-8">
                <h1 id="product-name"class="!text-3xl">{{$productNameCheckout}}</h1>
                <img class="mb-4 mt-4" src="{{$productImageCheckout}}"></img>
                <div>{!! $whatYouGetCheckout !!}</div>
            </div>
            <div id="shortcode-mini-cart" class="relative lg:shadow md:!block rounded p-4 mt-4">
                <?php $form_shortcode = "[wfacp_mini_cart]"; echo do_shortcode($form_shortcode)?>
            </div>
            <div id="testimonial" class="mt-4">
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

<div id="faq" class=" w-full md:w-3/5 m-auto mt-20 mb-20 p-4">
    @include('partials.faq')
    
</div>
</section>
<script>
$(document).ready(function() {
    $(".wfob_bump_wrapper.woocommerce_checkout_order_review_below_payment_gateway").insertBefore(".wfacp-section.wfacp-hg-by-box.step_0.form_section_single_step_0_embed_forms_2 ");
    $(".wfacp-order-summary-label").text("Order Summary");

    //$(".wfob_bump_wrapper.woocommerce_checkout_order_review_below_payment_gateway").hide();    
    //$("#money-back").insertAfter(".wfacp-order-place-btn-wrap");   

})
$(document.body).on('updated_checkout', function () {
    $("#money-back").insertAfter(".wfacp-order-place-btn-wrap");   
    $(".wfacp_internal_form_wrap.wfacp-comm-title.none.margin-top h2").text("Order Summary");
    $(".wfacp-order-summary-label").text("Order Summary");


    //$("#headline-114-52320").insertAfter('.wc_payment_methods.payment_methods.methods').css("display","inline-flex");
});

if ($(window).width() < 768) {
        $("#div_block-269-1620").insertBefore("#shortcode-184-1620");
        $("#checkout-timer").insertBefore("#product-name");
        $("#testimonial").insertBefore("#faq");
    
		/* PRESTAVI GOOGLE/APPLE PAY POD MINI CART < 768PX */
        $("#wc-stripe-payment-request-wrapper").insertAfter("#shortcode-183-1620");
        $("#wc-stripe-payment-request-button-separator").insertAfter("#wc-stripe-payment-request-wrapper");
	    /* PRESTAVI BUMPE NAD MINI CART < 768PX */
        $(".wfob_bump_wrapper.woocommerce_checkout_order_review_below_payment_gateway").insertAfter(".wfacp_form_cart");
	 
	 	/* ODSTRANI VSE BUMP WRAPPERJE RAZEN ENEGA - DA SE NE PODVAJAJO */
         $('.wfob_bump_wrapper.woocommerce_checkout_order_review_below_payment_gateway').slice(1).remove();
	    
	}
	
else if ($(window).width() > 767) {
        $("#div_block-269-1620").insertBefore("#div_block-141-1620");
        
        /* PRESTAVI GOOGLE/APPLE PAY POD BUY BUTTON > 767PX */
        $("#wc-stripe-payment-request-wrapper").insertBefore("#wfacp-e-form");
        $("#wc-stripe-payment-request-button-separator").insertAfter("#wc-stripe-payment-request-wrapper");
        
        /* PRESTAVI BUMPE POD TIMER > 767PX */
        $(".wfob_bump_wrapper.woocommerce_checkout_order_review_below_payment_gateway").insertAfter("#checkout-timer");
        
        /* ODSTRANI VSE BUMP WRAPPERJE RAZEN ENEGA - DA SE NE PODVAJAJO */
        $('.wfob_bump_wrapper.woocommerce_checkout_order_review_below_payment_gateway').slice(1).remove();

	}
    $(document).ready(function() {
        $(window).resize(function() {
    if ($(window).width() < 768) {
    	$("#div_block-269-1620").insertBefore("#shortcode-184-1620");
        $("#checkout-timer").insertBefore("#product-name");
        $("#testimonial").insertBefore("#faq");
		/* PRESTAVI GOOGLE/APPLE PAY POD MINI CART < 768PX */
        $("#wc-stripe-payment-request-wrapper").insertAfter("#shortcode-183-1620");
        $("#wc-stripe-payment-request-button-separator").insertAfter("#wc-stripe-payment-request-wrapper");

		/* PRESTAVI BUMPE NAD MINI CART < 768PX */
        $(".wfob_bump_wrapper.woocommerce_checkout_order_review_below_payment_gateway").insertAfter(".wfacp_form_cart");
	 
	 	/* ODSTRANI VSE BUMP WRAPPERJE RAZEN ENEGA - DA SE NE PODVAJAJO */
         $('.wfob_bump_wrapper.woocommerce_checkout_order_review_below_payment_gateway').slice(1).remove();
	}
	
	else if ($(window).width() > 767) {
    	$("#div_block-269-1620").insertBefore("#div_block-141-1620");
        $("#checkout-timer").insertBefore(".wfacp-section.wfacp-hg-by-box.step_0.form_section_single_step_0_embed_forms_2");

		/* PRESTAVI GOOGLE/APPLE PAY POD BUY BUTTON > 767PX */
		$("#wc-stripe-payment-request-wrapper").insertBefore("#wfacp-e-form");
        $("#wc-stripe-payment-request-button-separator").insertAfter("#wc-stripe-payment-request-wrapper");
		
		/* PRESTAVI BUMPE POD TIMER > 767PX */
		$(".wfob_bump_wrapper.woocommerce_checkout_order_review_below_payment_gateway").insertAfter("#checkout-timer");
		
		/* ODSTRANI VSE BUMP WRAPPERJE RAZEN ENEGA - DA SE NE PODVAJAJO */
		$('.wfob_bump_wrapper.woocommerce_checkout_order_review_below_payment_gateway').slice(1).remove();
	}
  });
})

</script>
<div class="flex justify-between p-4" id="money-back">
    <div   class="flex mt-4">
        <img class="h-4" src="/wp-content/themes/courses-1/resources/images/money-back.png" ></img>
        <div class="text-black text-md ml-2 font-bold"> 90-Day Money Back Guarantee</div>
    </div>
    <div  id="secure" class="flex mt-4">
        <img class="h-4" src="/wp-content/themes/courses-1/resources/images/money-back.png" ></img>
        <div class="text-black text-md ml-2 font-bold"> 100% Secure Purchase</div>
    </div>
</div>


