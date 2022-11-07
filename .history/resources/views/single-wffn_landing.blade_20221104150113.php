@extends('layouts.app')
@section('content')
@include('sections.top-bar-sales')

<section class="mx-auto container">

@php
$link="?wffn-next-link=yes"
$titleRumen=$titleYellowBox
$subtitleRumen=$subtitleYellowBox
$titleRumen=$titleYellowBox
@endphp

@include('sections.first-section')
@include('sections.content-section')

@include('sections.yellow-box')
@include('sections.testimonial-section')
@include('sections.who-is-challange-for')
@include('sections.money-back')
@include('sections.limited-offer')
@php
$titleRumen=$whatYouGetTitle
@endphp
@include('sections.yellow-box')
@include('sections.faq-section')
@include('sections.yellow-box-second')
@include('sections.footer')
</section>
@endsection
