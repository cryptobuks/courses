<?php 

// args
$args = array(
    'numberposts'   => -1,
    'post_type'     => 'wffn_landing',
    'post_category' => 'sales-pages',
);


// query
$post_objects = new WP_Query( $args );
$featured_image = get_the_post_thumbnail($post_objects, 'thumbnail' );
?>
<div class="md:grid-rows-3 grid-rows-1 gap-4 md:!inline-flex block w-full">

<?php if( $post_objects->have_posts() ): ?>
    <?php while( $post_objects->have_posts() ) : $post_objects->the_post(); ?>
        <div class=" md:min-w-[32%] min-w-full">
            <div class=" p-6 shadow rounded-lg">
                    @if($featured_image)
                    <img class="w-full object-cover" src="<?php echo $image; ?>">
                    @endif
                <a href="<?php the_permalink(); ?>">
                   <div class="text-xl font-medium"> <?php the_title(); ?></div>
                </a>
                <div class="w-full md:max-w-xs">
                    <?php the_content();?>
                </div>    
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>
</div>

<?php wp_reset_query();   // Restore global post data stomped by the_post(). ?>