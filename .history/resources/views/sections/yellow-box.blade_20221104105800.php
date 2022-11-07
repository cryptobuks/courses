<section class="container mx-auto p-4 flex justify-center ">
    <div class="width-780 text-center border-dashed border-2 border-primary rounded-md p-4 md:p-8 bg-secondary">
        @if($titleYellowBox)
        <h2 class="text-4xl">{{$titleYellowBox}}</h2>
        @endif
        <p>{{$subtitleYellowBox}}</p>
        <img class="max-w-full h-auto" src="{{$imageYellowBox}}" alt="image description">

        <div class="text-left" >{!! $textYellowBox !!}</div>
        @include('partials.button-buy')
        @include('partials.satisfaction-guarantee')
    </div>
    
</section>
