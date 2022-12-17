<?php 

// args
$args = array(
    'numberposts'   => -1,
    'post_type'     => 'wffn_landing',
    'post_category' => 'sales-pages',
);


// query
$post_objects = new WP_Query( $args );
$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_objects->ID ), 'single-post-thumbnail' )
?>
<div class="md:grid-rows-3 grid-rows-1 gap-4 md:!inline-flex block w-full">

<?php if( $post_objects->have_posts() ): ?>
    <?php while( $post_objects->have_posts() ) : $post_objects->the_post(); ?>
        <div class=" md:min-w-[32%] min-w-full">
            <div class=" p-6 shadow rounded-lg">
                    <img class="w-full object-cover" src="<?php echo $image[0]; ?>">
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