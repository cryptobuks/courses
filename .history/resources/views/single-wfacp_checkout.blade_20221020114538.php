@extends('layouts.app')
@section('content')
@include('sections.top-bar')
<section>
    <div class="flex flex-row ">
        <div class="flex-auto w-64 relative">01</div>
        <div class="flex-auto w-64 relative">02</div>
    </div>
</section>
@php(the_content())


@endsection
