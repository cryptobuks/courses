
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


<div class="">
  <button type="button" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
    Vertically centered modal
  </button>
  <button type="button" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" data-bs-toggle="modal" data-bs-target="#exampleModalCenteredScrollable">
    Vertically centered scrollable modal
  </button>
</div>

<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog">
  <div class="modal-dialog modal-dialog-centered relative w-auto pointer-events-none">
    <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
      <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
        <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalScrollableLabel">
          Modal title
        </h5>
        <button type="button"
          class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
          data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body relative p-4">
        <p>This is a vertically centered modal.</p>
      </div>
      <div
        class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
        <button type="button"
          class="inline-block px-6 py-2.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out"
          data-bs-dismiss="modal">
          Close
        </button>
        <button type="button"
          class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out ml-1">
          Save changes
        </button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="exampleModalCenteredScrollable" tabindex="-1" aria-labelledby="exampleModalCenteredScrollable" aria-modal="true" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable relative w-auto pointer-events-none">
    <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
      <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
        <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalCenteredScrollableLabel">
          Modal title
        </h5>
        <button type="button"
          class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
          data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body relative p-4">
        <p>This is some placeholder content to show a vertically centered modal. We've added some extra copy here to show how vertically centering the modal works when combined with scrollable modals. We also use some repeated line breaks to quickly extend the height of the content, thereby triggering the scrolling. When content becomes longer than the predefined max-height of modal, content will be cropped and scrollable within the modal.</p>
    <br><br><br><br><br><br><br><br><br><br>
    <p>Just like that.</p>
      </div>
      <div
        class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
        <button type="button"
          class="inline-block px-6 py-2.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out"
          data-bs-dismiss="modal">
          Close
        </button>
        <button type="button"
          class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out ml-1">
          Save changes
        </button>
      </div>
    </div>
  </div>
</div>