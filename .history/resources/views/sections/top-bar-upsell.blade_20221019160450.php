@if($phoneNumber)
<header class="shadow-2xl">
    <div class="bg-white w-full p-4  items-center flex justify-between mx-auto container">
        <img class="h-10 no-lazyload" src="{{$logoColor}}"></img>
        <p class="text-black"> {{$phoneNumber}} </p>
    </div>
    
</header>
@endif