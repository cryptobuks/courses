@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
  <section class="pb-section"> SEKCIJA</section>
  @endwhile
@endsection
