<section class=" mx-auto flex justify-center mt-10 max-w-contentwidth mb-10">
    <div class=" border-dashed border-2 border-green-600 rounded p-4 sm:p-8 bg-green-100">
        <div class="mb-10 font-bold text-2xl text-black">{{$greenBoxTitle}}</div>
        <div>   
            <div class="bg-white w-full p-4 mb-10 grid text-center font-semibold">Price increases in:
                @include('partials.countdown-upsell')
            </div>
        </div>
        
        <div class="text-l mb-10">
            <?php
            $p = get_field('selected_product');
            $product = new WC_Product($p->ID); 
            $price_sale = $product->get_price();
            $price_regular = $product->get_regular_price();
            $price_total=($price_regular - $price_sale) / $price_regular * 100;
            $title = $product->get_title();
            $format_number1 = number_format($price_total, 0);
            $price  = $product->get_price();
            echo "Today " . "<span class='font-bold'>" . date("d.m.Y"). "</span>" . "  we are offering you a " . "<span class='font-bold'>" . $format_number1 . "% " . "</span>" . "discount. Take advantage of this offer before time runs out.";
            ?>
        </div>
        <div class="mb-4 inline sm:flex">
            <div class="text-3xl font-bold sm:mr-4">
            <?php
                echo  "<span class='text-black'>Your price: </span>" . "<span class='text-green-600'>" . " " . $price . " USD" . "</span>";
            ?>
            </div>
        <div class="w-0.5 bg-black hidden sm:block">
        </div>
            <div class="bg-red-600 text-white p-2 w-1/2 sm:!w-1/5 flex rounded-sm sm:ml-4 font-bold justify-center mt-4 mb-4 sm:mt-0 sm:mb-0">
            <?php
                echo $format_number1 . "</span>" . "% discount";
            ?>
            </div>
        </div>
        <div class="text-black text-xl mb-4">
            <?php
                echo  " Regular price: " . "<span class='text-red-600 font-bold line-through'>" . $price_regular . " USD" . "</span>";
            ?>
        </div>
        <a href="?wfocu-accept-link=yes" class="no-underline">
            <button class="bg-green-600 hover:bg-green-700 flex w-full mb-4 drop-shadow-md animate-rocking">
                <div class="text-xl text-white p-6 font-bold w-full">
                    <?php
                    echo "Add the " . $title . " to the order";
                    ?>
                </div>
            </button>
        </a>
        <div class="w-full text-center">
             <a href="?wfocu-reject-link=yes" class="mt-6  !underline text-black">{{$greenBoxNoThanks}}  
             </a>
        </div>
        

    </div>
    
</section>
