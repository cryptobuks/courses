<section class="container mx-auto p-4 flex justify-center ">
    <div class="width-780 border-dashed border-2 border-green-600 rounded p-8 bg-green-100">
        <div class="mb-8">{{$greenBoxTitle}}</div>
        <?php
        $p = get_field('selected_product');
        $product = new WC_Product($p->ID); 
        $price_sale = $product->get_price();
        $price_regular = $product->get_regular_price();
        $price_total=($price_regular - $price_sale) / $price_regular * 100;
        $format_number1 = number_format($price_total, 0);
        echo "Today " . "<span class='font-bold'>" . date("d.m.Y"). "</span>" . "  we are offering you a " . "<span class='font-bold'>" . $format_number1 . "% " . "</span>" . "discount. Take advantage of this offer before time runs out.";
        ?>
        <div class="bg-red-700">
        <?php
            $p = get_field('selected_product');
            $product = new WC_Product($p->ID); 
            $price_sale = $product->get_price();
            $price_regular = $product->get_regular_price();
            $price_total=($price_regular - $price_sale) / $price_regular * 100;
            $format_number1 = number_format($price_total, 0);
            echo $format_number1 . "</span>" . "% discount";
            ?>
        </div>
        <div class="mt-6 underline m-auto">{{$greenBoxNoThanks}}</div>

    </div>
    
</section>
