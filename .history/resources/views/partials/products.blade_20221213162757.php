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
<div>

<?php if( $post_objects->have_posts() ): ?>
    <?php while( $post_objects->have_posts() ) : $post_objects->the_post(); ?>
        <div class="grid gap-4 grid-cols-3">
            <div class=" p-6 shadow rounded-lg">
                    @if($featured_image)
                    <img class="w-full object-cover" src="<?php echo $featured_image['url']; ?>">
                    @endif
                <a href="<?php the_permalink(); ?>">
                   <div class="text-xl font-medium"> <?php the_title(); ?></div>
                </a>
                <div >
                    <?php the_content();?>
                </div>    
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>
</div>

<?php wp_reset_query();   // Restore global post data stomped by the_post(). ?>