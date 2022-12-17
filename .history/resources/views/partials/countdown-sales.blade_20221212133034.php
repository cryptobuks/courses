<div class="timer" x-data="timer(new Date().setDate(new Date().getDate() + 1))" x-init="init();">
            
        <div class="countdown-number-black">
                <div  x-text="time().days"></div>
                <div class="text-[8px]">days</div>
        </div>
        <div class="countdown-number-black">
                <div  x-text="time().hours"></div>
                <div class="text-[8px]">hours</div>
        </div>
        <div class="countdown-number-black">
                <div  x-text="time().minutes"></div>
                <div class="text-[8px]">minutes</div>
        </div>
        <div class="countdown-number-black">
                <div  x-text="time().seconds"></div>
                <div class="text-[8px]">seconds</div>
        </div>
        <script>
                /* UPSELL TIMER*/
function timer(expiry) {
	return {
	  expiry: expiry,
	  remaining:null,
	  init() {
		this.setRemaining()
		setInterval(() => {
		  this.setRemaining();
		}, 1000);
        if(expiry < 0){
            days:this.format(this.days().value);
            hours:this.format(this.hours().value);
            minutes:this.format(this.minutes().value);
		        seconds:this.format(this.seconds().value);
        }
	  },
	  setRemaining() {
		const diff = this.expiry - new Date().getTime()  * 60 * 1000;
		this.remaining =  parseInt(diff / 1000);
	  },
	  days() {
		return {
		  value:this.remaining / 86400,
		  remaining:this.remaining % 86400
		};
	  },
	  hours() {
		return {
		  value:this.days().remaining / 3600,
		  remaining:this.days().remaining % 3600
		};
	  },
	  minutes() {
		  return {
		  value:this.hours().remaining / 60,
		  remaining:this.hours().remaining % 60
		};
	  },
	  seconds() {
		  return {
		  value:this.minutes().remaining,
		};
	  },
	  format(value) {
		return ("0" + parseInt(value)).slice(-2)
	  },
	  time(){
		  return {
		  days:this.format(this.days().value),
		  hours:this.format(this.hours().value),
		  minutes:this.format(this.minutes().value),
		  seconds:this.format(this.seconds().value),
		}
	  },
	}
  }
        </script>
</div>




<div id="countdown" class="countdown ml-4 absolute -top-6 right-0">
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
    var clock = document.getElementByClassName(id);
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
        initializeClock('countdown', deadline);
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
  initializeClock("countdown", deadline);
</script>