@if($phoneNumber)
<header>
    <div class="w-full p-4  items-center flex justify-between mx-auto container shadow-md">
        <img class="h-10 no-lazyload shadow-lg	" src="{{$logoColor}}"></img>
        <p class="text-black"> {{$phoneNumber}} </p>
    </div>
    
</header>
@endif