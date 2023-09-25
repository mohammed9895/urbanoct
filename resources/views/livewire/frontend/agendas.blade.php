<div>
    <section id="schedule" aria-label="Schedule" class="py-20 sm:py-32">
        <div class="mx-auto container px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="mx-auto container lg:mx-0 lg:container lg:pr-24 text-center"><h2
                    class="font-display text-4xl font-medium tracking-tighter text-uo-green sm:text-8xl">{{ __('home.schedule.title') }}</h2>
               </div>
        </div>
        <div class="relative mt-14 sm:mt-24">
            <div class="absolute inset-0 overflow-hidden bg-indigo-50 -bottom-32 -top-40"><img alt=""
                                                                                               fetchpriority="high"
                                                                                               width="918" height="1495"
                                                                                               decoding="async"
                                                                                               data-nimg="1"
                                                                                               class="absolute top-0 left-full -translate-x-1/2 sm:left-1/2 sm:translate-x-[-20%] sm:translate-y-[-15%] md:translate-x-0 lg:translate-x-[5%] lg:translate-y-[4%] xl:translate-x-[27%] xl:translate-y-[-8%] blur-3xl"
                                                                                               style="color:transparent"
                                                                                               src="{{ asset('images/hero.svg') }}">
                <div class="absolute inset-x-0 top-0 h-40 bg-gradient-to-b from-white"></div>
                <div class="absolute inset-x-0 bottom-0 h-40 bg-gradient-to-t from-white"></div>
            </div>
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative">
                <div class="w-1/2 mx-auto mb-10">
                    <div class="flex justify-center ">
                        @foreach($days as $day)
                            <buttton class="space-y-8 bg-white/60 px-10 py-4  text-center cursor-pointer shadow-xl shadow-blue-900/5 backdrop-blur"
                                     style="@if($day_id == $day->id) background: #0dbecc; color: #ffffff; @endif"
                                     wire:click="changeDay({{$day->id}})" wire:model="day_id.{{ $day->id }}">
                                {{ $day->name }}
                            </buttton>
                        @endforeach
                    </div>
                </div>
                <div class="mx-auto grid max-w-2xl grid-cols-1 gap-y-6 sm:grid-cols-2 lg:hidden">
                    <div class="-mx-4 flex gap-x-4 gap-y-10 overflow-x-auto pb-4 pl-4 sm:mx-0 sm:flex-col sm:pb-0 sm:pl-0 sm:pr-8" id="agendaTab" data-tabs-toggle="#agendaTabContent" role="tablist" aria-orientation="vertical">
                        @foreach($stages as $stage)
                            <div class="relative w-3/4 flex-none pr-4 sm:w-auto sm:pr-0" role="presentation">
                                <h3 class="text-2xl font-semibold tracking-tight text-blue-900">
                                    <time datetime="2022-04-04">
                                        <button class="ui-not-focus-visible:outline-none @if($stage_id == $stage->id) text-uo-green @endif" wire:click="changeStage({{ $stage->id }})" wire:model="stage_id.{{ $stage->id }}" type="button" role="tab" aria-controls="day{{ $day->id }}" aria-selected="false"><span
                                                class="absolute inset-0"></span>{{ $stage->name }}
                                        </button>
                                    </time>
                                </h3>
                                <p class="mt-1.5 text-base tracking-tight text-blue-900">The first day of the conference is
                                    focused on dark patterns for ecommerce.</p></div>
                        @endforeach
                    </div>
                    <div id="agendaTabContent">
                            <div>
                                <div class="" role="tabpanel"  tabindex="0">
                                    <ol role="list" class="space-y-8 bg-white/60 px-10 py-14 text-center shadow-xl shadow-blue-900/5 backdrop-blur">
                                        @foreach($agendas as $agenda)
                                            <li aria-label="">
                                                <h4 class="text-lg font-semibold tracking-tight text-blue-900">{{ $agenda->title }}</h4>
                                                <p class="mt-1 tracking-tight text-blue-900">{{ $agenda->description }}</p>
                                                <p class="mt-1 font-mono text-sm text-slate-500">
                                                    <time datetime="">{{ $agenda->timing }}</time>
                                                </p>
                                            </li>
                                        @endforeach
                                    </ol>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="hidden lg:grid lg:grid-cols-2 lg:gap-x-8">
                    @foreach($lg_stages as $stage)
                        <section>
                            <h3 class="text-2xl font-semibold tracking-tight text-center text-blue-900">
                                <time datetime="2022-04-04">{{ $stage->name }}</time>
                            </h3>
                            <ol role="list"
                                class="mt-10 space-y-8 bg-white/60 px-10 py-14 text-center shadow-xl shadow-blue-900/5 backdrop-blur">
                                @foreach($stage->agendas as $agenda)
                                    <li>
                                        <h4 class="text-lg font-semibold tracking-tight text-blue-900">{{ $agenda->speaker->name }}</h4>
                                        <p class="mt-1 tracking-tight text-blue-900">{{ $agenda->title }}</p>
                                        <p class="mt-1 font-mono text-sm text-slate-500">
                                            <time datetime="{{ $agenda->timing }}">{{ $agenda->timing }}</time>
                                        </p>
                                    </li>
                                @endforeach
                            </ol>
                        </section>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</div>
