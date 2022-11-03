@if($phoneNumber)
<div class="w-full bg-gray-200 h-1">
  <div class="bg-blue-600 h-1" style="width: 45%"></div>
</div>
<header class="bg-white">
    <div class="w-full p-4  items-center flex justify-between mx-auto container">
        <img class="h-10 no-lazyload" src="{{$logoColor}}"></img>
        <p class="text-black"> {{$phoneNumber}} </p>
    </div>
</header>
@endif