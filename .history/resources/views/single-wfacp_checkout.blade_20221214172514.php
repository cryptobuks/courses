@extends('layouts.app')
<section class="container mx-auto pageWidth max-w-pageWidth">
@include('sections.top-bar-sales-white')
</section>
<section class="max-w-pageWidth m-auto mt-10">
    <div class="flex flex-wrap">
        <div id="div-included" class="w-full md:!w-1/2 p-2">
            <div class="shadow rounded p-4 md:p-8">
                <h1 id="product-name"class="!text-3xl">{{$productNameCheckout}}</h1>
                <img class="mb-4 mt-4" src="{{$productImageCheckout}}"></img>
                    @include('partials.expert-informations')
                <div id="what-you-get-checkout" class="mt-8">{!! $whatYouGetCheckout !!}</div>
            </div>
            <div id="shortcode-mini-cart" class="relative shadow md:!block rounded p-4 mt-4">
                <?php $form_shortcode = "[wfacp_mini_cart]"; echo do_shortcode($form_shortcode)?>
            </div>
            <div id="testimonial" class="mt-4">
                @include('partials.testimonials')
            </div>

        </div>
        <div class="md:!w-1/2 w-full p-2 ">
            <div id="checkout-timer" class="bg-black text-white p-4 flex items-center mb-4 ">Your order is reserved for: @include('partials.countdown-checkout')
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
   // $(".wfob_bump_wrapper.woocommerce_checkout_order_review_below_payment_gateway").insertBefore(".wfacp-section.wfacp-hg-by-box.step_0.form_section_single_step_0_embed_forms_2 ");
    $(".wfacp-order-summary-label").text("Order Summary");
    $(".wfob_bump_wrapper.woocommerce_checkout_order_review_below_payment_gateway").insertBefore("#wc-stripe-payment-request-wrapper");

    //$('.wfob_bump_wrapper.woocommerce_checkout_order_review_below_payment_gateway').slice(0).css( "background", "red" );
    //$(".wfob_bump_wrapper.woocommerce_checkout_order_review_below_payment_gateway").hide();    
    //$("#money-back").insertAfter(".wfacp-order-place-btn-wrap");   

})
$(document.body).on('updated_checkout', function () {
    $(".wfacp_internal_form_wrap.wfacp-comm-title.none.margin-top h2").text("Order Summary");
    $(".wfacp-order-summary-label").text("Order Summary");
    $("#money-back").appendTo(".wfacp-order-place-btn-wrap");   


    //$("#headline-114-52320").insertAfter('.wc_payment_methods.payment_methods.methods').css("display","inline-flex");
});

if ($(window).width() < 768) {
        $("#checkout-timer").insertBefore("#product-name");
        $("#testimonial").insertBefore("#faq");
    
		/* PRESTAVI GOOGLE/APPLE PAY POD MINI CART < 768PX */
        $("#wc-stripe-payment-request-wrapper").insertAfter("#shortcode-mini-cart");
        $("#wc-stripe-payment-request-button-separator").insertAfter("#wc-stripe-payment-request-wrapper");
	    /* PRESTAVI BUMPE NAD MINI CART < 768PX */
        $(".wfob_bump_wrapper.woocommerce_checkout_order_review_below_payment_gateway").insertAfter(".wfacp_form_cart");
	 
	 	/* ODSTRANI VSE BUMP WRAPPERJE RAZEN ENEGA - DA SE NE PODVAJAJO */
         $('.wfob_bump_wrapper.woocommerce_checkout_order_review_below_payment_gateway').slice(1).remove();
	    
	}
	
else if ($(window).width() > 767) {
        
        /* PRESTAVI GOOGLE/APPLE PAY POD BUY BUTTON > 767PX */
		$("#wc-stripe-payment-request-wrapper").insertBefore(".wfacp-section.wfacp-hg-by-box.step_0.form_section_single_step_0_embed_forms_2");
        $("#wc-stripe-payment-request-button-separator").insertAfter("#wc-stripe-payment-request-wrapper");
        
        /* PRESTAVI BUMPE POD TIMER > 767PX */
       // $(".wfob_bump_wrapper.woocommerce_checkout_order_review_below_payment_gateway").insertBefore("#wc-stripe-payment-request-wrapper");
        
        /* ODSTRANI VSE BUMP WRAPPERJE RAZEN ENEGA - DA SE NE PODVAJAJO */
       // $('.wfob_bump_wrapper.woocommerce_checkout_order_review_below_payment_gateway').slice(1).remove();

	}
    $(document).ready(function() {
        $(window).resize(function() {
    if ($(window).width() < 768) {
        $("#checkout-timer").insertBefore("#product-name");
        $("#testimonial").insertBefore("#faq");
		/* PRESTAVI GOOGLE/APPLE PAY POD MINI CART < 768PX */
        $("#wc-stripe-payment-request-wrapper").insertAfter("#shortcode-mini-cart");
        $("#wc-stripe-payment-request-button-separator").insertAfter("#wc-stripe-payment-request-wrapper");

		/* PRESTAVI BUMPE NAD MINI CART < 768PX */
        $(".wfob_bump_wrapper.woocommerce_checkout_order_review_below_payment_gateway").insertAfter(".wfacp_form_cart");
	 
	 	/* ODSTRANI VSE BUMP WRAPPERJE RAZEN ENEGA - DA SE NE PODVAJAJO */
         $('.wfob_bump_wrapper.woocommerce_checkout_order_review_below_payment_gateway').slice(1).remove();
	}
	
	else if ($(window).width() > 767) {
        $("#checkout-timer").insertBefore(".wfacp-section.wfacp-hg-by-box.step_0.form_section_single_step_0_embed_forms_2");
        $("#testimonial").insertAfter("#shortcode-mini-cart");

		/* PRESTAVI GOOGLE/APPLE PAY POD BUY BUTTON > 767PX */
		$("#wc-stripe-payment-request-wrapper").insertBefore(".wfacp-section.wfacp-hg-by-box.step_0.form_section_single_step_0_embed_forms_2");
        $("#wc-stripe-payment-request-button-separator").insertAfter("#wc-stripe-payment-request-wrapper");
		
		/* PRESTAVI BUMPE POD TIMER > 767PX */
        $(".wfob_bump_wrapper.woocommerce_checkout_order_review_below_payment_gateway").insertBefore("#wc-stripe-payment-request-wrapper");
		
		/* ODSTRANI VSE BUMP WRAPPERJE RAZEN ENEGA - DA SE NE PODVAJAJO */
		$('.wfob_bump_wrapper.woocommerce_checkout_order_review_below_payment_gateway').slice(1).remove();
	}
  });
})

</script>
<div class="md:flex justify-between p-4 inline" id="money-back">
    <div   class="flex mt-4 items-center">
        <img class="h-8" src="/wp-content/uploads/money-bag-1.png" ></img>
        <div class="text-black text-base ml-2 font-bold"> 90-Day Money Back Guarantee</div>
    </div>
    <div  id="secure" class="flex mt-4 items-center">
        <img class="h-8" src="/wp-content/uploads/padlock-1-1.png" ></img>
        <div class="text-black text-base ml-2 font-bold"> 100% Secure Purchase</div>
    </div>
</div>

@include('sections.footer')

