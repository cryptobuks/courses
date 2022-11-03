<section class="container mx-auto p-4 flex justify-center ">
    <div class="width-780 text-center border-dashed border-2 border-primary rounded p-4 bg-secondary">
        <h2>{{$titleYellowBox}}</h2>
        <p>{{$subtitleYellowBox}}</p>
        <img class="max-w-full h-auto" src="{{$imageYellowBox}}" alt="image description">

        <div class="text-left" >{!! $textYellowBox !!}</div>
    </div>
    @include('partials.button-buy')
    @include('partials.satisfaction-guarantee')
</section>
