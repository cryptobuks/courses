<?php
    $testimonials = get_field('testimonials');
    if( $testimonials ): ?>
    <div class="grid grid-cols-2 gap-4 ">
        <?php 
            foreach( $testimonials as $testimonial ): ?>
            @include('partials.testimonial-single')
        <?php
        endforeach; 
        ?>
    </div>
<?php endif; ?>
