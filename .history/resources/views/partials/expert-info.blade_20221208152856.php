<div class="flex flex-row bg-white justify-between mt-2">
    <div class="flex">
        <div class="relative">
            <img class="h-20"src="{{$expertProfilePhoto}}"></img>
            <img class="h-14 absolute right-4"src="{{$bestSellingAuthorBadge}}"></img>
        </div>
        <div class="ml-4 inline-flex items-center">
            <div class="flex font-bold text-xl">{{$expertName}} 
                <img class="h-4 mt-2 ml-2" src="/wp-content/themes/courses-1/resources/images/check-blue.png"></img>
            </div>
            <div class="flex text-stone-500	">{{$expertJob}}</div>
        </div>
    </div>
</div>
<div class="flex -mt-5">
    <img class="h-12 mr-4" src="/wp-content/uploads/testimonials.png"></img>
    <div>
        <div class="text-black font-bold text-base">{{$satisfiedCustomersNumber}}</div>
        <div class="text-black text-xs">satisfied customers</div>
    </div>
</div>
