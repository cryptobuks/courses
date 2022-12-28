<div class="text-xs text-gray-500" x-data x-init="setInterval(() => {
  const now = new Date();
  const timezoneOffset = +7;  // US Eastern timezone offset
  const midnight = new Date(now.getFullYear(), now.getMonth(), now.getDate() + 1, 0, 0, 0);
  midnight.setHours(midnight.getHours() + timezoneOffset);
  const remaining = Math.ceil((midnight - now) / 1000);
  $el.querySelector('#days').innerHTML = Math.floor(remaining / 86400);
  $el.querySelector('#hours').innerHTML = Math.floor((remaining % 86400) / 3600);
  $el.querySelector('#minutes').innerHTML = Math.floor(((remaining % 86400) % 3600) / 60);
  $el.querySelector('#seconds').innerHTML = ((remaining % 86400) % 3600) % 60;
  if (remaining === 0) {
    clearInterval($el.interval);
    const reset = new Date();
    const resetMidnight = new Date(reset.getFullYear(), reset.getMonth(), reset.getDate() + 1, 0, 0, 0);
	resetMidnight.setHours(resetMidnight.setHours(resetMidnight.getHours() + timezoneOffset));
    $el.interval = setInterval(() => {
      const resetRemaining = Math.ceil((resetMidnight - reset) / 1000);
      $el.querySelector('#days').innerHTML = Math.floor(resetRemaining / 86400);
	  $el.querySelector('#hours').innerHTML = Math.floor((resetRemaining % 86400) / 3600);
$el.querySelector('#minutes').innerHTML = Math.floor(((resetRemaining % 86400) % 3600) / 60);
$el.querySelector('#seconds').innerHTML = ((resetRemaining % 86400) % 3600) % 60;
}, 1000);
}
}, 1000)">
<div class="countdown ml-4 absolute -top-8 right-0">
      <div class="countdown-number">
        <div class="font-bold days" id="days"></div>
        <div class="uppercase md:text-[8px] text-[6px] leading-tight" >Days</div>
      </div>
      <div class="countdown-number">
        <div class="font-bold hours"id="hours" ></div>
        <div class="uppercase md:text-[8px] text-[6px] leading-tight" >Hours</div>
      </div>
      <div class="countdown-number">
        <div class="font-bold minutes" id="minutes"></div>
        <div class="uppercase md:text-[8px] text-[6px] leading-tight" >Minutes</div>
      </div>
      <div class="countdown-number">
        <div class="font-bold seconds"id="seconds" ></div>
        <div class="uppercase md:text-[8px] text-[6px] leading-tight" >Seconds</div>
      </div>
    </div>
</div>
<!--
<div class="timer" x-data="timer(new Date().setDate(new Date().getDate() + 1))" x-init="init();">
    <div class="countdown ml-4 absolute -top-8 right-0">
      <div class="countdown-number">
        <div class="font-bold days" x-text="time().days"></div>
        <div class="uppercase md:text-[8px] text-[6px] leading-tight">Days</div>
      </div>
      <div class="countdown-number">
        <div class="font-bold hours" x-text="time().hours"></div>
        <div class="uppercase md:text-[8px] text-[6px] leading-tight">Hours</div>
      </div>
      <div class="countdown-number">
        <div class="font-bold minutes" x-text="time().minutes"></div>
        <div class="uppercase md:text-[8px] text-[6px] leading-tight">Minutes</div>
      </div>
      <div class="countdown-number">
        <div class="font-bold seconds" x-text="time().seconds"></div>
        <div class="uppercase md:text-[8px] text-[6px] leading-tight">Seconds</div>
      </div>
    </div>
        
<script>
/*
$(function(){
		dT = new Date()
    function timer(settings){
        var config = {
            endDate:  dT.getFullYear() + "-" +  prependZero(dT.getMonth() + 1) + "-" + prependZero(dT.getDate()) + ' 23:59',
            timeZone: 'Europe/Dublin',
            hours: $('#hours'),
            minutes: $('#minutes'),
            seconds: $('#seconds'),
            newSubMessage: 'and should be back online in a few minutes...'
        };
        function prependZero(number){
            return number < 10 ? '0' + number : number;
        }
        $.extend(true, config, settings || {});
        var currentTime = moment();
        var endDate = moment.tz(config.endDate, config.timeZone);
        var diffTime = endDate.valueOf() - currentTime.valueOf();
        var duration = moment.duration(diffTime, 'milliseconds');
        var days = duration.days();
        var interval = 1000;
        var subMessage = $('.sub-message');
        var clock = $('.clock');
        if(diffTime < 0){
            endEvent(subMessage, config.newSubMessage, clock);
            return;
        }
        if(days > 0){
            $('#days').text(prependZero(days));
            $('.days').css('display', 'inline-block');
        }
        var intervalID = setInterval(function(){
            duration = moment.duration(duration - interval, 'milliseconds');
            var hours = duration.hours(),
                minutes = duration.minutes(),
                seconds = duration.seconds();
            days = duration.days();
            if(hours  <= 0 && minutes <= 0 && seconds  <= 0 && days <= 0){
                clearInterval(intervalID);
                endEvent(subMessage, config.newSubMessage, clock);
                window.location.reload();
            }
            if(days === 0){
                $('.days').hide();
            }
            $('#days').text(prependZero(days));
            config.hours.text(prependZero(hours));
            config.minutes.text(prependZero(minutes));
            config.seconds.text(prependZero(seconds));
        }, interval);
    }
    function endEvent($el, newText, hideEl){
        $el.text(newText);
        hideEl.hide();
    }
    timer();
});*/
  
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
		const diff = this.expiry - new Date().getTime()  + 1;
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
		  value:this.minutes().remaining % 60,
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


-->