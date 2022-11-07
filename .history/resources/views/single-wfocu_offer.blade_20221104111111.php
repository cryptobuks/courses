@extends('layouts.app')
@section('content')

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
@include('sections.yellow-box-upsell')
@include('partials.green-box-upsell')
@include('sections.testimonial-section')
@include('partials.green-box-upsell')

@endsection
