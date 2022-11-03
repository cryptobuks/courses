<section class=" w-full m-auto bg-secondary h-auto pt-4">
    @include('partials.progress-bar-second-upsell')
    <div class="font-bold md:text-3xl text-l w-2/4 text-center m-auto mt-10">{{$firstHeadline}}</div>
    <div class="flex">
        <img class="h-30 rounded" src="/wp-content/themes/courses-1/resources/images/marko-juhant-obraz.jpeg"></img>
        <div class="block ml-4 ">
            <div class="text-xl">From: <span class="font-bold text-xl"> Marko Juhant</span>
            </div>
            <div class="text-xl">Subject: <span class="font-bold text-xl"> {{$upsellName}}</span>
            </div>
            <div class="text-xl">To: <span class="font-bold text-xl"> <?php
            $customer_id = get_current_user_id();
            echo "<b>" . get_user_meta($customer_id, 'first_name', true) ."</b>";
            ?></span>
            </div>
        </div>
    </div>
</section>