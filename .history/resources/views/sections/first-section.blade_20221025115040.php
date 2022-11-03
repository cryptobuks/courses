
<section class="container mx-auto p-4">
    <div class="w-3/4  m-auto">
        <h3 class="w-full justify-items-center !font-bold text-center p-4 !text-6xl">{{$heading}}</h3>
        <h1 class="w-full justify-items-center !font-normal text-black text-center mb-4 !text-2xl">{{$subheading}}</h1>
        <h3 class="w-full justify-items-center font-black text-center p-2">{{$thirdTitle}}</h3>
    </div>
    <div class="flex flex-row mx-auto">
        <div class="flex-auto w-58 relative">
            <img class="rounded w-full relative" src="{{$expertMainPhoto}}">
            </img>
            @include('partials.expert-info')

        </div>
        <div class="flex-auto ml-2 border-4 border-primary rounded border-t-40 w-32">
            <div class="bg-primary p-4">
                <div class="text-black text-2xl text-center font-bold">{{$productTitle}}</div>
            </div>
                <div class=" !rounded-3xl pl-10 pr-10 pt-4">
                    <div class="flex justify-center mb-4">
                    <?php
                $post_object = get_field('selected_product');
                $price = get_post_meta( $post_object -> ID, '_regular_price', true);
                $price_sales = get_post_meta( $post_object -> ID, '_sale_price', true);
                if($price_sales > 0){
                    echo "<div class='text-red-500 text-2xl mr-2 ml-2 font-bold uppercase'> only " . "$"  . $price_sales ."</div>" ."<div class='text-red-500 text-2xl mr-2 font-bold uppercase'> today" . "&nbsp" . "</div>" . "<div class='text-xl mr-2 ml-2 font-medium line-through'>" . "$" . $price . "</div>";
                }
                else{
                    echo $price . "$";
                }
                ?>
                </div>
                    <div class="mt-4"> {!! $productIncludes !!}</div>
                    <div class="flex-auto relativemt-4">
                    <?php $form_shortcode = $formShortcode; echo do_shortcode($form_shortcode)?>
                    </div>
            </div>
        </div>
    </div>
</section>