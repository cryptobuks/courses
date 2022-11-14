<div x-data="scrollProgress()" x-init="init()" x-cloak class="fixed inset-x-0 top-0 z-50">
  <div class="h-2 bg-primary" :style="`width: ${percent}%`"></div>
</div>