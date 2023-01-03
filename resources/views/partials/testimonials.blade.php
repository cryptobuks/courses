<?php
    $testimonials = get_field('testimonials');
    if( $testimonials ): ?>
    @if(get_post_type() === 'wffn_landing')
    <div class=" md:gap-4 md:columns-2 columns-1 gap-2">
    @elseif(get_post_type() === 'wfacp_checkout')
    <div class="columns-1 gap-2">
    @endif
        <?php 
            foreach( $testimonials as $testimonial ): ?>
            @include('partials.testimonial-single')
        <?php
        endforeach; 
        ?>
    </div>
<?php endif; ?>