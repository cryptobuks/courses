@extends('layouts.app')
@include('sections.top-bar')
<section class="container mx-auto content max-w-contentwidth">
    <div class="flex flex-row ">
        <div>
            <div class="flex-auto w-64 relative lg:shadow rounded p-8">
                <div class="">{{$productNameCheckout}}</div>
                <img src="{{$productImageCheckout}}"></img>
                <div>{!! $whatYouGetCheckout !!}</div>
            </div>
        </div>
        <div class="flex-auto w-64 relative">
            <?php $form_shortcode = "[wfacp_forms]"; echo do_shortcode($form_shortcode)?>
        </div>
    </div>
</section>
@php(the_content())


@endsection
