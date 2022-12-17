<div class="timer" x-data="timer(new Date().setDate(new Date().getDate() + 1))" x-init="init();">
    <div class="countdown ml-4 absolute -top-6 right-0">
      <div class="countdown-number">
        <div  x-text="time().days"></div>
        <div class="text-[8px]">Days</div>
      </div>
      <div class="countdown-number">
        <div  x-text="time().hours"></div>
        <div class="text-[8px]">Hours</div>
      </div>
      <div class="countdown-number">
        <div  x-text="time().minutes"></div>
        <div class="text-[8px]">Minutes</div>
      </div>
      <div class="countdown-number">
        <div  x-text="time().seconds"></div>
        <div class="text-[8px]">Seconds</div>
      </div>
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