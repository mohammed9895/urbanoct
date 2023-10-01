<div>
    <section id="speakers" aria-labelledby="speakers-title" class="py-20 sm:py-32">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:mx-0">
                <h2 id="speakers-title"
                    class="font-display text-4xl font-medium tracking-tighter text-uo-red sm:text-8xl">
                    {{ __('home.speakers.title') }}
                </h2>
            </div>
            <div
                class="mt-14 grid grid-cols-1 items-start gap-x-8 gap-y-8 sm:mt-16 sm:gap-y-16 lg:mt-24 lg:grid-cols-4">
                <div class="relative -mx-4 flex overflow-x-auto pb-4 sm:mx-0 sm:block sm:overflow-visible sm:pb-0">
                    <div
                        class="absolute bottom-0 left-0.5 rtl:left-auto rtl:right-0.5 top-2 hidden w-px bg-slate-200 lg:block"></div>
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
                                    <div class="font-mono text-sm rtl:text-right">
                                        <button
                                            type="button" role="tab" wire:click="changeDay({{ $day->id }})"
                                            wire:model="day_id.{{ $day->id }}"
                                            class="@if($day_id == $day->id) text-uo-red @endif"><span
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
                <div class="lg:col-span-3">
                    <div
                        class="grid grid-cols-1 gap-x-8 gap-y-10 ui-not-focus-visible:outline-none sm:grid-cols-2 sm:gap-y-16 md:grid-cols-3" role="tabpanel">
                        @foreach($speakers as $speaker)
                            <a href="{{route('speaker.index', $speaker)}}" class="relative" wire:navigate>
                                <img src="storage/{{ $speaker->topic->image }}" class="w-16 h-16 absolute z-50 -top-5 -left-1 md:-left-5" alt="">
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
                                <p class="mt-8 text-base tracking-tight text-slate-500">{{ $speaker->organization }}</p>
                                <h3 class="mt-1 font-display text-xl font-bold tracking-tight text-slate-900">{{ $speaker->name }}</h3>
                                <h3 class="mt-1 text-slate-500">{{ $speaker->agendas->first()->title ?? '' }}</h3>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
