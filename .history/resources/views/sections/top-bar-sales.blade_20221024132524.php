@if($phoneNumber)
<header class="bg-black">
    <div class="w-full p-4  items-center flex justify-between mx-auto container">
        <img class="h-10 no-lazyload" src="{{$logoColor}}"></img>
        <div class="text-center text-white font-bold">{{$topBarText}}:</div>
        <div class="text-white"> {{$phoneNumber}} </div>
    </div>
</header>
@endif