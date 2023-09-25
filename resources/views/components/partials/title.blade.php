<div>
    <div class="relative py-20 sm:pb-24 sm:pt-36">
        <div class="absolute inset-0 overflow-hidden bg-indigo-50 -bottom-14 -top-36">
            <img alt="" fetchpriority="high"
                 width="918" height="1495"
                 decoding="async"
                 data-nimg="1"
                 class="absolute top-0 left-0 translate-x-[-55%] translate-y-[-10%] -scale-x-100 sm:left-1/2 sm:translate-x-[-98%] sm:translate-y-[30%] lg:translate-x-[-106%] xl:translate-x-[-122%] blur-lg opacity-30"
                 style="color:transparent"
                 src="{{ asset('images/hero.svg') }}">
            <div class="absolute inset-x-0 top-0 h-40 bg-gradient-to-b from-white"></div>
            <div class="absolute inset-x-0 bottom-0 h-40 bg-gradient-to-t from-white"></div>
        </div>
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative">
            <div class="mx-auto max-w-2xl lg:max-w-4xl lg:px-12 text-center">
                <h1 class="font-display text-7xl font-bold tracking-tighter text-uo-pink lg:text-[115px]">
                    <span class="sr-only">{{ $title }}</span>
                    {{ $title }}
                </h1>
                <p class="text-md mt-5 text-slate-500">
                </p>
                <a class="inline-flex justify-center rounded-2xl bg-uo-blue p-4 text-base font-semibold text-white hover:bg-blue-500 focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-500 active:text-white/70 mt-10 w-full sm:hidden"
                   href="#">{{ __('home.header.register_now') }}</a>
            </div>
        </div>
    </div>
</div>
