<x-layouts.app>
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
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative z-50">
            <div class="mx-auto max-w-2xl lg:max-w-4xl lg:px-12 text-center">
                <h1 class="font-display text-5xl font-bold tracking-tighter text-uo-blue lg:text-[115px]">
                    <span class="sr-only">{{ __('home.hero.main_title') }} - </span>
                    {{ __('home.hero.main_title') }}
                </h1>
                <br class="hidden lg:block">
                <h1 class="font-display mt-3 text-4xl font-bold tracking-tighter text-uo-red lg:text-[59px]">
                    <span class="sr-only">{{ __('home.hero.sub_title') }} - </span>
                    {{ __('home.hero.sub_title') }}
                </h1>
                <p class="text-md mt-5 text-slate-500">
                    {{ __('home.hero.description') }}
                </p>
                <a class="inline-flex justify-center rounded-2xl bg-uo-blue p-4 text-base font-semibold text-white hover:bg-uo-green focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-500 active:text-white/70 mt-10 w-full sm:hidden"
                   href="#">{{ __('home.header.register_now') }}</a>
                <a class="inline-flex justify-center rounded-2xl bg-uo-blue p-4 text-base font-semibold text-white hover:bg-uo-green focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-500 active:text-white/70 mt-2 w-full sm:hidden"
                   href="#">{{ __('home.activities.title') }}</a>
                <dl class="mt-10 grid grid-cols-2 gap-x-10 gap-y-6 sm:mt-16 sm:gap-x-16 sm:gap-y-10 sm:text-center lg:auto-cols-auto lg:grid-flow-col lg:grid-cols-none lg:justify-center lg:text-left">
                    <div class="text-center">
                        <dt class="font-mono text-sm text-uo-red">{{ __('home.hero.speakers') }}</dt>
                        <dd class="mt-0.5 text-2xl font-semibold tracking-tight text-blue-900">18</dd>
                    </div>
                    <div class="text-center">
                        <dt class="font-mono text-sm text-uo-red">{{ __('home.hero.people_attending') }}</dt>
                        <dd class="mt-0.5 text-2xl font-semibold tracking-tight text-blue-900">2,091</dd>
                    </div>
                    <div class="text-center">
                        <dt class="font-mono text-sm text-uo-red">{{ __('home.hero.venue') }}</dt>
                        <dd class="mt-0.5 text-2xl font-semibold tracking-tight text-blue-900">{{ __('home.hero.ocec') }}</dd>
                    </div>
                    <div class="text-center">
                        <dt class="text-sm text-uo-red">{{ __('home.hero.location') }}</dt>
                        <dd class="mt-0.5 text-2xl font-semibold tracking-tight text-blue-900">{{ __('home.hero.muscat') }}</dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>

    <section id="sponsors" aria-label="Sponsors" class="py-20 sm:py-32">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8"><h2
                class="mx-auto max-w-2xl text-center font-display text-4xl font-medium tracking-tighter text-uo-yellow sm:text-5xl">
                {{ __('home.sponsors.title') }}</h2>
            <div
                class="mx-auto mt-20 grid max-w-max grid-cols-1 place-content-center gap-x-32 gap-y-12 sm:grid-cols-3 md:gap-x-16 lg:gap-x-32">
                @foreach($sponsors as $sponsor )
                    <div class="flex items-center justify-center">
                        <img alt="Transistor" loading="lazy" width="158"  height="48" decoding="async" data-nimg="1" style="color:transparent"  src="storage/{{ $sponsor->logo }}">
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
                    <img src="{{ asset('images/main.svg') }}" class="h-20 transition group-hover:-scale-100" alt="">
                    <h2 class="mt-6 text-2xl font-bold text-uo-dark-blue">{{ __('home.subjects.planning') }}</h2>
                    <p class="text-sm mt-3 text-uo-dark-blue/60 text-left rtl:text-right">
                        {{ __('home.subjects.planning_description') }}
                    </p>
                </button>
                <button
                    class="flex flex-col items-start bg-uo-pink/10 p-8 rounded-lg border border-uo-pink/10 peer-invalid:text-red-500 group">
                    <img src="{{ asset('images/main2.svg') }}" class="h-20 group-hover:-scale-100 transition" alt="">
                    <h2 class="mt-6 text-2xl font-bold text-uo-pink">{{ __('home.subjects.housing') }}</h2>
                    <p class="text-sm mt-3 text-uo-pink/90 text-left rtl:text-right">
                        {{ __('home.subjects.housing_description') }}
                    </p>
                </button>
                <button
                    class="flex flex-col items-start bg-uo-yellow/10 p-8 rounded-lg border border-uo-yellow/10 group">
                    <img src="{{ asset('images/main3.svg') }}" class="h-20 group-hover:-rotate-90 transition" alt="">
                    <h2 class="mt-6 text-2xl font-bold text-uo-yellow">{{ __('home.subjects.resilience') }}</h2>
                    <p class="text-sm mt-3 text-uo-yellow/90 text-left rtl:text-right">
                        {{ __('home.subjects.resilience_description') }}
                    </p>
                </button>
                <button
                    class="flex flex-col items-start bg-uo-green/10 p-8 rounded-lg border border-uo-green/10 peer-invalid:text-red-500 group">
                    <img src="{{ asset('images/main4.svg') }}" class="h-20 group-hover:rotate-[360deg] transition"
                         alt="">
                    <h2 class="mt-6 text-2xl font-bold text-uo-green">{{ __('home.subjects.school') }}</h2>
                    <p class="text-sm mt-3 text-uo-green/90 text-left rtl:text-right">
                        {{ __('home.subjects.school_description') }}
                    </p>
                </button>
            </div>
        </div>
    </section>

    <section id="speakers" aria-labelledby="speakers-title" class="py-20 sm:py-32">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:mx-0">
                <h2 id="speakers-title"
                    class="font-display text-4xl font-medium tracking-tighter text-uo-red sm:text-5xl">
                    {{ __('home.speakers.title') }}
                </h2>
                <p class="mt-4 font-display text-2xl tracking-tight text-blue-900">{{ __('home.speakers.description') }}</p>
            </div>
            <div
                class="mt-14 grid grid-cols-1 items-start gap-x-8 gap-y-8 sm:mt-16 sm:gap-y-16 lg:mt-24 lg:grid-cols-4">
                <div class="relative -mx-4 flex overflow-x-auto pb-4 sm:mx-0 sm:block sm:overflow-visible sm:pb-0">
                    <div class="absolute bottom-0 left-0.5 rtl:left-auto rtl:right-0.5 top-2 hidden w-px bg-slate-200 lg:block"></div>
                    <div
                        class="grid auto-cols-auto grid-flow-col justify-start gap-x-8 gap-y-10 whitespace-nowrap px-4 sm:mx-auto sm:max-w-2xl sm:grid-cols-3 sm:px-0 sm:text-center lg:grid-flow-row lg:grid-cols-1 lg:text-left"
                        id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                        @foreach($days as $day)
                            <div class="relative lg:pl-8 rtl:pr-8" role="presentation">
                                <svg aria-hidden="true" viewBox="0 0 6 6"
                                     class="absolute left-[-0.5px] rtl:left-auto rtl:right-[-0.5px] top-[0.5625rem] hidden h-1.5 w-1.5 overflow-visible lg:block fill-uo-red stroke-uo-red">
                                    <path d="M3 0L6 3L3 6L0 3Z" stroke-width="2" stroke-linejoin="round"></path>
                                </svg>
                                <div class="relative">
                                    <div class="font-mono text-sm text-uo-red rtl:text-right">
                                        <button id="day-speacker-{{ $day->id }}-tab"
                                                data-tabs-target="#day-speacker-{{ $day->id }}" type="button" role="tab"
                                                aria-controls="day-speacker-{{ $day->id }}" aria-selected="false"
                                                class="aria-selected:!text-uo-red"><span
                                                class="absolute inset-0"></span>{{ $day->description }}
                                        </button>
                                    </div>
                                    <time datetime="{{ $day->date }}"
                                          class="mt-1.5 block text-2xl font-semibold tracking-tight text-blue-900 rtl:text-right">{{ $day->name }}
                                    </time>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="lg:col-span-3" id="myTabContent">
                    @foreach($days as $day)
                        <div
                            class="grid grid-cols-1 gap-x-8 gap-y-10 ui-not-focus-visible:outline-none sm:grid-cols-2 sm:gap-y-16 md:grid-cols-3"
                            id="day-speacker-{{ $day->id }}" role="tabpanel"
                            aria-labelledby="day-speacker-{{ $day->id }}-tab">
                            @foreach($day->speakers as $speaker)
                                <div>
                                    <div class="group relative h-[17.5rem] transform overflow-hidden rounded-3xl">
                                        <div
                                            class="absolute bottom-6 left-0 right-4 top-0 rounded-3xl border transition duration-300 group-hover:scale-95 xl:right-6 border-uo-red"></div>
                                        <div class="absolute inset-0 bg-indigo-50" style="clip-path:url(#:R1aqlla:-0)">
                                            <img
                                                alt="" fetchpriority="high" width="1120" height="560" decoding="async"
                                                data-nimg="1"
                                                class="absolute inset-0 h-full w-full object-cover transition duration-300 group-hover:scale-110"
                                                style="color:transparent"
                                                sizes="(min-width: 1280px) 17.5rem, (min-width: 1024px) 25vw, (min-width: 768px) 33vw, (min-width: 640px) 50vw, 100vw"
                                                src="storage/{{ $speaker->image }}">
                                        </div>
                                    </div>
                                    <h3 class="mt-8 font-display text-xl font-bold tracking-tight text-slate-900">{{ $speaker->name }}</h3>
                                    <p class="mt-1 text-base tracking-tight text-slate-500">{{ $speaker->bio }}</p>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section id="past" class="py-20 sm:py-32 px-5">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 mb-20">
            <div class="mx-auto max-w-2xl lg:mx-0">
                <h2 id="speakers-title"
                    class="font-display text-4xl font-medium tracking-tighter text-uo-yellow sm:text-5xl">
                    {{ __('home.flash_back.title') }}
                </h2>
                <p class="mt-4 font-display text-2xl tracking-tight text-blue-900">{{ __('home.flash_back.description') }}</p></div>
        </div>
        <livewire:frontend.slider />
    </section>

    <livewire:frontend.agendas />

    @foreach($events as $event)
        <section id="author" aria-labelledby="author-title"
                 class="relative scroll-mt-14 pb-3 pt-8 sm:scroll-mt-32 sm:pb-16 sm:pt-10 lg:pt-16">
            <div class="relative mx-auto max-w-5xl pt-16 sm:px-6">
                <div class="bg-slate-50 pt-px sm:rounded-3xl">
                    <div
                        class="relative mx-auto -mt-24 h-44 w-44 md:float-right md:h-64 md:w-64 md:[shape-outside:circle(40%)] lg:mr-20 lg:h-96 lg:w-96 rounded-lg rtl:lg:ml-20 rtl:md:float-left"
                    style="background: url('storage/{{ $event->image }}'); background-size: cover; box-shadow: 5px 5px 0px {{ $event->color ?? '#ff4295' }}">
                    </div>
                    <div class="px-4 py-10 sm:px-10 sm:py-16 md:py-20 lg:px-20 lg:py-32"><h2
                            class="inline-flex items-center rounded-full px-4 py-1 text-uo-red border ring-uo-red"
                            style="border-color: {{ $event->color ?? '#ff4295' }};"
                            id="author-title">
                            <span class="text-uo-red font-medium tracking-tight"  style="color: {{ $event->color ?? '#ff4295' }};">{{ $event->sub_title }}</span></h2>
                        <p class="mt-8 font-display text-5xl font-extrabold tracking-tight text-slate-900 sm:text-6xl">
                            <span class="block text-uo-red" style="color: {{ $event->color ?? '#ff4295' }};">{!! $event->title !!}</span> {!! $event->slogan !!}
                        </p>
                        <p class="mt-4 text-lg tracking-tight text-slate-700">
                            {{ $event->description }}
                        </p>

                    </div>
                </div>
            </div>
        </section>
    @endforeach
    <section id="newsletter" aria-label="Newsletter">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div
                class="relative -mx-4 overflow-hidden bg-indigo-50 px-4 py-20 sm:-mx-6 sm:px-6 md:mx-0 md:rounded-3xl md:px-16 xl:px-24 xl:py-36">
                <img alt="" loading="lazy" width="919" height="1351" decoding="async" data-nimg="1"
                     class="absolute left-1/2 top-0 translate-x-[-10%] translate-y-[-45%] lg:translate-x-[-32%] blur-3xl"
                     style="color:transparent" src="{{ asset('images/hero.svg') }}">
                <div class="relative mx-auto grid max-w-2xl grid-cols-1 gap-x-32 gap-y-14 xl:max-w-none xl:grid-cols-2">
                    <div><p class="font-display text-4xl font-medium tracking-tighter text-blue-900 sm:text-5xl">{{ __('home.news_letter.title') }}</p>
                        <p class="mt-4 text-lg tracking-tight text-blue-900">{{ __('home.news_letter.description') }}</p></div>
                    <form><h3 class="text-lg font-semibold tracking-tight text-blue-900">{{ __('home.news_letter.cta_text') }}</h3>
                        <div
                            class="mt-5 flex rounded-3xl bg-white py-2.5 pr-2.5 rtl:pl-2.5 shadow-xl shadow-blue-900/5 focus-within:ring-2 focus-within:ring-blue-900">
                            <input type="email" required="" placeholder="{{ __('home.news_letter.email') }}" aria-label="Email address"
                                   class="-my-2.5 flex-auto bg-transparent pl-6 pr-2.5 text-base text-slate-900 placeholder:text-slate-400 focus:outline-none outline-none focus:border-none active:border-none border-none">
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

</x-layouts.app>
