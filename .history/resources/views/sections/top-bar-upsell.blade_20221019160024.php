@if($phoneNumber)

<header class="fixed no-lazyload duration-500 shadow-md">
    <div class="w-full p-4  items-center flex justify-between mx-auto container">
        <img class="h-10 no-lazyload" src="{{$logoColor}}"></img>
        <p class="text-black"> {{$phoneNumber}} </p>
    </div>
    
</header>
@endif