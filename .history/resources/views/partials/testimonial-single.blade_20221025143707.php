<?php
$testimonial_name = get_the_title($testimonial);
$testimonial_content = get_field('testimonial_text', $testimonial);
$testimonial_image = get_field('testimonial_image', $testimonial);
$testimonial_headline = get_field('testimonial_headline', $testimonial);
?>
<div class="w-full md:!w-1/3 pb-8 md:pr-8">
    <div class="w-full p-4 shadow rounded">
        <div class="flex relative w-full mb-5 items-center">
            @if($testimonial_image)
              <img class="rounded-full mr-2 h-14 w-14 object-cover" src="<?php echo $testimonial_image['url']; ?>">
            @endif
            <div>
              <div class="font-semibold"><?php echo $testimonial_name; ?></div>
              @else
              <div class="fill-primary mt-2 flex h-4">
                <div class="mr-0.5 h-full !fill-googleRatingStar">@include('icons.rating-star')</div>
                <div class="mr-0.5 h-full !fill-googleRatingStar">@include('icons.rating-star')</div>
                <div class="mr-0.5 h-full !fill-googleRatingStar">@include('icons.rating-star')</div>
                <div class="mr-0.5 h-full !fill-googleRatingStar">@include('icons.rating-star')</div>
                <div class="mr-0.5 h-full !fill-googleRatingStar">@include('icons.rating-star')</div></div>
              @endif
            </div>
        </div>
        <div class="text-cards"><?php echo $testimonial_content ?></div>
    </div>
</div>