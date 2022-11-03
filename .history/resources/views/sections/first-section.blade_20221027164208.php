
<section class="mx-auto p-4 max-w-pageWidth">
    <div class="w-full  m-auto">
        <h3 class="w-full justify-items-center !font-bold text-center p-4 text-2xl md:!text-6xl">{{$heading}}</h3>
        <h1 class="w-full justify-items-center !font-normal text-black text-center mb-4 text-xl md:!text-2xl">{{$subheading}}</h1>
        <h3 class="w-full justify-items-center font-black text-center p-2">{{$thirdTitle}}</h3>
    </div>
    <div class="flex flex-wrap">
        <div class="md:!w-1/2 w-full">
            <img class="rounded w-full" src="{{$expertMainPhoto}}">
            </img>
            @include('partials.expert-info')
        </div>
        <div class="border-4 border-primary rounded border-t-40 md:!w-1/2 w-full">
            <div class="bg-primary p-4">
                <div class="text-white text-2xl text-center font-bold">{{$productTitle}}</div>
            </div>
                <div class=" block rounded-full pl-10 pr-10 pt-4">
                    <div class="flex justify-center mb-4">
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
                    <div class="mt-4"> {!! $productIncludes !!}</div>
                    <div class="flex-auto relativemt-4">
                    <?php $form_shortcode = $formShortcode; echo do_shortcode($form_shortcode)?>
                    </div>
            </div>
        </div>
    </div>
</section>