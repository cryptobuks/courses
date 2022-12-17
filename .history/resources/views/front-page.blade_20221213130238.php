@extends('layouts.app')
<section class="bg-secondary md:py-20 py-10 ">
<div class="flex flex-wrap mx-auto container">
    <div class="md:!w-1/2 w-full md:!mb-0 mb-10">
    <img class="w-full" src="{{$mainImageHome}}"></img>

    </div>
    <div class="md:!w-1/2 w-full md:!mb-0 mb-10 items-center inline-flex">
        <div>
            <h2 class="!mb-0 md:text-2xl  text-base font-semibold text-primary">{{$firstTextHome}}</h2>
            <h1 class="md:!text-[64px] text-5xl font-semibold text-primary mt-3">{{$secondTextHome}}</h1>
            <div class="text-black font-normal text-xl mt-3 mb-4">{{$thirdTextHome}}</div>
            <div>
            <?php $form_shortcode = $formShortcodeHome; echo do_shortcode($form_shortcode)?>
            </div>
        </div>

    </div>

</div>
</section>
<section class="py-10 ">
<div class=" mx-auto container">
    <div class="text-black text-5xl font-normal mb-10">{{$headlineSecondSectionHome}}</div>
    @include('partials.products')

</div>
</section>

<section class="mx-auto container my-10 justify-center">
    <div class="max-w-contentwidth m-auto">
        <div class="flex items-center mb-10">
            <img class="h-20 mr-4" src="{{$imageThirdSectionHome}}"></img>
            <div class="text-black text-5xl font-normal">{{$headlineThirdSectionHome}}
        </div>
        </div>

        <div>{!! $contentThirdSectionHome !!}</div>
        <div class="text-black text-5xl font-normal mb-10">{{$headlineFourthSectionHome}}
        </div>

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
@include('sections.footer')
