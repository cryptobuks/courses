@extends('layouts.app')
<section class="container mx-auto pageWidth max-w-pageWidth">
@include('sections.top-bar')
</section>
<section class="container mx-auto pageWidth max-w-pageWidth p-4">
    <div class="flex flex-row ">
        <div class="flex-auto w-1/2 mr-4 mb-4">
            <div class="flex-auto relative lg:shadow rounded p-8">
                <h1 class="!text-3xl">{{$productNameCheckout}}</h1>
                <img class="mb-4 mt-4" src="{{$productImageCheckout}}"></img>
                <div>{!! $whatYouGetCheckout !!}</div>
            </div>
            <div class="flex-auto relative lg:shadow rounded p-4 mt-4">
                <?php $form_shortcode = "[wfacp_mini_cart]"; echo do_shortcode($form_shortcode)?>
                <div id="div_block-177-1620"></div>
            </div>
        </div>
        <div class="flex-auto w-1/2 relative">
            @php(the_content())
        </div>
        
    </div>
    <div>
        FAQ
    </div>
</section>
