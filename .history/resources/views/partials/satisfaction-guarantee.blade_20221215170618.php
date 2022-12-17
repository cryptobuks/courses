@if($guaranteeUnderButton || $satisfactionGuaranteeCheckout)
<div class="font-semibold md:text-xl text-lg mt-4 text-black flex justify-center md:w-11/12 mx-auto">
<img class="h-14 mr-1" src="/wp-content/themes/courses-1/resources/images/guaranteed-money-back.png"></img>
    <div class="text-left font-normal !text-sm ml-4">{!! $guaranteeUnderButton || $satisfactionGuaranteeCheckout!!}</div>
</div>
@endif
