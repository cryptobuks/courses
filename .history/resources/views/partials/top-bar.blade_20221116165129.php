@if(get_post_type() != 'wfacp_checkout')
@include('partials.scrolling-progress-bar')
@endif
<div class="bg-white w-full pt-4 pb-4  items-center flex justify-between mx-auto  max-w-pageWidth ">
                <img class="h-10 no-lazyload" src="{{$logoColor}}"></img>
        @if(get_post_type() === 'wfocu_offer')
        <div class="flex items-center	">
                <div class=" font-semibold mr-2">Price increases in:</div>
                @include('partials.countdown-upsell-alpine')
                <button class="bg-primary p-4 rounded-full text-white font-l">
                        SIGN UP TODAY
                </button>
        </div>
        
        @else
        <div class="text-black flex text-xl">
        <div class="fill-black h-5 mr-2 mt-1">
            @include('icons.phone') </div>  
                {{$phoneNumber}}
         </div>
         @endif

</div>