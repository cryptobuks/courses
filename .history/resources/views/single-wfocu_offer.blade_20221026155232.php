@extends('layouts.app')
@section('content')

@include('sections.top-bar-upsell')
@if($toggleBar2)

@include('sections.first-upsell')
@if($toggleBar2)
    @include('sections.second-upsell')
@endif
@include('partials.progress-bar-third-upsell')
@include('partials.content-upsell')
@include('sections.yellow-box')
@include('partials.green-box-upsell')
@include('sections.testimonial-section')
@include('partials.green-box-upsell')

@endsection
