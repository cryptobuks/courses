<div class="flex  border-2 border-primary rounded-full px-8 py-0.5 bg-white">
            <div class="mr-6 font-medium">Need Help?</div>
            <div class="fill-black h-4 mt-1 flex items-center mr-4 md:text-base text[-!8px]">
                @include('icons.phone')   
                <div class="ml-2">{{$phoneNumber}}</div>
            </div>  
            <div class="fill-black h-4 mt-1 flex items-center md:text-base text-[-8px]">
                @include('icons.mail')    
                <div class="ml-2">{{$email}}</div>
            </div> 
        </div>