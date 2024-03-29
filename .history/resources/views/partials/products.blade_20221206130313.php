<?php
    $post_objects = get_field('products');
    $product = new WC_Product($post_objects->ID); 

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
                        <?php echo $post_object->get_price(); ?>
                    </div>
                </div>

            </div>
        <?php endforeach; 
    endif;
?>