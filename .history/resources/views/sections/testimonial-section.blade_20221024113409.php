<?php
    $testimonial_name1 = get_field($testimonial_name);

?>
<section class="grid justify-center m-auto">
    <div class="width-780 mt-14">
        {!! $testimonialContent !!}
    </div>
    <div>
        <?php echo $testimonial_name1?>
    </div>
        @include('partials.testimonials')
</section>