<?php
    $testimonials = get_field('testimonials');
    if( $testimonials ): ?>
    <div class=" mx-auto flex-wrap flex pb-section max-w-contentwidth w-full">
        <?php 
            foreach( $testimonials as $testimonial ): ?>
            @include('partials.testimonial-single')
        <?php
        endforeach; 
        ?>
    </div>
<?php endif; ?>