<?php
$p = get_field('products');
$product = new WC_Product($p->ID); 
$price_sale = $product->get_price();
$product_name = $product->get_name();
$product_image = $product->get_image_id();
$product_short_description = $product->post->post_excerpt;
?>
<div class="w-full pb-8">
    <div class=" p-6 shadow rounded-lg">
        <div class="flex relative w-full mb-5 items-center ">
            <div>
              <div class="font-semibold"><?php echo $product_name; ?></div>
            </div>
        </div>
        <div class="italic text-lg "><?php echo $product_short_description ?></div>
    </div>
</div>