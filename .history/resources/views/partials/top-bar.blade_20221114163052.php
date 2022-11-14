
<div class="bg-white w-full p-4  items-center flex justify-between mx-auto  max-w-pageWidth sticky top-0 left-0 right-0 font-lg transition duration-500 ease-in-out"
        :class="{ 'shadow-lg': atTop, 'bg-indigo-500 text-white': !atTop, 'bg-white text-indigo-800': atTop }"
        @scroll.window="atTop = (window.pageYOffset < 50) ? false: true">
        <img class="h-10 no-lazyload" src="{{$logoColor}}"></img>
        @if(get_post_type() === 'wfocu_offer')
        <div class="flex items-center	">
                <div class=" font-semibold mr-2">Price increases in:</div>
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