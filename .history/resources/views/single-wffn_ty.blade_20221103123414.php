@extends('layouts.app')
@section('content')
@include('sections.top-bar-upsell')
<section class="max-w-pageWidth m-auto">
<h1 class="mt-20 text-4xl p-4 font-bold">{{$firstHeadlineThankYou}}</h1>
<div class="p-4">
{!!$firstContentThankYou!!}
</div>
<button class="bg-primary hover:bg-secondary text-white font-bold py-2 px-4 rounded">{{$buttonTextThankYou}}</button>
</section>


@endsection