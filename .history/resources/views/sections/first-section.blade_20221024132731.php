
<section class="container mx-auto p-4">
    <h3 class="w-full justify-items-center font-bold text-center p-4">{{$heading}}</h3>
    <h1 class="w-full justify-items-center font-black text-center main-title">{{$subheading}}</h1>
    <h3 class="w-full justify-items-center font-black text-center p-2">{{$thirdTitle}}</h3>
    <div class="flex flex-row mx-auto">
        <div class="flex-auto w-64 relative">
            <img class="rounded w-full relative" src="{{$expertMainPhoto}}">
                <div class="flex flex-row bg-white absolute h-2 z-10 bottom-3 right-2">
                    <img src="{{$expertProfilePhoto}}"></img>
                    <div>
                        <div class="flex">{{$expertName}}</div>
                        <div class="flex">{{$expertJob}}</div>
                    </div>
                    
                </div>
            </img>
        </div>
        <div class="flex-auto ml-2 border-4 border-primary rounded border-t-40 w-32">
            <div class="bg-primary p-4">
                <div class="font-black text-2xl text-center">{{$productTitle}}</div>
            </div>
            <div class="p-4 rounded-lg">
                <div> {!! $productIncludes !!}</div>
                <div class="flex-auto relativemt-4">
                <?php $form_shortcode = $formShortcode; echo do_shortcode($form_shortcode)?>
                </div>
            </div>
        </div>
    </div>
</section>