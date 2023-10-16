<header class="container mx-auto relative z-50 flex-none lg:pt-11">
    <div
        class="mx-auto px-4 sm:px-6 lg:px-8 flex flex-wrap items-center sm:items-center justify-between sm:justify-between lg:flex-nowrap">
        <div class="mt-10 lg:mt-0 lg:grow lg:basis-0">
            <a href="/" wire:navigate>
                <img src="{{ asset('images/logo-2.svg') }}" class="h-28 hover:scale-110 transition-all" alt="">
            </a>
        </div>
       <div class="mt-10 lg:mt-0 lg:grow lg:basis-0 md:hidden" >
           <livewire:frontend.partials.language-switcher />
       </div>
        <div
            class="order-first -mx-4 flex flex-auto basis-full overflow-x-auto whitespace-nowrap border-b border-uo-blue/10 py-4 font-mono text-sm text-uo-blue sm:-mx-6 lg:order-none lg:mx-0 lg:basis-auto lg:border-0 lg:py-0">
            <div class="mx-auto flex items-center gap-4 px-4">
                <p>
                    <time datetime="2022-04-06">{{ __('home.header.date') }}</time>
                </p>
                <svg aria-hidden="true" viewBox="0 0 6 6"
                     class="h-1.5 w-1.5 overflow-visible fill-current stroke-current">
                    <path d="M3 0L6 3L3 6L0 3Z" stroke-width="2" stroke-linejoin="round"></path>
                </svg>
                <p>{{ __('home.header.location') }}</p>
            </div>
        </div>
        <div class="hidden sm:mt-10 sm:flex lg:mt-0 lg:grow lg:basis-0 lg:justify-end items-center">
            <a href="{{ route('feeds.index') }}" class="inline-flex justify-center rounded-2xl text-base font-semibold text-uo-blue hover:text-uo-green focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-500 active:text-uo-green/70 mr-2 rtl:mr-0 rtl:ml-2" wire:navigate>{{ __('home.feeds.title') }}</a>
            <a href="{{ route('activities.index') }}" class="inline-flex justify-center rounded-2xl text-base font-semibold text-uo-blue hover:text-uo-green focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-500 active:text-uo-green/70 mr-2 rtl:mr-0 rtl:ml-2" wire:navigate>{{ __('home.activities.title') }}</a>
            <a class="inline-flex justify-center rounded-2xl bg-uo-blue p-4 text-base font-semibold text-white hover:bg-uo-green focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-500 active:text-white/70 mr-2 rtl:mr-0 rtl:ml-2" href="{{ route('registration.index') }}" wire:navigate>
                {{ __('home.header.register_now') }}
            </a>
            @if (session()->get('locale') == 'en')
                <a href="{{ route('language.switch', 'ar') }}" class="inline-flex justify-center rounded-2xl bg-uo-blue p-4 text-base font-semibold text-white hover:bg-uo-green focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-500 active:text-white/70" >
                    AR
                </a>
            @else
                <a href="{{ route('language.switch', 'en') }}" class="inline-flex justify-center rounded-2xl bg-uo-blue p-4 text-base font-semibold text-white hover:bg-uo-green focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-500 active:text-white/70" >
                    EN
                </a>
            @endif
        </div>
    </div>
</header>
