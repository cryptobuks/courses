<div x-data="scrollProgress()" x-init="init()" x-cloak class="fixed inset-x-0 top-0 z-50">
  <div class="h-1 bg-primary" :style="`width: ${percent}%`"></div>
</div>

<script>
    const scrollProgress = () => {
  return {
    init() {
      window.addEventListener('scroll', () => {
        let winScroll = document.body.scrollTop || document.documentElement.scrollTop
        let height = document.documentElement.scrollHeight - document.documentElement.clientHeight
        this.percent = Math.round((winScroll / height) * 100)
      })
    },
    circumference: 10 * 2 * Math.PI,
    percent: 0,
  }
}
</script>