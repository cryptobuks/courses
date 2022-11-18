
<section class="">
    <div>
        <h3 class="justify-items-center !font-extrabold md:text-center text-left md:p-4 text-3xl md:!text-6xl mb-4 text-black mt-10">{{$mainHeading}}</h3>
        <h1 class=" justify-items-center !font-normal text-black md:text-center text-left mb-4 !text-xl md:!text-2xl">{{$subheading}}</h1>
        <h3 class=" justify-items-center font-black text-center p-2">{{$thirdTitle}}</h3>
    </div>
    <div class="flex flex-wrap">
        @if($expertMainPhoto)
        <div class="md:!w-1/2 w-full md:!mb-0 mb-10">
            <img class="w-full" src="{{$expertMainPhoto}}">
            </img>
            @include('partials.expert-info')
        </div>
        @endif
        @if($productTitle)
        <div class="md:!w-1/2 w-full">
            <div id="product-info" class="border-4 border-primary rounded border-t-40 ">
                <div class="bg-primary p-4 relative">
                    @include('partials.black-friday')
                    <div class="text-white text-2xl text-center font-bold">{{$productTitle}}</div>
                </div>
                    <div class=" block rounded p-4 md:!pl-10 md:!pr-10">
                        <div class="flex justify-center mb-4 whitespace-nowrap">
                        <?php
                    $post_object = get_field('selected_product');
                    $price = get_post_meta( $post_object -> ID, '_regular_price', true);
                    $price_sales = get_post_meta( $post_object -> ID, '_sale_price', true);
                    if($price_sales > 0){
                        echo "<div class='text-red-500 text-2xl mr-2 ml-2 font-bold uppercase'> only " . "$"  . $price_sales ."</div>" ."<div class='text-red-500 text-2xl mr-2 font-bold uppercase'> today" . "&nbsp" . "</div>" . "<div class='text-xl mr-2 ml-2 mt-1 font-medium line-through'>" . "$" . $price . "</div>";
                    }
                    else{
                        echo $price . "$";
                    }
                    ?>
                    </div>
                        <div id="product-includes" class="mt-4 !text-sm"> {!! $productIncludes !!}</div>
                        <div class="flex-auto relative mt-4 -mb-20">
                            <?php $form_shortcode = $formShortcode; echo do_shortcode($form_shortcode)?>
                        </div>
                        
                </div>  
            </div>
            <div class="fill-primary mt-12 flex h-4 items-center justify-center">
                <div class="mr-0.5 h-full !fill-yellow-400">@include('icons.rating-star')</div>
                <div class="mr-0.5 h-full !fill-yellow-400">@include('icons.rating-star')</div>
                <div class="mr-0.5 h-full !fill-yellow-400">@include('icons.rating-star')</div>
                <div class="mr-0.5 h-full !fill-yellow-400">@include('icons.rating-star')</div>
                <div class="mr-0.5 h-full !fill-yellow-400">@include('icons.rating-star')</div>
                <div class="font-bold">4.8 / 5</div>
            </div>
        </div>

        @endif

    </div>
</section>


