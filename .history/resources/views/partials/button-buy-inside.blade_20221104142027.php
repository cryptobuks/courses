<button id="moving-buy-button" class="px-6 py-2 font-semibold text-black border-b-4 rounded-full shadow-lg bg-primary border-cyan-800 shadow-black-600/50 hover:border-cyan-600">
    <?php
        $post_object = get_field('selected_product');
        $price = get_post_meta( $post_object -> ID, '_regular_price', true);
        $price_sales = get_post_meta( $post_object -> ID, '_sale_price', true);?>
        <div class="flex flex-row">
        <div class="h-6">@include('icons.shopping-cart')</div>
        <?php if($price_sales > 0){
            echo "<div class='md:text-3xl text-xl mr-2 ml-2 font-semibold !no-underline uppercase'> Join the challange " . "$"  . $price_sales . "&nbsp" . "</div>" ."</div>" . "<div class='text-xl mr-2 ml-2 font-medium line-through pt-1'>" . "$" . $price . "</div>";
        }
        else{
            echo $price . "$";
        }?>
</button>