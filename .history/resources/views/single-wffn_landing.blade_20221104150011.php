@extends('layouts.app')
@section('content')
@include('sections.top-bar-sales')

<section class="mx-auto container">

@php
$link="?wffn-next-link=yes"
$titleRumen=$titleYellowBox
@endphp

@include('sections.first-section')
@include('sections.content-section')

@include('sections.yellow-box')
@include('sections.testimonial-section')
@include('sections.who-is-challange-for')
@include('sections.money-back')
@include('sections.limited-offer')

$titleRumen=$titleYellowBox
@include('sections.yellow-box-second')
@include('sections.faq-section')
@include('sections.yellow-box-second')
@include('sections.footer')
</section>
@endsection
