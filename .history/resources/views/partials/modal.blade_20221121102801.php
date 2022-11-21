<div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="modal-id">
  <div class="relative w-auto my-6 mx-auto max-w-contentwidth">
    <!--content-->
    <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none ">
      <!--header-->
      <div class="grid text-center  justify-between  rounded-t relative">
        <button class="text-white bg-primary font-bold uppercase p-2 rounded-full w-10 text-sm absolute right-4 top-2 z-50" type="button" onclick="toggleModal('modal-id')">
          X
        </button>
        <div class="meter-popup animate-popup w-full !h-0.5 box-border">
            <span></span>
        </div>
        <div class="md:pl-10 md:pr-10 p-4">
            <div class="text-sm mt-2 mb-4"> Step 1 of 2 </div>
            <h3 class="md:text-4xl text-lg font-semibold mb-4 md:w-80">
            Where Should I Send the {{$productTitle}} ?
            </h3>
            <div class="relative flex-auto">
            <?php $form_shortcode = $formShortcode; echo do_shortcode($form_shortcode)?>
            </div>
        </div>
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
