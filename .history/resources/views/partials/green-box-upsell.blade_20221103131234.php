<section class="container mx-auto p-4 flex justify-center ">
    <div class="width-780 border-dashed border-2 border-green-600 rounded p-8 bg-green-100">
        <div class="mb-10 font-bold text-2xl text-black">{{$greenBoxTitle}}</div>
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
        <div class="mb-4 flex">
            <a href="">
                <div class="text-3xl font-bold mr-4">
                <?php
                    echo  "<span class='text-black'>Your price: </div>" . "<span class='text-green-600'>" . " " . $price . " USD" . "</span>";
                ?>
                </div>
            </a>
            <div class="w-0.5 bg-black">

            </div>
            <div class="bg-red-700 text-white p-2 w-1/5 flex rounded-sm ml-4 font-bold justify-center">
            <?php
                echo $format_number1 . "</span>" . "% discount";
            ?>
            </div>
        </div>
        <div class="text-black text-xl mb-4">
            <?php
                echo  " Regular price: " . "<span class='text-red-700 font-bold line-through'>" . $price_regular . " USD" . "</span>";
            ?>
        </div>
        <button class="bg-green-600 flex w-full mb-4 drop-shadow-md animate-rocking">
            <div class="text-xl text-white p-6 font-bold w-full">
                <?php
                echo "Add the " . $title . " to the order";
                ?>
            </div>
        </button>
        <div class="w-full text-center">
             <a href="http://courses.test?wfocu-reject-link=yes" class="mt-6  underline text-black">{{$greenBoxNoThanks}}  
             </a>
        </div>
        

    </div>
    
</section>
