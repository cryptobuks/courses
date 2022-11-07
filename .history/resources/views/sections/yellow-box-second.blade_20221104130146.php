<section class="max-w-contentwidth  mx-auto flex justify-center ">
    <div class=" text-center border-dashed border-2 border-primary rounded-md md:p-8 bg-secondary p-4">
        <h2 class="text-4xl">{{$whatYouGetTitle}}</h2>
        <p>{{$whatYouGetSubtitle}}</p>
        <img class="max-w-full h-auto" src="{{$whatYouGetImage}}">

        <div class="text-left" >{!! $whatYouGetText !!}</div>
        @include('partials.button-buy')
        @include('partials.satisfaction-guarantee')
    </div>
    
</section>
