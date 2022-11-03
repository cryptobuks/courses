@if($phoneNumber)
<header class="bg-black">
    <div class="w-full p-4  items-center flex justify-between mx-auto container">
        <img class="h-10 no-lazyload" src="{{$logoColor}}"></img>
        <div class="text-center text-white font-bold">{{$topBarText}}:</div>
        <div class="text-white">@include('icons.phone') {{$phoneNumber}} </div>
    </div><div class="mr-0.5 h-full !fill-googleRatingStar">@include('icons.rating-star')</div>
</header>
@endif