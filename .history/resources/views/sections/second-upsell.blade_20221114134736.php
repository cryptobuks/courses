<section class=" w-full m-auto bg-secondary h-auto pt-4">
    <div class="container">
        @include('partials.progress-bar-second-upsell')
        <div class="max-w-contentwidth m-auto font-bold md:text-4xl text-xl w-full text-center mt-10">{{$firstHeadline}}</div>
        <div class="max-w-contentwidth m-auto flex mt-12">
            <img class="md:h-36 h-20 rounded-full" src="/wp-content/themes/courses-1/resources/images/marko-juhant-obraz.jpeg"></img>
            <div class="flex flex-col justify-center ml-4 align-middle">
                <div class="md:text-xl text-l">From: <span class="font-bold md:text-xl text-l"> Marko Juhant</span>
                </div>
                <div class="md:text-xl text-l">Subject: <span class="font-bold md:text-xl text-l"> {{$upsellName}}</span>
                </div>
                <div class="md:text-xl text-l">To: <span class="font-bold md:text-xl text-l"> <?php
                $customer_id = get_current_user_id();
                echo get_user_meta($customer_id, 'first_name', true);
                ?></span>
                </div>
            </div>
        </div>
    </div>
    
</section>