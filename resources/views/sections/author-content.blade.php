<section class="flex container my-16 flex-col md:flex-row">
    <div x-ref="leftDiv" x-data="{  headings: Array.from(document.getElementById('content').querySelectorAll('h2, h3, h4')), prevOffset: window.pageYOffset,
        top:$refs.quicklinks.offsetTop - window.pageYOffset, 
        initialPosition: 200,
        bottomDiv:$refs.leftDiv.offsetTop - window.pageYOffset + $refs.leftDiv.offsetHeight - this.innerHeight,
        bottom: $refs.quicklinks.offsetTop - window.pageYOffset + $refs.quicklinks.offsetHeight - this.innerHeight,
        offset: 0,}" x-init="
        width = window.innerWidth;
        if (width < 1024) {
            headings[0].previousElementSibling.append($refs.leftDiv);
        };
        " class="md:!w-1/3 mb-5" :class="headings[0] ? 'md:pr-6':'!hidden'">
        @include('partials.sidebar-links')
    </div>
    <div class="md:!w-2/3 max-w-contentwidth">
        <div class="mb-12 text-default">
            {!! $authorIntroText !!}
        </div>
        <div id="content">
            {!! $authorContentText !!}
        </div>
    </div>
</section>
