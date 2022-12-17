<div class="flex  border-2 border-primary rounded-full md:px-8  px-2 py-0.5 bg-white">
            <div class="mr-6 font-semibold md:text-base text-[12px]">Need Help?</div>
            <div class="fill-black md:h-4 h-3 mt-1 flex items-center mr-4 md:text-base text-[12px]">
                @include('icons.phone')   
                <div class="md:ml-2 ml-1">{{$phoneNumber}}</div>
            </div>  
            <div class="fill-black h-4 mt-1 flex items-center md:text-base text-[12px]">
                @include('icons.mail')    
                <div class="md:ml-2 ml-1">{{$email}}</div>
            </div> 
        </div>