@extends('layouts.app')
@include('sections.top-bar')
<section class="container mx-auto content max-w-contentwidth">
    <div class="flex flex-row ">
        <div>
            <div class="flex-auto w-32 relative lg:shadow rounded p-8">
                <div class="">{{$productNameCheckout}}</div>
                <img src="{{$productImageCheckout}}"></img>
                <div>{!! $whatYouGetCheckout !!}</div>
            </div>
            <div class="flex-auto w-64 relative lg:shadow rounded p-8">
                <?php $form_shortcode = "[wfacp_mini_cart]"; echo do_shortcode($form_shortcode)?>
            </div>
        </div>
        <div class="flex-auto w-64 relative">
            @php(the_content())
        </div>
    </div>
</section>
