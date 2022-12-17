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
<?php if( $post_objects->have_posts() ): ?>
    <?php while( $post_objects->have_posts() ) : $post_objects->the_post(); ?>
        <a href="<?php the_permalink(); ?>">
            <img src="<?php echo $featured_image ?>" />
            <?php the_title(); ?>
            <?php the_content();?>
        </a>
    <?php endwhile; ?>
<?php endif; ?>

<?php wp_reset_query();   // Restore global post data stomped by the_post(). ?>