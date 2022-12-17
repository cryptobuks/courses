@if($phoneNumber)
<header class="bg-white sticky top-0 z-50">
    <div class="w-full p-2 items-center flex justify-between mx-auto max-w-pageWidth">
        <img class="h-10 no-lazyload  sm:flex" src="{{$logoColor}}"></img>
        @include('partials.salespages-info')
    </div>
</header>
@endif