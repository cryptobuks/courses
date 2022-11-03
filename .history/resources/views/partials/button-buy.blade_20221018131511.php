<section class="w-full p-4 mx-auto">
    <div class="bg-primary w-full">
        <?php
            $post_object = get_field('selected_product');
            $price = get_post_meta( $post_object -> ID, '_regular_price', true);
            $price_sales = get_post_meta( $post_object -> ID, '_sale_price', true);
            if($price_sales > 0){
                echo "<div class='sales-price'>" . "$"  . $price_sales . "&nbsp" . "</div>" . "<div class='regular-price'>" . "$" . $price . "</div>";
            }
            else{
                echo $price . "$";

            }
        ?>
    </div>
</section>