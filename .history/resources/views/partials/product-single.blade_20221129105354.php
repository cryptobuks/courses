<?php
global $product;

$product_name = $product->get_name();
$product_image = $product->get_image_id();
$testimonial_image = get_field('testimonial_image', $testimonial);
$testimonial_headline = get_field('testimonial_headline', $testimonial);
?>
<div class="w-full pb-8">
    <div class=" p-6 shadow rounded-lg">
        <div class="flex relative w-full mb-5 items-center ">
            @if($testimonial_image)
              <img class="rounded-full mr-2 h-14 w-14 object-cover" src="<?php echo $product_image['url']; ?>">
            @endif
            <div>
              <div class="font-semibold"><?php echo $product_name; ?></div>
            </div>
        </div>
        <div class="italic text-lg "><?php echo $testimonial_content ?></div>
    </div>
</div>