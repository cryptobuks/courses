
<section class="">
    <div>
        <h3 class="justify-items-center !font-extrabold md:text-center text-left md:p-4 text-6xl md:!text-6xl mb-4 text-black mt-10">{{$mainHeading}}</h3>
        <h1 class=" justify-items-center !font-normal text-black md:text-center text-left mb-4 !text-xl md:!text-2xl">{{$subheading}}</h1>
        <h3 class=" justify-items-center font-black text-center p-2">{{$thirdTitle}}</h3>
    </div>
    <div class="flex flex-wrap">
        @if($expertMainPhoto)
        <div class="md:!w-1/2 w-full md:!mb-0 mb-10">
            <img class="w-full" src="{{$expertMainPhoto}}">
            </img>
            @include('partials.expert-info')
        </div>
        @endif
        @if($productTitle)
        <div id="product-info" class="border-4 border-primary rounded border-t-40 md:!w-1/2 w-full">
            <div class="bg-primary p-4">
                <div class="text-white text-2xl text-center font-bold">{{$productTitle}}</div>
            </div>
                <div class=" block rounded p-4 md:!pl-10 md:!pr-10">
                    <div class="flex justify-center mb-4">
                    <?php
                $post_object = get_field('selected_product');
                $price = get_post_meta( $post_object -> ID, '_regular_price', true);
                $price_sales = get_post_meta( $post_object -> ID, '_sale_price', true);
                if($price_sales > 0){
                    echo "<div class='text-red-500 text-2xl mr-2 ml-2 font-bold uppercase'> only " . "$"  . $price_sales ."</div>" ."<div class='text-red-500 text-2xl mr-2 font-bold uppercase'> today" . "&nbsp" . "</div>" . "<div class='text-xl mr-2 ml-2 mt-1 font-medium line-through'>" . "$" . $price . "</div>";
                }
                else{
                    echo $price . "$";
                }
                ?>
                </div>
                    <div class="mt-4"> {!! $productIncludes !!}</div>
                    <div class="flex-auto relative mt-4 -mb-20">
                    <?php $form_shortcode = $formShortcode; echo do_shortcode($form_shortcode)?>
                    </div>
            </div>
        </div>
        @endif
    </div>
</section>


<button class="bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModal('modal-id')">
  Open regular modal
</button>
<div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="modal-id">
  <div class="relative w-auto my-6 mx-auto max-w-3xl">
    <!--content-->
    <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
      <!--header-->
      <div class="flex items-start justify-between p-5 border-b border-solid border-slate-200 rounded-t">
        <h3 class="text-3xl font-semibold">
          Modal Title
        </h3>
        <button class="p-1 ml-auto bg-transparent border-0 text-black opacity-5 float-right text-3xl leading-none font-semibold outline-none focus:outline-none" onclick="toggleModal('modal-id')">
          <span class="bg-transparent text-black opacity-5 h-6 w-6 text-2xl block outline-none focus:outline-none">
            ×
          </span>
        </button>
      </div>
      <!--body-->
      <div class="relative p-6 flex-auto">
        <p class="my-4 text-slate-500 text-lg leading-relaxed">
          I always felt like I could do anything. That’s the main
          thing people are controlled by! Thoughts- their perception
          of themselves! They're slowed down by their perception of
          themselves. If you're taught you can’t do anything, you
          won’t do anything. I was taught I could do everything.
        </p>
      </div>
      <!--footer-->
      <div class="flex items-center justify-end p-6 border-t border-solid border-slate-200 rounded-b">
        <button class="text-red-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModal('modal-id')">
          Close
        </button>
        <button class="bg-emerald-500 text-white active:bg-emerald-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModal('modal-id')">
          Save Changes
        </button>
      </div>
    </div>
  </div>
</div>
<div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-id-backdrop"></div>
<script type="text/javascript">
  function toggleModal(modalID){
    document.getElementById(modalID).classList.toggle("hidden");
    document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
    document.getElementById(modalID).classList.toggle("flex");
    document.getElementById(modalID + "-backdrop").classList.toggle("flex");
  }
</script>