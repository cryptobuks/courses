<div class="text-xs text-gray-500" x-data x-init="const end = new Date().getTime() + 480000; setInterval(() => {
  const remaining = Math.ceil((end - new Date().getTime()) / 1000);
  $el.querySelector('#minutes').innerHTML = Math.floor(remaining / 60);
  $el.querySelector('#seconds').innerHTML = remaining % 60;
  if (remaining === 0) {
    clearInterval($el.interval);
  }
}, 1000)">
	<div class="countdown-number-black">
		<div  id="minutes"></div>
		<div class="text-[8px]">minutes</div>
	</div>
	<div class="countdown-number-black">
		<div  id="seconds"></div>
		<div class="text-[8px]">seconds</div>
	</div>
</div>
