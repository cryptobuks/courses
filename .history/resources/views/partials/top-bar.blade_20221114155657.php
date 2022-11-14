
<div class="bg-white w-full p-4  items-center flex justify-between mx-auto  max-w-pageWidth">
        <img class="h-10 no-lazyload" src="{{$logoColor}}"></img>
        @if(get_post_type() === 'wfocu_offer')
        <div class="flex align-middle mr-4">
                <div class=" font-semibold mb-4">Price increases in:</div>
                @include('partials.countdown-upsell-alpine')
        </div>
        
        @else
        <div class="text-black flex text-xl">
        <div class="fill-black h-5 mr-2 mt-1">
            @include('icons.phone') </div>  
                {{$phoneNumber}}
         </div>
         @endif

</div>