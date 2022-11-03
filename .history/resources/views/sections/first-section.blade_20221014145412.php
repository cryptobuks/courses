
<section class="container mx-auto p-4">
    <h3 class="w-full justify-items-center font-bold text-center p-4">{{$firstTitle}}</h3>
    <h1 class="w-full justify-items-center font-black text-center main-title">{{$secondTitle}}</h1>
    <h3 class="w-full justify-items-center font-black text-center p-2">{{$thirdTitle}}</h3>
    <?php if($expertProfilePhoto) ?>
    <div class="flex flex-row mx-auto">
        <div class="flex-auto w-64 relative">
            <img class="rounded w-full relative" src="{{$expertMainPhoto}}">
                <div class="flex flex-row bg-white absolute h-2 z-10 bottom-3 right-2">
                    <img src="{{$expertProfilePhoto}}"></img>
                    <div>
                        <p class="flex">{{$expertName}}</p>
                        <p class="flex">{{$expertJob}}</p>
                    </div>
                    
                </div>
            </img>
        </div>
        <?php @endif ?>
        </php>
        <div class="flex-auto ml-2 border-4 border-primary rounded border-t-40 w-32">
            <div class="bg-primary p-4">
                <p class="font-black text-2xl text-center">{{$productTitle}}</p>
            </div>
            <div class="p-4"> test{{$formShortcode}}
            </div>
        </div>
    </div>
</section>