<?php
    $testimonial_name = get_the_title($testimonial);

?><section class="grid justify-center m-auto">
    <div class="width-780 mt-14">
        {!! $testimonialContent !!}
    </div>
    <div>
        <?php echo $testimonial_name
    </div>
        @include('partials.testimonials')
</section>