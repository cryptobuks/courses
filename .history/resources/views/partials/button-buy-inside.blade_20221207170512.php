<button id="moving-buy-button" class="relative block  w-1/2 text-center cursor-pointer" onclick="toggleModal('modal-id')">
      <!-- black background shadow -->
      <div class="relative  bottom-4  bg-primary border-2 border-black rounded-full">
      <!-- text -->
      <div class=" drop-shadow-lg relative bottom-1 text-xl font-semibold leading-none tracking-wider p-4 md:py-4 md:px-20 bg-primary border border-primary rounded-full transform hover:translate-y-1 transition duration-200 ease-in-out">
      <?php
        $post_object = get_field('selected_product');
        $price = get_post_meta( $post_object -> ID, '_regular_price', true);
        $price_sales = get_post_meta( $post_object -> ID, '_sale_price', true);?>
        <div class="flex flex-col md:flex-row items-center">
            <div class="flex flex-row">
                <div class="h-6 mt-1 whitespace-nowrap">@include('icons.shopping-cart')</div>
               <div class='md:text-3xl text-xl mr-2 ml-2 font-semibold !no-underline uppercase text-black'> Join the challenge </div>
            </div>
            
            <?php if($price_sales > 0){
                echo "<div class='flex md:text-3xl text-xl mr-2 ml-2 font-semibold !no-underline uppercase text-black items-center'>" .  "$"  . $price_sales . "&nbsp" . "<div class='text-xl mr-2 ml-2 font-semibold line-through pt-1'>" . "$" . $price . "</div>" . "</div>" ;
            }
        else{
            echo $price . "$";
        }?>
      </div>
    </div>
    </div>
   </button>
