<button id="moving-buy-button" class="relative block m-10 w-1/2 text-center cursor-pointer">
      <!-- black background shadow -->
      <div class="relative  bottom-1  bg-primary border border-black rounded-full" />

      <!-- text -->
      <div class="relative bottom-1 text-xl font-semibold leading-none tracking-wider py-4 px-10 bg-primary border border-black rounded-full transform hover:translate-y-1 transition duration-200 ease-in-out">
      <?php
        $post_object = get_field('selected_product');
        $price = get_post_meta( $post_object -> ID, '_regular_price', true);
        $price_sales = get_post_meta( $post_object -> ID, '_sale_price', true);?>
        <div class="flex flex-row justify-center">
        <div class="h-6 mt-1">@include('icons.shopping-cart')</div>
        <?php if($price_sales > 0){
            echo "<div class='md:text-3xl text-xl mr-2 ml-2 font-semibold !no-underline uppercase'> Join the challange " . "$"  . $price_sales . "&nbsp" . "</div>" ."</div>" . "<div class='text-xl mr-2 ml-2 font-medium line-through pt-1'>" . "$" . $price . "</div>";
        }
        else{
            echo $price . "$";
        }?>
      </div>
   </button>
<button id="moving-buy-button" class="px-6 py-2 font-semibold text-black border-b-4 rounded-full shadow-lg bg-primary border-black shadow-black-600/50 p-8 transform hover:translate-y-1 transition duration-200 ease-in-out">

</button>