<div class="flex flex-wrap md:mt-16">
        @if($expertMainPhoto)
        <div class="md:!w-1/2 w-full md:!mb-0 mb-14">
            <img class="w-full" src="{{$expertMainPhoto}}"></img>
            @include('partials.expert-info')
        </div>
        @endif
        @if($productTitle)
        <div class="md:!w-1/2 w-full">
            <div id="product-info" class="border-4 border-primary !rounded-lg border-t-40 relative">
                <div class="bg-primary p-2 relative">
                   <!-- @include('partials.black-friday')-->
                   @include('partials.countdown-sales')
                    <div class="text-white text-2xl text-center font-bold">{{$productTitle}}</div>
                </div>
                    <div class=" block !rounded-lg p-2 md:!pl-2.5 md:!pr-2.5">
                        <div class="fill-primary flex h-4 items-center justify-center">
                            @for ($i = 0; $i <= 4; $i++)
                                <div class="mr-0.5 h-full !fill-yellow-400">@include('icons.rating-star')</div>
                            @endfor
                            <div class="font-bold text-xs">4.92 / 5 based on 241 reviews</div>
                        </div>
                            <div class="flex justify-center mb-4 whitespace-nowrap">
                            <?php
                                $post_object = get_field('selected_product');
                                $price = get_post_meta( $post_object -> ID, '_regular_price', true);
                                $price_sales = get_post_meta( $post_object -> ID, '_sale_price', true);
                                if($price_sales > 0){
                                    echo "<div class='text-red-500 text-xl mr-2 ml-2 font-bold uppercase'> only " . "$"  . $price_sales ."</div>" ."<div class='text-red-500 text-xl font-bold uppercase'> today" . "&nbsp" . "</div>" . "<div class='text-xs mr-2 mt-1 font-medium line-through flex items-center'>" .  "LIST PRICE" . " $" .  $price . "</div>";
                                }
                                else{
                                    echo $price . "$";
                                }
                                ?>
                            </div>
                        <div id="product-includes" class="mt-4 !text-sm p-2"> {!! $productIncludes !!}</div>
                        <div id="form" class="flex-auto relative mt-4">
                            <?php $form_shortcode = $formShortcode; echo do_shortcode($form_shortcode)?>
                        </div>    
                    </div>  
                    <img class="h-32 hidden md:flex md:absolute md:-right-16 md:top-8" src="/wp-content/themes/courses-1/resources/images/parenting-award.png"></img>
            </div>
            <div class="mt-8 grid justify-items-center">
                <div class="flex">
                    <img class="h-4 mr-3" src="/wp-content/themes/courses-1/resources/images/lock.png"></img>
                    <div class="text-sm mb-2">100% Secure 256-bit Encryption.</div>
                </div>
                <img class="h-4" src="/wp-content/themes/courses-1/resources/images/payment-methods.jpg"></img>
            </div>

        </div>

        @endif
    </div>