<?php
$testimonial_name = get_the_title($testimonial);
$testimonial_content = get_field('testimonial_content', $testimonial);
$testimonial_image = get_field('testimonial_image', $testimonial);
$testimonial_link = get_field('testimonial_link', $testimonial);
$testimonial_gallery= get_field('testimonial_gallery', $testimonial); ?>
<div class="w-full md:!w-1/3 pb-8 md:pr-8">
    <div class="w-full p-4 shadow rounded">
        <div class="flex relative w-full mb-5 items-center">
            @if($testimonial_image)
              <img class="rounded-full mr-2 h-14 w-14 object-cover" src="<?php echo $testimonial_image['url']; ?>">
            @endif
            <div>
              <div class="font-semibold"><?php echo $testimonial_name; ?></div>
              <div class="flex items-center text-verified"><div class="h-4 mr-1">@include('icons.verified-customer')</div>@if(get_field('verified_customer' , 'options')){{get_field('verified_customer' , 'options')}}@else() Verified Customer @endif</div>
              @if(str_contains($testimonial_link, 'trip'))
              <div class="fill-tripadvisor mt-2 flex h-4"><div class=" mr-0.5 h-full">@include('icons.review-star')</div><div class="mr-0.5 h-full">@include('icons.review-star')</div><div class="mr-0.5 h-full">@include('icons.review-star')</div><div class="mr-0.5 h-full">@include('icons.review-star')</div><div class="mr-0.5 h-full">@include('icons.review-star')</div></div>
              @elseif(str_contains($testimonial_link, 'trustpilot'))
              <div class="mt-2 flex h-4">@include('icons.trustpilot-stars')</div>
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