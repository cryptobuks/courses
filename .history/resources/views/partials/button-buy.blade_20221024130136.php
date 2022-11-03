<section class="w-full p-4 mx-auto">
    <button id="moving-buy-button" class="bg-primary w-full rounded-3xl block p-4 text-center flex">
        <?php
            $post_object = get_field('selected_product');
            $price = get_post_meta( $post_object -> ID, '_regular_price', true);
            $price_sales = get_post_meta( $post_object -> ID, '_sale_price', true);
            if($price_sales > 0){
                echo "<div class='text-2xl mr-2 ml-2 font-semibold'> Join the challange " . "$"  . $price_sales . "&nbsp" . "</div>" . "<div class='text-xl mr-2 ml-2 font-medium line-through'>" . "$" . $price . "</div>";
            }
            else{
                echo $price . "$";

            }
        ?>
</button>
</section>