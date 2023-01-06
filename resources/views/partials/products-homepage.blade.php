<?php 

// args
$args = array(
    'numberposts'   => -1,
    'post_type'     => 'wffn_landing',
    'post_category' => 'homepage',
);


// query
$post_objects = new WP_Query( $args );
?>
<div class="md:grid-rows-3 grid-rows-1 gap-4 md:!inline-flex block w-full">

<?php if( $post_objects->have_posts() ): ?>
    <?php while( $post_objects->have_posts() ) : $post_objects->the_post(); ?>
        <div class=" md:min-w-[32%] min-w-full">
            <div class="shadow rounded-lg">
                <?php $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');?>
                <img class="w-full object-cover rounded-tl-lg rounded-tr-lg h-52" src="<?php echo $featured_image[0] ?>">
                <div class="product-card p-4">
                    <a href="<?php the_permalink(); ?>">
                        <div class="text-xl font-medium"> <?php the_title(); ?></div>
                    </a>
                    <?php the_content() ?>
                    <div class="flex justify-end">
                        <a href="<?php the_permalink(); ?>" class="bg-darkOrange hover:bg-hover text-white font-bold p-4 rounded-xl">
                            {{$productCardButton}}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>
</div>

<?php wp_reset_query();   // Restore global post data stomped by the_post(). ?>