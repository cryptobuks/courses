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
    <div class="w-full pb-8">
    <div class=" p-6 shadow rounded-lg">
        <div class="flex relative w-full mb-5 items-center ">
            @if($featured_image)
              <img class="mr-2 h-14 w-14 object-cover" src="<?php echo $featured_image['url']; ?>">
            @endif
        </div>
        <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
        </a>
        <?php the_content();?>    
    </div>
</div>
        <a href="<?php the_permalink(); ?>">
            <img src="<?php echo $featured_image ?>" />

        </a>
    <?php endwhile; ?>
<?php endif; ?>

<?php wp_reset_query();   // Restore global post data stomped by the_post(). ?>