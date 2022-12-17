<?php 

// args
$args = array(
    'numberposts'   => -1,
    'post_type'     => 'wffn_landing',
);


// query
$post_objects = new WP_Query( $args );
$featured_image = get_the_post_thumbnail($post_objects, 'thumbnail' );
?>
<?php if( $post_objects->have_posts() ): ?>
    <ul>
    <?php while( $post_objects->have_posts() ) : $post_objects->the_post(); ?>
        <li>
            <a href="<?php the_permalink(); ?>">
                <img src="<?php echo $featured_image ?>" />
                <?php the_title(); ?>
            </a>
        </li>
    <?php endwhile; ?>
    </ul>
<?php endif; ?>

<?php wp_reset_query();   // Restore global post data stomped by the_post(). ?>