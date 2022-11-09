
<div id="checkouts" class="countdown">
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
	
 
  document.getElementById("checkout").innerHTML = "<div class='div-around-timer1'>" + minutes + "<span class='timer1'> Minutes </span>" + "</div>" + "\u00A0" +"<div class='div-around-timer1'>"+ seconds + "<span class='timer1'> Seconds </span>" + "</div>";
	
  // If the count down is over, write some text 
  if (distance < 0) {
    jQuery("#countdown").hide();
	  clearInterval(x);
  }
}, 1000);
</script>


<div id="checkouts" class="countdown">
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
      function getTimeRemaining(endtime) {
    var t = Date.parse(endtime) - Date.parse(new Date());
    var seconds = Math.floor((t / 1000) % 60);
    var minutes = Math.floor((t / 1000 / 60) % 60);
    var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
    var days = Math.floor(t / (1000 * 60 * 60 * 24));
    return {
      total: t,
      days: days,
      hours: hours,
      minutes: minutes,
      seconds: seconds
    };
  }

  function initializeClock(id, endtime) {
    var clock = document.getElementById(id);
    var daysSpan = clock.querySelector(".days");
    var hoursSpan = clock.querySelector(".hours");
    var minutesSpan = clock.querySelector(".minutes");
    var secondsSpan = clock.querySelector(".seconds");

    function updateClock() {
      var t = getTimeRemaining(endtime);

      if (t.total <= 0) {
        clearInterval(timeinterval);

        var newTime = Date.parse(endtime);
        var nowTime = Date.parse(new Date());

        while (newTime <= nowTime) {
          newTime = newTime + 1 * 24 * 60 * 60 * 1000; // add 24hours
        }

        var deadline = new Date(newTime);
        initializeClock('checkouts', deadline);
      } else {
        daysSpan.innerHTML = t.days;
        hoursSpan.innerHTML = ("0" + t.hours).slice(-2);
        minutesSpan.innerHTML = ("0" + t.minutes).slice(-2);
        secondsSpan.innerHTML = ("0" + t.seconds).slice(-2);
      }
    }

    updateClock();
    var timeinterval = setInterval(updateClock, 1000);
  }

  var deadline = "December 7 2019 00:00:00 GMT-7";
  initializeClock("checkouts", deadline);
</script>