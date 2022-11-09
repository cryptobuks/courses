<section class="flex justify-center max-w-contentwidth mx-auto ">
    <div class="text-center border-dashed border-2 border-primary rounded-md p-4 sm:p-8 bg-secondary">
        
        <h2 class="text-4xl">{{$titleRumen}}</h2>
        <p>{{$subtitleRumen}}</p>
        <img class="max-w-full h-auto" src="{{$imageRumen}}">

        <div class="text-left" >{!! $textRumen !!}</div>
        @include('partials.button-buy')
        @include('partials.satisfaction-guarantee')
    </div>
    
</section>
