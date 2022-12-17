<?php
    $post_objects = get_field('products');
    $product = new WC_Product($post_objects->ID); 
	$price  = $product->get_price();;
    if( $post_objects ): ?> 
        <div>
        <?php foreach( $post_objects as $post_object): ?>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_object->ID ), 'single-post-thumbnail' );  ?>
                
                <div class="single-feature">
                        <a href="<?php echo get_the_permalink($post_object->ID); ?>" class="img-feature">
                            <img src="<?php echo $image[0];?>">
                        </a>
                    <div class="product-title-price">
                        <a href="<?php echo get_the_permalink($post_object->ID); ?>">
                        <h3><?php echo get_the_title($post_object->ID); ?></h3>
                        </a>
                        <?php echo $price; ?>
                    </div>
                </div>

            </div>
        <?php endforeach; 
    endif;
?>

<?php 

// args
$args = array(
    'numberposts'   => -1,
    'post_type'     => 'wffn_landing',
);


// query
$post_objects = new WP_Query( $args );

?>
<?php if( $post_objects->have_posts() ): ?>
    <ul>
    <?php while( $post_objects->have_posts() ) : $post_objects->the_post(); ?>
        <li>
            <a href="<?php the_permalink(); ?>">
                <img src="<?php wp_get_attachment_image_src( get_post_thumbnail_id( $post_object->ID ), 'single-post-thumbnail' ); ?>" />
                <?php the_title(); ?>
            </a>
        </li>
    <?php endwhile; ?>
    </ul>
<?php endif; ?>

<?php wp_reset_query();   // Restore global post data stomped by the_post(). ?>