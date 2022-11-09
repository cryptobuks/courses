<section class="flex justify-center max-w-contentwidth mx-auto ">
    <div class="text-center border-dashed border-2 border-primary rounded-md p-4 sm:p-8 bg-secondary">
        @if($titleRumen)
        <h2 class="text-4xl">{{$titleRumen}}</h2>
        @endif
        @if($subtitleRumen)
        <p>{{$subtitleRumen}}</p>
        @endif
        @if($imageRumen)
        <img class="max-w-full h-auto" src="{{$imageRumen}}">
        @endif
        <div class="text-left" >{!! $textRumen !!}</div>
        @include('partials.button-buy')
        @include('partials.satisfaction-guarantee')
    </div>
    
</section>
