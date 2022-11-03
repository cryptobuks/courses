<section class="w-full p-4 mx-auto">
    <div id="moving-buy-button" class="bg-primary w-full rounded-3xl flex p-5">
        <?php
            $post_object = get_field('selected_product');
            $price = get_post_meta( $post_object -> ID, '_regular_price', true);
            $price_sales = get_post_meta( $post_object -> ID, '_sale_price', true);
            if($price_sales > 0){
                echo "<div class='sales-price'> Join the challange " . "$"  . $price_sales . "&nbsp" . "</div>" . "<div class='regular-price'>" . "$" . $price . "</div>";
            }
            else{
                echo $price . "$";

            }
        ?>
    </div>
</section>