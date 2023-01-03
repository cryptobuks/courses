@extends('layouts.app')
@include('sections.top-bar-sales-white')


<section class="max-w-pageWidth m-auto mt-10">
    <div class="flex flex-wrap">
        <div id="div-included" class="w-full md:!w-1/2 p-2">
            <div class="shadow rounded p-4 md:p-8">
                <h1 id="product-name"class="!text-3xl">{{$productNameCheckout}}</h1>
                <img class="mb-4 mt-4" src="{{$productImageCheckout}}"></img>
                <div class="flex justify-center">
                    @include('partials.expert-informations')
                </div>
                <div id="what-you-get-checkout" class="mt-8">{!! $whatYouGetCheckout !!}</div>
            </div>
            <div id="shortcode-mini-cart" class="relative shadow md:!block rounded p-4 mt-4">
                <?php $form_shortcode = "[wfacp_mini_cart]"; echo do_shortcode($form_shortcode)?>
            </div>
            <div id="testimonial" class="mt-4">
                @include('partials.testimonials')
            </div>
            <div id="image-reviews">
                @include('partials.checkout-review-images')
            </div>

        </div>
        <div class="md:!w-1/2 w-full p-2 ">
            <div id="checkout-timer" class="bg-black text-white p-4 flex items-center mb-4 ">Your order is reserved for: @include('partials.countdown-checkout')
            </div>
            <div id="shortcode-checkout">
                @php(the_content())
            </div>
            <div id="fast-delivery" class="flex items-stretch mb-4">
                <div class="h-10">
                    @include('icons.clock')
                </div>
                <div class="text-xs ml-2">Choose to pay via credit card or Paypal for instant access to content without complications with the mail.</div> 
            </div>
            <div id="below-button">
                <div id="money-back">
                    <div class="flex p-4  justify-center" >
                        <img class="h-14" src="/wp-content/themes/courses-1/resources/images/security.jpg"></img>
                    </div>
                    <div class="font-semibold md:text-xl text-lg mt-4 text-black flex justify-center w-full mx-auto">
                        <img class="h-14 mr-1" src="/wp-content/themes/courses-1/resources/images/guaranteed-money-back.png"></img>
                        <div>
                            <div class="text-left font-bold text-base ml-4">{!! $moneyBackGuaranteeHeadlineCheckout !!}</div>
                            <div class="text-left font-normal !text-sm ml-4">{!! $moneyBackGuaranteeTextCheckout !!}</div>
                        </div>
                    </div>
                </div>
                <div id="personal-assistance">
                    <div class="font-semibold md:text-xl text-lg mt-4 text-black flex justify-center mx-auto">
                        <img class="h-14 mr-1" src="/wp-content/themes/courses-1/resources/images/personal-assistance.png"></img>
                        <div>
                            <div class="text-left font-bold text-base ml-4">{!! $personalAssistanceHeadlineCheckout !!}</div>
                            <div class="text-left font-normal !text-sm ml-4">{!! $personalAssistanceTextCheckout !!}</div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </div>
<div id="faq" class=" w-full md:w-3/5 m-auto mt-20 mb-20 p-4">
    @include('partials.faq')   
</div>
</section>
<script>
$(document).ready(function() {
    $("#fast-delivery").insertBefore("#payment");
    $("#wfacp_mini_cart_reviews_wfacp_form_summary_shortcode").insertAfter("#wfacp_mini_cart_items_wfacp_form_summary_shortcode");
    $(".wfacp-order-summary-label").text("Order Summary");
    $(".wfob_bump_wrapper.woocommerce_checkout_order_review_below_payment_gateway").insertBefore("#wc-stripe-payment-request-wrapper");

})
$(document.body).on('updated_checkout', function () {
    $(".wfacp_internal_form_wrap.wfacp-comm-title.none.margin-top h2").text("Order Summary");
    $(".wfacp-order-summary-label").text("Order Summary");

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
@include('sections.before-footer')
@include('sections.bottom-footer')