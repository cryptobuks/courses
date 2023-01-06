<div class="flex w-full shadow rounded-xl p-6 sticky md:mt-0 items-start flex-col" x-ref="quicklinks" :style="'top:'.concat(offset).concat('px')" @scroll.window="if(bottom > -20 && top < 61 && prevOffset < window.pageYOffset || prevOffset > window.pageYOffset && bottomDiv > 0 && top < 60 ){offset += prevOffset - window.pageYOffset };
if(window.pageYOffset < initialPosition){offset = 60};
if(offset > 90){offset = 90};

prevOffset = window.pageYOffset; 

$inView = Array.from(document.querySelectorAll('.in-view')); 
$buttons = Array.from(document.querySelectorAll('.quick-button')) ;
$buttons.forEach(element => element.classList.remove('font-semibold','text-black')); $inView[$inView.length - 1].classList.add('font-semibold','text-black')" :class="headings[0] ? '':'!hidden'">
    <div class=" font-semibold text-2xl mb-12">
       Quick links
    </div>
    <template x-for="heading in headings">
        <template x-if="heading.textContent != 'Leave a Reply Cancel reply'">
            <button x-data="{toph: heading.getBoundingClientRect().top }" @scroll.window="toph = heading.getBoundingClientRect().top" 
            @click="heading.scrollIntoView({behavior: 'smooth'})" :class="toph < 80 ? 'in-view' : ''" 
            class="text-left quick-button text-cards hover:font-semibold hover:text-primary mb-3" x-text="heading.textContent"></button>
        </template>
    </template>
</div>