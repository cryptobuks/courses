<?php
$testimonial_name = get_field('testimonial_name', $testimonial);
$testimonial_content = get_field('testimonial_text', $testimonial);
$testimonial_image = get_field('testimonial_image', $testimonial);
$testimonial_headline = get_field('testimonial_headline', $testimonial);
$testimonial_style = get_field('testimonial_style', $testimonial);
?>
<div class="inline-flex">
    <div class=" p-6 shadow rounded-lg">
        <div class="flex relative mb-5 items-center w-full ">
            @if($testimonial_image)
              <img class="rounded-full mr-2 h-14 w-14 object-cover" src="<?php echo $testimonial_image['url']; ?>">
            @endif
            <div>
            @if($testimonial_style=="Facebook")
                <div class="font-semibold text-facebookRatingStar"><?php echo $testimonial_name; ?></div>
            @else
              <div class="font-semibold"><?php echo $testimonial_name; ?></div>
              @endif
              <div class="fill-primary mt-2 flex h-4">
                @if($testimonial_style=="Google")
                  @for ($i = 0; $i <= 4; $i++)
                    <div class="mr-0.5 h-full !fill-googleRatingStar">@include('icons.rating-star') </div>
                  @endfor
                @elseif($testimonial_style=="Facebook")
                <div class="text-facebookRatingStar font-semibold mr-1 text-lg mt-[-5px]"> 5.0 </div>
                  @for ($i = 0; $i <= 4; $i++)
                    <div class="mr-0.5 h-full fill-facebookRatingStar ">@include('icons.rating-star')</div>
                  @endfor
                @elseif($testimonial_style=="Tripadvisor")
                  @for ($i = 0; $i <= 4; $i++)
                  <img class= "h-4 ml-[1px]" src="/wp-content/themes/courses-1/resources/images/tripadvisor-star.jpg"></img>
                  @endfor
                @endif
              </div>
            </div>
            @if($testimonial_style=="Google")
            <div class="flex justify-end w-full">
              <img class= "h-6" src="/wp-content/themes/courses-1/resources/images/google-logo.jpg"></img>
            </div>
            @elseif($testimonial_style=="Facebook")
            <div class="flex justify-end w-full">
              <img class= "h-6" src="/wp-content/themes/courses-1/resources/images/facebook-logo.jpg"></img>
            </div>
            @elseif($testimonial_style=="Tripadvisor")
            <div class="flex justify-end w-full">
              <img class= "h-6" src="/wp-content/themes/courses-1/resources/images/trustpilot-logo.png"></img>
            </div>
            @endif
        </div>
        
        <div class="italic text-lg "><?php echo $testimonial_content ?></div>
    </div>
</div>