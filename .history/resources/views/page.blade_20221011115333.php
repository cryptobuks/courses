@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('sections.top-bar')

    @includeFirst(['partials.content-page', 'partials.content'])
  @endwhile
@endsection
