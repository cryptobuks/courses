@extends('layouts.app')
@section('content')
@include('sections.top-bar-upsell')
<section class="max-w-pageWidth m-auto p-4">
<h1 class="mt-20 mb-10 text-4xl font-bold">{{$firstHeadlineThankYou}}</h1>
<div >
{!!$firstContentThankYou!!}
</div>
<button class="bg-primary hover:bg-secondary text-white font-bold py-2 px-4 rounded">{{$buttonTextThankYou}}</button>
</section>


@endsection