<section class="bg-lightOrange md:py-20 py-10 rounded-bl-[15%] rounded-br-[15%]">
    <div class="flex flex-wrap mx-auto container">
        <div class="md:!w-1/2 w-full md:!mb-0 mb-10">
        <img class="w-full" src="{{$mainImageHome}}"></img>

        </div>
        <div class="md:!w-1/2 w-full md:!mb-0 mb-10 items-center inline-flex">
            <div class="w-full sm:pl-16">
                <h2 class="!mb-0 md:!text-2xl !text-base font-semibold text-darkOrange">{{$firstTextHome}}</h2>
                <h1 id="hp-heading" class="md:!text-[64px] text-5xl font-semibold text-primary mt-3">{{$secondTextHome}}</h1>
                <div class="text-black font-normal md:text-xl text-base mt-3 mb-4">{{$thirdTextHome}}</div>
                <div>
                <?php $form_shortcode = $formShortcodeHome; echo do_shortcode($form_shortcode)?>
                </div>
            </div>
        </div>
    </div>
</section>