
<?php
if(have_rows('product_faq')):?>
    <div class="max-w-contentwidth flex flex-col w-full content">
        <h2>Frequently Asked Questions</h2>
    <?php
    while(have_rows('product_faq')):
        the_row();
        $faq_question = get_sub_field('product_faq_question');
        $faq_answer = get_sub_field('product_faq_anwser'); ?>
        <div class="mb-4 border-solid relative border w-full border-borderColor rounded" x-data="{ open: false }">
            <button class="flex text-left p-4 pr-8 w-full" @click="open = ! open"><div :class="open ? 'font-semibold' : ''" >
        <?php echo $faq_question ?></div>
            <div class="absolute right-2 top-4" :class="open ? 'rotate-90' : ''" ><</div></button>
            <div class="pt-0 p-4 pr-7" x-show="open"> <?php echo $faq_answer;?>
        </div>
        </div>
    <?php
    endwhile;?>
    </div>
    <?php
endif;
?>