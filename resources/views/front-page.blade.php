@extends('layouts.app')
@include('sections.top-bar-sales-white')

@include('partials.ebook-form')

<section class="py-10 ">
<div class=" mx-auto container">
    <div class="text-black text-5xl font-normal mb-10">{{$headlineSecondSectionHome}}</div>
    @include('partials.products')
</div>
</section>

<section class="mx-auto container my-10 justify-center">
    <div class="max-w-contentwidth m-auto">
        <div class="flex items-center mb-10">
            <img class="h-20 mr-4 rounded-full" src="{{$imageThirdSectionHome}}"></img>
            <div class="text-black text-5xl font-normal">{{$headlineThirdSectionHome}}</div>
        </div>

        <div>{!! $contentThirdSectionHome !!}</div>

        <div class="my-12 h-14 flex justify-end">
            <?php $button_url = $homepageButtonLink['url']; ?>
            <a href="<?php echo esc_url($button_url); ?>" class="bg-darkOrange hover:bg-hover text-white font-bold p-4 rounded-xl no-underline">
                {{$homepageButtonText}}
            </a>
        </div>
      
        <div class="text-black text-5xl font-normal mb-10">{{$headlineFourthSectionHome}}</div>
       
        @include('sections.testimonial-section')

        <div>{!! $contentFourthSectionHome !!}</div>
    </div>
</section>
<section class="mx-auto bg-lightOrange py-16">
    <div class=" container mx-auto">
        <div class="max-w-contentwidth m-auto">
            <div class="text-black text-5xl font-normal mb-10">{{$headlineFifthSectionHome}}
            </div>
            <div>{!! $contentFifthSectionHome !!}</div>
        </div>
        
    </div>
</section>

@include('sections.footer')

