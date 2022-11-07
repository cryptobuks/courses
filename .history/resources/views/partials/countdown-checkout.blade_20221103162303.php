
<div id="countdown-checkout" class="countdown ml-4">
  <div class="countdown-number">
    <span class="days countdown-time"></span>
    <span class="countdown-text">Days</span>
  </div>
  <div class="countdown-number">
    <span class="hours countdown-time"></span>
    <span class="countdown-text">Hours</span>
  </div>
  <div class="countdown-number">
    <span class="minutes countdown-time"></span>
    <span class="countdown-text">Minutes</span>
  </div>
  <div class="countdown-number">
    <span class="seconds countdown-time"></span>
    <span class="countdown-text">Seconds</span>
  </div>
</div>
<script>
     var countDownDate = new Date().getTime() + 10 * 60 * 1000;

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
	
 
  document.getElementById("countdown-checkout").innerHTML = "<div class='div-around-timer1'>" + minutes + "<span class='timer1'> Minutes </span>" + "</div>" + "\u00A0" +"<div class='div-around-timer1'>"+ seconds + "<span class='timer1'> Seconds </span>" + "</div>";
	
  // If the count down is over, write some text 
  if (distance < 0) {
    jQuery("#checkout-timer").hide();
	  clearInterval(x);
  }
}, 1000);
</script>