@extends('layouts.app')
<section class="bg-secondary py-10 ">
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
<section class="mx-auto container my-10">
    <div class="text-black text-5xl font-normal pb-4">{{$headlineSecondSectionHome}}</div>
</section>
<section class="mx-auto container my-10">
    <div class="max-w-contentwidth">
        <div class="text-black text-5xl font-normal pb-4">{{$headlineThirdSectionHome}}
        <img class="w-10" src="{{$imageThirdSectionHome}}"></img>
        </div>
        <div>{!! $contentThirdSectionHome !!}</div>
    </div>
</section>
<section class="mx-auto container my-10">
    <div class="max-w-contentwidth">
        <div class="text-black text-5xl font-normal pb-4">{{$headlineFourthSectionHome}}
        </div>
        @include('sections.testimonial-section')

        <div>{!! $contentFourthSectionHome !!}</div>
    </div>
</section>
<section class="mx-auto container my-10">
    <div class="max-w-contentwidth">
        <div class="text-black text-5xl font-normal pb-4">{{$headlineFifthSectionHome}}
        </div>
        <div>{!! $contentFourthSectionHome !!}</div>
    </div>
</section>
