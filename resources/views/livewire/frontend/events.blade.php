<div>
    <div class="owl-carousel owl-theme" id="events">
        @foreach($events as $event)
            <section id="author" aria-labelledby="author-title" dir="{{ app()->getLocale() == 'en' ? 'lrt' : 'rtl' }}"
                     class="relative scroll-mt-14 pt-8 sm:scroll-mt-32 sm: sm:pt-10 lg:pt-16">
                <div class="relative mx-auto max-w-5xl pt-16 sm:px-6">
                    <div class="bg-slate-50 pt-px sm:rounded-3xl">
                        <div
                            class="relative mx-auto -mt-24 h-44 w-44 md:float-right md:h-64 md:w-64 md:[shape-outside:circle(40%)] lg:mr-20 lg:h-96 lg:w-96 rounded-lg rtl:lg:ml-20 rtl:md:float-left"
                            style="background: url('storage/{{ $event->image }}'); background-size: cover; box-shadow: 5px 5px 0px {{ $event->color ?? '#ff4295' }}">
                        </div>
                        <div class="px-4 py-10 sm:px-10 sm:py-16 md:py-20 lg:px-20 lg:py-32">
                            <h2
                                class="inline-flex items-center rounded-full px-4 py-1 text-uo-red border ring-uo-red"
                                style="border-color: {{ $event->color ?? '#ff4295' }};"
                                id="author-title">
                                <span class="text-uo-red font-medium tracking-tight"
                                      style="color: {{ $event->color ?? '#ff4295' }};">{{ $event->sub_title }}</span>
                            </h2>
                            <p class="mt-8 font-display text-5xl font-extrabold tracking-tight text-slate-900 sm:text-6xl">
                                <span class="block text-uo-red"
                                      style="color: {{ $event->color ?? '#ff4295' }};">{!! $event->title !!}</span> {!! $event->slogan !!}
                            </p>
                            <p class="mt-4 text-lg tracking-tight text-slate-700">
                                {{ $event->description }}
                            </p>

                        </div>
                    </div>
                </div>
            </section>
        @endforeach
    </div>
    <div class="flex items-center justify-center mb-20 flex-row-reverse rtl:flex-row">
        <div class="cursor-pointer text-white bg-uo-red p-3 rounded" id="prev">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
            </svg>
        </div>
        <div id="next" class="cursor-pointer text-white bg-uo-red p-3 rounded mr-4">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
            </svg>
        </div>
    </div>
</div>
