
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
                <div class="text-black text-2xl text-center font-bold">{{$productTitle}}</div>
            </div>
            <div class="p-4 rounded-lg">
                <?php
            $post_object = get_field('selected_product');
            $price = get_post_meta( $post_object -> ID, '_regular_price', true);
            $price_sales = get_post_meta( $post_object -> ID, '_sale_price', true);
            if($price_sales > 0){
                echo "<div class='text-red-500 text-2xl mr-2 ml-2 font-semibold uppercase'> only today " . "$"  . $price_sales . "&nbsp" . "</div>" . "<div class='text-xl mr-2 ml-2 font-medium line-through'>" . "$" . $price . "</div>";
            }
            else{
                echo $price . "$";
            }
        ?>
                <div> {!! $productIncludes !!}</div>
                <div class="flex-auto relativemt-4">
                <?php $form_shortcode = $formShortcode; echo do_shortcode($form_shortcode)?>
                </div>
            </div>
        </div>
    </div>
</section>