<?php
if(have_rows('product_bonus')):?>
    <div class="max-w-contentwidth flex flex-col w-full content ">
    <?php
    while(have_rows('product_bonus')):
        the_row();
        $bonus_image = get_sub_field('product_bonus_image') ['url'];
        $bonus_title = get_sub_field('product_bonus_title'); 
        $bonus_content = get_sub_field('product_bonus_content'); 
        $bonus_value = get_sub_field('product_bonus_value'); ?>
        <div class="w-full flex mb-4">
            <img src="{{$bonus_image}}" class="h-32 mr-4" ></img>
            <div class="block w-full">
                <div class="bg-black px-4 py-1 text-white text-left font-semibold w-fit rounded-sm mb-2 text-sm md:text-base">
                🎁 {{$bonus_title}}
                </div>
                <div class="text-left w-11/12">
                    {{$bonus_content}}
                </div>
                <div class="uppercase font-semibold text-black flex justify-end text-xl w-full text-right">
                Value: <span class="line-through">{{$bonus_value}}</span>
            </div>
            </div>
            
        </div>
    <?php
    endwhile;?>
    </div>
    <?php
endif;
?>