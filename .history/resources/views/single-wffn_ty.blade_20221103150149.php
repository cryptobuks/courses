@extends('layouts.app')
@section('content')
@include('sections.top-bar-upsell')
<section class="max-w-pageWidth m-auto p-4">
<h1 class="mt-20 mb-10 text-4xl font-bold">{{$firstHeadlineThankYou}}</h1>
<div class="mb-10">
{!!$firstContentThankYou!!}
</div>
<?php
    $link =  get_field("button_link_thank_you");

?>
 <a href="<?php echo $buttonLinkThankYou;?>" class="bg-primary hover:bg-hover text-white font-bold p-4 rounded no-underline">{{$buttonTextThankYou}}</a>
 <p class="mt-10">
{{$secondContentThankYou}}
</p>
</section>


@endsection