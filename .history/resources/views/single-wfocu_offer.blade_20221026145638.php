@extends('layouts.app')
@section('content')

@include('sections.top-bar-upsell')
@include('sections.first-upsell')
@include('sections.second-upsell')

@include('partials.progress-bar-third-upsell')


@include('partials.content-upsell')
@include('sections.yellow-box')
@include('partials.green-box-upsell')
@include('sections.testimonial-section')
@include('partials.green-box-upsell')

@endsection
