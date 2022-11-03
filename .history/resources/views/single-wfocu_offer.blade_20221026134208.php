@extends('layouts.app')
@section('content')

@include('sections.top-bar-upsell')
@include('partials.progress-bar-first-upsell')
@include('partials.progress-bar-second-upsell')

@include('partials.warning-box-top')
@include('partials.content-upsell')
@include('sections.yellow-box')
@include('partials.green-box-upsell')
@include('sections.testimonial-section')
@include('partials.green-box-upsell')


@endsection
