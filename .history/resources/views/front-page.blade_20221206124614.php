@extends('layouts.app')
<section class="bg-secondary py-10 ">
<div class="flex flex-wrap mx-auto container">
    <div class="md:!w-1/2 w-full md:!mb-0 mb-10">
    <img class="w-full" src="{{$mainImageHome}}"></img>

    </div>
    <div class="md:!w-1/2 w-full md:!mb-0 mb-10 items-center inline-flex">
        <h2 class="!mb-0">{{$firstTextHome}}</h2>
        <h1 class="">{{$secondTextHome}}</h1>
        <div class="">{{$thirdTextHome}}</div>
        <div>
        <?php $form_shortcode = $formShortcodeHome; echo do_shortcode($form_shortcode)?>
        </div>
    </div>

</div>
</section>
<section class="mx-auto container my-10 justify-center">
    <div class="max-w-contentwidth m-auto">
        <div class="text-black text-5xl font-normal mb-10">{{$headlineSecondSectionHome}}</div>
        <div class="text-black text-5xl font-normal mb-10">{{$headlineThirdSectionHome}}
        <img class="h-20" src="{{$imageThirdSectionHome}}"></img>
        </div>
        <div>{!! $contentThirdSectionHome !!}</div>
        <div class="text-black text-5xl font-normal mb-10">{{$headlineFourthSectionHome}}
        </div>
        @include('partials.products')

        @include('sections.testimonial-section')

        <div>{!! $contentFourthSectionHome !!}</div>
    </div>
</section>
<section class="mx-auto bg-stone-50 py-10">
    <div class=" container mx-auto">
        <div class="max-w-contentwidth m-auto">
            <div class="text-black text-5xl font-normal mb-10">{{$headlineFifthSectionHome}}
            </div>
            <div>{!! $contentFifthSectionHome !!}</div>
        </div>
        
    </div>
</section>
