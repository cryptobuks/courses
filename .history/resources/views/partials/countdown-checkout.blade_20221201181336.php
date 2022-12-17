<div id="checkouts" class="ml-4 countdown">
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

var time_in_minutes = 10;
var current_time = Date.parse(new Date());
var deadline = new Date(current_time + time_in_minutes*60*1000);


function time_remaining(endtime){
	var t = Date.parse(endtime) - Date.parse(new Date());
	var seconds = Math.floor( (t/1000) % 60 );
	var minutes = Math.floor( (t/1000/60) % 60 );
	var hours = Math.floor( (t/(1000*60*60)) % 24 );
	var days = Math.floor( t/(1000*60*60*24) );
	return {'total':t, 'days':days, 'hours':hours, 'minutes':minutes, 'seconds':seconds};
}
function run_clock(id,endtime){
	var clock = document.getElementById(id);
	function update_clock(){
		var t = time_remaining(endtime);
		clock.innerHTML = '  <span class="minutes countdown-time'+t.minutes+ '</span>'+ 'seconds: '+t.seconds;
		if(t.total<=0){ clearInterval(timeinterval); }
	}
	update_clock(); // run function once at first to avoid delay
	var timeinterval = setInterval(update_clock,1000);
}
run_clock('checkouts',deadline);
      function getTimeRemaining(endtime) {
    var t = Date.parse(endtime) - Date.parse(new Date());
    var seconds = Math.floor((t / 1000) % 60);
    var minutes = Math.floor((t / 1000 / 60) % 60);
    return {
      total: t,
      minutes: minutes,
      seconds: seconds
    };
  }

  function initializeClock(id, endtime) {
    var clock = document.getElementById(id);
    var minutesSpan = clock.querySelector(".minutes");
    var secondsSpan = clock.querySelector(".seconds");

    function updateClock() {
      var t = getTimeRemaining(endtime);

      if (t.total <= 0) {
        clearInterval(timeinterval);

        var newTime = Date.parse(endtime);
        var nowTime = Date.parse(new Date());

        while (newTime <= nowTime) {
          newTime = newTime + 0 + 0 +  10 * 60 * 1000; // add 24hours
        }

        var deadline = new Date(newTime);
        initializeClock('checkouts', deadline);
      } else {
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