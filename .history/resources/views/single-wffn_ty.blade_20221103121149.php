@extends('layouts.app')
@section('content')
<section class="container mx-auto pageWidth max-w-pageWidth">
@include('sections.top-bar-upsell')
<div>{{$firstHeadlineThankYou}}</div>
</section>


@endsection