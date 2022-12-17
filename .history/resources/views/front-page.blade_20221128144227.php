@extends('layouts.app')
<section class="bg-secondary h-screen ">
<div class="flex flex-wrap mx-auto container">
    <div class="md:!w-1/2 w-full md:!mb-0 mb-10">
    <img class="w-full" src="{{$mainImageHome}}"></img>

    </div>
    <div class="md:!w-1/2 w-full md:!mb-0 mb-10">
        <h2 class="">{{$firstTextHome}}</h2>
        <h1 class="">{{$secondTextHome}}</h1>
    </div>

</div>
</section>
<section class="mx-auto container mx-10">
    <div>{{$headlineSecondSectionHome}}</div>
</section>
