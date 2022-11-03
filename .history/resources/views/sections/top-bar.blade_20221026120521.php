@if($phoneNumber)
<header class="bg-white">
    <div class="w-full p-4  items-center flex justify-between mx-auto container">
        <img class="h-10 no-lazyload" src="{{$logoColor}}"></img>
        <div class="text-black flex "> 
            <div class="fill-black mr-8 h-4">
                @include('icons.phone')
            </div>    
            {{$phoneNumber}} 
        </div>
    </div>
</header>
@endif