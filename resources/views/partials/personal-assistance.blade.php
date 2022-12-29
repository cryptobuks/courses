@if($personalAssistanceHeadline)
<div class="font-semibold md:text-xl text-lg mt-4 text-black flex justify-center md:w-11/12 mx-auto">
    <img class="h-20 mr-1" src="/wp-content/themes/courses-1/resources/images/personal-assistance.png"></img>
    <div>
        <div class="text-left font-bold text-base ml-4">{!! $personalAssistanceHeadline !!}</div>
        <div class="text-left font-normal !text-sm ml-4">{!! $personalAssistanceText !!}</div>
    </div>
</div>
@endif
