
<div class="bg-white w-full p-4  items-center flex justify-between mx-auto  max-w-pageWidth">
        <img class="h-10 no-lazyload" src="{{$logoColor}}"></img>
        @if(get_post_type() === 'wfocu_offer')
        <div class="timer" x-data="timer(new Date().setDate(new Date().getDate() + 0 + 0 + 5))" x-init="init();">
            <div class="countdown-number-black" x-text="time().minutes"></div>
            <div class="countdown-number-black" x-text="time().seconds"></div>
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
	  },
	  setRemaining() {
		const diff = this.expiry - new Date().getTime();
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
        @endif
        @if(!get_post_type() === 'wfocu_offer')
        <div class="text-black flex text-xl">
        <div class="fill-black h-5 mr-2 mt-1">
            @include('icons.phone') </div>  
                {{$phoneNumber}}
         </div>
         @endif
</div>