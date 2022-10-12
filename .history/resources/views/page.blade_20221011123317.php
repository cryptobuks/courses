@extends('layouts.app')

@section('content')
    @include('sections.top-bar')

    @includeFirst(['partials.content-page', 'partials.content'])
@endsection
