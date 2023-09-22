<div>
    <section id="newsletter" aria-label="Newsletter" class="mt-20 px-4 lg:px-8">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div
                class="relative -mx-4 overflow-hidden bg-indigo-50 px-4 py-20 sm:-mx-6 sm:px-6 md:mx-0 md:rounded-3xl md:px-16 xl:px-24 xl:py-36">
                <img alt="" loading="lazy" width="919" height="1351" decoding="async" data-nimg="1"
                     class="absolute left-1/2 rtl:left-auto rtl:right-[100px] top-0 translate-x-[-90%] translate-y-[-45%] lg:translate-x-[-32%] blur-3xl "
                     style="color:transparent" src="{{ asset('images/hero.svg') }}">
                <div class="relative mx-auto grid max-w-2xl grid-cols-1 gap-x-32 gap-y-14 xl:max-w-none xl:grid-cols-2">
                    <div>
                        <p class="font-display text-4xl font-medium tracking-tighter text-blue-900 sm:text-5xl">{{ __('home.registration.title') }}</p>
                        <p class="mt-4 text-lg tracking-tight text-blue-900">{{ __('home.registration.description') }}</p>
                    </div>
                    <form wire:submit="register">
                        <h3 class="text-lg font-semibold tracking-tight text-blue-900">{{ __('home.header.register_now') }}
                            ↓</h3>
                        <div
                            class="mt-5 flex rounded-3xl bg-white py-2.5 shadow-xl shadow-blue-900/5 rin focus-within:ring-2 focus-within:ring-blue-900 @error('fullname') ring-2 ring-red-700 @enderror">
                            <input type="text" wire:model="fullname" required="true"
                                   placeholder="{{ __('home.registration.fullname') }}"
                                   class="-my-2.5 flex-auto bg-transparent p-6 text-base text-slate-900 placeholder:text-slate-400 border-none active:ring-0 focus-within:ring-0 focus:ring-0">
                        </div>
                        @error('fullname')
                        <div class="mt-2 text-red-700">{{ $message }}</div> @enderror

                        <div
                            class="mt-5 flex rounded-3xl bg-white py-2.5 shadow-xl shadow-blue-900/5 focus-within:ring-2 focus-within:ring-blue-900 @error('country') ring-2 ring-red-700 @enderror">
                            <input type="text" wire:model="country" required="true"
                                   placeholder="{{ __('home.registration.country') }}"
                                   class="-my-2.5 flex-auto bg-transparent p-6 text-base text-slate-900 placeholder:text-slate-400 border-none active:ring-0 focus-within:ring-0 focus:ring-0">
                        </div>

                        @error('country')
                        <div class="mt-2 text-red-700">{{ $message }}</div> @enderror

                        <div
                            class="mt-5 flex rounded-3xl bg-white py-2.5 shadow-xl shadow-blue-900/5 focus-within:ring-2 focus-within:ring-blue-900 @error('organization') ring-2 ring-red-700 @enderror">
                            <input type="text" wire:model="organization" required="true"
                                   placeholder="{{ __('home.registration.organization') }}"
                                   class="-my-2.5 flex-auto bg-transparent p-6 text-base text-slate-900 placeholder:text-slate-400 border-none active:ring-0 focus-within:ring-0 focus:ring-0">
                        </div>
                        @error('organization')
                        <div class="mt-2 text-red-700">{{ $message }}</div> @enderror
                        <div
                            class="mt-5 flex rounded-3xl bg-white py-2.5 shadow-xl shadow-blue-900/5 focus-within:ring-2 focus-within:ring-blue-900 @error('profession') ring-2 ring-red-700 @enderror">
                            <input type="text" wire:model="profession" required="true"
                                   placeholder="{{ __('home.registration.profession') }}"
                                   class="-my-2.5 flex-auto bg-transparent p-6 text-base text-slate-900 placeholder:text-slate-400 border-none active:ring-0 focus-within:ring-0 focus:ring-0">
                        </div>
                        @error('profession')
                        <div class="mt-2 text-red-700">{{ $message }}</div> @enderror
                        <div
                            class="mt-5 flex rounded-3xl bg-white py-2.5 shadow-xl shadow-blue-900/5 focus-within:ring-2 focus-within:ring-blue-900 @error('contact_number') ring-2 ring-red-700 @enderror">
                            <input type="tel" wire:model="contact_number" required="true"
                                   placeholder="{{ __('home.registration.contact_number') }}"
                                   class="-my-2.5 flex-auto bg-transparent p-6 text-base text-slate-900 placeholder:text-slate-400 border-none active:ring-0 focus-within:ring-0 focus:ring-0">
                        </div>
                        @error('contact_number')
                        <div class="mt-2 text-red-700">{{ $message }}</div> @enderror
                        <div
                            class="mt-5 flex rounded-3xl bg-white py-2.5 pr-2.5 rtl:pl-2.5 shadow-xl shadow-blue-900/5 focus-within:ring-2 focus-within:ring-blue-900  @error('email') ring-2 ring-red-700 @enderror">
                            <input type="email" wire:model="email" required="true"
                                   placeholder="{{ __('home.registration.email') }}" aria-label="Email address"
                                   class="-my-2.5 flex-auto bg-transparent pl-6 pr-2.5 text-base text-slate-900 placeholder:text-slate-400 focus:outline-none outline-none focus:ring-0 active:ring-0 border-none">
                            <button
                                class="flex justify-center rounded-2xl bg-uo-red p-4 text-base font-semibold text-white hover:bg-uo-green focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-500 active:text-white/70"
                                type="submit">
                                <span class="sr-only sm:not-sr-only">{{ __('home.news_letter.button') }}</span>
                                <span class="sm:hidden rtl:rotate-180">
                                    <svg aria-hidden="true" viewBox="0 0 24 24" class="h-6 w-6"><path
                                            d="m14 7 5 5-5 5M19 12H5" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </span>
                                <span class="animate-spin" wire:loading>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                         class="w-6 h-6">
                                      <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99"/>
                                    </svg>
                                </span>
                            </button>
                        </div>
                        @error('email')
                        <div class="mt-2 text-red-700">{{ $message }}</div> @enderror
                        @if (session()->has('success'))
                            <div
                                class="mt-5 bg-green-300 text-green-700 p-6 rounded-3xl"> {{ session('success') }}</div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
