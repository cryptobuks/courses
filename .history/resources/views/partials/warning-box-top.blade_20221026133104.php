<div class="border-red-500 border-2 w-full p-8 mt-10 mb-10  max-w-contentwidth m-auto text-xl">
<?php
$customer_id = get_current_user_id();
echo "<span class='font-bold text-red-500 text-xl'>". "WARNING!  " . "</span>" . "<b>" . get_user_meta($customer_id, 'first_name', true) ."</b>". ", your order isn’t complete yet. To avoid any technical difficulties, do not close or refresh this page. Please carefully read the personal message on this page until the end to finish your checkout experience.";
?>
</div>