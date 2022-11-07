<section class="container mx-auto p-4 flex justify-center ">
    <div class="width-780 text-center border-dashed border-2 border-primary rounded-md p-4 md:p-8 bg-secondary">
        <h2>{{$yellowBoxTitleUpsell}}</h2>
        <p>{{$yellowBoxSubtitleUpsell}}</p>
        <img class="w-full lazyload" src="{{$yellowBoxImageUpsell}}"></img>
        <div class="text-left" >{!! $yellowBoxContentUpsell !!}</div>
    </div>
    @include('partials.button-buy')
@include('partials.satisfaction-guarantee')
</section>

