<?php
    $testimonials = get_field('testimonials');
    if( $testimonials ): ?>
    <div class=" mx-auto flex-wrap flex pb-section w-full md:width-780">
        <?php 
            foreach( $testimonials as $testimonial ): ?>
            @include('partials.testimonial-single')
        <?php
        endforeach; 
        ?>
    </div>
<?php endif; ?>