@if($phoneNumber)
<header>
    <div class="bg-black w-full p-4  items-center flex justify-between mx-auto container shadow-2xl">
        <img class="h-10 no-lazyload shadow-2xl" src="{{$logoColor}}"></img>
        <p class="text-black shadow-2xl"> {{$phoneNumber}} </p>
    </div>
    
</header>
@endif