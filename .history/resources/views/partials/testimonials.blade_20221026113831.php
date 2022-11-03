<?php
    $testimonials = get_field('testimonials');
    if( $testimonials ): ?>
<section>
    <div class=" mx-auto flex-wrap flex pb-section">
        <?php 
            foreach( $testimonials as $testimonial ): ?>
            @include('partials.testimonial-single')
        <?php
        endforeach; 
        ?>
    </div>
</section>
<?php endif; ?>