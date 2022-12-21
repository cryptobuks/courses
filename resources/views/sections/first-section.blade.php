
<section class="">
    <div class=" text-center">
        @include('partials.top-heading')
        <h1 class="justify-items-center !font-extrabold md:text-center text-left text-4xl md:!text-5xl mb-4 text-black "></h1>
        <div>{!!$mainHeading!!}</div>
        <h2 class=" justify-items-center md:!font-semibold !font-normal text-black md:text-center text-left md:mb-14 mb-4 !text-xl md:!text-2xl ">{!!$subheading!!}</h2>
    </div>
   @include('partials.program-section-new')
   @include('partials.as-seen-on')

</section>


