@extends('layouts.app')
@section('content')
<section class="mx-auto container">

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
@include('partials.content-upsell')

@php
$titleRumen=$titleYellowBox;
$subtitleRumen=$subtitleYellowBox;
$textRumen=$textYellowBox;
$imageRumen=$imageYellowBox;
@endphp

@include('sections.yellow-box')
@include('partials.green-box-upsell')
@include('sections.testimonial-section')
@include('partials.green-box-upsell')

@endsection
