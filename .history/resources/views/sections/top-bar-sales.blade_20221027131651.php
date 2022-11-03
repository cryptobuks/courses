@if($phoneNumber)
<header class="bg-black">
    <div class="w-full p-4  items-center flex justify-between mx-auto container">
        <img class="h-10 no-lazyload" src="{{$logoColor}}"></img>
        <div class="text-center text-white font-bold text-xl">{{$topBarText}}:</div>
        <div class="text-white flex text-xl">
            <div class="fill-white h-6 mr-2 mt-1">
            @include('icons.phone') </div>    
            {{$phoneNumber}}
        </div>
    </div>
</header>
@endif