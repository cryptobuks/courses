@if($phoneNumber)
<header class="bg-black">
    <div class="w-full p-4 items-center flex justify-between mx-auto max-w-pageWidth">
        <img class="h-10 no-lazyload hidden sm:flex" src="{{$logoColor}}"></img>
        <div class="text-center text-white font-bold text-xl">{{$topBarText}} @include('partials.countdown-sales')</div>
        <div class="text-white flex text-xl">
            <div class="fill-white h-5 mr-2 mt-1">
            @include('icons.phone') </div>    
            {{$phoneNumber}}
        </div>
    </div>
</header>
@endif