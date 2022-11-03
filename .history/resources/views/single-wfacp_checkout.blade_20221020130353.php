@extends('layouts.app')
@section('content')
@include('sections.top-bar')
<section class="container mx-auto content max-w-contentwidth">
    <div class="flex flex-row ">
        <div class="flex-auto w-64 relative">
            <div class="">{{$productNameCheckout}}</div>
            <img src="{{$productImageCheckout}}"></img>
            <?php if(have_rows('highlights')): ?>
<div id="highlights" class="pb-12">
<?php
$highlights="";
        while(have_rows('highlights')): the_row();
            $single_highlight=get_sub_field('add_highlight');
            echo "<div class='flex mb-5 text-highlight max-w-contentwidth fill-primary'>" ?> <div class="h-5 mt-1.5 mr-2">@include('icons.highlight-star')</div> <?php echo $single_highlight . "</div>";
        endwhile;
?>
</div>
<?php endif; ?>
        </div>
        <div class="flex-auto w-64 relative">02</div>
    </div>
</section>
@php(the_content())


@endsection
