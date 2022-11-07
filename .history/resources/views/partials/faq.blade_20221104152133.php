<?php
if(have_rows('product_faq')):?>
    <div class="max-w-contentwidth flex flex-col w-full content">
        <h2 class="text-4xl">Frequently Asked Questions</h2>
    <?php
    while(have_rows('product_faq')):
        the_row();
        $faq_question = get_sub_field('product_faq_question');
        $faq_answer = get_sub_field('product_faq_anwser'); ?>
        
        <div class="mb-4 border-solid relative border w-full border-borderColor rounded" x-data="{ open: false }">
            <button class="flex text-left p-4 pr-8 w-full font-semibold text-xl" @click="open = ! open"><div :class="open ? 'font-bold' : ''" >
        <?php echo $faq_question ?></div>
        <div class="absolute right-2 top-4" :class="open ? 'rotate-90' : ''" > 
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
<g>
<path d="M8.58984 16.7563L13.1698 12.1428L8.58984 7.52943L9.99984 6.11224L15.9998 12.1428L9.99984 18.1735L8.58984 16.7563Z" fill="black"/>
</g>
<defs>
<clipPath >
<rect width="24.1224" height="24" fill="white" transform="translate(0 24.2041) rotate(-90)"/>
</clipPath>
</defs>
</svg>
        </div></button>
            <div class="pt-0 p-4 pr-7" x-show="open"> <?php echo $faq_answer;?>
        </div>
        </div>
    <?php
    endwhile;?>
    </div>
    <?php
endif;
?>

