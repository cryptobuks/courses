<section class="flex justify-centermax-w-contentwidth">
    <div class="text-center border-dashed border-2 border-primary rounded-md p-8 sm:p-8 bg-secondary">
        <h2 class="text-4xl">{{$titleYellowBox}}</h2>
        <p>{{$subtitleYellowBox}}</p>
        <img class="max-w-full h-auto" src="{{$imageYellowBox}}" alt="image description">

        <div class="text-left" >{!! $textYellowBox !!}</div>
        @include('partials.button-buy')
        @include('partials.satisfaction-guarantee')
    </div>
    
</section>