<?php
    $testimonials = get_field('testimonials');
    if( $testimonials ): ?>
    <div class=" mx-auto   grid gap-4 grid-cols-2">
        <?php 
            foreach( $testimonials as $testimonial ): ?>
            @include('partials.testimonial-single')
        <?php
        endforeach; 
        ?>
    </div>
<?php endif; ?>