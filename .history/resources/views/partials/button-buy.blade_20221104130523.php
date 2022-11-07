<section class="w-full p-4 mx-auto animate-rocking">
    <?php
   // $page = base_url(TRUE);
    ?>
    <a href="?wffn-next-link=yes">
        <button id="moving-buy-button" class="bg-primary w-full rounded-3xl md:rounded-full p-8 text-center block md:flex justify-center text-black align-center drop-shadow-md shadow-primary  ">
            <?php
                $post_object = get_field('selected_product');
                $price = get_post_meta( $post_object -> ID, '_regular_price', true);
                $price_sales = get_post_meta( $post_object -> ID, '_sale_price', true);?>
                <div class="h-6">@include('icons.shopping-cart')</div>
               <?php if($price_sales > 0){
                    echo "<div class='text-3xl mr-2 ml-2 font-semibold !no-underline uppercase'> Join the challange " . "$"  . $price_sales . "&nbsp" . "</div>" . "<div class='text-xl mr-2 ml-2 font-medium line-through pt-1'>" . "$" . $price . "</div>";
                }
                else{
                    echo $price . "$";
                }
            ?>
        </button>
    </a>
</section>