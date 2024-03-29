@extends('layouts.app')
@section('content')
@include('sections.top-bar-sales-white')
@include('partials.scrolling-progress-bar')

<section class="mx-auto container">

@php
$link="#";
$titleRumen=$titleYellowBox;
$subtitleRumen=$subtitleYellowBox;
$textRumen=$textYellowBox;
$imageRumen=$imageYellowBox;
@endphp

@include('sections.first-section')
@include('sections.content-section')
@include('sections.yellow-box')
@include('partials.image-reviews')
@include('sections.testimonial-section')
@include('sections.who-is-challange-for')
@include('sections.money-back')
@include('sections.limited-offer')

@php
$titleRumen=$whatYouGetTitle;
$subtitleRumen=$whatYouGetSubtitle;
$textRumen=$whatYouGetText;
$imageRumen=$whatYouGetImage;
@endphp

@include('sections.yellow-box')
@include('sections.faq-section')
@include('sections.yellow-box')

</section>
@include('sections.before-footer')
<section class="mx-auto container">
@include('sections.footer')
</section>
@endsection
