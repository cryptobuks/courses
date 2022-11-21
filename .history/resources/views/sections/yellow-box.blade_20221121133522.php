@if($titleRumen)
<section class="flex justify-center max-w-contentwidth mx-auto ">
    <div class="text-center border-dashed border-2 border-primary rounded-md p-4 sm:p-8 bg-secondary w-full">
        <h2 class="text-3xl">{{$titleRumen}}</h2>
        @if($subtitleRumen)
        <p>{{$subtitleRumen}}</p>
        @endif
        @if($imageRumen)
        <img class="max-w-full h-auto" src="{{$imageRumen}}">
        @endif
        @if($textRumen)
        <div class="text-left" >{!! $textRumen !!}</div>
        @endif
        @if(get_post_type() === 'wffn_landing')
        @include('partials.button-buy')
        @endif
        @include('partials.satisfaction-guarantee')
    </div>
    
</section>
@endif
