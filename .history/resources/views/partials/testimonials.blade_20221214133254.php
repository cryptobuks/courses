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

<div class="container mx-auto py-4">
  <div class="flex flezx-row gap-4 w-full">
    <div class="p-6 bg-red-300 rounded-xl h-full w-1/2">
      <p>Helllo</p>
      <p>Helllo</p>
      <p>Helllo</p>
      <p>Helllo</p>
      <p>Helllo</p>
      <p>Helllo</p>
    </div>
    <div class="p-6 bg-red-300 rounded-xl h-full w-1/2">
      <p>Helllo</p>
      <p>Helllo</p>

    </div>
    <div class="p-6 bg-red-300 rounded-xl h-full w-1/2">
      <p>Helllo</p>
      <p>Helllo</p>

    </div>
  </div>
</div>