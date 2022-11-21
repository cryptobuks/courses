<div class="timer" x-data="timer(new Date().setDate(new Date().getDate() + 0 + 0 + 5))" x-init="init();">
            
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
                <script>
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
        </script>
</div>