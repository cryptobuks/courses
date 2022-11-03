<section class="w-full p-4 mx-auto animate-spin">
    <?php
   // $page = base_url(TRUE);
    ?>
    <a href="http://courses.test/?wffn-next-link=yes">
        <button id="moving-buy-button" class="bg-primary w-full rounded-3xl p-8 text-center flex justify-center text-black align-center drop-shadow-md shadow-primary">
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
    </a>
</section>