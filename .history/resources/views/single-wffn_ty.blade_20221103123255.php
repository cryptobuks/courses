@extends('layouts.app')
@section('content')
@include('sections.top-bar-upsell')
<section class="max-w-pageWidth m-auto">
<h1 class="mt-20 text-4xl p-4 font-bold">{{$firstHeadlineThankYou}}</h1>
<p class="p-4">
{!!$firstContentThankYou!!}
</p>
</section>


@endsection