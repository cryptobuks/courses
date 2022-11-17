<div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="modal-id">
  <div class="relative w-auto my-6 mx-auto max-w-3xl">
    <!--content-->
    <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
      <!--header-->
      <div class="grid text-center  justify-between p-5  rounded-t relative">
        <button class="text-red-500 bg-primary font-bold uppercase px-6 py-2 mr-1 mb-1 ease-linear transition-all duration-150 absolute" type="button" onclick="toggleModal('modal-id')">
          X
        </button>
        <div class="text-sm"> Step 1 of 2 </div>
        <h3 class="text-3xl font-semibold">
        Where Should I Send the {{$productTitle}} ?
        </h3>
      </div>
      <!--body-->
      <div class="relative p-6 flex-auto">
      <?php $form_shortcode = $formShortcode; echo do_shortcode($form_shortcode)?>
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