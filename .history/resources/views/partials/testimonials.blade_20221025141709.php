<?php
    $testimonials = get_field('testimonials');
    if( $testimonials ): ?>
<section>
    <div class="container mx-auto flex-wrap flex pb-section">
        <?php 
            foreach( $testimonials as $testimonial ): 
            @include('partials.testimonial-single')
        endforeach; 
        ?>
    </div>
</section>
<?php endif; ?>