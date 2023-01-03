<?php
        $post_object = get_field('selected_product');
        $price = get_post_meta( $post_object -> ID, '_regular_price', true);
        $price_sales = get_post_meta( $post_object -> ID, '_sale_price', true);
        $price_total=($price - $price_sales) / $price * 100;
        $format_number1 = number_format($price_total, 0);?>

<div class="grid justify-center">
  <?php 
  if($price_sales > 0){

    echo "<div class='flex justify-center'>" . "<div class='font-semibold text-3xl text-black'>". "ONLY" . "</div>". "<div class='text-3xl mr-2 ml-2 font-semibold !no-underline uppercase text-greenColor items-center flex'>" . "<div class='text-sm'>" . "$" . "</div>" . $price_sales  . "</div>" . "</div>" ;
    echo "<div class='flex text-xl'>" . "<span class='mt-1'>Usually</span>" . "<div class='mr-2 ml-2 line-through pt-1' >" . "$" . $price . "</div>" . "<span class='font-bold text-redColor mt-1'>" . $format_number1 . "% OFF" ."</span>" . "</div>"; 
  }
  else{
      echo $price . "$";
  }?>
</div>
<button id="moving-buy-button" class="relative block  w-1/2 text-center cursor-pointer animate-rocking mt-4" onclick="toggleModal('modal-id')">
      <!-- black background shadow -->
      <div class="relative  bottom-6  bg-greenColor border-1 border-black rounded-full">
      <!-- text -->
      <div class=" drop-shadow-lg relative text-xl font-semibold leading-none tracking-wider p-4 md:py-4 md:px-20 bg-greenColor border-b-4
border-black rounded-full transform  hover:transition hover:duration-200 hover:ease-in-out hover:border-b-0 hover:bg-hover">
      <?php
        $post_object = get_field('selected_product');
        $price = get_post_meta( $post_object -> ID, '_regular_price', true);
        $price_sales = get_post_meta( $post_object -> ID, '_sale_price', true);?>
        <div class="flex flex-col md:flex-row items-center">
            <div class="flex flex-row">
               <div class='md:text-3xl text-xl mr-2 ml-2 font-semibold !no-underline uppercase text-white'> Join the challenge </div>
                <img class="h-6 mt-1" src="/wp-content/themes/courses-1/resources/images/arrow-right.png"></img>
            </div>
        </div>
      </div>
    </div>
</button>

