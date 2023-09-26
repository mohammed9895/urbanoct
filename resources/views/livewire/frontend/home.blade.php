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
        <div class="mx-auto container px-4 sm:px-6 lg:px-8 relative z-50">
            <div class="mx-auto lg:px-12 text-center">
                <h1 class="font-display text-6xl font-bold tracking-normal text-uo-blue lg:text-[115px] uppercase">
                    <span class="sr-only">{{ __('home.hero.main_title') }} - </span>
                    {{ __('home.hero.main_title') }}
                </h1>
                <br class="hidden lg:block">
                <h1 class="font-display mt-3 text-5xl font-bold text-uo-red lg:text-[59px] uppercase tracking-wide">
                    <span class="sr-only">{{ __('home.hero.sub_title') }} - </span>
                    {{ __('home.hero.sub_title') }}
                </h1>
                <p class="text-md mt-5 text-slate-500 text-center max-w-5xl mx-auto">
                    {{ __('home.hero.description') }}
                </p>
                <a class="inline-flex justify-center rounded-2xl bg-uo-blue p-4 text-base font-semibold text-white hover:bg-uo-green focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-500 active:text-white/70 mt-10 w-full sm:hidden"
                   href="{{ route('registration.index') }}" wire:navigate>{{ __('home.header.register_now') }}</a>
                <a class="inline-flex justify-center rounded-2xl bg-uo-blue p-4 text-base font-semibold text-white hover:bg-uo-green focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-500 active:text-white/70 mt-2 w-full sm:hidden"
                   href="{{ route('activities.index') }}" wire:navigate>{{ __('home.activities.title') }}</a>
                <dl class="mt-10 grid grid-cols-2 gap-x-10 gap-y-6 sm:mt-16 sm:gap-x-16 sm:gap-y-10 sm:text-center lg:auto-cols-auto lg:grid-flow-col lg:grid-cols-none lg:justify-center lg:text-left">
                    <div class="text-center">
                        <dt class="font-mono text-sm text-uo-red">{{ __('home.hero.speakers') }}</dt>
                        <dd class="mt-0.5 text-2xl font-semibold tracking-tight text-blue-900">18</dd>
                    </div>
                    <div class="text-center">
                        <dt class="font-mono text-sm text-uo-red">{{ __('home.hero.people_attending') }}</dt>
                        <dd class="mt-0.5 text-2xl font-semibold tracking-tight text-blue-900">50k+</dd>
                    </div>
                    <div class="text-center">
                        <dt class="font-mono text-sm text-uo-red">{{ __('home.hero.venue') }}</dt>
                        <dd class="mt-0.5 text-xl font-semibold tracking-tight text-blue-900">{!! __('home.hero.ocec') !!}</dd>
                    </div>
                    <div class="text-center">
                        <dt class="text-sm text-uo-red">{{ __('home.hero.location') }}</dt>
                        <dd class="mt-0.5 text-2xl font-semibold tracking-tight text-blue-900">{{ __('home.hero.muscat') }}</dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>



    <livewire:frontend.feeds-slider/>

    <section id="sponsors" aria-label="Sponsors" class="py-20 sm:py-14">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8"><h2
                class="mx-auto max-w-2xl text-center font-display text-4xl font-medium tracking-tighter text-uo-yellow sm:text-5xl">
                {{ __('home.sponsors.title') }}</h2>
            <div
                class="mx-auto mt-20 grid max-w-max grid-cols-1 place-content-center gap-x-32 gap-y-12 sm:grid-cols-3 md:gap-x-16 lg:gap-x-32">
                @foreach($sponsors as $sponsor )
                    <div class="flex items-center justify-center">
                        <img alt="Transistor" loading="lazy" width="158" height="48" decoding="async" data-nimg="1"
                             style="color:transparent" src="storage/{{ $sponsor->logo }}">
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="subjects" aria-labelledby="speakers-title" class="py-20 sm:py-32">
        <div class="mx-auto container max-w-7xl px-4 sm:px-6 lg:px-8 flex">
            <div class="grid grid-cols-1 gap-4 lg:grid-cols-2">
                <button
                    class="flex flex-col items-start text-left bg-uo-dark-blue/10 p-8 rounded-lg border border-uo-dark-blue/10 group transition">
                    <div class="flex items-center">
                        <img src="{{ asset('images/main.svg') }}" class="h-20 transition group-hover:-scale-100" alt="">
                        <h2 class="text-5xl font-bold text-uo-dark-blue ml-4 uppercase rtl:mr-3">{{ __('home.subjects.planning') }}</h2>
                    </div>
                    <p class="text-sm text-uo-dark-blue/60  rtl:text-right mt-10 text-justify">
                        {{ __('home.subjects.planning_description') }}
                    </p>
                </button>
                <button
                    class="flex flex-col items-start bg-uo-pink/10 p-8 rounded-lg border border-uo-pink/10 peer-invalid:text-red-500 group">
                    <div class="flex items-center">
                        <img src="{{ asset('images/main2.svg') }}" class="h-20 group-hover:-scale-100 transition"
                             alt="">
                        <h2 class="text-5xl font-bold text-uo-pink ml-4 uppercase rtl:mr-3">{{ __('home.subjects.housing') }}</h2>
                    </div>
                    <p class="text-sm text-uo-pink/90 text-left rtl:text-right mt-10">
                        {{ __('home.subjects.housing_description') }}
                    </p>
                </button>
                <button
                    class="flex flex-col items-start bg-uo-yellow/10 p-8 rounded-lg border border-uo-yellow/10 group">
                    <div class="flex items-center">
                        <img src="{{ asset('images/main3.svg') }}" class="h-20 -rotate-90 group-hover:-rotate-180 transition" alt="">
                        <h2 class="text-4xl font-bold text-uo-yellow uppercase rtl:mr-3">{{ __('home.subjects.resilience') }}</h2>
                    </div>
                    <p class="text-sm text-uo-yellow/90 text-left rtl:text-right mt-10">
                        {{ __('home.subjects.resilience_description') }}
                    </p>
                </button>
                <button
                    class="flex flex-col items-start bg-uo-green/10 p-8 rounded-lg border border-uo-green/10 peer-invalid:text-red-500 group">
                    <div class="flex items-center">
                        <img src="{{ asset('images/main4.svg') }}" class="h-20 group-hover:rotate-[360deg] transition"
                             alt="">
                        <h2 class="text-4xl font-bold text-uo-green uppercase ml-4 text-left rtl:mr-3">{{ __('home.subjects.school') }}</h2>
                    </div>
                    <p class="text-sm mt-10 text-uo-green/90 text-left rtl:text-right">
                        {{ __('home.subjects.school_description') }}
                    </p>
                </button>
            </div>
        </div>
    </section>

    <livewire:frontend.speackers/>

    <section id="past" class="py-20 sm:py-32 px-5">
        <div class="mx-auto container px-4 sm:px-6 lg:px-8 mb-20">
            <div class="mx-auto container lg:mx-0">
                <div class="flex justify-between items-center">
                    <div>
                        <h2 id="speakers-title"
                            class="font-display text-4xl font-medium tracking-tighter text-uo-yellow sm:text-8xl">
                            {{ __('home.flash_back.title') }}
                        </h2>
                    </div>
                    <div>
                        <a href="{{ route('gallery.index') }}" class="inline-flex justify-center rounded-2xl bg-uo-yellow p-6 text-base font-semibold text-white hover:bg-uo-pink focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-500 active:text-white/70 mr-2 rtl:mr-0 rtl:ml-2" wire:navigate>{{ __('home.flash_back.button') }}</a>
                    </div>
                </div>

            </div>
        </div>
        <livewire:frontend.slider/>
    </section>

    <livewire:frontend.agendas/>

    <livewire:frontend.events />
    <section id="newsletter" aria-label="Newsletter">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div
                class="relative -mx-4 overflow-hidden bg-indigo-50 px-4 py-20 sm:-mx-6 sm:px-6 md:mx-0 md:rounded-3xl md:px-14 xl:px-12 xl:py-12">
                <img alt="" loading="lazy" width="919" height="1351" decoding="async" data-nimg="1"
                     class="absolute left-1/2 top-0 translate-x-[-10%] translate-y-[-45%] lg:translate-x-[-32%] blur-3xl"
                     style="color:transparent" src="{{ asset('images/hero.svg') }}">
                <div class="relative mx-auto grid max-w-2xl grid-cols-1 gap-x-32 gap-y-14 xl:max-w-none xl:grid-cols-2">
                    <div>
                        <p class="font-display text-4xl font-medium tracking-tighter text-blue-900 sm:text-5xl rtl:lg:text-white">{{ __('home.news_letter.title') }}</p>
                        <p class="mt-4 text-lg tracking-tight text-blue-900 rtl:lg:text-white">{{ __('home.news_letter.description') }}</p>
                    </div>
                    <form><h3
                            class="text-lg font-semibold tracking-tight text-blue-900 rtl:lg:text-white">{{ __('home.news_letter.cta_text') }}</h3>
                        <div
                            class="mt-5 flex rounded-3xl bg-white py-2.5 pr-2.5 rtl:pl-2.5 shadow-xl shadow-blue-900/5 focus-within:ring-2 focus-within:ring-blue-900">
                            <input type="email" required="" placeholder="{{ __('home.news_letter.email') }}"
                                   aria-label="Email address"
                                   class="-my-2.5 flex-auto bg-transparent p-6 text-base text-slate-900 placeholder:text-slate-400 border-none active:ring-0 focus-within:ring-0 focus:ring-0">
                            <button
                                class="inline-flex justify-center rounded-2xl bg-uo-red p-4 text-base font-semibold text-white hover:bg-uo-green focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-500 active:text-white/70"
                                type="submit">
                                <span class="sr-only sm:not-sr-only">{{ __('home.news_letter.button') }}</span>
                                <span class="sm:hidden">
                                    <svg aria-hidden="true" viewBox="0 0 24 24" class="h-6 w-6"><path
                                            d="m14 7 5 5-5 5M19 12H5" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/floating.js/2.6.2/floating.js"
            integrity="sha512-n5IYFs4Ln9LoU6l75MoZTy7NpnqEo2PmYxJoiQOmPpsk/epcOX2ozdTJ9mEV29spCJTugzsH8mOx2nkVQ8cZdg=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        floating({
            content: "<img src='{{asset('images/main.svg')}}' />",
            number: 3,
            direction: 'normal',
            duration: 11,
            repeat: 1,
            size: 5,
        });
        floating({
            content: "<img src='{{asset('images/main2.svg')}}' />",
            number: 5,
            direction: 'normal',
            duration: 8,
            repeat: 1,
            size: 6,
        });
        floating({
            content: "<img src='{{asset('images/main3.svg')}}' />",
            number: 3,
            direction: 'normal',
            duration: 15,
            repeat: 1,
            size: 7,
        });
        floating({
            content: "<img src='{{asset('images/main4.svg')}}' />",
            number: 3,
            repeat: 1,
            direction: 'normal',
            duration: 3,
            repeat: 1,
            size: 8,
        });
    </script>
</div>
