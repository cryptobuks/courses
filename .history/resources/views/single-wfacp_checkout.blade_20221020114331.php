@extends('layouts.app')
@section('content')
@include('sections.top-bar')
<div class="flex flex-row ...">
  <div>01</div>
  <div>02</div>
</div>
@php(the_content())


@endsection
