<?php
    /*$products = get_field('products');
    if( $products ): ?>
    <div class=" mx-auto flex-wrap flex w-full ">
        <?php 
            foreach( $products as $product ): ?>
            @include('partials.product-single')
        <?php
        endforeach; 
        ?>
    </div>*/
    $post_objects = get_field('featured_products');

			if( $post_objects ): ?> 
<div>
			<h1>You may also like</h1>
				

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