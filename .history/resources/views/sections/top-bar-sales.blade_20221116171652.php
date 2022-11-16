@if($phoneNumber)
<header class="bg-black">
    <div class="w-full p-4 items-center flex justify-between mx-auto max-w-pageWidth">
        <img class="h-10 no-lazyload hidden sm:flex" src="{{$logoColor}}"></img>
        <div class="text-center text-white font-bold text-xl flex w-full md:!w-auto justify-between">
            <div class="grid md:flex">
                {{$topBarText}} 
                @include('partials.countdown-sales')   
            </div>
            <button class=" hover:bg-hover bg-primary p-2 pl-4 pr-4 rounded-full text-white text-base ml-4 data-bs-toggle="modal" data-bs-target="#exampleModalCenter"">SIGN UP TODAY </button>
        </div>
        <div class="text-white text-xl hidden sm:flex">
            <div class="fill-white h-5 mr-2 mt-1">
            @include('icons.phone') </div>    
            {{$phoneNumber}}
        </div>
    </div>
</header>
@endif