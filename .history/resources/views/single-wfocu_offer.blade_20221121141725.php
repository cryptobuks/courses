@extends('layouts.app')
@section('content')
@include('partials.scrolling-progress-bar')

@php
$link="?wfocu-accept-link=yes"
@endphp
@include('sections.top-bar-upsell')
@if($toggleBar1)
    @include('sections.first-upsell')
@endif
@if($toggleBar2)
    @include('sections.second-upsell')
@endif

@if($toggleBar3)
    @include('sections.third-upsell')
@endif
<section class="container max-w-contentwidth m-auto w-full">

@include('partials.content-upsell')

@php
$titleRumen=$titleYellowBox;
$subtitleRumen=$subtitleYellowBox;
$textRumen=$textYellowBox;
$imageRumen=$imageYellowBox;
@endphp

@include('sections.yellow-box')
@include('partials.content-second-upsell')
@include('partials.green-box-upsell')
@include('sections.testimonial-section')
@include('partials.green-box-upsell')
</section>

@endsection
