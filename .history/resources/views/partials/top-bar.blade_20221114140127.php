
<div class="bg-white w-full p-4  items-center flex justify-between mx-auto  max-w-pageWidth">
        <img class="h-10 no-lazyload" src="{{$logoColor}}"></img>
        @if(get_post_type() === 'wfocu_offer')
        <div class="timer" x-data="timer(new Date().setDate(new Date().getDate() + 1 +1))" x-init="init();">
                <h1 x-text="time().days"></h1>
                <h1 x-text="time().hours"></h1>
                <h1 x-text="time().minutes"></h1>
                <h1 x-text="time().seconds"></h1>
        </div>


        <div class="text-black flex text-xl">
        <div class="fill-black h-5 mr-2 mt-1">
            @include('icons.phone') </div>  
                {{$phoneNumber}}
         </div>
        @endif
</div>