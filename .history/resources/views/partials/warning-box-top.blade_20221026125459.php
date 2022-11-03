<div class="border-red-500 border-2 w-full p-10 mt-10 width-780 max-w-contentwidth m-auto">
<?php
$customer_id = get_current_user_id();
echo "<span class='text-red'>". "WARNING!  " . "</span>" . "<b>" . get_user_meta($customer_id, 'first_name', true) ."</b>". ", your order isn’t complete yet. To avoid any technical difficulties, do not close or refresh this page. Please carefully read the personal message on this page until the end to finish your checkout experience.";
?>
</div>