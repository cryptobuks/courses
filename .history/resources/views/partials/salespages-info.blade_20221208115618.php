<div class="inline-flex  border-2 border-primary rounded-full px-8 py-0.5">
            <div class="mr-6">Need Help?</div>
            <div class="fill-black h-4 mt-1 flex items-center mr-4">
                @include('icons.phone')   
                <div class="ml-2">{{$phoneNumber}}</div>
            </div>  
            <div class="fill-black h-4 mt-1 flex items-center">
                @include('icons.mail')    
                <div class="ml-2">{{$email}}</div>
            </div> 
        </div>