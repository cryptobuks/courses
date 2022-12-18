@if($phoneNumber)
<header class="bg-white top-0 z-50">
    <div class="w-full p-2 items-center flex justify-between mx-auto max-w-pageWidth">
        <img class="md:h-10 h-6 no-lazyload md:flex hidden" src="{{$logoColor}}"></img>
        @include('partials.salespages-info')
    </div>
</header>
@endif