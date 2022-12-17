<?php
    $products = get_field('products');
    if( $products ): ?>
    <div class=" mx-auto flex-wrap flex w-full ">
        <?php 
            foreach( $products as $product ): ?>
            @include('partials.product-single')
        <?php
        endforeach; 
        ?>
    </div>
<?php endif; ?>