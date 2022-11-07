@extends('layouts.app')
@section('content')
@include('sections.top-bar-sales')

<section class="mx-auto container">



@include('sections.first-section')
@include('sections.content-section')

@include('sections.testimonial-section')
@include('sections.who-is-challange-for')
@include('sections.money-back')
@include('sections.limited-offer')

@php
$titleRumen=$whatYouGetTitle
$subtitleRumen=$whatYouGetSubtitle
$textRumen=$whatYouGetText
$imageRumen=$whatYouGetImage
@endphp

@include('sections.footer')
</section>
@endsection
