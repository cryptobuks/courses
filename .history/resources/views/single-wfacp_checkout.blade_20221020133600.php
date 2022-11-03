@extends('layouts.app')
@section('content')
@include('sections.top-bar')
<section class="container mx-auto content max-w-contentwidth">
    <div class="flex flex-row ">
        <div class="flex-auto w-64 relative lg:shadow rounded p-8">
            <div class="">{{$productNameCheckout}}</div>
            <img src="{{$productImageCheckout}}"></img>
            <div>{!! $whatYouGetCheckout !!}</div>
        </div>
        <div class="flex-auto w-64 relative"></div>
        <? echo do_shortcode()
    </div>
</section>
@php(the_content())


@endsection
